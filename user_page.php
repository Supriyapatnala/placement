<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('./the.jpg'); /* Add your background image path here */
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h3>Hello, <span><?php echo $_SESSION['user_name']?> </span>
            <h1 style="color: white;">This is Student Profile</h1>
            <form action="view_placement_details.php" method="post">
                <label for="student_id">Enter Your Student ID:</label>
                <input type="text" id="student_id" name="student_id" required>
                <input type="submit" value="View Placement Details" class="btn">
            </form>
            <a href="index.html" class="btn">Logout</a>
        </div>
    </div>
</body>
</html>

