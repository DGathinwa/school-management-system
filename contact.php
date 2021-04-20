<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us - Excellence High School </title>
    <link rel="stylesheet" href="bootstrap.min.css">
     <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-warning">
<header><p class="font-italic bg-danger mb-0 text-center fixed-top">THE BEST HIGH SCHOOL IN KENYA</p></header>
<nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="home.html">
        <img src="images/heart-2320561.png" alt="school logo" width="150" height="100">
    </a>

    <h3 class="text-white">EXCELLENCE HIGH SCHOOL</h3>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
                <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Log In
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Admin Log In</a>
                    <a class="dropdown-item" href="#">Teacher Log In</a>
                    <a class="dropdown-item" href="#">Student Log In</a>
                </div>
            </li>
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2"  type="text" placeholder="Search" >
                <button class="btn btn-success" type="submit">Search</button>
            </form>
            </li>
        </ul>
    </div>
</nav>
<div class="container mt-5 mb-5">
    <div class="row">
<div class="col-sm-6">
    <h2>Different ways to get in touch</h2>
    <ul>
        <li><a href="tel:+254726442084">
                <i class="fas fa-phone"></i>+254726442084
            </a></li>
        <br>
        <li><a href="mailto:dgathinwa@yahoo.com">
                <i class="fas fa-envelope"></i>dgathinwa@yahoo.com
            </a></li>
        <br>
        <li><a href="https://www.linkedin.com/in/DGathinwa">
                <i class="fab fa-linkedin"></i>LinkedIn
            </a></li>
        <br>
        <li><a href="https://www.instagram.com/DGathinwa">
                <i class="fab fa-instagram"></i>Instagram
            </a></li>
    </ul>
</div>

<div class="col-sm-6">
    <h2>Get in Touch</h2>
    <?php
     if (isset($_GET['error']))
     {
         $Msg =  "Please Fill in the Blanks";
         echo '<div class="alert alert-danger">'.$Msg.'</div>';
     }
     if(isset($_GET['success']))
     {
         $Msg =  "Your Message has Been Sent";
         echo '<div class="alert alert-success">'.$Msg.'</div>';
     }
    ?>
    <form action="process.php" method="post">
        <div class="full-fields">
            <label>Your Name *</label>
            <input type="text" name="name" placeholder="Your Name"  required>
        </div>

        <div class="full-fields">
            <label>Phone Number *</label>
            <input type="phone" name="phone" placeholder="Phone Number" required>
        </div>

        <div class="full-fields">
            <label>E-mail Address *</label>
            <input type="email" name="email" placeholder="E-mail Address" required>
        </div>

        <div class="textarea">
            <label>Message</label>
            <textarea placeholder="Please enter your comments..." name="message"></textarea>
        </div>
        <button class="submit-btn" type="submit" name="btn-send">Submit</button>
    </form>
</div>
    </div>
</div>
</div>
</body>
<footer class="overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <img src="images/heart-2320561.png" width="150" height="100" alt="School Logo">
                <h4>EXCELLENCE HIGH SCHOOL</h4>
            </div>

            <div class="col-sm-3">
                <h4>Internal Links</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="col-sm-3">
                <h4>Get in Touch</h4>
                <ul>
                    <li><a href="#" target="_blank">Excellence High School</a></li>
                    <li><a href="https://www.google.com/maps/@-1.2878486,36.7309642,14z" target="_blank">Our Address</a></li>
                    <li><a href="tel:+254726442084" target="_blank">Our Phone Number</a></li>
                    <li><a href="https://wa.me/254726442084/?text=Contact%Website" target="_blank">WhatsApp Us</a></li>
                    <li><a href="mailto:dgathinwa@yahoo.com?Subject=Website%20Development" target="_blank">Email Us</a></li>
                </ul>
            </div>

            <div class="col-sm-3">
                <div class="overflow-hidden">
                <h4>Stay Connected</h4>
                <input type="email" placeholder="Enter Email for Newsletters" class="input-newsletter" size="25px">
                <button class="submit-newsletter">Sign Up <img src="images/arrow.png" width="20" height="20" alt="arrow"></button>
                <ul class="social-footer">
                    <li><a href="https://www.facebook.com/DGathinwa"><img src="images/fb.png" width="20" height="20" alt="facebook link"></a></li>
                    <li><a href="https://www.instagram.com/DGathinwa"><img src="images/insta.png" width="20" height="20" alt="instagram link"></a></li>
                    <li><a href="https://www.linkedin.com/in/DGathinwa"><img src="images/linkedin.png" width="20" height="20" alt="linked in link"></a></li>
                    <li><a href="https://www.twitter.com/DGathinwa"><img src="images/twitter.png" width="20" height="20" alt="twitter link"></a></li>
                    <li><a href="https://www.youtube.com/channel/UC-kwN7xJl-goz5cqjTpEyiw/featured"><img src="images/youtube.png" width="20" height="20"  alt="youtube link"></a></li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
