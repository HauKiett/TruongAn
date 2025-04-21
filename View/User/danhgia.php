<?php
include_once('../../Model/xuatdulieu.php');
session_start();
    include("header1.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
            </div>
        </div>
        <!-- Hero End -->
        <!--? Gallery Area Start -->
        <div class="gallery-area">
        <?php
                
					$obj = new database();
					$danhgia = $obj->danhsachdanhgia();

					// xử lý
					// thêm
					
                  ?>
        <div class="comments-area">
                            <h2 >ĐÁNH GIÁ TỪ KHÁCH HÀNG</h2>
                            <div class="comment-list">
                            <?php foreach ($danhgia as $item): ?>
                                <div class="single-comment justify-content-between d-flex mt-40">
                                
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="assets/img/comment/comment_1.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <p class="comment text-blue">
                                            <?= $item["NoiDung"] ?>
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center ">
                                                    <h5>
                                                        <a href="#" class="text-danger"><?= $item["TenTV"] ?></a>
                                                    </h5>
                                                    <p class="date text-blue"><?= $item["Date"] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <?php endforeach; ?>    
                            </div>
                        </div>
        </div>

    </main>
<?php
include("footer.php");
?>

</body>

</html>