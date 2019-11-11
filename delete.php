<?php

	$id = $_GET['id'];

	$con = mysqli_connect('localhost', 'root', '', 'crud');
	
	$data = "DELETE FROM studentinfo WHERE id = $id";

	if(mysqli_query($con,$data)){
		header("location: index.php");
	}

		

?>

