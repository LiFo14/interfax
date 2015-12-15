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

	function addPost(){
		$raw_file_path = "/var/www/interfax.ru/raw texts/";
		$raw_file_path .= $_FILES['text']['name'];
		$new_post_path = createPostFile($raw_file_path);

	}

	function createPostFile($raw_file_path) {
		$begin_file = file_get_contents("pattern/begin_file_pattern.txt");
		$end_file = file_get_contents("pattern/end_file_pattern.txt");
		$text = file_get_contents($raw_file_path);
		$page = $begin_file;
		$page .= $text;
		$page .= $end_file;
		$name = writePostFile($page);
		moveNewPost($name);
	}

	function writePostFile($page) {
		$file_name = "file.php";
		$new_post = fopen($file_name, "a");
		fwrite($new_post, $page);
		fclose($new_post);
		return $file_name;
	}

	function moveNewPost($name) {
		$new_name = getName();
		$new_name = "posts/".$new_name;
		rename($name,$new_name);
	}

	function getName() {
		$post_names = scandir("posts/");
		unset($post_names[0]);
		unset($post_names[1]);
		$index = substr_replace($post_names, '', 0, 4);
		$index = substr_replace($index, '', 1, 4);
		$i = $index[0];
		foreach ($index as $val) {
			$i = intval($i);
			$val = intval($val);
			if ($i < $val) {
				$i = $val;
			}
		}
		$i+=1;
		return "post".$i.".php";
	}

?>
