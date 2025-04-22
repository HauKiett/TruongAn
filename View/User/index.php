<?php
    session_start();
    include("header1.php");
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
        <!--? slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-10">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay="0.1s" style="color:rgb(83, 191, 241)">Trường An</span> <br>
                                    <a href="device.php" class="border-btn hero-btn" data-animation="fadeInLeft"
                                        data-delay="0.8s">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Traning categories Start -->
        
        </section>
        <!-- Services End -->
        <!--? Gallery Area Start -->
        <div class="gallery-area section-padding30 ">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img"
                                style="background-image: url(assets/img/gallery/giacong2.webp);"></div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <h3>Gia công tinh xảo </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img"
                                style="background-image: url(assets/img/gallery/giacong3.jpg);"></div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <h3>Xưởng rộng thoáng mát </h3>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img"
                                style="background-image: url(assets/img/gallery/giacong4.webp);"></div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <h3>Gia công chíng xác </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img"
                                style="background-image: url(assets/img/gallery/Giaocong1.webp);"></div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <h3>Máy móc hiện đại </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img"
                                style="background-image: url(assets/img/gallery/giacong5.png);"></div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <h3>Phát triển toàn cầu </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img"
                                style="background-image: url(assets/img/gallery/giacong6.png);"></div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <h3>Sử dụng kim loại tấm</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
        <div class="video-area section-bg2 d-flex align-items-center" data-background="assets/img/gallery/anhvideo.png">
            <div class="container">
                <div class="video-wrap position-relative">
                    <div class="video-icon">
                        <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=trdwZxcR3Mg"><i
                                class="fas fa-play"></i></a>
                    </div>

                </div>
            </div>
        </div>

    </main>

    <?php
    include("footer.php");
    ?>

</body>

</html>