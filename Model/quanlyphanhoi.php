<?php
include_once('connect.php');
class phanhoi extends connect_database{
    public function danhsachphanhoi($maph='')
    {
        if($maph)
            $sql="SELECT * from phanhoi where MaPH='$maph'";
        else
            $sql="SELECT * from phanhoi where TrangThaiPH='Chờ Duyệt'";
        return $this->xuatdulieu($sql);
    }
    public function xoaphanhoi($maph)
    {
        $sql="delete from phanhoi where MaPH=$maph";
        return $this->tuychinh($sql);
    }
    public function duyetphanhoi($sql)
    {
        return $this->tuychinh($sql);
    }
}

?>