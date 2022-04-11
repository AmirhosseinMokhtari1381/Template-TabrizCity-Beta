<?php

session_start();

$user = $_POST['username'];
$pass = $_POST['pswd'];

require_once('admin/include/config.php');

$sql = "SELECT * FROM users WHERE UserName = '$user' AND Password = '$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['UserName'] = $user;
    header('location:admin/index.php');
} else { 
    header('location:login.php');
}
