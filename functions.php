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
		#echo "<h1>HI ".$data."</h1>";
	}

	function getData($cont) {
		$sql = "SELECT * FROM news";
		$data = mysql_query($sql) or die("Error occurred - ".mysql_error());
	/*	if(!$data) {
			echo "Error occurred - ".mysql_error()."<br>";
			echo $sql;
			exit();
		}*/
		while ($row = mysql_fetch_array($data)) {
			echo $row['id']."<br>";
			echo $row['news_path']."<br>";
			$mystring = system("python lookThough.py $cont", $retval);
			echo $retval."-".$mystring;
		}
	}

?>
