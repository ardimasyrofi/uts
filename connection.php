<?php
	$conn = mysqli_connect('127.0.0.1', '192410101025', 'secret', 'uts192410101025');
	if(!$conn){
	    die("Connection failed: " . mysqli_connect_error());
	}

?>