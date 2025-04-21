<?php
session_start();
if (!$_SESSION["dangnhapKH"])
    header("Location:dangky.php");
include("header.php");
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
                            <h2>Sản phẩm</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Block 1 -->
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="row w-100">
                            <div class="col-lg-4">
                                <img src="../User/assets/img_TruongAn/sanpham/bulong1.webp" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-8">
                                <ul class="text-white" style="font-size: 30px;">
                                    <li class="d-flex justify-content-between align-items-center" style="gap:10px">
                                        <div class="label-text fw-normal">Tên sản phẩm:</div>
                                        <div class="label-title text-space fw-bold">Bu long xịn</div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center" style="gap:10px">
                                        <div class="label-text fw-normal">Giá:</div>
                                        <div  class="label-title text-space" >11,880,000 VNĐ</div>
                                    </li>

                                    <li>
                                        <div class="header-btns d-none d-lg-block ">
                                            <a href="dkytapthu.php?tensp=Bu%20long%20xin&gia=11880000" class="btn">Đặt hàng</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            
                    <!-- Block 2 -->
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="row w-100">
                            <div class="col-lg-4">
                                <img src="../User/assets/img_TruongAn/sanpham/bulong2.webp" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-8">
                                <ul class="text-white" style="font-size: 30px;">
                                    <li class="d-flex justify-content-between align-items-center" style="gap:10px">
                                        <div class="label-text fw-normal">Tên sản phẩm:</div>
                                        <div class="label-title text-space fw-bold">Bulon ren lửng</div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center" style="gap:10px">
                                        <div class="label-text fw-normal">Giá:</div>
                                        <div class="label-title text-space">17,930,000 VNĐ</div>
                                    </li>
                    
                                    <li>
                                        <div class="header-btns d-none d-lg-block ">
                                            <a href="dkytapthu.php?tensp=Bulon%20ren%20lửng&gia=17930000" class="btn">Đặt hàng</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!-- Traning categories Start -->
        <section class="team-area fix section-padding30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-55">
                          
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Block 1 -->
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="row w-100">
                            <div class="col-lg-4">
                                <img src="../User/assets/img_TruongAn/sanpham/bulong3.webp" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-8">
                                <ul class="text-white" style="font-size: 30px;">
                                    <li class="d-flex justify-content-between align-items-center" style="gap:10px">
                                        <div class="label-text fw-normal">Tên sản phẩm:</div>
                                        <div class="label-title text-space fw-bold">Bulon Lục Giác</div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center" style="gap:10px">
                                        <div class="label-text fw-normal">Giá:</div>
                                        <div  class="label-title text-space" >10,880,000 VNĐ</div>
                                    </li>

                                    <li>
                                        <div class="header-btns d-none d-lg-block ">
                                            <a href="dkytapthu.php?tensp=Bulon%20Lục%20Giácn&gia=10880000" class="btn">Đặt hàng</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            
                    <!-- Block 2 -->
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="row w-100">
                            <div class="col-lg-4">
                                <img src="../User/assets/img_TruongAn/sanpham/luoithep1.jpeg" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-8">
                                <ul class="text-white" style="font-size: 30px;">
                                    <li class="d-flex justify-content-between align-items-center" style="gap:10px">
                                        <div class="label-text fw-normal">Tên sản phẩm:</div>
                                        <div class="label-title text-space fw-bold">Lưới thép B40</div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center" style="gap:10px">
                                        <div class="label-text fw-normal">Tổng chi phí:</div>
                                        <div class="label-title text-space">16,930,000 VNĐ</div>
                                    </li>
                    
                                    <li>
                                        <div class="header-btns d-none d-lg-block ">
                                            <a href="dkytapthu.php?tensp=Lưới%20thép%20B40&gia=16930000" class="btn">Đặt hàng</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="team-area fix section-padding30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-55">
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Block 1 -->
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="row w-100">
                            <div class="col-lg-4">
                                <img src="../User/assets/img/gallery/team1.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-8">
                                <ul class="text-white" style="font-size: 30px;">
                                    <li class="d-flex justify-content-between align-items-center" style="gap:10px">
                                        <div class="label-text fw-normal">Tên sản phẩm:</div>
                                        <div class="label-title text-space fw-bold">Bu long xịn</div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center" style="gap:10px">
                                        <div class="label-text fw-normal">Giá:</div>
                                        <div  class="label-title text-space" >11,880,000 VNĐ</div>
                                    </li>

                                    <li>
                                        <div class="header-btns d-none d-lg-block ">
                                            <a href="dkytapthu.php?tensp=Bu%20long%20xin&gia=11880000" class="btn">Đặt hàng</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            
                    <!-- Block 2 -->
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="row w-100">
                            <div class="col-lg-4">
                                <img src="../User/assets/img/gallery/team2.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-8">
                                <ul class="text-white" style="font-size: 30px;">
                                    <li class="d-flex justify-content-between align-items-center" style="gap:10px">
                                        <div class="label-text fw-normal">Tên sản phẩm:</div>
                                        <div class="label-title text-space fw-bold">Ốc vít siêu đẹp</div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center" style="gap:10px">
                                        <div class="label-text fw-normal">Tổng chi phí:</div>
                                        <div class="label-title text-space" for="gia" name="gia" value="17,930,000 VNĐ">17,930,000 VNĐ</div>
                                    </li>
                    
                                    <li>
                                        <div class="header-btns d-none d-lg-block ">
                                            <a href="dkytapthu.php" class="btn">Đặt hàng</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
 <?php
include("footer.php");

 ?>
</body>

</html>