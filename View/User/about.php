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
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70">
                                <h2>About Me</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Team -->
        <section class="team-area pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/team1.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Body Building</a></h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/team2.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Muscle Gain</a></h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/team3.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Weight Loss</a></h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? About Area-2 Start -->
        <section class="about-area2 fix pb-padding pt-50 pb-80">
            <div class="support-wrapper align-items-center">
                <div class="right-content2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <!-- img -->
                    <div class="right-img">
                        <img src="assets/img/gallery/about.png" alt="">
                    </div>
                </div>
                <div class="left-content2">
                    <!-- section tittle -->
                    <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="front-text">
                            <h2 class="">About Me</h2>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task and the language needed for a successful answer. You’ll examine Task Two questions and learn how to plan, write and check academic essays.</p>
                            <p class="mb-40">Task One, how to approach the task and the language needed for a successful answer. You’ll examine Task Two questions and learn how to plan, write and check academic essays.</p>
                            <a href="courses.html" class="border-btn">My Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? Blog Area Start -->
        <section class="home-blog-area pt-10 pb-50">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-100 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                            <h2>From Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/blog1.png" alt="">
                                </div>
                                <div class="blog-cap">
                                    <span>Gym & Fitness</span>
                                    <h3><a href="blog_details.html">Your Antibiotic One Day To 10 Day Options</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/blog2.png" alt="">
                                </div>
                                <div class="blog-cap">
                                    <span>Gym & Fitness</span>
                                    <h3><a href="blog_details.html">Your Antibiotic One Day To 10 Day Options</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
        <!--? video_start -->
        <div class="video-area section-bg2 d-flex align-items-center" data-background="assets/img/gallery/video-bg.png">
            <div class="container">
                <div class="video-wrap position-relative">
                    <div class="video-icon">
                        <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i class="fas fa-play"></i></a>
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