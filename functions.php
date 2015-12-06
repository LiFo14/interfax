<?php
	function connectToDB() {
	  	global $link, $dbhost, $dbuser, $dbpass, $dbname;
	    $link = mysql_connect("$dbhost", "$dbuser", "$dbpass");
			if(!$link) {
				die("Can not connect: ".mysql_error());
			}
		mysql_select_db($dbname, $link);
	}
	function searchPost($cont) {
		$data = getData($cont);
		#echo '<a href='."http://interfax.ru/".$data[0].'>link</a>';
		#echo "<pre>".print_r($data)."</pre>";
		#header('Location: search_result.php?path='.$data);
		#exit();
	}
	function getData($cont) {
		$result = easyQuery();
		$paths = array();
		while ($row = mysql_fetch_array($result)) {
			$path = $row['news_path'];
			$output = shell_exec("python lookThough.py $path $cont");
			$state = (bool)$output ? true : false;
			if ($state == 1) {
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

	function checkOutPosts() {
		global $data;
		echo var_dump($data);
		echo $data;
		echo '<a href='."http://interfax.ru/".$data[0].'>link</a>';
	}

?>
