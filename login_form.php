<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
       body {
    background-image: url('./the.jpg'); /* Adjust the URL to your actual image file */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    font-family: Arial, sans-serif;
    margin: 0; /* Add this line to remove default margin */
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
        .form-container input {
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
            <h3>Login</h3>
            <?php
                @include 'config.php';
                session_start();

                if(isset($_POST['submit'])){
                    $name=mysqli_real_escape_string($conn,$_POST['name']);
                    $email=mysqli_real_escape_string($conn,$_POST['email']);
                    $pass=md5($_POST['password']);
                    $cpass=md5($_POST['cpassword']);
                    $user_type=$_POST['user_type'];
                    
                    $select="SELECT * FROM user_form WHERE email='$email' && password='$pass'";
                    $result=mysqli_query($conn,$select);

                    if(mysqli_num_rows($result)>0){
                        $row=mysqli_fetch_array($result);
                        if($row['user_type']=='admin'){
                            $_SESSION['admin_name']=$row['name'];
                            header('location:admin_page.php');
                        }elseif($row['user_type']=='user'){
                            $_SESSION['user_name']=$row['name'];
                            header('location:user_page.php');
                        }elseif($row['user_type']=='deptCord'){
                            $_SESSION['deptCord_name']=$row['name'];
                            header('location:deptCord.php');
                        } else {
                            $error[]='Incorrect email or password!';
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

            <input type="email" name="email" required placeholder="Enter your email"><br>
            <input type="password" name="password" required placeholder="Enter your password"><br>
            <input type="submit" name="submit" value="LOGIN" class="form-btn">

            <p>Don't have an account? <a href="registration_form.php">Register now</a></p>
        </form>
    </div>
</body>
</html>
