<?php
session_start();
if (!$_SESSION["dangnhapKH"])
    header("Location:dangky.php");
include_once('../../model/quanlytapthu.php');
include_once('../../Controller/cdkytapthu.php');
$count = 0;
while (isset($_GET["TenTB{$count}"])) {
    $count++;
}
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["tensp"])) {

}

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin giao hàng</title>
    <style>
        body { font-family: Arial; background: #fff; margin: 0; padding: 0; }
        .container { display: flex; max-width: 1200px; margin: 40px auto; gap: 40px; }
        .left, .right { background: #f8f8f8; padding: 30px; border-radius: 10px; flex: 1; }
        h2 { margin-top: 0; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, select { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; }
        .radio-group { display: flex; align-items: center; gap: 10px; margin: 10px 0; }
        .order-item { display: flex; margin-bottom: 15px; }
        .order-item img { width: 70px; height: 70px; margin-right: 15px; }
        .order-item-info { flex: 1; }
        .total { border-top: 1px solid #ccc; margin-top: 20px; padding-top: 10px; }
        .btn-submit { background: #007bff; color: white; border: none; padding: 10px 20px; font-weight: bold; border-radius: 5px; margin-top: 20px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <!-- LEFT: Thông tin giao hàng -->
        <div class="left">
            <h2>Thông tin giao hàng</h2>
            <form id="registrationForm" method="POST">
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
                <label for="diachi">Địa chỉ</label>
                    <input type="text" name="diachi" required placeholder="Nhập địa chỉ"  
                    pattern="^[A-Za-zÀ-Ỷà-ỷĂăÂâÊêÔôƠơƯưĐđ0-9\s,./\-]+$" 
                    title="Vui lòng nhập địa chỉ hợp lệ, có thể bao gồm chữ, số">
                </div>
                <div class="form-group">
                    <label for="idCard">Căn Cước:</label>
                    <input type="text" name="idCard" required pattern="^\d{9,12}$" placeholder="Nhập CCCD"
                        title="Căn cước không hợp lệ, vui lòng nhập lại.">
                </div>
                

                <div class="form-group" >
                <label for="idCard">Phương thức thanh toán</label>
                    
                    <select name="Thoigianlienlac" required>
                        <option value="Chưa thanh toán">Giao hàng rồi thanh toán</option>
                        <option value="Đã thanh toán">Thanh toán điện tử</option>
                    </select>
                </div>

                <button type="submit" name="dkytap" class="btn-submit">Xác nhận</button> 
                <button type="button" class="btn btn-cancel" onclick="cancelForm()">Hủy</button>
                <?php for ($i = 0; $i < $count; $i++): ?>
                    <input type="hidden" name="tensp[]" value="<?php echo htmlspecialchars($_GET["TenTB$i"]); ?>">
                    <input type="hidden" name="soluong[]" value="<?php echo $_GET["soluong$i"]; ?>">
                    <input type="hidden" name="gia[]" value="<?php echo $_GET["gia$i"]; ?>">
                    <input type="hidden" name="tongtien[]" value="<?php echo $_GET["tongtien$i"]; ?>">
                <?php endfor; ?>
            </form>
        </div>

        <!-- RIGHT: Danh sách đơn hàng -->
        <div class="right">
            <h2>Giỏ hàng</h2>
            <?php $tong = 0; ?>
            <?php for ($i = 0; $i < $count; $i++): ?>
                <div class="order-item">
                    <img src="<?php echo htmlspecialchars($_GET["Hinhanh$i"]); ?>" alt="">
                    <div class="order-item-info">
                        <strong><?php echo htmlspecialchars($_GET["TenTB$i"]); ?></strong><br>
                        Số lượng: <?php echo $_GET["soluong$i"]; ?><br>
                        Giá: <?php echo number_format($_GET["gia$i"]); ?> đ
                    </div>
                </div>
                <?php $tong += $_GET["tongtien$i"]; ?>
            <?php endfor; ?>

            <div class="total">
                <strong>Tổng cộng: <?php echo number_format($tong); ?> đ</strong>
            </div>
        </div>
    </div>
    <script>
        function cancelForm() {
            document.getElementById("registrationForm").reset();
            alert("Đã hủy đăng ký");
        }
        </script>

</body>
</html>
