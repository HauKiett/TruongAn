<?php
class connect_database
{
    public function connect()
    {
        $conn= new mysqli("localhost","root","","truongan");
        if($conn->connect_errno)
        {
            echo"<script>Alert('Ket noi khong thanh cong')</script>";
            exit();
        }
        else
        return $conn;
    }
    public function truyvan($sql) {
        $link = $this->connect();
        $arr = array();
        $result = $link->query($sql);
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $arr[] = $row;
            }
            return $arr;
        }
        return [];
    }

    public function thuchien($sql) {
        $link = $this->connect();
        return $link->query($sql);
    }
    public function dangnhaptaikhoan($username, $password)
    {
        //$password=md5($password);
        $sql = "SELECT * FROM taikhoan WHERE Username = '$username' AND Password = '$password'";
        $link = $this->connect();
        $result = $link->query($sql);
        if ($result->num_rows) {
            $row = $result->fetch_assoc();
            return $row;
        } else
            return 0;
    }
    public function dangnhaptaikhoanNV($username, $password)
    {
        //$password=md5($password);
        $sql = "SELECT * FROM taikhoannv WHERE UsernameNV = '$username' AND PasswordNV = '$password'";
        $link = $this->connect();
        $result = $link->query($sql);
        if ($result->num_rows) {
            $row = $result->fetch_assoc();
            return $row;
        } else
            return 0;
    }
    public function dangnhaptaikhoanKH($username, $password)
    {
        //$password=md5($password);
        $sql = "SELECT * FROM thanhvien WHERE EmailTV = '$username' AND MatKhauTV = '$password'";
        $link = $this->connect();
        $result = $link->query($sql);
        if ($result->num_rows) {
            $row = $result->fetch_assoc();
            return $row;
        } else
            return 0;
    }
    public function xuatdulieu($sql)
    {
        $arr=array();
        $link=$this->connect();
        $result=$link->query($sql);
        if($result->num_rows)
        {
            while($row=$result->fetch_assoc())
            $arr[]=$row;
            return $arr;
        }
        else
        return 0;
    }
    public function tuychinh($sql)
    {
        $link=$this->connect();     
        if($link->query($sql))
            return 1;
        else
            return 0;
    }
      // Thêm phương thức để lấy insert_id
      public function getLastInsertId()
      {
          $link = $this->connect();
          return $link->insert_id;
      }
     
}
?>