<?php
require 'book.php';
if(!empty($_SESSION["id"])){
    header("Location: home.php");
  }
if(isset($_POST["submit"])){
    $name           =$_POST["name"];
    $email          =$_POST["email"];
    $phone          =$_POST["phone"];
    $date           =$_POST["date"];
    $help           =$_POST["help"];
    $hear           =$_POST["hear"];
    
    $sql = "INSERT INTO record(name , email , phone , date , help , hear) VALUES ('$name' , '$email' , '$phone' , '$date' , '$help' , '$hear')";
    $duplicate      = mysqli_query($conne, "SELECT * FROM record WHERE date = '$date'");
    if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Date Already Occupied Please Choose Another One'); </script>";
    }
    if(!mysqli_query($conne , $sql)){
        "<script> alert('Successfuly Booked'); </script>";
    }
    else{
        "<script> alert('Data Does Not Inserted'); </script>";
    }
  header("refresh:2; url=home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/appointment.css">
    <link rel="shortcut icon" href="images/PageLogo.ico" type="image/x-icon">
    <title>Smile Makers </title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="home.php" ><i class="fas fa-arrow-alt-left" style="width: 25px;"></i></a>
        <span class="navbar-brand mb-0 h1 font-weight-bold" style="color: rgb(177, 87, 87);">Smile Makers Dental Clinic</span>
    </nav>

    <div class="all ">
        <div class="row">
            <div class="col-lg-6 contain" style="background-image: linear-gradient(to left, #abd5f1
            , #d6ebfa);">
                <div class="container">
                    <h2 class="text-center mt-0" style="color: rgb(177, 87, 87);" >Appointment Form</h2>

                    <form class="mt-1" style="overflow: visible !important;" action="" method="POST">
                        <div class="form-group">
                            <label for="exampleInputName" class="font-weight-bold name1 namee1"  style="color: rgb(177, 87, 87);">Full Name</label>
                            <input type="text" class="form-control first" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"  style="color: rgb(177, 87, 87);"  class="h6">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                        <div class="form-group">
                            <label for="exampleInputName" class="font-weight-bold name1 namee1"  style="color: rgb(177, 87, 87);">Phone Number</label>
                            <input type="text" class="form-control first" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Mobile Number" name ="phone" required>
                        </div>
                        <div class="form-group form2">
                            <label for="exampleInputName" class="font-weight-bold name1 namee1"  style="color: rgb(177, 87, 87);">Select Appointment Date</label>
                            <input  type="date" class="form-control first" name ="date">
                        </div>
                        <div class="form-group form2">
                            <label for="exampleInputName" class="font-weight-bold name1 namee1"  style="color: rgb(177, 87, 87);">How Can We Help You?</label>
                            <!-- <select class="custom-select last Gender" id="inputGroupSelect01">
                                <option selected>Choose</option>
                                <option value="1">Dental Exam</option>
                                <option value="2">Invisaligin Consult</option>
                                <option value="3">Breezy Braces Consult</option>
                                <option value="4">Emergency</option>
                                <option value="5">Cosmetic</option>
                                <option value="6">Procedures</option>
                            </select> -->
                            <input type="text" class="form-control first" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Your Reason" name="help" required>
                        </div>
                        <div class="form-group form2">
                            <label for="exampleInputName" class="font-weight-bold name1 namee1"  style="color: rgb(177, 87, 87);">How Did You Hear About Us?</label>
                            <!-- <select class="custom-select last Gender" id="inputGroupSelect01">
                                <option selected>Choose</option>
                                <option value="1">Existing Customer</option>
                                <option value="2">Google</option>
                                <option value="3">Discovered Online</option>
                                <option value="4">Word Of Mouth</option>
                                <option value="5">Facebook Or Other Social Media</option>
                                <option value="6">Other</option>
                            </select> -->
                            <input type="text" class="form-control first" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Your Answer" name="hear" required>
                        </div>
                        <a href="#" aria-pressed="true" style="text-decoration: none;">
                            <input type="submit"  class="btn btn-primary btn-lg btn-block mt-5 mb-4"  value="Make An Appointment" name="submit"  >
                        </a>
                      </form>
                </div>
            </div>
            <div class="col-lg-6 second">
                <img src="images/dental-cleaning-1080x675.jpeg" alt="Smile Person">
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>




