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

    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <!-- اينجا بعدن يه آيكون در اندازه 40 در 40 پيدا كن -->
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-secondary">ميزكار</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">نوشته جديد</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">نظرات</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle link-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            تعاريف موضوع
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="categoryAdd.php">موضوع جديد</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="categoryShow.php">مشاهده موضوع</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control" placeholder="دنبال چي ميگردي؟" aria-label="Search">
                </form>

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../img/users/Owner.JPG" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">پروژه جدید</a></li>
                        <li><a class="dropdown-item" href="#">تنظیمات</a></li>
                        <li><a class="dropdown-item" href="#">پروفایل</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../logout.php">خروج</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


    <!-- Bootstrap JS Files -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js.map"></script>

</body>

</html>