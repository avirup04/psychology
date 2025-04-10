

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
			<title>Services Overview</title>
			<link rel="icon" href="img/title_ico.ico">

			<?php
			include 'link.php'
				?>

			<style>
				.bg-choose-3 {
					background-image: url('img/2.jpg');
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
								<h2>Services Overview</h2>
								<ul class="bread-list">
									<li><a href="index.php">Home</a></li>
									<li><i class="icofont-simple-right"></i></li>
									<li class="active">Services Overview</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Breadcrumbs -->

			<!-- Start Contact Us -->
			<!-- Start Contact Us -->
			<section class="pricing-table section">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title">
								<h2>In therapy I see myself in the mirror differently</h2>
								<img src="img/section-img.png" alt="#">
								<p>I will encourage you to open up and engage in self reflection through my counselling
									sessions, leaving the stigma associated with various mental health issues behind.</p>
							</div>
						</div>
					</div>
					<!-- Adjust layout for image and card side by side -->
					<section class="blog section bg-choose-3" id="blog">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<div class="section-title">
										<h2>Services Overview</h2>
										<img src="img/section-img.png" alt="#">
										<p>“In therapy I see myself in the mirror differently” - Ricky Williams -
										</p>
									</div>
								</div>
							</div>
							<div class="row">
    <?php
    include 'config.php';
    $sql = "SELECT * FROM blog_posts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
        <div class="col-lg-4 col-md-6 col-12"> <!-- 3 cards per row -->
            <div class="single-news">
                <div class="news-head">
                    <img src="<?php echo $row['image_url']; ?>" alt="#">
                </div>
                <div class="news-body">
                    <div class="news-content">
                        <h2><a href="blog-single.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h2>
                        <p class="text"><?php echo $row['short_content']; ?>...<a href="services_single.php?id=<?php echo $row['id']; ?>" class="btn btn-link">Read More</a></p>
                        
                    </div>
                </div>
            </div>
        </div>
    <?php
        } // Ends while loop
    } else {
        echo "<p>No posts found.</p>";
    }
    ?>
</div> <!-- Closing row div -->


				</div>
			</section>
	</section>
	<!--/ End Contact Us -->

	<!--/ End Contact Us -->

	<!-- Footer Area -->
	<?php
	include 'footer.php'
		?>

	<?php
	include 'script.php'
		?>
</body>

</html>