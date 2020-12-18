<?php


$dbServername = "aa1i928knxik511.cgbsoidxymts.us-west-1.rds.amazonaws.com";
$dbUsername = "proektAWS";
$dbPassword = "darko123";
$dbName = "AWS";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"
    <title></title>
</head>
<body>
<?php
    $sql = "SELECT* FROM new_table;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo $row['index'] . "<br>";
          echo $row['Ime'] . "<br>";
          echo $row['Prezime'];
        }
    }
?>

</body>
</html>
