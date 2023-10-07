<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Coordinator Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h3>Hello, <span>Department Coordinator</span></h3>
            <h1>Welcome <span><?php echo $_SESSION['deptCord_name']?> </span></h1>
            <p>This is the Department Coordinator page</p>
            <a href="login_form.php" class="btn">Login</a>
            <a href="registration_form.php" class="btn">Register</a>
            <a href="logout.php" class="btn">Logout</a>
        </div>
    </div>
</body>
</html>-->

<?php
session_start();
if(!isset($_SESSION['deptCord_name'])){
    header('location:login_form.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Coordinator Page</title>
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
            <h3 style="color: white;">Hello, <?php echo $_SESSION['deptCord_name']?></h3>
            <h1 style="color: white;">Welcome to <span>Department Coordinator Profile</span></h1>
            <a href="index.html" class="btn">Logout</a>
            <button id="placementDetailsButton" class="btn">Placement Details</button>
        </div>
    </div>
    <!-- Add this code in your HTML file, after the button -->
    <div id="placementDetails" style="display:none;">
        <!-- Placement details will be displayed here -->
        <button id="closeDetails">Close</button>
    </div>

    <script>
    document.getElementById('placementDetailsButton').addEventListener('click', function() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('placementDetails').innerHTML = this.responseText;
                document.getElementById('placementDetails').style.display = 'block';
            }
        };
        xhttp.open("GET", "get_placement_details.php", true);
        xhttp.send();
    });

    document.getElementById('closeDetails').addEventListener('click', function() {
        document.getElementById('placementDetails').style.display = 'none';
    });
    </script>
</body>
</html>






