<?php
    include_once "vendor/autoload.php";
    use Ura\Dhura\Controller\Student;

    $stu = new Student;

    if( isset($_GET['id']) ){
        $id = $_GET['id'];

        $data = $stu -> singleStudent($id);
        $single_student = $data -> fetch_assoc();
    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>


    <div class="wrap">
        <table class="table table-striped">
            <tr>
                <td>Name</td>
                <td><?php echo $single_student['name']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $single_student['email']; ?></td>
            </tr>
            <tr>
                <td>Cell</td>
                <td><?php echo $single_student['cell']; ?></td>
            </tr>
            <tr>
                <td>Uname</td>
                <td><?php echo $single_student['uname']; ?></td>
            </tr>
        </table>
        <a class="btn btn-sm btn-primary" href="students.php">Back</a>
    </div>


	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>