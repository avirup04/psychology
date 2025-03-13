<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>Contact Us</title>
		
		<?php 
        include 'link.php'
        ?>

		<style>
			.bg-choose {
			background-image: url('img/1.jpg');
			/* Replace with your image path */
			background-size: cover;
			/* Ensures the image covers the entire area */
			background-position: center;
			/* Centers the image */
			background-attachment: scroll;
			/* Keeps the image fixed during scrolling (optional) */
			background-repeat: no-repeat;
			/* Avoids repetition of the image */
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
		<header class="header" >
			<!-- Topbar -->
			<!-- End Topbar -->
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
		<!-- End Header Area -->
	
		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Contact Us</h2>
							<ul class="bread-list">
								<li><a href="index.php">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Contact Us</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container">
				<div class="inner bg-choose">
					<div class="row"> 
						<div class="col-lg-6">
							<div class="contact-us-left">
								<!--Start Google-map -->
								<div id="myMap"></div>
								<!--/End Google-map -->
							</div>
						</div>
						<div class="col-lg-6">
							<div class="contact-us-form">
								<h2>Contact With Us</h2>
								<p>If you have any questions please fell free to contact with us.</p>
								<!-- Form -->
								<form class="form" method="post" action="mail/mail.php">
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="name" placeholder="Name" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="email" name="email" placeholder="Email" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="phone" placeholder="Phone" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="subject" placeholder="Subject" required="">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="message" placeholder="Your Message" required=""></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group login-btn">
												<button class="btn" type="submit">Send</button>
											</div>
										</div>
									</div>
								</form>
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
				<div class="contact-info">
					<div class="row">
						<!-- single-info -->
						<div class="col-lg-6 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3>+91 91638 99690</h3>
									<p>dipapsycholosy.24@gmail.com</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-6 col-12 ">
							<div class="single-info">
								<i class="icofont-google-map"></i>
								<div class="content">
									<h3>Dipa Sen</h3>
									<p>Bangalaxmi Abasan, Rajarhat Main road,
									Near Chinar Park, 700136</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<!--/End single-info -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact Us -->
		
		<!-- Footer Area -->
		<?php 
		include 'footer.php'
		?>
		<!--/ End Footer Area -->
		
		<?php 
		include 'script.php'
		?>
    </body>
</html>