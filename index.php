<?php 

	$con = mysqli_connect('localhost', 'root', '', 'crud');
	
	$data = 'SELECT * FROM studentinfo';
	$showdata = mysqli_query($con,$data);


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>php crud learning</title>
  </head>
  <body>



	<div class="container">
		<div class="row">
			<div class="col-lg-2">
				<a href="new.php" class="btn btn-info">Add New Student</a>
			</div>
			<div class="col-lg-10">
				<h2 class="text-center mb-4">Student List</h2>
				<table class="table table-striped table-dark">
				  <thead>
				    <tr>
				      <th scope="col">Student ID</th>
				      <th scope="col">name</th>
				      <th scope="col">department</th>
				      <th scope="col">Intake</th>
				      <th scope="col">Section</th>
				      <th scope="col">Actions</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php while($res = mysqli_fetch_assoc($showdata)){ ?>
					  	<tr>
					      <th><?php echo $res['stu_id']; ?></th>
					      <td><?php echo $res['name'] ?></td>
					      <td><?php echo $res['dept'] ?></td>
					      <td><?php echo $res['intake'] ?></td>
					      <td><?php echo $res['section'] ?></td>
					      <td>
					      	<a href="show.php? id=<?php echo $res['id']; ?> " class="btn btn-primary">Show</a>
					      	<a href="edit.php? id=<?php echo $res['id']; ?>" class="btn btn-info">Edit</a>
					      	<a href="delete.php? id=<?php echo $res['id']; ?>" class="btn btn-danger" onclick="return confirm('are you sure ?')">Delete</a>
					      </td>
					    </tr>
					<?php } ?>
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