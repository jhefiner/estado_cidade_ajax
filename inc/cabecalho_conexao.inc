<?php
	$con = mysqli_connect("localhost", "web", "");
	mysqli_set_charset($con,"utf8");
	if(!$con) {
		echo mysqli_connect_error($con);
	}

	$db = mysqli_select_db($con, "dados");
	if(!$db) {
		echo mysqli_error($con);
	}
?>