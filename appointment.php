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
	<title>Appointment</title>

	<?php
	include 'link.php'
		?>

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


		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Your Reviews are important to us</h2>
							<ul class="bread-list">
								<li><a href="index.php">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Book Consultation</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Feel free to book an appointment</h2>
							<img src="img/section-img.png" alt="#">
							<p>Book an appointment with the following information given below. You will be contacted
								soon!</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
						<form class="form">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input required id="name" name="name" type="text" placeholder="Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input required id="email" name="email" type="email" placeholder="Email">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input required id="phone" name="phone" type="text" placeholder="Phone">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input required type="text" placeholder="Date" id="datepicker">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">

								</div>
								<div class="col-lg-6 col-md-6 col-12">

								</div>
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea required id="msg" name="message"
											placeholder="Write Your Message Here....."></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="button" id="book_app" class="btn">Book An Appointment</button>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-8 col-12">
									<p>( You will be confirm by an Text Message )</p>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img id="contactimg" src="img/contact-img.png" alt="#">
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
		include 'footer.php'
			?>

		<!--/ End Footer Area -->


		<?php
		include 'script.php'
			?>

</body>
<script>
	const SelectElem = x => document.querySelector(x);

	const name = SelectElem("#name")
	const email = SelectElem("#email")
	const phone = SelectElem("#phone")
	const datepicker = SelectElem("#datepicker")
	const msg = SelectElem("#msg")

	SelectElem('#book_app').onclick = () => {
		const SIR_PH_NO = "9830527645"
		if (name.value == "" && email.value == "" && phone.value == "" && datepicker.value == "" && msg.value == "") {
			alert("Error")
		} else {
			const whatsappMessage = `Name: ${encodeURIComponent(name.value)}\nEmail: ${encodeURIComponent(email.value)}\nPhone: ${encodeURIComponent(phone.value)}\nDate: ${encodeURIComponent(datepicker.value)}\nMessage: ${encodeURIComponent(msg.value)}`;

			// Create the WhatsApp URL
			const whatsappURL = `https://api.whatsapp.com/send?phone=91${SIR_PH_NO}&text=${encodeURIComponent(whatsappMessage)}`;

			// Redirect the user to WhatsApp with the pre-filled message
			window.location.href = whatsappURL;
		}
	}
</script>

</html>