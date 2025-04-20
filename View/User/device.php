<?php
error_reporting(1);
include_once("../../Model/connect.php");
include("header.php");
$obj = new connect_database();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .product-card {
        border: 1px solid #dee2e6;
        border-radius: 12px;
        padding: 15px;
        background-color: #fff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        transition: transform 0.2s;
        height: 100%;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    .product-image img {
        width: 100%;
        border-radius: 8px;
        object-fit: cover;
        height: auto;
    }

    .product-info {
        font-size: 18px;
    }

    .product-info li {
        margin-bottom: 10px;
    }

    .product-info .label-text {
        color: #333;
    }

    .product-info .label-title a {
        color: #007bff;
        text-decoration: none;
    }

    .product-info .label-title a:hover {
        text-decoration: underline;
    }

    .btn-order {
        padding: 8px 16px;
        font-size: 16px;
        border-radius: 6px;
    }
</style>

</head>
<body>
    
    <main>
        <!--? Hero Start -->
      
        <!--? Team -->
        <section class="team-area fix section-padding30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-55">
                            <br>
                            <h2 >Sản phẩm</h2>
                        </div>
                    </div>
                </div>
                
                    <!-- Block 1 -->
                    <?php
$idloaisp = $_REQUEST['idloaisp'];
if ($idloaisp)
    $sql = "SELECT * FROM thietbi WHERE idloaisp='$idloaisp'";
else
    $sql = "SELECT * FROM thietbi";
$sanpham = $obj->xuatdulieu($sql);

if ($sanpham) {
    echo '<div class="container-fluid"><div class="row">';
    foreach ($sanpham as $sp) {
        echo '
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="product-card">
                <div class="product-image mb-3">
                    <img src="../Admin/assets/img/device/' . $sp["Hinhanh"] . '" alt="Ảnh sản phẩm" class="img-fluid">
                </div>
                <ul class="product-info list-unstyled">
                    <li class="fw-bold mb-2">
                        <a href="chitietsanpham.php?MaTB=' . $sp["MaTB"] . '">' . $sp["TenTB"] . '</a>
                    </li>
                    <li class="mb-2">Giá: ' . number_format($sp["gia"]) . ' VNĐ</li>
                    <li>
                        <a href="dkytapthu.php?tensp=' . urlencode($sp["TenTB"]) . '&gia=' . $sp["gia"] . '" class="btn btn-primary btn-order w-100">Đặt hàng</a>
                    </li>
                </ul>
            </div>
        </div>';
    }
    echo '</div></div>';
} else {
    echo "<p class='text-center'>Hiện tại không có sản phẩm nào</p>";
}
?>

                    
        </section>
    </main>
 <?php
include("footer.php");
 ?>
</body>
</html>