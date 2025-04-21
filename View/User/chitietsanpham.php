<?php
session_start();
include_once("../../Model/connect.php");
include("header1.php");
$obj = new connect_database();
if(isset($_GET["MaTB"]))
    $MaTB=$_GET["MaTB"];
$sql="select T.*,tenloaisp from thietbi as T join loaisp as L on T.idloaisp=L.idloaisp where T.MaTB='$MaTB'";
$sanpham=$obj->xuatdulieu($sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylechitietsp.css">
    <title>Document</title>
</head>
<body>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
            </div>
        </div>
        <!-- Hero End -->
        <!--? Gallery Area Start -->
        <div class="container1">
        <div class="product-detail">
            <div class="product-images">
                <div class="main-image">
                    <img src="../Admin/assets/img/device/<?php echo $sanpham[0]["Hinhanh"]; ?>" alt="Main Product">
                </div>
            </div>

            <div class="product-info">
                <h2><?php echo $sanpham[0]["TenTB"]; ?></h2>
                <ul>
                    <li><b>Tên sản phẩm:</b> <?php echo $sanpham[0]["TenTB"]; ?></li>
                    <li><b>Loại sản phẩm:</b> <?php echo $sanpham[0]["tenloaisp"]; ?></li>
                    <li><b>Giá:</b> <?php echo number_format($sanpham[0]["gia"]); ?> VND</li>
                    <li><b>Mô tả:</b> <?php echo $sanpham[0]["mota"]; ?></li>
                </ul>

                <label style="font-size: 18px;" for="quantity">Số lượng:</label>
                <div class="quantity-control">
                    <button type="button" onclick="changeQuantity(-1)">-</button>
                    <input style="font-size: 18px;" type="number" id="soluong" value="1" min="1">
                    <button type="button" onclick="changeQuantity(1)">+</button>
                </div>
                <div class="header-btns d-none d-lg-block">
                            <button onclick="redirectToForm()" class="buy-now">Mua ngay</button>
                            <button onclick="addToCart()" class="buy-now">Thêm vào giỏ hàng</button>
                        </div>

            </div>
            </div>
        </div>
    </div>
        

                    
    </main>



<script>
function changeQuantity(amount) {
    const qtyInput = document.getElementById("soluong");
    let current = parseInt(qtyInput.value);
    if (!isNaN(current)) {
        current = Math.max(1, current + amount);
        qtyInput.value = current;
    }
}

function redirectToForm() {
    const soluong = document.getElementById("soluong").value;
    const TenTB = "<?php echo urlencode($sanpham[0]['TenTB']); ?>";
    const gia = "<?php echo $sanpham[0]['gia']; ?>";
    window.location.href = `dkytapthu.php?tensp=${TenTB}&gia=${gia}&soluong=${soluong}`;
}
function addToCart() {
    const soluong = document.getElementById("soluong").value;
    const TenTB = "<?php echo urlencode($sanpham[0]['TenTB']); ?>";
    const gia = "<?php echo $sanpham[0]['gia']; ?>";
    const hinhanh = "<?php echo urlencode($sanpham[0]['Hinhanh']); ?>";

    window.location.href = `giohang.php?TenTB=${TenTB}&gia=${gia}&soluong=${soluong}&Hinhanh=${hinhanh}`;
}

</script>


<?php
include("footer.php");
?>

</body>

</html>