<?php
$obj = new quanlydangky();

if (isset($_POST["btnDangKy"])) {
    $TenTV = $_POST["TenTV"];
    $SoDTTV = $_POST["SoDTTV"];
    $EmailTV = strtolower(trim($_POST["EmailTV"]));
    $DiaChiTV = $_POST["DiaChiTV"];
    $GioiTinh = $_POST["GioiTinh"];
    $MatKhauTV = $_POST["MatKhauTV"];

    $ds = $obj->kiemtraEmailTonTai($EmailTV);
    if (mysqli_num_rows($ds) > 0) {
        echo "Email đã tồn tại!";
    } else {
        $kq = $obj->dangkyThanhVien($TenTV, $SoDTTV, $EmailTV, $DiaChiTV, $GioiTinh, $MatKhauTV);
        if ($kq) {
            echo "<script>alert('Đăng ký thành công!'); window.location='index.php';</script>";
        } else {
            echo "Lỗi khi đăng ký!";
        }
    }
}
?>
