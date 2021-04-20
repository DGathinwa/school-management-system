<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Excellence High School </title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<!--Done by Daniel Gathinwa Mwangi from 13/04/2021 - 20/04/2021-->
<!--Images have been downloaded from pixabay.com-->
<!--Icons have been downloaded from fontawesome.comm-->
<!--CSS is mainly used bootstrap-->
<!--Fonts used is from Google fonts website-->

<body>
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
                    <a class="dropdown-item" href="admin-login.php">Admin Log In</a>
                    <a class="dropdown-item" href="teacher-login.php">Teacher Log In</a>
                    <a class="dropdown-item" href="student-login.php">Student Log In</a>
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