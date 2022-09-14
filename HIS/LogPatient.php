<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: home.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE Uname = '$usernameemail' OR Email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['Password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: home.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
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
            <div class="col-lg-6 contain" style="background-image: linear-gradient(to left, #ade7e4
            , #d6e0e0);">
                <div class="container">
                    <h2 class="text-center mt-5" style="color: rgb(177, 87, 87);" >Login Form</h2>
                    <form action = "" method ="POST" class="mt-5">
                        <div class="form-group">
                          <label for="usernameemail"  style="color: rgb(177, 87, 87);"  class="h6">Name Or Email</label>
                          <input type="text" class="form-control" id="usernameemail" aria-describedby="emailHelp" placeholder="Enter Your Name Or Email" name="usernameemail" value="" required>
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                          <label for="password"  style="color: rgb(177, 87, 87);" class="h6">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="Password" name = "password" value="" required>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                        <a href="#" aria-pressed="true" style="text-decoration: none;">
                            <input type="submit" name="submit"  class="btn btn-primary btn-lg btn-block mt-5"  value="Log In"   >
                        </a>
                      </form>
                </div>
            </div>
            <div class="col-lg-6 second">
                <img src="images/smile33.webp" alt="Smile Person">
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>




