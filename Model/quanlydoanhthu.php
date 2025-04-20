<?php
include_once('connect.php');
class hoadontt extends connect_database
{
    public function danhsachhoadontt()
    {
        if (isset($_POST["subngay"])) {
            // Lấy dữ liệu từ form
            $TuNgay = $_POST["tungay"];
            $DenNgay = $_POST["denngay"];
            $sql =" SELECT * from khtapthu where Thoigianlienlac='Đã thanh toán' AND ngaylap BETWEEN '" . $TuNgay . "' AND '" . $DenNgay . "'";
        } else {
            $sql =" SELECT * from khtapthu where Thoigianlienlac='Đã thanh toán'";
        }
        return $this->xuatdulieu($sql);
    }
}
