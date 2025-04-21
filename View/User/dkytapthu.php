<?php
session_start();
if (!$_SESSION["dangnhapKH"]){
    header("Location:dangky.php");
include_once('../../model/quanlytapthu.php');
include_once('../../Controller/cdkytapthu.php');
include("header.php"); }

$tensp = isset($_GET['tensp']) ? $_GET['tensp'] : '';
$gia = isset($_GET['gia']) ? $_GET['gia'] : '';
$soluong = isset($_GET['soluong']) ? $_GET['soluong'] : '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
<body>
   
    
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
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
                    <label for="tensp">Tên sản phẩm:</label>
                    <input type="text" name="tensp[]" value="<?php echo htmlspecialchars($tensp); ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="gia">Giá:</label>
                    <input type="text" name="gia[]" value="<?php echo htmlspecialchars($gia); ?>" readonly>
                </div>


                <div class="form-group">
                    <label for="soluong">Số lượng:</label>
                    <div style="display: flex; gap: 10px; text-align: center;">
                        <button type="button" onclick="tangGiamSL(-1)">-</button>
                        <input type="number" name="soluong[]" id="soluong" min="1" value="<?php echo $soluong; ?>" readonly>
                        <button type="button" onclick="tangGiamSL(1)">+</button>
                    </div>
                </div>

                <?php
                    $gia = isset($_GET['gia']) ? (int)$_GET['gia'] : 0;
                    $soluong = isset($_GET['soluong']) ? (int)$_GET['soluong'] : 1;
                    $tongtien = $gia * $soluong;
                    ?>
                <div class="form-group">
                    <label for="tongtien">Tổng tiền:</label>
                    <input type="text" id="tongtien_view" value="<?php echo number_format($tongtien); ?> đ" readonly>
                    <input type="hidden" name="tongtien[]" id="tongtien" value="<?php echo $tongtien; ?>">
                </div>

                <div class="form-group">
                    <label>Phương thức thanh toán</label>
                    <select class="form-group" name="Thoigianlienlac" placeholder="Chọn khung giờ">
                        <option value="Chưa thanh toán">Giao hàng rồi thanh toán</option>
                        <option value="Đã thanh toán">Thanh toán điện tử</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="diachi">Địa chỉ</label>
                    <input type="text" name="diachi" required placeholder="Nhập địa chỉ"  
                    pattern="^[A-Za-zÀ-Ỷà-ỷĂăÂâÊêÔôƠơƯưĐđ0-9\s,./\-]+$" 
                    title="Vui lòng nhập địa chỉ hợp lệ, có thể bao gồm chữ, số">
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
        function tangGiamSL(amount) {
            const soluongInput = document.getElementById("soluong");
            const tongtienView = document.getElementById("tongtien_view");
            const tongtienHidden = document.getElementById("tongtien");
            const gia = <?php echo $gia; ?>; // Gía đã được gán sẵn ở PHP

            let soluong = parseInt(soluongInput.value);
            if (isNaN(soluong)) soluong = 1;

            soluong += amount;
            if (soluong < 1) soluong = 1;

            const tong = gia * soluong;

            soluongInput.value = soluong;
            tongtienHidden.value = tong;
            tongtienView.value = tong.toLocaleString('vi-VN') + " đ";
        }
        </script>

    </main>
   <?php
include("footer.php");
   ?>

</body>

</html>