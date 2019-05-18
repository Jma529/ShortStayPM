<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Short Stay Property Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Muli" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="banner">
            <header>
                <nav class="nav">
                    <span class="navbar-toggle" id="js-navbar-toggle">
                        <i class="fa fa-bars"></i>
                    </span>
                    <div class="logo">Short Stay PM</div>
                    <ul class="main-nav" id="js-menu">
                        <li><a href="why.html" class="nav-links">Why Short Stay?</a></li>
                        <li><a href="how.html" class="nav-links">How it works</a></li>
                        <li><a href="pricing.html" class="nav-links">Pricing</a></li>
                        <li><a href="FAQs.html" class="nav-links">FAQs</a></li>
                        <li><a href="blog.html" class="nav-links">Blog</a></li>
                        <li><a href="contact.html" class="nav-links">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <div class="banner-text">
                <h1 class="title">Short Stay Property Management</h1>
                <h2 class="title">Better rental returns for property owners</h2>
                <a href="how.html" class="button" id="how">See how it works</a>
            </div>
        </div>
        <div class="value-form">
            <h2>Discover the Short-let value of your property</h2>
            <?php include('form.php');
            ?>
        </div>
        <div class="flex" id="dotpoints">
            <div class="column one">
                <h2>Maximum <br>Return</h2>
                <div class="box bookings">
                    <h3>Multiple booking sites</h3>
                    <div class="icons">
                        <img class="icon" src="CSS/Images/bookinglogonew.png">
                        <img class="icon" src="CSS/Images/airbnb.png">
                        <img class="icon" src="CSS/Images/home_away.png">
                    </div>
                </div>
                <div class="box flexibility">
                    <h3>Complete flexibility</h3>
                    <i class="far fa-calendar-alt"></i>
                </div>
            </div>
            <div class="column two">
                <h2>Minimum <br>Risk</h2>
                <div class="box screening">
                    <h3>Guest Screening</h3>
                    <i class="fas fa-search"></i>
                </div>
                <div class="box cleaning">
                    <h3>Cleaning, laundry, keys, check-in/out</h3>
                    <i class="fas fa-broom"></i>
                </div>
            </div>
        </div>
        <div class="items">
            <h1>We manage it all...</h1>
            <div class="list-items flex">
                <ul class="column">
                    <li>Market research</li>
                    <li>Property price mananagement</li>
                    <li>Booking site SEO</li>
                    <li>Guest management</li>
                </ul>
                <ul class="column">
                    <li>Account management</li>
                    <li>Professional cleaning</li>
                    <li>Guest screening and risk management</li>
                    <li>24 hour check-in/out</li>
                </ul>
            </div>
        </div>
        <div class="research">
            <h1>Better rental returns</h1>
            <div class="research-content flex">
                <img src="https://via.placeholder.com/150">
                <div class="text-content" style="display: block">
                    <p>Our pricing methodology generates maximum returns for clients</p>
                    <p>Earn more than traditional, long-term tenancies</p>
                </div>
            </div>




        </div>





    </div>


</body>

<script src="https://code.jquery.com/jquery-3.4.0.min.js"
    integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous">
</script>
<script src="main.js"></script>

</html>