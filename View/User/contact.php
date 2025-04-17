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
</head>
<body>
<!--? Preloader Start -->
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Hãy phản hồi để chúng tôi có thể phục vụ cho bạn thật tốt!! </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--?  Contact Area start  -->
    <div class="container">
        <div class="container">
            <h1>Hãy phản hồi để chúng tôi có thể phục vụ cho bạn thật tốt !!</h1>
            <!-- Thêm thẻ form -->
            <form action="" method="post">
                <div class="row">
                    <!-- SĐT -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Nhập số điện thoại" required pattern="^0[1-9]{1}[0-9]{8,9}$"
                                title="Số điện thoại phải bắt đầu bằng 0 và có 10-11 chữ số.">
                        </div>
                    </div>
                    <!-- Tên khách hàng -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="customerName" class="form-label">Tên khách hàng</label>
                            <input type="text" class="form-control" id="customerName" name="customerName"
                                placeholder="Nhập tên khách hàng" required pattern="^[a-zA-Z\u00C0-\u1EF9\s]*$"
                                title="Tên khách hàng chỉ được chứa chữ cái (có dấu hoặc không dấu) và khoảng trắng." />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Email -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"
                                title="Vui lòng nhập đúng định dạng email, ví dụ: example@domain.com"
                                placeholder="Nhập email" required>
                        </div>
                    </div>
                    <!-- Mã thành viên -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="memberId" class="form-label">Mã thành viên(Bắt buộc)</label>
                            <input type="text" class="form-control" id="memberId" name="memberId"
                                placeholder="Nhập mã thành viên" required>
                        </div>
                    </div>
                </div>

                <!-- Nội dung phản hồi -->
                <div class="mb-3">
                    <label for="feedback" class="form-label">Nội dung phản hồi</label>
                    <textarea class="form-control" id="feedback" name="feedback" rows="4"
                        placeholder="Nhập nội dung phản hồi" required></textarea>
                </div>

                <!-- Nút gửi -->
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