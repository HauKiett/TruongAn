<?php
include_once('../../model/quanlygoitap.php');
$obj = new goitap();
if (isset($_POST["btXoa"])) {
    $magoi = $_POST["btXoa"];
    if ($obj->xoagoitap($magoi)) {
        echo "<script>alert('Xóa thành công!');</script>";
    } else {
        echo "<script>alert('Xóa thất bại!');</script>";
    }
}

// Xử lý thêm gói tập
if (isset($_POST["btThem"])) {
    // Lấy dữ liệu từ form
    $TenGoi = $_POST["TenGoi"];
    $GiaGoi = $_POST["GiaGoi"];
    $ThoiHanGoi = $_POST["ThoiHanGoi"];
    $Mota = $_POST["mota"];
    $Soluongnguoithamgia = $_POST["soluongnguoithamgia"];

    // Kiểm tra trùng tên gói trong cơ sở dữ liệu
    $checkSQL = "SELECT 1 FROM goitap WHERE TenGoi = '$TenGoi' LIMIT 1"; // Chỉ cần kiểm tra sự tồn tại
    $result = $obj->xuatdulieu($checkSQL);

    if ($result) {
        // Nếu không tìm thấy mã thành viên
        echo "<script>alert('Tên gói tập bị trùng vui lòng nhập lại');window.location='themgoitap.php';</script>";
        exit; // Dừng xử lý tiếp
    }
        // Chuẩn bị câu lệnh SQL để thêm vào cơ sở dữ liệu
        $sql = "INSERT INTO goitap (TenGoi, GiaGoi, ThoiHanGoi, mota, soluongnguoithamgia) 
                VALUES ('$TenGoi', $GiaGoi, $ThoiHanGoi, '$Mota', $Soluongnguoithamgia)";

        // Thực thi câu lệnh SQL
        if ($obj->themgoitap($sql)) {
            echo "<script>alert('Thêm gói tập thành công!'); window.location='goitap.php';</script>";
        } else {
            echo "<script>alert('Thêm gói tập thất bại!');</script>";
        }
    }



// Xử lý sửa gói tập
if (isset($_POST["btSua"])) {
    // Lấy dữ liệu từ form
    $maGoi = $_POST["MaGoi"];
    $tenGoi = $_POST["TenGoi"];
    $mota = $_POST["Mota"];
    $soLuong = $_POST["SoLuong"];
    $gia = $_POST["Gia"];
    $thoiHan = $_POST["ThoiHan"];
    
    // Cập nhật thông tin gói tập trong cơ sở dữ liệu
    $sql = "UPDATE goitap SET 
            TenGoi='$tenGoi',
            Mota='$mota',
            SoLuongNguoiThamGia=$soLuong,
            GiaGoi=$gia,
            ThoiHanGoi=$thoiHan
            WHERE MaGoi='$maGoi'";

    // Thực hiện cập nhật
    if ($obj->suagoitap($sql)) {
        echo "<script>alert('Sửa gói tập thành công!'); window.location='goitap.php';</script>";
    } else {
        echo "<script>alert('Sửa gói tập thất bại!');</script>";
    }
}