<?php

	$id = $_GET['id'];

	$con = mysqli_connect('localhost', 'root', '', 'crud');
	
	$data = "SELECT * FROM studentinfo WHERE id = $id";
	$showdata = mysqli_query($con,$data);

	$res = mysqli_fetch_assoc($showdata);

		

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> Student Information</title>
  </head>
  <body>



	<div class="container">
		<div class="row">
			<div class="col-lg-2">
				<a href="index.php" class="btn btn-info">Home</a>
			</div>
			<div class="col-lg-10">
				<h2 class="text-center mb-4">Details About <?php echo $res['name']; ?></h2>
				<table class="table table-striped table-dark">
				  <tbody>
				  	<b>Student ID:</b> <?php echo $res['stu_id']; ?> </br>
				  	<b>Name:</b> <?php echo $res['name']; ?> </br>
				  	<b>Department Name:</b> <?php echo $res['dept']; ?> </br>
				  	<b>Intake:</b> <?php echo $res['intake']; ?> </br>
				  	<b>Section:</b> <?php echo $res['section']; ?> </br>
				  	<b>Description:</b> <?php echo $res['des']; ?>
				  </tbody>
				</table>
			</div>
		</div>
	</div>















    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>