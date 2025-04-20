<?php
include_once('../../model/quanlyhoadon.php');
$obj = new hoadon();
if (isset($_POST["btXoaHD"])) {
    $maph = $_POST["btXoaHD"];
    if ($obj->xoahoadon($id)) {
        echo "<script>alert('Xóa hóa đơn thành công!');</script>";
    } else {
        echo "<script>alert('Lỗi!');</script>";
    }
}

if (isset($_POST["btDuyetHD"])) {
    $id = $_POST["btDuyetHD"];
    // Lấy dữ liệu từ form
    $sql = "UPDATE khtapthu SET 
    Thoigianlienlac = 'Đã thanh toán',
    ngaylap = CURDATE()
    WHERE id = '$id'";


    // Thực hiện cập nhật
    if ($obj->duyethoadon($sql)) {
        echo "<script>alert('Đã duyệt!'); window.location='dstapthu.php';</script>";
    } else {
        echo "<script>alert('Lỗi!!');</script>";
    }
}