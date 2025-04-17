<?php
include_once('connect.php');
class goitap extends connect_database{
    public function danhsachgoitap($magoi='')
    {
        if($magoi)
            $sql="SELECT * from goitap where magoi='$magoi'";
        else
            $sql="SELECT * from goitap";
        return $this->xuatdulieu($sql);
    }
    
    public function xoagoitap($magoi)
    {
        $sql="delete from goitap where magoi=$magoi";
        return $this->tuychinh($sql);
    }
    
    public function themgoitap($sql)
    {
        return $this->tuychinh($sql);
    }
    public function suagoitap($sql)
    {
        return $this->tuychinh($sql);
    }
}

?>