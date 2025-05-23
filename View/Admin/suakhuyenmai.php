<?php session_start();
$idSua = 1;
?>
<?php
include_once('../../model/quanlykhuyenmai.php');
include('../../Controller/c_discount.php');
if (isset($_GET['MaKM'])) {
    $MaKM = $_GET['MaKM'];
    $obj = new khuyenmai();
    $km = $obj->danhsachkhuyenmai($MaKM); // Giả sử bạn có phương thức này để lấy gói
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Chỉnh sửa khuyến mãi</title>
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.min.css">
    <link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css">

</head>

<body>

    <div class="page-wrapper">
        <div class="main-container">
            <div class="text-end mb-3">
                <a href="goitap.php" class="btn btn-primary">
                    <i class="bi bi-arrow-left-circle"></i> Quay lại
                </a>
            </div>
            <h3 class="text-center mb-4">Sửa Khuyến Mãi</h3>
            <form method="post" class="shadow p-4 rounded bg-light" onsubmit="return validateDates()">
                <div class="mb-3">
                    <label for="MaKM" class="form-label">Mã Khuyến Mãi</label>
                    <input type="text" class="form-control" name="MaKM" value="<?=$km[0]['MaKM']?>" readonly />
                </div>
                <div class="mb-3">
                    <label for="TenKM" class="form-label">Tên Khuyến Mãi</label>
                    <input type="text" class="form-control" name="TenKM" value="<?=$km[0]['TenKM']?>" required />
                </div>
                <div class="mb-3">
                    <label for="PhanTramDiscount" class="form-label">Phần Trăm Discount</label>
                    <input type="number" class="form-control" name="PhanTramDiscount" value="<?=$km[0]['PhanTramDiscount']?>" required />
                </div>
                <div class="mb-3">
                    <label for="NgayBatDauKM" class="form-label">Ngày Bắt Đầu</label>
                    <input type="date" id="NgayBatDauKM" class="form-control" name="NgayBatDauKM" value="<?php echo isset($record['NgayBatDauKM']) ? $record['NgayBatDauKM'] : ''; ?>" required />
                </div>
                <div class="mb-3">
                    <label for="NgayKetThucKM" class="form-label">Ngày Kết Thúc</label>
                    <input type="date" id="NgayKetThucKM" class="form-control" name="NgayKetThucKM" value="<?php echo isset($record['NgayKetThucKM']) ? $record['NgayKetThucKM'] : ''; ?>" required />
                <small id="dateError" class="text-danger d-none">Ngày bắt đầu phải nhỏ hơn ngày kết thúc.</small>
                </div>
                <div class="mb-3">
                    <label for="trangThai" class="form-label">Trạng Thái</label>
                    <select name="trangthai" id="">
                        <option value="Active">Active</option>
                        <option value="Not-Active">Not-Active</option>
                    </select>
                </div>
                <div class="text-end">
                    <button type="submit" name="btSua" class="btn btn-primary">
                        <i class="bi bi-pencil"></i> Cập Nhật Khuyến Mãi
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
    function validateDates() {
        const startDate = document.getElementById("NgayBatDauKM").value;
        const endDate = document.getElementById("NgayKetThucKM").value;
        const errorMessage = document.getElementById("dateError");

        // Kiểm tra nếu ngày bắt đầu >= ngày kết thúc
        if (startDate && endDate && startDate >= endDate) {
            errorMessage.classList.remove("d-none"); // Hiển thị thông báo lỗi
            return false; // Ngừng gửi form
        }

        errorMessage.classList.add("d-none"); // Ẩn thông báo lỗi nếu ngày hợp lệ
        return true; // Gửi form nếu ngày hợp lệ
        }  
    </script>
</body>
<small id="dateError" class="text-danger d-none">Ngày bắt đầu phải nhỏ hơn ngày kết thúc.</small>
</html>