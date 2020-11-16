<?php
    include_once "vendor/autoload.php";
    use Ura\Dhura\Controller\Teacher;
    $teacher = new Teacher();
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
        if (isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $cell = $_POST['cell'];
            $uname  = $_POST['uname'];
            if (empty($name) || empty($email) || empty($cell) || empty($uname)){
                $msg = '<p class="alert alert-danger">All fields are required ! <button class="close" data-dismiss="alert">&times;</button></p>';
            }else{
                $msg = $teacher -> teachertmijao($name ,$email, $cell, $uname);
            }
        }
    ?>

	<div class="wrap ">
        <a class="btn btn-sm btn-primary" href="teachers.php">All Teachers</a>
        <a class="btn btn-sm btn-primary" href="index.php">Add Students</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Add new teacher</h2>
                <?php
                    if (isset($msg)) {
                        echo $msg;
                    }
                ?>
				<form action="" method="POST">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" type="text">
					</div>
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Sign Up">
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