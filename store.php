<?php 

	$sid = $_POST['sid'];
	$name = $_POST['name'];
	$dept = $_POST['dept'];
	$intake = $_POST['intake'];
	$sec = $_POST['sec'];
	$des = $_POST['desc'];

	$con = mysqli_connect('localhost', 'root', '', 'crud');
	$values = "insert into studentinfo values(null,'$sid','$name','$dept','$intake','$sec','$des');";	

	if(mysqli_query($con, $values)){
		header("location: index.php");
	}else{
		echo "Invalid data";
	}


?>

