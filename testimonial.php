<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial</title>

    <meta name="keywords" content="Client testimonials, feedback">
    <meta name="description" content="Read what our satisfied clients have to say.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="img/title_ico.ico">

    <?php include 'link.php'; ?>

    <style>
       .testimonial-section {
    padding: 50px 0;
    background-color: #f9f9f9;
}

.testimonial-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    justify-content: center;
    text-align: center;
}

.testimonial-card {
    background: white;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: transform 0.3s;
}

.testimonial-card:hover {
    transform: scale(1.05);
}

.testimonial-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
}

.testimonial-card h5 {
    margin: 10px 0 5px;
    font-size: 18px;
    font-weight: bold;
}

.testimonial-card p {
    font-size: 14px;
    color: #555;
}

/* Lightbox Popup */
.lightbox {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.lightbox img {
    max-width: 90%;
    max-height: 90%;
    border-radius: 10px;
}

    </style>
</head>

<body>

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
    <!-- Header -->
    <header class="header">
        <?php include 'nav.php'; ?>
    </header>

    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Happy Clients</h2>
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

    <!-- Testimonial Section -->
    <section class="testimonial-section">
    <div class="container">
        <h2 class="text-center mb-4">What Our Clients Say</h2>
        <div class="testimonial-container">
            <!-- Testimonial Cards -->
            <div class="testimonial-card" onclick="openLightbox('img/testimonials/1.jpg')">
                <img src="img/testimonials/1.jpg" alt="Client 1">
                <h5>Client 1 (i)</h5>
                <p>"The service was top-notch and exceeded my expectations."</p>
            </div>
            <div class="testimonial-card" onclick="openLightbox('img/testimonials/2.jpg')">
                <img src="img/testimonials/2.jpg" alt="Client 2">
                <h5>Client 1 (ii)</h5>
                <p>"Highly professional and knowledgeable. Totally recommend!"</p>
            </div>
            <div class="testimonial-card" onclick="openLightbox('img/testimonials/3.jpg')">
                <img src="img/testimonials/3.jpg" alt="Client 3">
                <h5>Client 2 (i)</h5>
                <p>"Absolutely fantastic experience. Will return for sure!"</p>
            </div>
            <div class="testimonial-card" onclick="openLightbox('img/testimonials/4.jpg')">
                <img src="img/testimonials/4.jpg" alt="Client 4">
                <h5>Client 2 (ii)</h5>
                <p>"Outstanding customer service. Highly satisfied!"</p>
            </div>
            <div class="testimonial-card" onclick="openLightbox('img/testimonials/5.jpg')">
                <img src="img/testimonials/5.jpg" alt="Client 5">
                <h5>Client 3</h5>
                <p>"The team exceeded all my expectations!"</p>
            </div>
            <div class="testimonial-card" onclick="openLightbox('img/testimonials/6.jpg')">
                <img src="img/testimonials/6.jpg" alt="Client 6">
                <h5>Client 4 (i)</h5>
                <p>"Truly exceptional service!"</p>
            </div>
            <div class="testimonial-card" onclick="openLightbox('img/testimonials/7.jpg')">
                <img src="img/testimonials/7.jpg" alt="Client 7">
                <h5>Client 4 (ii)</h5>
                <p>"Reliable and efficient. Will definitely recommend!"</p>
            </div>
            <div class="testimonial-card" onclick="openLightbox('img/testimonials/8.jpg')">
                <img src="img/testimonials/8.jpg" alt="Client 8">
                <h5>Client 5 (i)</h5>
                <p>"Amazing service and great support!"</p>
            </div>
            <div class="testimonial-card" onclick="openLightbox('img/testimonials/9.jpg')">
                <img src="img/testimonials/9.jpg" alt="Client 9">
                <h5>Client 5 (ii)</h5>
                <p>"A truly professional and seamless experience!"</p>
            </div>
            <div class="testimonial-card" onclick="openLightbox('img/testimonials/10.jpg')">
                <img src="img/testimonials/10.jpg" alt="Client 10">
                <h5>Client 6</h5>
                <p>"Best service I've ever received. Will return for sure!"</p>
            </div>
            <div class="testimonial-card" onclick="openLightbox('img/testimonials/11.jpg')">
                <img src="img/testimonials/11.jpg" alt="Client 11">
                <h5>Client 7</h5>
                <p>"Efficient, professional, and friendly!"</p>
            </div>
            <div class="testimonial-card" onclick="openLightbox('img/testimonials/12.jpg')">
                <img src="img/testimonials/12.jpg" alt="Client 12">
                <h5>Client 8 (i)</h5>
                <p>"Great communication and results!"</p>
            </div>
            <div class="testimonial-card" onclick="openLightbox('img/testimonials/13.jpg')">
                <img src="img/testimonials/13.jpg" alt="Client 13">
                <h5>Client 8 (ii)</h5>
                <p>"Superb quality and attention to detail!"</p>
            </div>
            <div class="testimonial-card" onclick="openLightbox('img/testimonials/14.jpg')">
                <img src="img/testimonials/14.jpg" alt="Client 14">
                <h5>Client 9</h5>
                <p>"Fantastic experience from start to finish!"</p>
            </div>
        </div>
    </div>

    <!-- Lightbox for Image Popup -->
    <div id="lightbox" class="lightbox" onclick="closeLightbox()">
        <img id="lightbox-img" src="" alt="Full Image">
    </div>
</section>

<script>
function openLightbox(imageSrc) {
    document.getElementById("lightbox-img").src = imageSrc;
    document.getElementById("lightbox").style.display = "flex";
}

function closeLightbox() {
    document.getElementById("lightbox").style.display = "none";
}
</script>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <?php include 'script.php'; ?>

</body>

</html>
