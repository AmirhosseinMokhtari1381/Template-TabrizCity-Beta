<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms_db";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// while ($row = mysqli_fetch_assoc($result)) {
//     echo ' | ID: ' . $row["ID"] . ' | Email: ' . $row["Email"] . ' | First Name: ' . $row["First Name"] . ' | Last Name: ' . $row["Last Name"] . ' | UserName: ' . $row["UserName"] . ' | Password: ' . $row["Password"];
//     echo '<br>';
// }