<?php
    include_once "vendor/autoload.php";
    use Ura\Dhura\Controller\Teacher;

    $teacher = new Teacher();

    if( isset($_GET['id']) ){
        $id = $_GET['id'];

        $data = $teacher ->single_teacher($id);
        $single_teacher = $data -> fetch_assoc();
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
                <td><?php echo $single_teacher['name']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $single_teacher['email']; ?></td>
            </tr>
            <tr>
                <td>Cell</td>
                <td><?php echo $single_teacher['cell']; ?></td>
            </tr>
            <tr>
                <td>Uname</td>
                <td><?php echo $single_teacher['uname']; ?></td>
            </tr>
        </table>
        <a class="btn btn-sm btn-primary" href="teachers.php">Back</a>
    </div>


	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>