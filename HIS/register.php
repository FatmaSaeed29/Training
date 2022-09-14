<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: home.php");
  }
if(isset($_POST["submit"])){
    $name           =$_POST["name"];
    $email          =$_POST["email"];
    $password       =$_POST["password"];
    $confimpassword =$_POST["password_2"];
    $duplicate      = mysqli_query($conn, "SELECT * FROM users WHERE Uname = '$name' OR Email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confimpassword){
      $query = "INSERT INTO users VALUES('','$name','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
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
        <a href="index.php" ><i class="fas fa-arrow-alt-left" style="width: 25px;"></i></a>
        <span class="navbar-brand mb-0 h1 font-weight-bold" style="color: rgb(177, 87, 87);">Smile Makers Dental Clinic</span>
    </nav>

    <div class="all ">
        <div class="row">
            <div class="col-lg-6 contain" style="background-image: linear-gradient(to left, #aee6ec
            , #eaf6f8);">
                <div class="container">
                    <h2 class="text-center mt-5" style="color: rgb(177, 87, 87);" >Registeration Form</h2>
                    <form action="" method="POST" class="mt-1">
                        
                        <div class="form-group">
                            <label for="exampleInputName" class="font-weight-bold name1 namee1"  style="color: rgb(177, 87, 87);">Full Name</label>
                            <input type="text" class="form-control first" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Name" name="name" required >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"  style="color: rgb(177, 87, 87);"  class="h6">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required >
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1"  style="color: rgb(177, 87, 87);" class="h6">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1"  style="color: rgb(177, 87, 87);" class="h6">Confirm Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password_2" required>
                        </div>
                        <a href="#" aria-pressed="true" style="text-decoration: none;">
                            <input type="submit"  class="btn btn-primary btn-lg btn-block mt-5"  value="Sign Up" name="submit">
                        </a>
                      </form>
                </div>
            </div>
            <div class="col-lg-6 second">
                <img src="images/smile4.jpg" alt="Smile Person">
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>




