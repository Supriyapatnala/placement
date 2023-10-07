<?php
/*@include 'config.php';
if(isset($_POST['submit'])){


    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $pass=md5($_POST['password']);
    $cpass=md5($_POST['cpassword']);
    $user_type=$_POST['user_type'];
    
    $select="SELECT * FROM user_form WHERE email='$email' && password='$pass'";

    $result=mysqli_query($conn,$select);


    if(empty($_POST["name"])){
        die("Name is required");
    }
    if(! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        die("Valid email is required");
    }
    if(strlen($_POST["password"])<8){
        die("Password must contain atleast 8 characters");
     }
    if(!preg_match("/[a-z]/i",$_POST["password"])){
        die("Password must contain atleast one alphbet");
    }
    if(!preg_match("/[0-9]/i",$_POST["password"])){
        die("Password must contain atleast one number");
    }

    if(mysqli_num_rows($result)>0){
        echo 'user already exist!';
        

    }else{

        if($pass!= $cpass){
            $error[]='password not matched!';
        }else{
            $insert = "INSERT INTO user_form(name,email,password,user_type) VALUES('$name','$email','$pass','$user_type')";
            mysqli_query($conn,$insert);
            header('location:login_form.php');
        }

    }

};*/


?>



<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="form-container">
        <form action=""method="post">
            <h3>register now</h3>
            <?php
            /*if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };*/
            
            ?>
            <input type="text" name="name" required placeholder="enter your name"><br>
            <input type="email" name="email" required placeholder="enter your email"><br>
            <input type="password" name="password" required placeholder="enter your password"><br>
            <input type="password" name="cpassword" required placeholder="confirm your password"><br>
            <select name="user_type">
                <option value="user">user</option>
                <option value="admin">admin</option>
                <option value="deptCord">Department Coordinator</option>

            </select>
            <input type="submit" name="submit" value="REGISTER" class="form-btn">
            <p>already have an account?<a href="login_form.php">login</a></p>
        </form>

    </div>

</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <style>
        body {
            background-image: url('./the.jpg'); /* Adjust the URL to your actual image file */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin: 100px auto;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h3 {
            text-align: center;
        }
        .form-container input,
        .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-container .form-btn {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .form-container .form-btn:hover {
            background-color: #0056b3;
        }
        .form-container .error-msg {
            color: #FF0000;
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Register Now</h3>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?>
            <?php
            @include 'config.php';
            $user_type = isset($_POST['user_type']) ? $_POST['user_type'] : '';
            if(isset($_POST['submit'])){
                $fname = mysqli_real_escape_string($conn,$_POST['fname']);
                $name = mysqli_real_escape_string($conn,$_POST['name']);
                $email = mysqli_real_escape_string($conn,$_POST['email']);
                $password = md5($_POST['password']);
                $cpassword = md5($_POST['cpassword']);
                //$ID = mysqli_real_escape_string($conn,$_POST['ID']);
                $dept = '';
            

    // Check if user_type is 'user' or 'deptCord' to prompt for department
    if ($user_type == 'user' || $user_type == 'deptCord') {
        $dept = mysqli_real_escape_string($conn, $_POST['dept']);
    }

                // Check if user_type is 'user' to prompt for StudentID
                /*if($user_type == 'user'){
                    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
                }*/
                
                // Other validation checks...

                $select = "SELECT * FROM user_form WHERE email='$email' && password='$password'";
                $result = mysqli_query($conn,$select);
                

                if(empty($name) || empty($email) || empty($password) || empty($cpassword) || empty($user_type)){
                    die("All fields are required");
                } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    die("Valid email is required");
                } elseif(strlen($_POST["password"]) < 8){
                    die("Password must contain at least 8 characters");
                } elseif(!preg_match("/[a-z]/i", $_POST["password"])){
                    die("Password must contain at least one alphabet");
                } elseif(!preg_match("/[0-9]/i", $_POST["password"])){
                    die("Password must contain at least one number");
                } elseif(mysqli_num_rows($result) > 0){
                    echo 'User already exists!';
                } else {
                    if($password != $cpassword){
                        die('Passwords do not match');
                    } else {
                        //$insert = "INSERT INTO user_form(first_name,name,email,password,user_type) VALUES('$fname',$name','$email','$password','$user_type')";
                        //$insert = "INSERT INTO user_form(first_name, name, email, password, user_type, department,ID) VALUES('$fname', '$name', '$email', '$password', '$user_type', '$dept','$ID')";
                        $insert = "INSERT INTO user_form(first_name, name, email, password, user_type,department) VALUES('$fname','$name','$email','$password','$user_type','$dept')";
                        mysqli_query($conn,$insert);
                        header('location:login_form.php');
                    }
                }
            }
            ?>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?>
            <input type="text" name="fname" required placeholder="Enter first name"><br>
            <input type="text" name="name" required placeholder="Enter last name"><br>
            <input type="email" name="email" required placeholder="Enter your email"><br>
            <input type="password" name="password" required placeholder="Enter your password"><br>
            <input type="password" name="cpassword" required placeholder="Confirm your password"><br>
            <!--<input type="text" name="id" required placeholder="Enter your ID"><br>-->
            <select name="user_type">
                <option value="user">Student</option>
                <option value="admin">Admin</option>
                <option value="deptCord">Department Coordinator</option>
            </select>
            <select name="dept">
                <option value="CSE">CSE</option>
                <option value="IT">IT</option>
                <option value="ECE">ECE</option>
                <option value="EEE">EEE</option>
            </select>
            <input type="submit" name="submit" value="REGISTER" class="form-btn">
            <p>Already have an account? <a href="login_form.php">Login</a> <a href="index.html">Exit</a></p>
        </form>
    </div>
</body>
</html>

