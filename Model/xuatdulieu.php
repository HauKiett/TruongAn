<?php
include_once('connect.php');
class database  extends connect_database{
  


    public function danhsachthanhvien()
    {
            $sql="SELECT * from thanhvien ";
        return $this->xuatdulieu($sql);
    }
    public function danhsachdanhgia()
    {
            $sql="SELECT 
            phanhoi.*, thanhvien.* from phanhoi JOIN thanhvien ON phanhoi.MaTV = thanhvien.MaTV where TrangThaiPH='Đã duyệt' ";
        return $this->xuatdulieu($sql);
    }
    public function danhsachtheodoi()
    {
        $sql = "SELECT theodoitapluyen.*, thanhvien.* 
        FROM theodoitapluyen 
        JOIN thanhvien ON theodoitapluyen.MaTV = thanhvien.MaTV";
        return $this->xuatdulieu($sql);
    }
    public function danhsachtaikhoan($sql = null)
    {
        if ($sql === null) {
            $sql = "SELECT * FROM taikhoan";
        }
        return $this->xuatdulieu($sql);
    }
    public function danhsachtaikhoanKH($sql = null)
    {
        if ($sql === null) {
            $sql = "SELECT * FROM thanhvien";
        }
        return $this->xuatdulieu($sql);
    }

    public function xuat1thanhvien(int $maTV)
{
    $sql = "SELECT * FROM thanhvien WHERE MaTV = $maTV";
    return $this->xuatdulieu($sql);
}

    public function xoadulieu($sql)
    {
        $link=$this->connect();
        if($link->query($sql))
            return 1;
        else
            return 0;
    }
 
    public function suadulieu($sql)
    {
        $link=$this->connect();
        if($link->query($sql))
            return 1;
        else
            return 0;
    }
    public function xoathanhvien($MaTV)
    {
        $sql="delete from thanhvien where MaTV='$MaTV'";
        return $this->xoadulieu($sql);
    }
    public function themsanpham($sql)
    {
        return $this->themdulieu($sql);
    }
    public function themdulieu($sql)
    {
        $link=$this->connect();
        if($link->query($sql))
            return 1;
        else
            return 0;
    }
    public function suathanhvien($sql)
    {
        return $this->suadulieu($sql);
    }
}















?>