<?php
include_once('connect.php');

class hoadon extends connect_database
{
    public function danhsachhoadon()
    {
        if (isset($_POST["subngay"])) {
            // Lấy dữ liệu từ form
            $TuNgay = $_POST["tungay"];
            $DenNgay = $_POST["denngay"];
            $sql = "SELECT MaHD,NgayLap,TrangThaiTT,TenTV,g.TenGoi,g.GiaGoi,g.ThoiHanGoi,MaKM,ThanhTien FROM 
            hoadon h inner join goitap g  ON g.MaGoi=h.MaGoi
            WHERE TrangThaiTT='Đã Thanh Toán' AND NgayLap BETWEEN '" . $TuNgay . "' AND '" . $DenNgay . "'";
        } else {
            $sql = "SELECT MaHD,NgayLap,TrangThaiTT,TenTV,g.TenGoi,g.GiaGoi,g.ThoiHanGoi,MaKM,ThanhTien from 
            hoadon h inner join goitap g  on g.MaGoi=h.MaGoi
            WHERE TrangThaiTT='Đã Thanh Toán'";
        }
        return $this->xuatdulieu($sql);
    }
}
