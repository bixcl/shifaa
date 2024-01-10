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
    <title>login</title>
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
<body style="
background: url('https://images.pexels.com/photos/62693/pexels-photo-62693.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') no-repeat;
background-size: cover;">>
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

    <form action="" method="post">
        <div class="wrapper">
            <h2>Reset password</h2>
            <div class="input-box">
                <input type="number" name="id" placeholder="civil ID">
            </div>  
            <div class="input-box"> 
                <input type="number" name="qu" placeholder="your faviorit number?"> 
            </div><br>
            <div class="input-box"> 
                <input type="password" name="pwd" placeholder="new password Password"> 
            </div><br>
            <input type="submit" name="renew" class="btn" value="renew">
        </p>
        </div>
    </form>

</body>
</html>


<?php
include 'dbconnection.php';

if (isset($_POST['renew'])){
    if(!empty($_POST['qu']) && !empty($_POST['pwd']) && !empty($_POST['id'])){
        $id = $_POST['id'];
        $qu = $_POST['qu'];
        $pwd = $_POST['pwd'];

        $stmt = $conn-> query("SELECT * FROM user WHERE civilID='$id'");
        $stmt-> execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $n = $stmt->rowCount();
        if($n>0){
            if($qu == $row['qu']){
                $sql = 'UPDATE user SET password=:a where civilID = :b';
                $stmt = $conn->prepare($sql);
                $stmt->execute(array(':a'=> $pwd,':b'=> $id));
                echo "<script> alert('password resets successfully') </script>";
                header("Location:login.php");
            }else{
                echo "<script> alert('question answer is not match')</script>";
            }
    }else{
        echo "<script> alert('civil id / question answer is not match')</script>";}
    
    }else{
        echo "<script> alert('please fill all the fields')</script>";
    }
}

?>
