<?php
error_reporting(1);
include_once("../../Model/connect.php");
include("header.php");
$obj = new connect_database();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <main>
        <!--? Hero Start -->
      
        <!--? Team -->
        <section class="team-area fix section-padding30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-55">
                            <br>
                            <h2 >Sản phẩm</h2>
                        </div>
                    </div>
                </div>
                
                    <!-- Block 1 -->
                    <?php
                    $idloaisp = $_REQUEST['idloaisp'];
                    if($idloaisp)
                    $sql="select * from thietbi where idloaisp='$idloaisp'";
                    else
                    $sql="select * from thietbi";
                    $sanpham=$obj->xuatdulieu($sql);
                    
                    if($sanpham)
                    {
                        for($i=0;$i<count($sanpham);$i++) // hien tat ca du lieu ra
                        {
                            echo '<div class="row">
                            <div class="col-lg-6 d-flex align-items-center">
                            <div class="row w-100">
                                <div class="col-lg-4" >
                                    <div class="img-fluid"><img src="../Admin/assets/img/device/'.$sanpham[$i]["Hinhanh"].'" /></div>
                                </div>
                                <div class="col-lg-8">
                                <ul class="text-blue" style="font-size: 30px;">
                                    <li class="d-flex justify-content-between align-items-center" style="gap:10px" >
                                        <div class="label-text fw-normal" ><a href="chitietsanpham.php?MaTB='.$sanpham[$i]["MaTB"].'">Tên sản phẩm:</a></div>
                                        <div class="label-title text-space fw-bold"><a href="chitietsanpham.php?MaTB='.$sanpham[$i]["MaTB"].'">'.$sanpham[$i]["TenTB"].'</a></div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center" style="gap:10px">
                                        <div class="label-title text-space fw-bold" >Giá:</div>
                                        <div class="label-title text-space" >'.number_format($sanpham[$i]["gia"]).'</div>
                                    </li>
                                    <li>
                                    <div class="header-btns d-none d-lg-block ">
                                        <a href="dkytapthu.php?tensp='.urlencode($sanpham[$i]["TenTB"]).'&gia='.$sanpham[$i]["gia"].'" class="btn">Đặt hàng</a>
                                    </div>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                <section class="team-area fix section-padding30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        
                    </div>
                </div>
                ';                             
                        }
                    }
                    else
                        echo "Hiện tại không có sản phẩm nào";
                    ?>
                    
        </section>
        
    </main>
 <?php
include("footer.php");
 ?>
</body>

</html>