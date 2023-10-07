<?php
// Include the configuration file
@include 'config.php';

$selectPlacementResults = "SELECT * FROM placementresults";
$resultPlacementResults = mysqli_query($conn, $selectPlacementResults);

if (mysqli_num_rows($resultPlacementResults) > 0) {
    echo "<table style='border-collapse: collapse; width: 100%;'>
          <tr>
            <th style='border: 1px solid #ddd; padding: 8px;'>Student ID</th>
            <th style='border: 1px solid #ddd; padding: 8px;'>Company</th>
            <th style='border: 1px solid #ddd; padding: 8px;'>Package</th>
            <th style='border: 1px solid #ddd; padding: 8px;'>Passout Year</th>
          </tr>";

    while($row = mysqli_fetch_assoc($resultPlacementResults)) {
        $studentID = $row['StudentID'];
        $company = $row['Company'];
        $package = $row['Package'];
        $passoutYear = $row['PassoutYear'];

        echo "<tr>
                <td style='border: 1px solid #ddd; padding: 8px;'>$studentID</td>
                <td style='border: 1px solid #ddd; padding: 8px;'>$company</td>
                <td style='border: 1px solid #ddd; padding: 8px;'>$package</td>
                <td style='border: 1px solid #ddd; padding: 8px;'>$passoutYear</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No placement results found.";
}
?>
