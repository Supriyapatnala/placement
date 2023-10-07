<?php
/*@include 'config.php';

// For user_form table
if(isset($_POST['submit_user'])) {
    // Your user_form insertion code goes here
    // ...
}

// For PlacementResults table
if(isset($_POST['submit_placement'])) {
    // Your PlacementResults insertion code goes here
    // ...
}*/
?>

<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}
?>




<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="style.css">
   <!-- <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 JavaScript Bundle with Popper
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<style>
    #pt{
        padding-left:150px;
        margin-top: 20px;
    }
</style>-->
<!--</head>
<body>
    <div class="container">
        <div class="content">
            <h3>Hello,<span>admin</span></h3>
            <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
            <p>This is admin page</p>
            <a href="login_form.php" class="btn">login</a>
            <a href="registration_form.php" class="btn">register</a>
            <a href="registration_form.php" class="btn">logout</a>
            <div class="row">

    </div>
    </div>
    <h1>Upload Placement Details</h1>
    <form action="upload_results.php" method="post" enctype="multipart/form-data">
        <input type="file" name="placement_file" required>
        <input type="submit" name="submit_placement" value="Submit Placement">
        <form action="upload_results.php" method="post">
</form>

</form>

    </form>

</body>
</html>-->

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h3>Hello,<span><?/*php echo $_SESSION['admin_name'] */?></h3>></span>
            <h1 style="color: white;">Welcome to Admin Profile</h1>
            <a href="logout.php" class="btn">logout</a>

             CSV Upload Form
            <h1>Upload Placement Details</h1>
            <form action="upload_results.php" method="post" enctype="multipart/form-data">
                <input type="file" name="placement_file" required>
                <input type="submit" name="submit_placement" value="Submit Placement">
            </form>
        </div>
    </div>
</body>
</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('./the.jpg'); /* Add the actual path to your image */
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif; /* Specify a font for the page */
            color: white; /* Set default text color to white */
        }

        .container {
            text-align: center;
            margin-top: 50px;
        }

        .content {
            background: rgba(0, 0, 0, 0.5); /* Add a semi-transparent background */
            padding: 20px;
            border-radius: 10px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            text-decoration: none;
            margin: 10px;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        input[type="file"] {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h3 style="color: white";>Hello, <span><?php echo $_SESSION['admin_name'] ?></span></h3>
            <h1 style="color: white";>Welcome to Admin Profile</h1>
            <!-- CSV Upload Form -->
            <h1 style="color: white">Upload Placement Details</h1>
            <form action="upload_results.php" method="post" enctype="multipart/form-data">
                <input type="file" name="placement_file" required>
                <input type="submit" name="submit_placement" value="Submit Placement" class="btn">
                <a href="index.html" class="btn">Logout</a>
            </form>
        </div>
    </div>
</body>
</html>

