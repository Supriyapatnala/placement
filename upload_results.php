<?php
@include 'config.php';

if(isset($_POST['submit_placement'])) {
    if(isset($_FILES['placement_file']['name'])) {
        $file = $_FILES['placement_file']['tmp_name'];
        $handle = fopen($file, "r");

        while(($row = fgetcsv($handle, 1000, ",")) !== false) {
            $student_id = mysqli_real_escape_string($conn, $row[0]);
            $company = mysqli_real_escape_string($conn, $row[1]);
            $package = mysqli_real_escape_string($conn, $row[2]);
            $passout_year = mysqli_real_escape_string($conn, $row[3]);

            $query = "INSERT INTO placementresults (StudentID, Company, Package, PassoutYear)
                      VALUES ('$student_id', '$company', '$package', '$passout_year')";
            mysqli_query($conn, $query);
        }
        fclose($handle);
        echo "CSV data successfully uploaded.";
    } else {
        echo "No file provided.";
    }
} else {
    echo "Form not submitted.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="mainpage.html">Exit</a>
</body>
</html>

