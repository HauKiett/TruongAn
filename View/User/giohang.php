<?php
include_once("../../Model/connect.php");
include("header.php");
$obj = new connect_database();

$tensp = $_GET["tensp"] ?? "";
$gia = $_GET["gia"] ?? 0;
$soluong = $_GET["soluong"] ?? 1;
$hinhanh = $_GET["hinhanh"] ?? "no-image.jpg";
$thuonghieu = $_GET["thuonghieu"] ?? "Không rõ";
$tonggia = $gia * $soluong;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="assets/css/stylegiohang.css">
</head>
<body>
    <div class="cart-container">
        <h2>GIỎ HÀNG</h2>

        <table class="cart-table">
            <thead>
                <tr>
                    <th>Thông tin chi tiết sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Tổng giá</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="product-info">
                        <img src="../Admin/assets/img/device/<?php echo $hinhanh; ?>" alt="Hình ảnh" class="product-img">
                        <div>
                            <strong><?php echo $tensp; ?></strong><br>
                            Thương hiệu: <?php echo $thuonghieu; ?><br>
                            <a href="#">Xóa</a>
                        </div>
                    </td>
                    <td><?php echo number_format($gia); ?> đ</td>
                    <td>
                        <div class="quantity-control">
                            <button type="button" onclick="changeQuantity(-1)">-</button>
                            <input type="number" id="soluong" value="<?php echo $soluong; ?>" min="1">
                            <button type="button" onclick="changeQuantity(1)">+</button>
                        </div>
                    </td>
                    <td id="tonggia"><?php echo number_format($tonggia); ?> đ</td>
                </tr>
            </tbody>
        </table>

        <div class="note-area">
            <label>Chú thích cho chủ cửa hàng</label><br>
            <textarea rows="4" cols="100"></textarea>
        </div>

        <div class="cart-buttons">
            <button onclick="updateCart()">CẬP NHẬT</button>
            <button onclick="checkout()">THANH TOÁN</button>
        </div>

        <div class="total-price">
            Tổng tiền: <span id="tongtien"><?php echo number_format($tonggia); ?> đ</span>
        </div>
    </div>

<script>
function changeQuantity(amount) {
    const input = document.getElementById("soluong");
    let current = parseInt(input.value);
    if (!isNaN(current)) {
        current = Math.max(1, current + amount);
        input.value = current;
        updateTongGia();
    }
}

function updateTongGia() {
    const qty = parseInt(document.getElementById("soluong").value);
    const dongia = <?php echo $gia; ?>;
    const tonggia = qty * dongia;
    document.getElementById("tonggia").innerText = tonggia.toLocaleString("vi-VN") + " đ";
    document.getElementById("tongtien").innerText = tonggia.toLocaleString("vi-VN") + " đ";
}

function updateCart() {
    const soluong = document.getElementById("soluong").value;
    const url = new URL(window.location.href);
    url.searchParams.set("soluong", soluong);
    window.location.href = url.toString();
}

function checkout() {
    alert("Đi đến trang thanh toán...");
}
</script>

</body>
</html>
