<?php
	$input=$_REQUEST["q"];
	$conn = mysql_connect("localhost","root","ltw23");
	if(!$conn) {
		die('Could not connect : '.mysql_error());
	}
	mysql_select_db("taxi");
	$result_acc = mysql_query("SELECT user FROM userinfo WHERE user='$input';",$conn);
	$row = mysql_fetch_assoc($result_acc);
	if(isset($row['user'])) {
		echo "Username already taken";
	}
	else {
		echo "Username available";
	}
	mysql_close($conn);
?>
