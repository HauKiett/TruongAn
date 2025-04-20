<?php
include_once('connect.php');
class hoadondd extends connect_database{
    public function danhsachhoadondd($id='')
    {
        if($id)
            $sql="SELECT * from khtapthu where id='$id'";
        else
            $sql="SELECT * from khtapthu where Thoigianlienlac='Đã thanh toán'";
        return $this->xuatdulieu($sql);
    }
}

?>