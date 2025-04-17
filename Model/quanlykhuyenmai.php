<?php
include_once('connect.php');
class khuyenmai extends connect_database{
    public function danhsachkhuyenmai($MaKM='')
    {
        if($MaKM)
            $sql="SELECT * from khuyenmai where MaKM='$MaKM'";
        else
            $sql="SELECT * from khuyenmai";
        return $this->xuatdulieu($sql);
    }
    public function xoakhuyenmai($MaKM)
    {
        $sql="delete from khuyenmai where MaKM=$MaKM";
        return $this->tuychinh($sql);
    }
    public function themkhuyenmai($sql): int
    {
        return $this->tuychinh($sql);
    }
    public function suakhuyenmai($sql)
    {
        return $this->tuychinh($sql);
    }
}

?>