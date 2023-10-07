<?php
// Assuming the student is logged in and you have their StudentID or email in $loggedInStudentID or $loggedInStudentEmail

/*@include 'config.php';

// Retrieve student details
$selectStudentDetails = "SELECT * FROM students WHERE StudentID='$loggedInStudentID'";
$resultStudentDetails = mysqli_query($conn, $selectStudentDetails);

if (mysqli_num_rows($resultStudentDetails) > 0) {
    $row = mysqli_fetch_assoc($resultStudentDetails);
    $name = $row['name'];
    $email = $row['Email'];

    // Check placement status
    $selectPlacementStatus = "SELECT * FROM placementresults WHERE StudentID='$loggedInStudentID'";
    $resultPlacementStatus = mysqli_query($conn, $selectPlacementStatus);

    if (mysqli_num_rows($resultPlacementStatus) > 0) {
        $placementDetails = mysqli_fetch_assoc($resultPlacementStatus);
        $company = $placementDetails['Company'];
        $package = $placementDetails['Package'];
        $passoutYear = $placementDetails['PassoutYear'];

        echo "Hello $name,<br>";
        echo "Your placement details:<br>";
        echo "Company: $company<br>";
        echo "Package: $package<br>";
        echo "Passout Year: $passoutYear<br>";
    } else {
        echo "Hello $name,<br>";
        echo "You have not been placed yet. Keep trying!<br>";
    }
} else {
    echo "Student details not found!";
}*/
?>

<?php
/*@include 'config.php';

session_start();
if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
    exit();
}

if(isset($_POST['student_id'])){
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);

    $selectPlacementDetails = "SELECT * FROM placementresults WHERE StudentID='$student_id'";
    $resultPlacementDetails = mysqli_query($conn, $selectPlacementDetails);

    if (mysqli_num_rows($resultPlacementDetails) > 0) {
        $row = mysqli_fetch_assoc($resultPlacementDetails);
        $company = $row['Company'];
        $package = $row['Package'];
        $passoutYear = $row['PassoutYear'];

        echo "Your placement details:<br>";
        echo "Company: $company<br>";
        echo "Package: $package<br>";
        echo "Passout Year: $passoutYear<br>";
    } else {
        echo "No placement details found for the given Student ID.";
    }
} else {
    echo "Student ID not provided.";
}*/
?>

<?php
/*@include 'config.php';

session_start();
if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
    exit();
}

if(isset($_POST['student_id'])){
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);

    $selectPlacementDetails = "SELECT * FROM placementresults WHERE StudentID='$student_id'";
    $resultPlacementDetails = mysqli_query($conn, $selectPlacementDetails);

    if (mysqli_num_rows($resultPlacementDetails) > 0) {
        while($row = mysqli_fetch_assoc($resultPlacementDetails)) {
            $company = $row['Company'];
            $package = $row['Package'];
            $passoutYear = $row['PassoutYear'];

            echo "Company: $company<br>";
            echo "Package: $package<br>";
            echo "Passout Year: $passoutYear<br>";
            echo "<hr>"; // Add a horizontal line to separate entries
        }
    } else {
        echo "No placement details found for the given Student ID.";
    }
} else {
    echo "Student ID not provided.";
}*/
?>

<?php
@include 'config.php';

session_start();
if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
    exit();
}

if(isset($_POST['student_id'])){
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);

    $selectPlacementDetails = "SELECT DISTINCT * FROM placementresults WHERE StudentID='$student_id'";
    $resultPlacementDetails = mysqli_query($conn, $selectPlacementDetails);

    if (mysqli_num_rows($resultPlacementDetails) > 0) {
        while($row = mysqli_fetch_assoc($resultPlacementDetails)) {
            $company = $row['Company'];
            $package = $row['Package'];
            $passoutYear = $row['PassoutYear'];

            echo "Company: $company<br>";
            echo "Package: $package<br>";
            echo "Passout Year: $passoutYear<br>";
            echo "<hr>"; // Add a horizontal line to separate entries
        }
    } else {
        echo "No placement details found for the given Student ID.";
    }
} else {
    echo "Student ID not provided.";
}
?>





