<?php
    include_once "vendor/autoload.php";
    use Ura\Dhura\Controller\Student;

    $stu = new Student;

    if( isset($_GET['id']) ){
        $id = $_GET['id'];

        $data = $stu -> editStudentData($id);

        $update_data = $data -> fetch_assoc();

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
	
	<?php

    /**
     * Student Form submit
     */
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $cell = $_POST['cell'];
        $uname = $_POST['uname'];

        if ( empty($name) || empty($email) || empty($cell) || empty($uname) ){
            $msg = '<p class="alert alert-danger">All fields are required ! <button class="close" data-dismiss="alert">&times;</button></p>';
        }else {

            $msg =  $stu -> updateStudentInfo($name, $email, $cell, $uname, $id );


        }

    }

	?>

	<div class="wrap ">
		<div class="card shadow">
			<div class="card-body">
				<h2>Update Student Data</h2>
                <?php
                    if (isset($msg)) {
                        echo $msg;
                    }
                ?>
				<form action="" method="POST">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" value="<?php echo $update_data['name']; ?>" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" value="<?php echo $update_data['email']; ?>" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" value="<?php echo $update_data['cell']; ?>" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" value="<?php echo $update_data['uname']; ?>" class="form-control" type="text">
					</div>
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Update">
					</div>
				</form>
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