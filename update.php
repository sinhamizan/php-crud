<?php 

	$id = $_GET['id'];

	$sid = $_POST['sid'];
	$name = $_POST['name'];
	$dept = $_POST['dept'];
	$intake = $_POST['intake'];
	$sec = $_POST['sec'];
	$des = $_POST['des'];

	$con = mysqli_connect('localhost', 'root', '', 'crud');
	$val = "UPDATE studentinfo SET stu_id='$sid',name='$name',dept='$dept',intake='$intake',section='$sec',des='$des' WHERE id=$id";	

	if(mysqli_query($con, $val)){
		header("location: show.php?id=" . $id);
	}else{
		echo "Invalid data";
	}


?>

