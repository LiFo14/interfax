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

	function easyQuery($id) {
		if (isset($id)) {
			$sql = "SELECT * FROM news WHERE id='$id'";
		} else {
			$sql = "SELECT * FROM news";
		}
		$result = mysql_query($sql) or die("Error occurred - ".mysql_error($link));
		return $result;
	}

	function checkOutPosts($cont) {
		$data = getData($cont);
		echo '<span class="search_res">';
		if (empty($cont) or empty($data)) {
			echo "К сожалению по вашему запросу ничего не найдено<br>";
			echo '<br><a href="http://interfax.ru/index.php">Вернуться на главную</a>';
		} else {
			foreach ($data as $value) {
				$header = shell_exec("python lookForH.py $value");
				echo '<br><br><a href='."http://interfax.ru/".$value.'>'.$header.'</a>';
			}
		}
		echo "</span>";
	}

	function addPost(){
		$raw_file_path = "/var/www/interfax.ru/raw data/texts/";
		$raw_file_path .= $_FILES['text']['name'];
		createPostFile($raw_file_path);
	}

	function createPostFile($raw_file_path) {
		$begin_file = file_get_contents("pattern/begin_file_pattern.txt");
		$end_file = file_get_contents("pattern/end_file_pattern.txt");
		$text = file_get_contents($raw_file_path);
		$page = $begin_file;
		$page .= $text;
		$page .= $end_file;
		$name = writePostFile($page);
		$new_name = moveNewPost($name);
		addToDb($new_name);
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
		return $new_name;
	}

	function getName() {
		$post_names = scandir("posts/");
		unset($post_names[0]);
		unset($post_names[1]);
		if ($post_names == NULL){
			$i = 0;
		} else {
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
		}
		$i+=1;
		return "post".$i.".php";
	}

	function addToDb($path) {
		global $link;
		$sql = "INSERT INTO news (news_path) VALUES ('$path')";
		$result=mysql_query($sql, $link) or die("Died inserting into db.  Error returned if any: ".mysql_error($link));
	}

	function deleteFromDb($id){
		global $link;
		$sql_del = "DELETE FROM news WHERE id='$id'";
		mysql_query($sql_del, $link) or die("Error occured 1 ".mysql_error($link));
	}

	function getFullData() {
		$result = easyQuery();
		return $result;
	}

	function removePost($id){
		$result = easyQuery($id);
		while ($row = mysql_fetch_array($result)) {
			$path = $row['news_path'];
		}
		unlink($path);
		deleteFromDb($id);
		header('Location: admin.php');
		exit();
	}

	function makeAdminStuff($data) {
		echo"<h4>Список загруженных новостей:</h4>";
		echo "<form action=admin.php method=post>";
		echo '<table rules="all">';
		echo "<tr>
			<td><div style='padding: 7;'>ID</div></td>
			<td><div style='padding: 7;'>Путь к новости</div></td>
		</tr>";
		while ($row = mysql_fetch_array($data)) {
			echo "<tr>
				<td><div style='padding: 7;'>".$row['id']."</div></td>
				<td><div style='padding: 7;'><a href=".$row['news_path'].">".$row['news_path']."</a></div></td>
			</tr>";
		}
		echo "</table></form>";
	}

?>
