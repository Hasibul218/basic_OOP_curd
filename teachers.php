<?php include_once "vendor/autoload.php";?>
<?php
    use Ura\Dhura\Controller\Teacher;

    $teacher = new Teacher();


    if( isset($_GET['delete_id']) ){
        $id = $_GET['delete_id'];



    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap-table ">
        <?php

        if( isset($msg) ){
            echo $msg;
        }

        ?>
        <a class="btn btn-sm btn-primary" href="teacheradd.php">Add new</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Username</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>


                        <?php

                            $data = $teacher -> allteachershow();
                            $i = 1;
                            while($d = $data -> fetch_assoc()) :
                        ?>

						<tr>
							<td><?php echo $i ; $i++; ?></td>
							<td><?php echo $d['name']; ?></td>
							<td><?php echo $d['email']; ?></td>
							<td><?php echo $d['cell']; ?></td>
							<td><?php echo $d['uname']; ?></td>
							<td>
								<a class="btn btn-sm btn-info" href="show_%20teacher.php?id=<?php echo $d['id']; ?>">View</a>
								<a class="btn btn-sm btn-warning" href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
								<a class="btn btn-sm btn-danger" href="?delete_id=<?php echo $d['id']; ?>">Delete</a>
							</td>
						</tr>

                    <?php endwhile; ?>

						

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>