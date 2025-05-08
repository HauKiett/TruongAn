
<?php
            
            include_once('../../Model/xuatdulieu.php');
            $objjj = new database();
            
            
            if (isset($_SESSION['tenKH'])) {
                $emailll = $_SESSION['tenKH']; // Lấy giá trị từ session
                $emailll = trim($emailll);
            
                // Câu truy vấn với giá trị từ session
              $sql = "SELECT *  FROM thanhvien WHERE EmailTV = '$emailll'";
                $taikhoan = $objjj->danhsachtaikhoanKH($sql);
            
            }
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Trường An </title>
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
    <link rel="stylesheet" href="assets/themify-icons-font/themify-icons/themify-icons.css">
<style>
 /* Nút Đăng Nhập và Đăng Ký */
.header-btns .btn {
    background-color:#ff8213; /* Màu nền xanh lá cây nhạt */
    color: white; /* Màu chữ trắng */
    padding: 23px 20px; /* Thêm khoảng cách xung quanh chữ */
    border-radius: 15px; /* Bo góc nhẹ cho nút */
    font-size: 16px; /* Kích thước chữ */
    font-weight: 600; /* Chữ đậm */
    border: none; /* Xóa viền */
    transition: all 0.3s ease; /* Hiệu ứng chuyển đổi */
    margin-right: 10px; /* Khoảng cách giữa các nút */
}

/* Hiệu ứng hover */
.header-btns .btn:hover {
    background-color: #45a049; /* Màu nền khi hover (xanh đậm hơn một chút) */
    transform: translateY(-3px); /* Đẩy nút lên một chút */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Thêm bóng đổ */
}

/* Hiệu ứng khi nút đang được nhấn */
.header-btns .btn:active {
    transform: translateY(1px); /* Đẩy nút xuống một chút khi nhấn */
    box-shadow: none; /* Xóa bóng đổ khi nhấn */
}

/* Đảm bảo các nút nằm sát lề bên trái */
.header-btns {
    display: flex;
    justify-content: flex-start; /* Căn lề trái */
    align-items: center;
}

/* Điều chỉnh kích thước nút cho màn hình nhỏ */
@media (max-width: 768px) {
    .header-btns .btn {
        font-size: 14px; /* Chữ nhỏ lại một chút trên màn hình nhỏ */
        padding: 8px 15px; /* Khoảng cách xung quanh nhỏ lại */
    }
}


</style>
</head>

<body class="black-bg">
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
                            <a href="index.php"><img src="assets/img_TruongAn/logo/logo.webp" style="width:100px;" alt=""></a>
                        </div>
                        <!-- Main-menu -->


                        <?php
                        error_reporting(1);
                        
if ($_SESSION["dangnhapKH"]){
    echo '<div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.php">Trang chủ</a></li>
                                    <li><a href="device.php">Sản phẩm</a></li>
                                    <li><a href="gallery.php">Khuyến Mãi</a></li>
                                        <ul class="submenu">
                                            <li><a href="blog.php">Tin mới</a></li>
                                            <li><a href="blog_details.php">Thông tin chi tiết</a></li>
                                            <li><a href="elements.php">Yếu tố</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Phản hồi</a></li>
                                    <li><a href="danhgia.php">Đánh giá</a></li>
                                    <li><a href="../Admin/index.php">quản lý</a></li>
                                    <li><a href="xemgiohang.php">Giỏ hàng</a></li>
                                </ul>
                            </nav>
                        </div>';
                        echo '
                        <div class="header-btns d-none d-lg-block f-right">
                        <ul class="header-actions">

<li class="dropdown">
    <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
        <span class="user-name d-none d-md-block">       
            
        <span class="avatar">
            <img src="assets/img_TruongAn/avatar/avatar.png" style="width: 30px;" alt="Admin Templates">';
           echo htmlspecialchars($taikhoan[0]["TenTV"], ENT_QUOTES, 'UTF-8');
        echo '</span>
            <span class="status online"></span>
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings">
        <div class="header-profile-actions">
            <ul>
                <li>Mã TV : '; echo htmlspecialchars($taikhoan[0]["MaTV"], ENT_QUOTES, 'UTF-8');
                echo '</li>
            </ul>
            <a href="#" onclick="confirmLogout()">Đăng xuất</a>

            <script>
            function confirmLogout() {
                if (confirm("Bạn có chắc chắn muốn đăng xuất không?")) {
                    window.location.href =
                        "logout.php"; // Điều hướng tới trang logout.php nếu người dùng xác nhận
                }
            }
            </script>
        </div>
    </div>
</li>
</ul>
</div>';}
                    else {
                        echo '<div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.php">Trang chủ</a></li>
                                    <li><a href="device.php">Sản phẩm</a></li>
                                    <li><a href="gallery.php">Khuyến Mãi</a></li>
                                        <ul class="submenu">
                                            <li><a href="blog.php">Tin mới</a></li>
                                            <li><a href="blog_details.php">Thông tin chi tiết</a></li>
                                            <li><a href="elements.php">Yếu tố</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Phản hồi</a></li>
                                    <li><a href="danhgia.php">Đánh giá</a></li>
                                    <li><a href="../Admin/index.php">quản lý</a></li>
                                    <li><a href="xemgiohang.php">Giỏ hàng</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header-btn -->
                        <div class="header-btns d-none d-lg-block f-left">
                            <a href="login.php" class="btn">Đăng Nhập</a>
                            <a href="dangky.php" class="btn">Đăng Kí</a>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>';
                    }

?>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    
</body>
</html>