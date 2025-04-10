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
    <link rel="icon" href="img/title_ico.ico">
    
    <?php 
    include 'link.php'
    ?>

    <style>
        .bg-choose {
            background-image: url('img/1.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: scroll;
            background-repeat: no-repeat;
        }
    </style>
    
</head>
<body>

    <!-- Preloader -->
    <div class="preloader" style="display: none;">
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
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-12">
                            <div class="logo">
                                <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
                            </div>
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
    </header>
    
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
    
    <!-- Contact Us Section -->
    <section class="contact-us section">
        <div class="container">
            <div class="inner bg-choose">
                <div class="row"> 
                    <div class="col-lg-6">
                        <div class="contact-us-left">
                            <div id="myMap"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-us-form">
                            <h2>Contact With Us</h2>
                            <p>If you have any questions please feel free to contact us.</p>
                            <form class="form" method="post" action="mail/mail.php">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" id="phone" name="phone" placeholder="Phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" id="subject" name="subject" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group login-btn">
                                            <button class="btn" type="button" id="send_whatsapp">Send via WhatsApp</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer Area -->
    <?php include 'footer.php'; ?>
    
    <?php include 'script.php'; ?>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelector(".preloader").style.display = "none";
        });

        document.getElementById("send_whatsapp").onclick = function () {
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const phone = document.getElementById("phone").value;
            const subject = document.getElementById("subject").value;
            const message = document.getElementById("message").value;
            const SIR_PH_NO = "9163899690";

            if (!name || !email || !phone || !subject || !message) {
                alert("Please fill out all fields");
                return;
            }

            const whatsappMessage = `Name: ${name}\nEmail: ${email}\nPhone: ${phone}\nSubject: ${subject}\nMessage: ${message}`;
            const whatsappURL = `https://api.whatsapp.com/send?phone=91${SIR_PH_NO}&text=${encodeURIComponent(whatsappMessage)}`;
            window.open(whatsappURL, "_blank");
        };
    </script>
</body>
</html>