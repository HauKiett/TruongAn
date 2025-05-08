<?php
session_start();
error_reporting(1);
include_once('../../Model/Modeldevice.php');
include('../../Controller/DeviceQL.php');
$obj = new deviceQL();
include('sidebar.php');
include_once('header.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Best Bootstrap Admin Dashboards">
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="assets/images/favicon.svg">

    <!-- Title -->
    <title>Bootstrap Admin Dashboards</title>
    <!-- Animated css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Bootstrap font icons css -->
    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.min.css">
    <link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css">

</head>

<body>

    <div class="page-wrapper">
        <div class="main-container">
            <h3 class="text-center mb-4">Xuất kho</h3>
            <form method="POST" class="shadow p-4 rounded bg-light" enctype="multipart/form-data" style="margin-left: 20px;">
                <div class="mb-3">
                    <label for="" class="form-label">Ngày xuất:</label>
                    <input type="date" class="form-control" name="ngay_xuat"/>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Người xuất:</label>
                    <input type="text" class="form-control" name="nguoi_xuat"/>
                </div>
                <div class="mb-3">
					<label class="form-label d-flex">Sản phẩm</label>
					<select name="MaTB" class="select-single js-states form-control" title="Select Product Category" data-live-search="true">
						<option value="">--Chọn sản phẩm--</option>
						<?php echo $obj->selectthietbi(); ?>
					</select>
				</div>
                <div class="mb-4">
                    <label for="" class="form-label">Số lượng xuất:</label>
                    <input type="number" class="form-control" name="so_luong" min="1"/>
                </div>
                <div class="text-end">
                    <button type="submit" name="Xuất" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i>Xuất kho
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Page wrapper end -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/moment.js"></script>

    <!-- Vendor Js Files -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Main Js Required -->
    <script src="assets/js/main.js"></script>

</body>
</html>

