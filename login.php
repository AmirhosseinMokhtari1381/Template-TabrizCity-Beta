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

    <title>ورود به سیستم</title>

    <!-- Favicons -->
    <link href="#" rel="icon">
    <link href="#" rel="apple-touch-icon">

    <!-- Fonts CSS Files -->
    <!-- <link rel="stylesheet" href="./assets/fonts/Vazirmatn-font-face.css"> -->

    <!-- Bootstrap CSS Files -->
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css.map">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="./css/style.css">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        ب .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>

<body class="text-center d-flex flex-column">

    <main class="form-signin">
        <form action="./checklogin.php" method="POST">
            <img class="mb-4" src="./img/icons/username-and-password-icon.jpg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">ورود به سیستم</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="username" value="<?php @$_COOKIE['myusername'] ?>" placeholder="نام کاربری" name="username">
                <label for="username">نام کاربری</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="pwd" placeholder="رمز عبور" name="pswd">
                <label for="pwd">رمز عبور</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input class="form-check-input" type="checkbox" name="remember" value="remember-me"
                    <?php 
                    if(isset ($_COOKIE['myusername'])){
                        echo 'checked = "checked"';
                    }else{
                        echo '';
                    }
                    
                    
                    ?> > یاد آور
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">ورود</button>
        </form>
    </main>

    <!-- ======= Footer ======= -->
    <?php include_once('./include/footer.php'); ?>

</body>

</html>