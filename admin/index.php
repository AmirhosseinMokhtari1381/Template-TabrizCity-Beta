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

    <?php
    require_once('./include/config.php');

    $sql = "SELECT * FROM book";
    $result = mysqli_query($conn, $sql);
    ?>

    <div class="container mt-3">
        <div class="row g-3">
            <div class="col-md-9">
                <div class="row">

                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="col-md-6">
                            <div class="card shadow border border-info bg-info bg-opacity-10 mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?= $row['imagepath'] ?>" alt="title" class="img-fluid rounded-3">
                                        </div>
                                        <div class="col-md-8">
                                            <h4>
                                                <?= $row['name'] ?>
                                            </h4>
                                            <p>
                                                <?= $row['discription'] ?>
                                            </p>
                                            <span class="fs-7 text-muted">
                                                تاریخ انتشار :
                                                <?= $row['createtime'] ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>



            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-info p-3">رویداد ها</div>
                    <div class="card-body bg-info bg-opacity-10">
                        <ul class="list-unstyled ">
                            <li class="hover-li"><a href="#" class="text-decoration-none text-dark p-3">لورم ایپسوم</a></li>
                            <li class="hover-li"><a href="#" class="text-decoration-none text-dark p-3">لورم ایپسوم </a></li>
                            <li class="hover-li"><a href="#" class="text-decoration-none text-dark p-3">لورم ایپسوم</a></li>
                            <li class="hover-li"><a href="#" class="text-decoration-none text-dark p-3">لورم ایپسوم</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header bg-info p-3">لینک های مفید</div>
                    <div class="card-body bg-info bg-opacity-10">
                        <ul class="list-unstyled">
                            <li class="hover-li"><a href="#" class="text-decoration-none text-dark p-3">لورم ایپسوم</a></li>
                            <li class="hover-li"><a href="#" class="text-decoration-none text-dark p-3">لورم ایپسوم</a></li>
                            <li class="hover-li"><a href="#" class="text-decoration-none text-dark p-3">لورم ایپسوم</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>