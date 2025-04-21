<?php
session_start();
include_once('../../Model/quanlydangky.php');
include_once('../../Controller/cdangky.php');
include("header1.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản</title>

    <style>
        body {
            background: linear-gradient(to right, #e0eafc, #cfdef3);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            transition: border 0.3s ease;
        }

        input:focus, select:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .form-buttons {
    display: flex;
    justify-content: space-between;
    gap: 10px;
    margin-top: 25px;
    flex-wrap: wrap;
}

.btn-submit,
.btn-cancel {
    flex: 1;
    min-width: 120px;
    height: 45px;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.btn-submit {
    background-color: #4CAF50;
    color: white;
}

.btn-submit:hover {
    background-color: #45a049;
}

.btn-cancel {
    background-color: #f44336;
    color: white;
}

.btn-cancel:hover {
    background-color: #d7372e;
}
    </style>
</head>
<body>
<main>
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center"></div>
    </div>

    <div class="form-container">
        <form method="post" id="registrationForm">
            <h2>Đăng ký hoặc đăng nhập để vào xem cửa hàng</h2>

            <div class="form-group">
                <label for="TenTV">Họ Tên:</label>
                <input type="text" name="TenTV" required placeholder="Nhập họ và tên">
            </div>

            <div class="form-group">
                <label for="SoDTTV">Số điện thoại:</label>
                <input type="tel" name="SoDTTV" required placeholder="Nhập số điện thoại">
            </div>

            <div class="form-group">
                <label for="EmailTV">Email:</label>
                <input type="email" name="EmailTV" required placeholder="Nhập email">
            </div>

            <div class="form-group">
                <label for="MatKhauTV">Mật khẩu:</label>
                <input type="password" name="MatKhauTV" required placeholder="Nhập mật khẩu">
            </div>

            <div class="form-group">
                <label for="DiaChiTV">Địa chỉ:</label>
                <input type="text" name="DiaChiTV" required placeholder="Nhập địa chỉ">
            </div>

            <div class="form-group">
                <label for="GioiTinh">Giới tính:</label>
                <select name="GioiTinh" required>
                    <option value="">-- Chọn giới tính --</option>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
            </div>
            <div class="form-group">
                <br>
                <br>
                <button type="submit" name="btnDangKy" class="btn-submit">Đăng ký</button>
                <button type="button" class="btn-cancel" onclick="cancelForm()">Hủy</button>
            </div>
        </form>
    </div>
</main>

    <script>
        function cancelForm() {
            document.getElementById("registrationForm").reset();
            alert("Đã hủy đăng ký");
            <?php echo "window.location.href = 'index.php'; "?>
        }
    </script>

    <?php include("footer.php"); ?>
</body>
</html>
