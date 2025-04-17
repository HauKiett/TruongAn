<?php
include_once('../../model/quanlytapthu.php');
include_once('../../Controller/cdkytapthu.php');
include("header.php");
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
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70">
                                <h2>Đăng Ký
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <label>Khung giờ gọi cho bạn:</label>
                    <select class="form-group" name="Thoigianlienlac" placeholder="Chọn khung giờ">
                        <option value="9:00 AM - 12:00 PM">9:00 AM - 12:00 PM</option>
                        <option value="12:00 PM - 2:00 PM">12:00 PM - 2:00 PM</option>
                        <option value="2:00 PM - 5:00 PM">2:00 PM - 5:00 PM</option>
                        <option value="5:00 PM - 10:00 PM">5:00 PM - 10:00 PM</option>
                    </select>
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
        </script>

    </main>
   <?php
include("footer.php");
   ?>

</body>

</html>