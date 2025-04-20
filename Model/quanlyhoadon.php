<?php
include_once('connect.php');
class hoadon extends connect_database{
    public function danhsachhoadon($id='')
    {
        if($id)
            $sql="SELECT * from khtapthu where id='$id'";
        else
            $sql="SELECT * from khtapthu where Thoigianlienlac='Chưa thanh toán'";
        return $this->xuatdulieu($sql);
    }
    public function xoahoadon($id)
    {
        $sql="delete from khtapthu where id=$id";
        return $this->tuychinh($sql);
    }
    public function duyethoadon($sql)
    {
        return $this->tuychinh($sql);
    }
}

?>