<?php
class quanlydangky {
    function ketnoi() {
        $conn = mysqli_connect("localhost", "root", "", "truongan");
        mysqli_set_charset($conn, "utf8");
        return $conn;
    }

    function kiemtraEmailTonTai($email) {
        $conn = $this->ketnoi();
        $sql = "SELECT * FROM thanhvien WHERE EmailTV = '$email'";
        return mysqli_query($conn, $sql);
    }

    function dangkyThanhVien($TenTV, $SoDTTV, $EmailTV, $DiaChiTV, $GioiTinh, $MatKhauTV) {
        $conn = $this->ketnoi();
        $sql = "INSERT INTO thanhvien (TenTV, SoDTTV, EmailTV, DiaChiTV, GioiTinh, MatKhauTV)
                VALUES ('$TenTV', '$SoDTTV', '$EmailTV', '$DiaChiTV', '$GioiTinh', '$MatKhauTV')";
        return mysqli_query($conn, $sql);
    }
}
?>
