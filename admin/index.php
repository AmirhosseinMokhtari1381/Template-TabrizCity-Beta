<?php
session_start();
if (!$_SESSION['UserName']) {
    header('location:../login.php');
}
?>

<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Short description for the website -->
    <meta name="description" content="توضیحی برای صفحه وبسایت">
    <!-- Keywords for search engines -->
    <meta name="keywords" content="HTML,CSS,BootStrap,JavaScript">
    <!-- Website author -->
    <meta name="author" content="Siamak Bagheri">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>مدیریت سیستم</title>

    <!-- Favicons -->
    <link href="#" rel="icon">
    <link href="#" rel="apple-touch-icon">

    <!-- Fonts CSS Files -->
    <!-- <link rel="stylesheet" href="./assets/fonts/Vazirmatn-font-face.css"> -->

    <!-- Bootstrap CSS Files -->
    <link rel="stylesheet" href="../css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="../css/bootstrap.rtl.min.css.map">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <?php include_once('./include/header.php'); ?>


    <!-- Bootstrap JS Files -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js.map"></script>

</body>

</html>