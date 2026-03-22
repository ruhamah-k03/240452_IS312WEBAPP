<?php
/*
Author: Ruhamah Kairat
Date: 22 March 2026
Unit: IS312 Web Application Development
*/

$conn = new mysqli("localhost", "root", "", "FRU10");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Student";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Listing</title>
</head>
<body>

<h2>Student Listing</h2>

<table border="1">
    <tr>
        <th>StudentNo</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Gender</th>
        <th>ContactNo</th>
        <th>ProgramCode</th>
    </tr>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['StudentNo']}</td>
                <td>{$row['Firstname']}</td>
                <td>{$row['Lastname']}</td>
                <td>{$row['Gender']}</td>
                <td>{$row['ContactNo']}</td>
                <td>{$row['ProgramCode']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No records found</td></tr>";
}

$conn->close();
?>

</table>

</body>
</html>
