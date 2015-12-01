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
		getData($cont);
		#echo "<h1>HI ".$data."</h1>";
	}

	function getData($cont) {
		$sql = "SELECT * FROM news";
		$data = mysql_query($sql) or die("Error occurred - ".mysql_error());
		while ($row = mysql_fetch_array($data)) {
			#echo $row['id']."<br>";
			#echo $row['news_path']."<br>";
			$path = $row['news_path'];
			echo $path."<br>";
			echo $cont."<br>";
			$output = shell_exec("python lookThough.py $path $cont");
			echo "<pre>$output</pre>";
		}
	}

?>
