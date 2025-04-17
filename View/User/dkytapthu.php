<?php
include_once('../../model/quanlytapthu.php');
include_once('../../Controller/cdkytapthu.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gym trainer | Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    .form-container {
        max-width: 600px;
        padding: 20px;
        border-radius: 8px;
        margin: auto;
        background-size: cover;
        color: beige;
        font-size: 20px;

    }

    section {
        color: black;
    }

    h2 {
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    input[type="text"],
    input[type="tel"],
    input[type="email"],
    section[id="idCars"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .form-buttons {
        display: flex;
        justify-content: space-between;
    }

    .btn-submit {
        background-color: #4CAF50;
        color: white;
        width: 200px;
        height: 60px;
    }

    .btn-cancel {
        background-color: #f44336;
        color: white;
        width: 200px;
        height: 60px;
    }
    </style>
</head>

<body class="black-bg">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img_TruongAn/logo/logo.webp" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="assets/img_TruongAn/logo/logo.webp" style="width:100px;" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.html">Trang chủ</a></li>
                                 
                                    <li><a href="courses.html">Gói tập</a></li>
                                    <li><a href="device.html">Sản phẩm</a></li>
                                    <li><a href="gallery.html">Khuyến Mãi</a></li>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Tin mới</a></li>
                                            <li><a href="blog_details.html">Thông tin chi tiết</a></li>
                                            <li><a href="elements.html">Yếu tố</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Phản hồi</a></li>
                                    <li><a href="danhgia.php">Đánh giá</a></li>
                                    <li><a href="../Admin/index.php">quản lý</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header-btn -->
                        <div class="header-btns d-none d-lg-block f-right">
                            <a href="dkytapthu.php" class="btn">Đăng Kí</a>
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
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70">
                                <h2>Đăng Ký
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-container">
            <form method="post" id="registrationForm">
                <div class="form-group">
                    <label for="name">Họ Tên:</label>
                    <input type="text" name="name" required placeholder="Nhập họ và tên"  pattern="^[A-Za-zÀ-Ỷà-ỷĂăÂâÊêÔôƠơƯưĐđ\s]+$" 
                    title="Vui lòng nhập họ và tên có dấu, không chứa ký tự đặc biệt hoặc số.">
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại:</label>
                    <input type="tel" name="phone" required pattern="^\d{10,11}$" placeholder="Nhập số điện thoại"
                        title="Số điện thoại không hợp lệ, vui lòng nhập lại.">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" required placeholder="Nhập email"
                    pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" 
                    title="Vui lòng nhập email hợp lệ, ví dụ: example@gmail.com">
                </div>
                <div class="form-group">
                    <label for="idCard">Căn Cước:</label>
                    <input type="text" name="idCard" required pattern="^\d{9,12}$" placeholder="Nhập CCCD"
                        title="Căn cước không hợp lệ, vui lòng nhập lại.">
                </div>
                <div class="form-group">
                    <label>Khung giờ gọi cho bạn:</label>
                    <select class="form-group" name="Thoigianlienlac" placeholder="Chọn khung giờ">
                        <option value="9:00 AM - 12:00 PM">9:00 AM - 12:00 PM</option>
                        <option value="12:00 PM - 2:00 PM">12:00 PM - 2:00 PM</option>
                        <option value="2:00 PM - 5:00 PM">2:00 PM - 5:00 PM</option>
                        <option value="5:00 PM - 10:00 PM">5:00 PM - 10:00 PM</option>
                    </select>
                </div>
                <br> <br>
                <div class="form-buttons">
                    <button type="submit" name="dkytap" class="btn btn-submit">Xác nhận</button>
                    <button type="button" class="btn btn-cancel" onclick="cancelForm()">Hủy</button>
                </div>

            </form>
        </div>

        <script>
        function cancelForm() {
            document.getElementById("registrationForm").reset();
            alert("Đã hủy đăng ký");
        }
        </script>

    </main>
    <footer>
        <!--? Footer Start-->
        <div class="footer-area black-bg">
            <div class="container">
                <div class="footer-top footer-padding">
                    <!-- Footer Menu -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="single-footer-caption mb-50 text-center">
                                <!-- logo -->
                                <div class="footer-logo wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                </div>
                                <!-- Menu -->
                                <!-- Header Start -->
                                <div class="header-area main-header2 wow fadeInUp" data-wow-duration="2s"
                                    data-wow-delay=".4s">
                                    <div class="main-header main-header2">
                                        <div class="menu-wrapper menu-wrapper2">
                                            <!-- Main-menu -->
                                            <div class="main-menu main-menu2 text-center">
                                                <nav>
                                                    <ul>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Header End -->
                                <!-- social -->
                                <div class="footer-social mt-30 wow fadeInUp" data-wow-duration="3s"
                                    data-wow-delay=".8s">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-copy-right text-center">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                    document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i class="fa fa-heart"
                                        aria-hidden="true"></i> by <a href="https://colorlib.com"
                                        target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
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

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

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