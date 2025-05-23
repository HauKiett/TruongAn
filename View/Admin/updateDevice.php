<?php
session_start();
include_once('../../Model/Modeldevice.php');
include('../../Controller/DeviceQL.php');
$obj = new deviceQL();
include('sidebar.php');
include('header.php');
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
<?php
        $layid = $_GET['id'];
        $layten = $p->truyvan("SELECT TenTB FROM thietbi WHERE MaTB='$layid'");
        $idloaisp = $p->truyvan("SELECT idloaisp FROM thietbi WHERE MaTB='$layid' LIMIT 1");
        $laytingtrang = $p->truyvan("SELECT TinhtrangTB FROM thietbi WHERE MaTB='$layid' LIMIT 1");
        $layhinhanh = $p->truyvan("SELECT Hinhanh FROM thietbi WHERE MaTB='$layid' LIMIT 1");
        $laygia = $p->truyvan("SELECT gia FROM thietbi WHERE MaTB='$layid'");
        // Kiểm tra dữ liệu và gán giá trị
        $tenTB = !empty($layten) ? $layten[0]['TenTB'] : '';
        $idloaisp = !empty($idloaisp) ? $idloaisp[0]['idloaisp'] : '';
        $tingtrang = !empty($laytingtrang) ? $laytingtrang[0]['TinhtrangTB'] : '';
        $hinhanh = !empty($layhinhanh) ? $layhinhanh[0]['Hinhanh'] : '';
        $gia = !empty($laygia) ? $laygia[0]['gia'] : '';
    ?>
    <div class="page-wrapper">

        <div class="main-container">
            <h3 class="text-center mb-4">Cập nhật thiết bị</h3>
            <form method="post" class="shadow p-4 rounded bg-light " enctype="multipart/form-data" style="margin-left: 20px;">
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="tenTB" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="tenTB" value="<?php echo $tenTB; ?>"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label d-flex">Loại sản phẩm</label>
                            <select name="idloaisp" class="select-single js-states form-control">
                           <?php
                        $list = $obj->truyvan("SELECT * FROM loaisp");
                        foreach ($list as $row) {
                            echo "<option value='{$row['idloaisp']}'>{$row['tenloaisp']}</option>";
                        }
                        ?> 
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gia" class="form-label">Giá</label>
                            <input type="text" class="form-control" name="gia" value="<?php echo $gia; ?>"/>
                        </div>
                        <div class="mb-4">
                            <label class="form-label d-flex">Tình trạng sản phẩm</label>
                            <select name="tinhtrang" class="select-single js-states form-control">
                                <option value="1" <?php if ($tingtrang == 1) echo 'selected'; ?>>Còn hàng</option>
                                <option value="2" <?php if ($tingtrang == 2) echo 'selected'; ?>>Hết</option>
                            </select>
                        </div>
    
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Hình ảnh thay thế</label>
                            <input type="file" class="form-control" id="inputGroupFile01" name="myfile">
                        </div>
                        
                    </div>
                    <div class="col-4">
                        <?php if ($hinhanh): ?>
                            <img class="pt-4" src="./assets/img/device/<?php echo $hinhanh; ?>" alt="Hình ảnh thiết bị" width="400" height="310"/>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="text-end">
                            <button type="submit" name="nutSua" class="btn btn-primary">
                                <i class="bi bi-arrow-repeat"></i>Cập nhật
                            </button>
                        </div>
                    </div>
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


