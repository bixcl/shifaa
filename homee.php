<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta charset="utf-8">
    <!--Bootsrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!--css-->
    <link href="/static/style.css" rel="stylesheet">
    <link rel="stylesheet" href="static/login.css"  >   
    <!--page title-->
    <title>Home</title>
    <!--style for the full page-->
    <style>
        /*the font*/
    @import url('https://fonts.googleapis.com/css2?family=poppins:wght@300;400;500;600;700;800;900&display=swap');
        * {margin:0; padding: 0; box-sizing: border-box; text-decoration: none; border: none; outline: none; scroll-behavior: smooth; font-family: 'Poppins',sans-serif;}
        .font {font-family: "Lucida Console", "Courier New", monospace;}

        html {font-size: 62.5%; overflow: hidden; font-family: 'Poppins',sans-serif;}
        body {background: #ffffff; color: #000000}
        /*navbar*/
        .header { position: fixed; top: 0; left: 0; width: 100%; padding: 2rem 9%; background: transparent; display: flex; justify-content: space-between; align-items: center; z-index: 100;}
        .navbar a {font-size: 1.7rem; color: #000000; font-weight: 500; margin-left: 3.5rem; transition: .3s;}
        .navbar a:hover,.navbar a.active {color: #008486;}

        /*logo */
        .logo {font-size: 2.5rem; color: #008486; font-weight: 600;}
        .homee {font-size: 2.5rem; color: #008486; font-weight: 600;}
        #menu-icon {font-size: 3.6rem; color: #000000; cursor: pointer; display: none;}
        a {text-decoration: none; color: black;}

    </style>

</head>
<body style=" background: url('https://images.pexels.com/photos/62693/pexels-photo-62693.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') no-repeat; background-size: cover;">>
    <header class="header" >
        <a href="homee.php" class="logo">Shifaa.</a>
        <!--navigator bar-->
        <dev class='bx bx-menu' id="menu-icon"></dev>
        <nav class="navbar">
            <a href="homee.php" class=".font">Home</a>
            <!--<a href="book.php">Book </a>-->
            <!--<a href="profile.php">Profile </a>-->
            <!--<a href="/change me">About us </a>-->
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <!--<a href="/change me">Logout</a>-->
        </nav>
    </header>
    <center>

        <p class="homee" style="font-size: 40px;">Welcome to</p>
        <p class="homee" style="font-size: 70px;">Shifaa Hospital</p>
        <p class="homee" style="font-size: 20px; ">Where your health is our priority</p><br>

        <button type="button" class="btn btn-light" style="font-size: 20px; color: #1eb8ba; width: 120px;"><a href="register.php" style="color: #008486">Register</a></button>
        <button type="button" class="btn btn-light" style="font-size: 20px; color: #ffffff; background-color: #008486; margin-left: 20px; width: 120px;"><a href="login.php" style="color: #ffffff">Log in</a></button>
    </center>
</body>
</html>

<?php

?>