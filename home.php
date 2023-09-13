<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarsDekho - Your Trusted Car Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom Styles */
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .navbar {
            background-color: black;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #ffffff;
        }

        .logo img {
            max-width: 150px; 
            height: auto; 
        }

        .banner {
            background-image: url('banner1.jpg');
            background-size: cover;
            background-position: center;
            text-align: center;
            color: #fff;
            padding: 100px 0;
        }

        .banner h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: black;
        }

        .banner p {
            font-size: 18px;
            margin-bottom: 30px;
            color: black;
        }

        .banner .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: darkblue;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .most-searched-cars, .latest-cars {
            background-color: #fff;
            margin: 20px 0;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .most-searched-cars h2, .latest-cars h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .card {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Responsive styles */
        @media screen and (max-width: 768px) {
            .logo img {
                max-width: 80px;
            }

            .banner {
                padding: 80px 0;
            }

            .banner h1 {
                font-size: 24px;
            }

            .banner p {
                font-size: 16px;
            }

            .most-searched-cars, .latest-cars {
                padding: 10px;
            }

            .most-searched-cars h2, .latest-cars h2 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand logo" href="#">
            <img src="https://jobs4fresher.com/wp-content/uploads/2021/03/CarDekho-1-1024x576.png" alt="CarsDekho Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="admin-link"><a href="admin.php">Admin Panel</a></div>
        </div>
    </nav>

    <section class="banner">
        <div class="container">
            <div class="row">
                <!-- Banner Card 1 -->
                <div class="col-md-6">
                    <div class="card">
                        <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/rent-a-car-banner-template-design-29dd9f007cc19e7aa2fe84fdd1861aa5_screen.jpg?ts=1634324544" alt="Banner 1" class="img-fluid" style = "height: 270px;">
                        <div class="card-body">
                            <h5 class="card-title">Banner Title 1</h5>
                            <p class="card-text">This is some sample text for the first banner.</p>
                        </div>
                    </div>
                </div>
                <!-- Banner Card 2 (Duplicate this card structure for additional banner cards) -->
                <div class="col-md-6">
                    <div class="card">
                        <img src="https://storage.pixteller.com/designs/designs-images/2020-12-21/04/rent-a-car-sale-banner-1-5fe0b5604db74.png" alt="Banner 2" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Banner Title 2</h5>
                            <p class="card-text">This is some sample text for the second banner.</p>
                        </div>
                    </div>
                </div>
                <!-- Duplicate as many times as needed for more banner cards -->
            </div>
        </div>
    </section>

   
    <!-- Most Searched Cars Section -->
    <section class="most-searched-cars">
        <div class="container">
            <h2>Most Searched Cars</h2>
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-6">
                    <div class="card">
                        <img src="https://wallpaperaccess.com/full/13643.jpg" alt="Car 1" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Car Model 1</h5>
                            <p class="card-text">Description of Car Model 1.</p>
                        </div>
                    </div>
                </div>
                <!-- Duplicate the above card structure for other most searched cars -->
                <!-- ... -->

                <!-- Card 2 -->
                <div class="col-md-6">
                    <div class="card">
                        <img src="https://wallpaperaccess.com/full/13642.jpg" alt="Car 1" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Car Model 2</h5>
                            <p class="card-text">Description of Car Model 1.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->

                <div class="col-md-6">
                    <div class="card">
                        <img src="https://wallpaperaccess.com/full/13645.jpg" alt="Car 1" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Car Model 3</h5>
                            <p class="card-text">Description of Car Model 1.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->


             <div class="col-md-6">
                    <div class="card">
                        <img src="https://wallpaperaccess.com/full/13660.jpg" alt="Car 1" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Car Model 3</h5>
                            <p class="card-text">Description of Car Model 1.</p>
                        </div>
                    </div>
                </div>


                <!-- <div class="col-md-6">
                    <div class="card">
                        <img src="https://wallpaperaccess.com/full/13658.jpg" alt="Car 1" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Car Model 4</h5>
                            <p class="card-text">Description of Car Model 1.</p>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </section>

   

    <!-- Latest Car Models Section -->
    <section class="latest-cars">
        <div class="container">
            <h2>Latest Car Models</h2>
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-6">
                    <div class="card">
                        <img src="https://wallpaperaccess.com/full/13650.jpg" alt="Car 2" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Car Model 2</h5>
                            <p class="card-text">Description of Car Model 2.</p>
                        </div>
                    </div>
                </div>
                <!-- Duplicate the above card structure for other latest car models -->
                <!-- ... -->
                <!-- Card 2 -->

                <div class="col-md-6">
                    <div class="card">
                        <img src="https://wallpaperaccess.com/full/13653.jpg" alt="Car 2" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Car Model 2</h5>
                            <p class="card-text">Description of Car Model 2.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-6">
                    <div class="card">
                        <img src="https://wallpaperaccess.com/full/13662.jpg" alt="Car 2" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Car Model 3</h5>
                            <p class="card-text">Description of Car Model 2.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-6">
                    <div class="card">
                        <img src="https://wallpaperaccess.com/full/13666.jpg" alt="Car 2" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Car Model 3</h5>
                            <p class="card-text">Description of Car Model 2.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

   



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 footer-links">
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-md-6 contact-info">
                    <p>Contact Us: <a href="mailto:info@carsdekho.com">info@carsdekho.com</a></p>
                    <p>Follow Us: <a href="#">Facebook</a>, <a href="#">Twitter</a>, <a href="#">Instagram</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
