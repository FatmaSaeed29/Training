<?php
require 'contact.php';
if (!empty($_SESSION["id"])) {
    header("Location: home.php");
}
if (isset($_POST["submit"])) {
    $name           = $_POST["name"];
    $email          = $_POST["email"];
    $subject         = $_POST["subject"];
    $message          = $_POST["message"];


    $sql1 = "INSERT INTO con VALUES ('$name' , '$email' , '$subject' , '$message')";

    if (!mysqli_query($con, $sql1)) {
        "<script> alert('Successfuly Booked'); </script>";
    } else {
        "<script> alert('Data Does Not Inserted'); </script>";
    }
    header("refresh:2; url=home.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="shortcut icon" href="images/PageLogo.ico" type="image/x-icon">
    <title>Dental Care Center</title>
</head>
<body>

    <section class = "contact-us">
        <article class = "container">
            <h1>CONTACT US</h1>
            <h2>Contact us anytime</h2><hr width="100px">
            <h3>SEND US YOUR COMMENTS</h3>
        </article>
        
        <article class = "container2">
            
            <form action="" method="post" class="php-email-form">
               
                <div class="form-group"> 
                    
                    <div class="name"> Your Name <span class="star" >*</span> </div>
                    <input class="form-control" type="text" name="name" placeholder required=""><br><br>
                    
                    <div class="email"> Your Email <span class="star">*</span></div> 
                    <input class="form-control" type="email" placeholder required="" name="email"><br><br>
                    
                    <div class="subject"> Subject </div> 
                    <input class="form-control" type="text" placeholder required="" name="subject"><br><br>
               
                    <div class="message"> Your Message </div>
                    <textarea  class="form-control" name="message" placeholder="Message" rows="5" required=""> </textarea><br><br>                      
                
                    <button name="submit" class="button" type="submit"> Send </button>
                
                </div>
            </form>
        </article>

        <article class = "container3">

            <div class = "language">
                <div class = "icon">
                    <i class="fas fa-language"></i>
                </div>
                <p><bold>languages we speak</bold><br> Arabic, English and French</p>
            </div>

            <div class = "location">
                <div class = "icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <p><bold>Dokki Branch</bold><br> 59 El Zahraa st. ext., Shooting Club <br> Phone: 01210079995/ 0233384064-023338527</p> 
            </div>

            <div class = "location2">
                <div class = "icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <p><bold>Maadi Branch</bold><br> 9 street 219, Degla, Maadi <br> Phone: 01210079997/0225210052-0225210053</p>
            </div>

            <div class = "phone">
                <div class = "icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <p><bold>Hotline</bold><br> +201210079995</p> 
            </div>

            <div class = "email">
                <div class = "icon">
                    <i class="fas fa-at"></i>
                </div>
                <p><bold>Email</bold><br> dccmea@gmail.com</p>
            </div>

        </article>
    </section>
   

</body>


