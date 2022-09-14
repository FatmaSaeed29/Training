<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE ID = $id");
  $row = mysqli_fetch_assoc($result);
}
// else{
//   header("Location: home.php");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type ="text/css" href="css/dental.css">
    <link rel="shortcut icon" href="images/PageLogo.ico" type="image/x-icon">
    <title>Smile Makers</title>
</head>
<body>
    <header>

        <div class="main">
        
            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="serves.php">Services</a></li>
                <li><a href="about us .php">About</a></li>
                <li><a href="contact us.php">Contact us</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="button">
            <a href="appointment.php" class="btn">Book Appointment</a>

        </div>
        <div class="login">
            <a href="index.php" class="btn_login">Back To Menu</a>

        </div>
    </header>
    

</body>
</html>