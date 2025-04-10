<?php include 'controller.php' ?>
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
	<title>Review</title>
	<link rel="icon" href="img/title_ico.ico">

	<?php
	include 'link.php'
		?>

	<style>
		.bg-choose-3 {
			background-image: url('img/fun-bg.jpg');
			/* Replace with your image path */
			background-size: small;
			/* Ensures the image covers the entire area */
			background-position: top;
			/* Centers the image */
			background-attachment: local;
			/* Keeps the image fixed during scrolling (optional) */
			background-repeat: repeat;
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
	<header class="header">
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
						<h2>Your Reviews are important to us</h2>
						<ul class="bread-list">
							<li><a href="index.php">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Review</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Single News -->
	<section class="news-single section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-12">
					<div class="row">
						<div class="col-12">

						</div>

						<div class="col-12">
							<div class="comments-form bg-choose-3">
								<h2>Leave Comments</h2>
								<!-- Contact Form -->
								<form action="review_submit.php" class="form" method="post" enctype=multipart/form-data>
									<div class="row">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="form-group">
												<i class="fa fa-user"></i>
												<input type="text" name="firstname" id="firstname"
													placeholder="First name" required="required">
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-12">
											<div class="form-group">
												<i class="fa fa-envelope"></i>
												<input type="text" name="lastname" id="lastname" placeholder="Last name"
													required="required">
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-12">
											<div class="form-group">
												<i class="fa fa-star"></i>
												<select name="rating" id="rating" required="required" placeholder="Select Rating">
													<option value="">Select Rating</option>
													<option value="1">⭐</option>
													<option value="2">⭐⭐</option>
													<option value="3">⭐⭐⭐</option>
													<option value="4">⭐⭐⭐⭐</option>
													<option value="5">⭐⭐⭐⭐⭐</option>
												</select>
											</div>
										</div>

										<div class="col-12">
											<div class="form-group message">
												<i class="fa fa-pencil"></i>
												<textarea name="message" id="message" rows="7"
													placeholder="Type Your Message Here"></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn primary"><i
														class="fa fa-send"></i>Submit Comment</button>
											</div>
										</div>
									</div>
								</form>
								<!--/ End Contact Form -->
							</div>

							<div class="col-12">
								<div class="blog-comments">
									<h2>All Comments</h2>
									<div class="comments-body">
										<!-- Single Comments -->
										<?php

										$getImg = mysqli_query($conn, "SELECT * FROM `review` WHERE `stat`='1'");
										while ($rowImg = mysqli_fetch_array($getImg)) {
											$sl = $rowImg['sl'];
											$firstname = $rowImg['firstname'];
											$lastname = $rowImg['lastname'];
											$message = $rowImg['message'];
											$date = $rowImg['date'];


											?>
											<div class="single-comments">
												<div class="main">
													<div class="head">
														<img src="img/author1.png" alt="#" />
													</div>
													<div class="body">
														<h4><?php echo $firstname . " " . $lastname; ?></h4>
														<div class="comment-meta"><span class="meta"><i
																	class="fa fa-calendar"></i><?php echo $date; ?></span>
														</div>
														<p>
															<?php
															for ($i = 0; $i < $rowImg['rating']; $i++) {
																echo "⭐";
															}
															?>
														</p>
														<p><?php echo $message; ?></p>

													</div>
												</div>
											<?php } ?>

										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Single News -->

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