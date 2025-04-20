<?php
include('../../Controller/cquanlyphanhoidd.php');
include("header.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-color: #f6f9fc;
        font-size: 18px; /* Tăng toàn trang */
    }

    .feedback-wrapper {
        max-width: 800px;
        margin: 50px auto;
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        font-size: 18px; /* Tăng cỡ chữ bên trong form */
    }

    .feedback-wrapper h1 {
        font-size: 28px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
        color: #0d6efd;
    }

    .form-label {
        font-size: 18px;
        font-weight: 500;
    }

    input.form-control, textarea.form-control {
        font-size: 17px;
    }

    .btn-primary {
        width: 100%;
        font-size: 18px;
        padding: 10px;
        border-radius: 8px;
    }

    .btn-primary:hover {
        background-color: #0b5ed7;
    }
    main{
        background-color: rgb(205, 221, 245);
    }
</style>


</head>
<body>
<!--? Preloader Start -->
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
        </div>
    </div>
    <!-- Hero End -->
    <!--?  Contact Area start  -->
    <div class="container">
    <div class="feedback-wrapper">
        <h1>Hãy phản hồi để chúng tôi phục vụ bạn tốt hơn!</h1>
        <form action="" method="post">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="phone" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="phone" name="phone"
                           placeholder="Nhập số điện thoại" required
                           pattern="^0[1-9]{1}[0-9]{8,9}$"
                           title="Số điện thoại phải bắt đầu bằng 0 và có 10-11 chữ số.">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="customerName" class="form-label">Tên khách hàng</label>
                    <input type="text" class="form-control" id="customerName" name="customerName"
                           placeholder="Nhập tên khách hàng" required
                           pattern="^[a-zA-Z\u00C0-\u1EF9\s]*$"
                           title="Tên khách hàng chỉ được chứa chữ cái và khoảng trắng.">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                           pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"
                           title="Vui lòng nhập đúng định dạng email" placeholder="Nhập email" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="memberId" class="form-label">Mã thành viên (Bắt buộc)</label>
                    <input type="text" class="form-control" id="memberId" name="memberId"
                           placeholder="Nhập mã thành viên" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="feedback" class="form-label">Nội dung phản hồi</label>
                <textarea class="form-control" id="feedback" name="feedback" rows="4"
                          placeholder="Nhập nội dung phản hồi" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="btThem">Gửi Phản Hồi</button>
        </form>
    </div>
</div>

</main>
<?php
include("footer.php");
?>
</body>

</html>