<?php session_start();?>
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
    <title>Booking</title>
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
            <a href="home2.php" class=".font">Home</a>
            <a href="book.php">Book </a>
            <a href="profile.php">Profile </a>
            <a href="History.php">History </a>
            
            <!--<a href="login.php">Login</a>-->
            <!--<a href="register.php">Register</a>-->
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <form action="" method="post">
        <div class="wrapper" >
            <h2>Book an appointment</h2>

            <div class="input-box">
                <p style="width: 600; text-align: left;">Select Clinic:</p>
                <select name='clnc' class="form-select" aria-label="Default select example">
                    <option selected>None</option>
                    <option value="cardiology">cardiology</option>
                    <option value="dermatology">dermatology</option>
                    <option value="ear, nose, throat">ear, nose, throat</option>
                    <option value="physical therapy">physical therapy</option>
                    <option value="sports medicine">sports medicine</option>
                    
                  </select>
            </div><br>
            <div class="input-box">
                <p style="width: 600; text-align: left;">Select Time:</p>
                <select name='time' class="form-select" aria-label="Default select example">
                    <option selected>None</option>
                    <option value="8AM">8AM</option>
                    <option value="8:30AM">8:30AM</option>
                    <option value="9AM">9AM</option>
                    <option value="9:30AM">9:30AM</option>
                    <option value="10AM">10AM</option>
                    <option value="10AM">10:30AM</option>
                    <option value="11AM">11AM</option>
                    <option value="8">11:30AM</option>
                  </select>
            </div><br>

            <div class="input-box">
                <p style="width: 600; text-align: left;">Select Date:</p>
                <input type="text" name='date' placeholder='dd/mm/yyyy'>
            </div><br>

            <br><p><button type="submit" name='book' class="btn">Book Now</button></p>
        </p>
        </div>
    </form>

</body>
</html>

<?php
include 'dbconnection.php';

if(isset($_POST['book'])){
    if(!empty($_POST['clnc']) != 'None' || !empty($_POST['time']) != 'None' || (!empty($_POST['date']))){
        $clnc = $_POST['clnc'];
        $time = $_POST['time'];
        $date = $_POST['date'];

        $sql = 'INSERT INTO bookdetail (civilID,ttime,ddate,clinicName) values (:a,:b,:c,:d)';
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(':a'=> $_SESSION['id'],
        ':b'=> $time,
        ':c'=> $date,
        ':d'=> $clnc
    ));

        echo "<script> alert('you book the appointment successfully!')</script>";

    }else{
        echo "<script> alert('please fill all fields')</script>";
    }
}
#else{
   # echo "<script> alert('pleace fill all fields!')</script>";
#}

?>