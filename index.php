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

    <title>تبریز شهر اولین ها</title>

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
</head>

<body>

    <!-- ======= Header ======= -->
    <?php include_once('./include/header.php'); ?>


    <!-- ======= carousel ======= -->
    <section class="overflow-hidden">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="./img/carousel/ElGoliTabriz.jpg" class="d-block w-100" alt="ElGoli Tabriz">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>

                <div class="carousel-item">
                    <img src="./img/carousel/ShahriarParkTabriz.jpg" class="d-block w-100" alt="Shahriar Park Tabriz">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>

                <div class="carousel-item">
                    <img src="./img/carousel/ValiasrParkTabriz.jpg" class="d-block w-100" alt="Valiasr Park Tabriz">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">قبلی</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">بعدی</span>
            </button>

        </div>

    </section>


    <!-- ======= About the city of Tabriz ======= -->
    <section id="profile" class="overflow-hidden mt-2">

        <div class="container my-5">

            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">

                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">

                    <h3 class="display-4 fw-bold lh-1">درباره شهر تبریز</h3>
                    <p class="lead">شهر تبریز از باستانی‌ترین شهرهای ایران به حساب می‌آید که در طول تاریخ اتفاق‌های تلخ و شیرین بسیاری تجربه کرده است. تبریز در گذر زمان به واسطه حوادث متعددی مانند بلایای طبیعی (زلزله) و حمله اشغالگران (اشغال توسط بیگانگان) با خاک یکسان و مجدد مورد بازسازی قرار گرفت. تبریز طویل المدت‌ترین پایتخت تاریخی کشور عزیزمان است و اوج شکوه و قدرت تبریز در زمان حکومت ایلخانان بود؛ در مدت زمان حکمرانی سلسله ایلخانی، تبریز پایتخت قلمرویی پهناور (از سمت رود نیل در شمال شرق آفریقا تا آمودریا در آسیای مرکزی) و با صلابت بوده است. تبریز نخستین پایتخت جهان تشیع و همچنین در حکومت‌های آق‌قویونلوها، قره‌قویونلوها، صفویان و در آغاز انقلاب مشروطه (انقلاب برعلیه محمدعلی شاه) پایتخت بوده است. این شهر در زمان جنبش مشروطه نقش کلیدی و مهمی داشت و بسیاری از بزرگان تبریز چون ستارخان، باقرخان و شیخ الاسلام نقش اساسی در تاریخ ایران داشته‌اند.</p>

                </div>

                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                    <img class="rounded-lg-3 " src="./img/photo-tabriz/TabrizSaatSquare2.jpg" alt="Tabriz Saat Square" width="720">
                </div>

            </div>

        </div>

    </section>


    <!-- ======= Question And Answer ======= -->
    <section>

        <div class="container mt-5">

            <div class="row align-items-center justify-content-center gy-5">

                <div class="col-10 col-lg-5">
                    <img src="./img/photo-tabriz/TabrizWorldTradeTower.png" class="img-fluid border border-3 shadow-lg" alt="Tabriz World Trade Tower" width="۱۰۸۰" height="۱۳۴۲" loading="lazy">
                </div>

                <div class="col-lg-7">

                    <div class="accordion" id="accordionExample">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    معروف ترین جاذبه های تاریخی تبریز کدام است؟
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    خانه مشروطه، بازار بزرگ، مسجد کبود، ارگ علیشاه، کلیسای مریم مقدس، پارک استاد شهریار ، پارک شقایق ، روستای کندوان، پارک تاریخی ائل گلی، مسجد جامع شهر و… از دیدنی‌های تاریخی تبریز هستند.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button fw-bolder collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    بهترین غذاخوری های تبریز کدام ها هستند؟
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    رستوران حاج علی، رستوران سنتی آنا، رستوران گازماخ، فست‌فود توکا، فست‌فود گسترش، کافه پام فیلیا و… برای شکم‌گردی انتخاب خیلی‌ها هستند.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button fw-bolder collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ‍‍‍‍پرطرفدارترین پارک های تبریز چه نام دارد؟
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    1. پارک بزرگ تبریز، 2. پارک باغلارباغی، 3. پارک استاد شهریار، 4. پارک ائل گلی، 5. پارک جنگلی عینالی، 6. پارک ائل باغی، 7. باغ گلستان، 8. پارک مشروطه، 9. پارک جنگلی عباس میرزا، 10. باغ شهر تبریز، 11. بوستان خاقانی، 12. بوستان مینیاتوری، 12. پارک جنگلی باغمیشه، 13. پارک شمس تبریزی، 14. بوستان مفاخر تبریز، 15. پارک پیوند، 16. بوستان قرآن، 17. بوستان فرشتگان، 18. باغ امامی و 19. پارک ولیعصر مشهورترین پارک‌های این شهر محسوب می‌شوند.
                                </div>
                            </div>
                        </div>

                        <div class=" accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button fw-bolder collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    فهرست بزرگ ترین مراکز خرید تبریز کدام است؟
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    مرکز خرید لاله پارک، بازار برج بلور، جواهر تبریز و پاساژ ستاره باران از مراکز خرید و بازارگردی مهم تبریز هستند.
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ======= Attractions of Tabriz ======= -->
    <section class="overflow-hidden">

        <div class="px-4 pt-5 my-5 text-center border-bottom">

            <h3 class="display-4 fw-bold">جاذبه های شهر تبریز</h3>

            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">شهر تبریز به واسطه وجود بناهای تاریخی، فرهنگی و طبیعی بسیاری که دارد یکی از قطب‌های اصلی گردشگری ایران به حساب می‌آید. بی‌شک مسافرانی که به قصد تفریح به این شهر سفر می‌کنند، علاقه دارند از جاذبه های تبریز بازدید کنند؛ با دیدن اماکن تاریخی و ارزشمند تبریز و ثبت عکس در کنار جاذبه‌های کم‌نظیر تبریز، روزهای به‌یادماندنی از این شهر به یادگار ثبت کنید.</p>
            </div>

            <div class="overflow-hidden" style="max-height: 40vh;">

                <div class="container px-5">
                    <img src="./img/photo-tabriz/QajarMuseumOfTabriz.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Qajar Museum Of Tabriz" width="1280" height="718" loading="lazy">
                </div>

            </div>

        </div>

    </section>


    <!-- ======= Footer ======= -->
    <?php include_once('./include/footer.php'); ?>


    <!-- Bootstrap JS Files -->
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js.map"></script>

</body>

</html>