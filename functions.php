<?php

	function connectToDB() {
	  	global $link, $dbhost, $dbuser, $dbpass, $dbname;
	    $link = mysql_connect("$dbhost", "$dbuser", "$dbpass") or die("Can not connect: ".mysql_error());
		mysql_select_db($dbname, $link);
	}

	function searchPost($cont) {
		header('Location: search_result.php?q='.$cont);
		exit();
	}

	function getData($cont) {
		$result = easyQuery();
		while ($row = mysql_fetch_array($result)) {
			$path = $row['news_path'];
			$output = shell_exec("python lookThough.py $path $cont");
			if ($output == 1) {
				$paths[] = $path;
			}
		}
		return $paths;
	}

	function easyQuery() {
		$sql = "SELECT * FROM news";
		$result = mysql_query($sql) or die("Error occurred - ".mysql_error());
		return $result;
	}

	function checkOutPosts($cont) {
		$data = getData($cont);
		if (empty($cont) or empty($data)) {
			echo "К сожалению по вашему запросу ничего не найдено";
			echo '<br><a href="http://interfax.ru/index.php">Вернуться на главную</a>';
		} else {
			foreach ($data as $value) {
				$header = shell_exec("python lookForH.py $value");
				echo '<br><a href='."http://interfax.ru/".$value.'>'.$header.'</a>';
			}
		}
	}
?>
