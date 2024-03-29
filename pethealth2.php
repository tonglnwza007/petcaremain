<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PetCare</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.php">
                                                    <h5>Home</h5>
                                                </a></li>
                                            <li><a href="about.php">
                                                    <h5>About</h5>
                                                </a></li>
                                            <li><a href="services.php">
                                                    <h5>Services</h5>
                                                </a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? Add Pet Health Start -->
        <div class="our-services section-padding30">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span></span>
                            <div class="container p-3 my-3 bg-warning text-white">
                                <h2 class="text-white mb-20 p-1">Add Pet Health</h2>
                                <form action="/action_page.php">

                                    <div class="container">
                                        <form action="/action_page.php">
                                            <label for="birthday">Birthday</label>
                                            <input type="date" id="birthday" name="birthday">
                                        </form>
                                    </div>

                                    <div class="form-group">
                                        <label for="text">Vaccination Status (ประวัติการฉึดวัคซีน) ex.เคยได้รับวัคซีนอะไรมาแล้วบ้างและในช่วงเวลาใด</label>
                                        <input type="text" class="form-control p-1" id="text" placeholder="Enter Vaccination Status"
                                            name="note" maxlength="5000">
                                    </div>
                                        <div class="form-group">
                                            <label class="text-white mb-20 p-1">Deworming/Parasite Control(ปรสิต/พยาธิ)</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>
                                                            <input type="radio" name="choice-radio">Yes
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>
                                                            <input type="radio" name="choice-radio">No
                                                        </label>
                                                    </div>
                                                </div>
                            </form>
                        </div>

                        <div class="form-group">
                            <label class="text-white mb-20 p-1">Sterilize (การทำหมัน)</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>
                                        <input type="radio" name="choice-radio">Yes
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label>
                                        <input type="radio" name="choice-radio">No
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text">Medication/Treatment (ยาที่กำลังกิน)</label>
                                <input type="text" class="form-control p-1" id="text" placeholder="Enter medication"
                                    name="madication" maxlength="500">
                            </div>

                            <div class="form-group">
                                <label for="text">Nutrition (ประเภทอาหารที่รับประทาน ex.อาหารเม็ด)</label>
                                <input type="text" class="form-control p-1" id="text" placeholder="Enter nutrition"
                                    name="nutrition" required="required" maxlength="500">
                            </div>

                            <div class="form-group">
                                <label for="text">Diet (ลดน้ำหนัก/คงที่/เพิ่มน้ำหนัก)</label>
                                <input type="text" class="form-control p-1" id="text" placeholder="Enter diet"
                                    name="diet" maxlength="100">
                            </div>

                            <div class="form-group">
                                <label for="text">Allegies (แพ้ยา/อาหาร)</label>
                                <input type="text" class="form-control p-1" id="text" placeholder="Enter allegies"
                                    name="allegies" maxlength="500">
                            </div>

                            <div class="form-group">
                                <label for="text">Exercise (ระยะเวลาออกกำลังกายต่อสัปดาห์)</label>
                                <input type="text" class="form-control p-1" id="text" placeholder="Enter exercise"
                                    name="exercise" maxlength="100">
                            </div>

                            <div class="form-group">
                                <label for="text">Note (เพิ่มเติม)</label>
                                <input type="text" class="form-control p-1" id="text" placeholder="Enter note"
                                    name="note" maxlength="5000">
                            </div>

                            <button type="submit" class="btn btn-danger">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Add Pet Profile End -->

    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo mb-25">
                                    <a href="index.php"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Until one has loved an animal a part of one's soul remains unawakened</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Menu</h4>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="services.php">Services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Services</h4>
                                <ul>
                                    <li><a href="petprofile.php">Pet Profile</a></li>
                                    <li><a href="pethealth.php">Pet Health</a></li>
                                    <li><a href="pettag.php">Pet Tag</a></li>
                                    <li><a href="shopandclinic.php">Shop and Clinic</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>