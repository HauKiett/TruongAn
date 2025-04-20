<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
session_start();
include('../../model/connect.php');
if (isset($_POST["btDangnhap"])) {
    $obj = new connect_database();
    $email = $_POST["EmailTV"];
    $password = $_POST["MatKhauTV"];
    $id_tk = $obj->dangnhaptaikhoanKH($email, $password);

    if ($id_tk) {
        echo "<script>
            alert('Đăng nhập thành công!');
            window.location.href = 'index.php';
        </script>";
        $_SESSION['dangnhapKH'] = $id_tk;
        $_SESSION['tenKH']= $email;
    } else {
        echo "<script>
            alert('Đăng nhập không thành công! Vui lòng kiểm tra lại.');
            window.location.href = 'login.php';
        </script>";
    }
}

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


    <!-- *************
			************ Common Css Files *************
		************ -->

    <!-- Animated css -->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!-- Bootstrap font icons css -->
    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.min.css">

    <style>
        .form-container {
    max-width: 600px;
    margin: 50px auto;
    padding: 40px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: 600;
    margin-bottom: 6px;
    display: block;
    color: #333;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
}

.form-buttons {
    display: flex;
    justify-content: space-between;
    gap: 10px;
}

.btn-submit, .btn-cancel {
    flex: 1;
    height: 45px;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
}

.btn-submit {
    background-color: #28a745;
    color: white;
}

.btn-cancel {
    background-color: #dc3545;
    color: white;
}
    </style>
</head>


<body class="login-container">
    <div class="form-container">
    <form method="post" id="loginForm">
        <h2>Đăng nhập tài khoản khách hàng</h2>

        <div class="form-group">
            <label for="EmailTV">Email:</label>
            <input type="email" name="EmailTV" required placeholder="Nhập email">
        </div>

        <div class="form-group">
            <label for="MatKhauTV">Mật khẩu:</label>
            <input type="password" name="MatKhauTV" required placeholder="Nhập mật khẩu">
        </div>

        <div class="form-buttons">
            <input type="submit" value="Đăng nhập" id="btn-dangNhap" name="btDangnhap" class="btn-submit">
            <input type="button" value="Hủy"  class="btn-submit" onclick="confirmExit()">
        </div>
    </form>
</div>
<script>
                function confirmExit() {
                    const confirmMessage = "Bạn muốn rời trang?";
                    if (confirm(confirmMessage)) {
                        window.location.href = "../User/index.php"; // Điều hướng đến trang khác
                    }
                }
                </script>
    </div>
</form>
    <!-- Login box end -->

    <!-- *************
			************ Required JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/moment.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Main Js Required -->
    <script src="assets/js/main.js"></script>

</body>

</html>