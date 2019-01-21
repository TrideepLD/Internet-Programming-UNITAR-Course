<?php 

	$connection = mysqli_connect('localhost', 'root', '', 'assignmentdb');

	if(!$connection) {

		die("NOT CONNECTED" . mysqli_error($connection));
	} else {

		echo "CONNECTED";
	}

?>