<?php
include_once('../../Model/quanlihoadon.php');

// Kiểm tra xem form đã được submit chưa
if (isset($_POST["btTao"])) {
    // Lấy dữ liệu từ form và xử lý trước khi gọi hàm
    $TenTV = $_POST["tenTV"] ?? '';
    $SDT = $_POST["phoneNumber"] ?? '';
    $Email = $_POST["Email"] ?? '';
    $diaChi = $_POST["diachi"] ?? 'Địa chỉ chưa cập nhật';
    $GioiTinh = $_POST["GioiTinh"] ?? 'Không xác định';
    $MaGoi = intval($_POST["goiTap"] ?? 0);
    $MaKM = !empty($_POST["maKM"]) ? intval($_POST["maKM"]) : NULL;
    $ThanhTien = floatval($_POST["thanhTien"] ?? 0);
    $TrangThaiTT = $_POST["ttThanhToan"] ?? 'Chưa thanh toán';
    $Manv = intval($_POST["Manv"] ?? 0);
    $MaTV = intval($_POST["maTV"] ?? 0);

    // Khởi tạo đối tượng hoadondd để gọi phương thức thêm hóa đơn
    $hoadon = new hoadondd();
    $checkManv = "SELECT 1 FROM nhanvien WHERE MaNV = '$Manv' LIMIT 1"; // Chỉ cần kiểm tra sự tồn tại
    $ktrManv = $hoadon->xuatdulieu($checkManv);
    if (!$ktrManv) {
        // Nếu không tìm thấy mã thành viên
        echo "<script>alert('Không tìm thấy mã nhân viên');window.location='hoadon.php';</script>";
        exit; // Dừng xử lý tiếp
    };

    $checkMatv = "SELECT 1 FROM thanhvien WHERE MaTV= '$Matv' LIMIT 1"; // Chỉ cần kiểm tra sự tồn tại
    $ktrMatv = $hoadon->xuatdulieu($checkMatv);
    if ($ktrMatv) {
        // Nếu không tìm thấy mã thành viên
        echo "<script>alert('Mã thành viên đã tồn tại');window.location='hoadon.php';</script>";
        exit; // Dừng xử lý tiếp
    };

    $checkEmailtv = "SELECT 1 FROM thanhvien WHERE EmailTV= '$Email' LIMIT 1"; // Chỉ cần kiểm tra sự tồn tại
    $ktrEmailtv = $hoadon->xuatdulieu($checkEmailtv);
    if ($ktrEmailtv) {
        // Nếu không tìm thấy mã thành viên
        echo "<script>alert('Email thành viên đã tồn tại');window.location='hoadon.php';</script>";
        exit; // Dừng xử lý tiếp
    };
    // echo $checkEmailtv;

    $checkSDTTV = "SELECT 1 FROM thanhvien WHERE SoDTTV= '$SDT' LIMIT 1"; // Chỉ cần kiểm tra sự tồn tại
    $ktrSDTTV = $hoadon->xuatdulieu($checkSDTTV);
    if ($ktrSDTTV) {
        // Nếu không tìm thấy mã thành viên
        echo "<script>alert('Số điện thoại thành viên đã tồn tại');window.location='hoadon.php';</script>";
        exit; // Dừng xử lý tiếp
    };
    // Gọi phương thức thêm hóa đơn
    
    $result = $hoadon->themhoadon($TrangThaiTT, $MaGoi, $MaKM, $MaTV, $Manv, $ThanhTien, $TenTV, $SDT, $Email, $GioiTinh, $diaChi);

    if ($result) {
        echo "<script>alert('Thêm hóa đơn thành công!'); window.location='hoadon.php';</script>";
    } else {
        echo "<script>alert('Thêm hóa đơn thất bại!');</script>";
    }
}
// Kiểm tra xem có yêu cầu mã khuyến mãi không
if (isset($_POST['maKM'])) {
    $maKM = $_POST['maKM']; // Lấy mã khuyến mãi từ yêu cầu POST

    // Khởi tạo đối tượng hoadondd để gọi phương thức getPhanTramDiscount
    $hoadon = new hoadondd();

   

    // Trả phần trăm giảm giá về cho AJAX (client)
    echo $phanTramDiscount;
}
?>