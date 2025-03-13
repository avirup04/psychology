<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial</title>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dipa Sen</title>

    <?php 
        include 'link.php';
    ?>

<style>
    .testimonial-section {
        padding: 50px 0;
        background-color: #f9f9f9;
    }

    .testimonial-box {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        text-align: center;
    }

    .testimonial-box img {
        width: 100%;
        height: auto;
        max-height: 600px;
        object-fit: cover;
        border-radius: 8px;
    }

    .testimonial-box h5 {
        margin-top: 15px;
        font-weight: bold;
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 30px;
        height: 30px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        width: 20px;
        height: 20px;
        background-size: 100% 100%;
    }
</style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header Area -->
    <header class="header">
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
                            </div>
                            <!-- End Logo -->
                        </div>

                        <div class="col-lg-8 col-md-6 col-12">
                            <?php include 'nav.php'; ?>
                        </div>

                        <div class="col-lg-2 col-md-3 col-12">
                            <div class="get-quote">
                                <a href="appointment.php" class="btn">Book Consultation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>

    		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Those who were truly satisfied</h2>
							<ul class="bread-list">
								<li><a href="index.php">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Testimonial</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
    <div class="container">
        <h2 class="text-center">Client Testimonials</h2>
        <br>
        <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#testimonialCarousel" data-slide-to="1"></li>
                <li data-target="#testimonialCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Carousel Items -->
            <div class="carousel-inner">
                <!-- First Slide -->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="testimonial-box">
                                <img src="img/test1.jpg" alt="Client 1" class="img-fluid" width="200" height="200">
                                <p>"The service provided was excellent and beyond expectations."</p>
                                <h5>- Client 1</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-box">
                                <img src="img/test2.jpg" alt="Client 2" class="img-fluid">
                                <p>"Highly professional and knowledgeable. I am very satisfied!"</p>
                                <h5>- Client 2</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-box">
                                <img src="img/test3.jpg" alt="Client 3" class="img-fluid">
                                <p>"Great experience, would highly recommend!"</p>
                                <h5>- Client 3</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Slide -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="testimonial-box">
                                <img src="img/test4.jpg" alt="Client 4" class="img-fluid">
                                <p>"Outstanding support and results!"</p>
                                <h5>- Client 4</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-box">
                                <img src="img/test5.jpg" alt="Client 5" class="img-fluid">
                                <p>"They exceeded all my expectations!"</p>
                                <h5>- Client 5</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-box">
                                <img src="img/test6.jpg" alt="Client 6" class="img-fluid">
                                <p>"Truly exceptional service!"</p>
                                <h5>- Client 6</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Third Slide -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="testimonial-box">
                                <img src="img/test13.jpg" alt="Client 7" class="img-fluid">
                                <p>"Reliable and effective team!"</p>
                                <h5>- Client 7</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-box">
                                <img src="img/test10.jpg" alt="Client 8" class="img-fluid">
                                <p>"Absolutely fantastic experience!"</p>
                                <h5>- Client 8</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-box">
                                <img src="img/test12.jpg" alt="Client 7" class="img-fluid">
                                <p>"Reliable and effective team!"</p>
                                <h5>- Client 7</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left and Right Controls -->
            <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>


    <!-- Footer -->
    <?php 
        include 'footer.php';
    ?>

    <?php 
        include 'script.php';
    ?>

    <style>
        .testimonial-section {
            padding: 50px 0;
            background-color: #f9f9f9;
        }

        .testimonial-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            text-align: center;
        }

        .testimonial-box h5 {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
    <script>
    $(document).ready(function () {
        $('#testimonialCarousel').carousel({
            interval: 2000 // Change this value to set the speed (e.g., 2000ms = 2 seconds)
        });
    });
</script>

</body>

</html>
