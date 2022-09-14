<?php
require 'config2.php';
if(!empty($_SESSION["id"])){
    header("Location: index.php");
  }
if(isset($_POST["submit"])){
    $name           =$_POST["name"];
    $gender         =$_POST["gender"];
    $date           =$_POST["date"];
    $year           =$_POST["year"];
    $month          =$_POST["month"];
    $day            =$_POST["day"];
    $phone          =$_POST["phone"];
    $email          =$_POST["email"];
    $note           =$_POST["note"];
    $gname          =$_POST["gname"];
    $blood          =$_POST["blood"];
    $status         =$_POST["status"];
    $file           =$_POST["file"];
    $address        =$_POST["address"];
    // $notetwo        =$_POST["notetwo"];
    $duplicate      = mysqli_query($conn2, "SELECT * FROM patient WHERE email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Email Has Already Taken'); </script>";
  }else{
      $query = "INSERT INTO patient VALUES('','$name','$gender','$date' ,'$year','$month','$day', '$phone','$email','$note','$gname','$blood','$status','$file' ,'$address' )";
      mysqli_query($conn2, $query);
      echo
      "<script> alert('Added Successfully'); </script>";
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
    <link rel="stylesheet" href="css/patient.css">
    <link rel="shortcut icon" href="images/1mini_logo.jpg" type="image/x-icon">
    <title>Your Hospital Name</title>
</head>
<body>
    
    <div class="contain">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <span class="navbar-brand mb-0 h1">Add Patient</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <a href="bill.php">
                    <div class="close">
                        <i class="fas fa-times"></i>
                    </div>
                </a>
            </div>
          </nav>

          <div class="body">
            <div class="row">
                <div class="col-md-6">
                    <form action="" method="post" class="mt-4">
                        <div class="form-group">
                            <label for="">Name <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" style="width: 100%;" name="name" required>
                        </div>               
                        <div class="form-row">
                            <div class="form-group col-md-6" >
                                <label for="inputState">Gender</label>
                                <select id="inputState" class="form-control"  style="width: 110px;" name="gender">
                                <option hidden>Select</option>
                                <option>Male</option>
                                <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4" style="margin-left: -138px;">
                            <label for="inputState">Date Of Birth</label>
                            <input type="date" class="form-control" name="date">
                            </div>
                            <div class="form-group col-md-2 ">
                            <label for="inputZip">Age</label>
                            <div class="form-group trois">
                                <input type="text" class="form-control" placeholder="Year" style="width: 65px;" name="year">
                                <input type="text" class="form-control mx-3" placeholder="Mon" style="width: 65px;"
                                name="month">
                                <input type="text" class="form-control" placeholder="Day" style="width: 65px;"
                                name="day">
                            </div>
                            </div>
                            <div class=" twin">
                                <div class="phone" style="margin-left: 5px;">
                                    <label for="" >Phone</label>
                                    <input type="text" class="form-control" style="width: 250px;" name="phone">
                                </div>
                                <div class=" email" >
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" style="width: 250px;" name="email">
                                </div>
                            </div>
                            <div class="area mt-3" style="margin-left: 5px;">
                                <label for="">Note</label>
                                <textarea name="note" rows="3" cols="77" id="note" class="form-control" style="width: 535px;"></textarea>
                            </div>

                        </div>
                </div>
                <div class="col-md mt-4 group">
                    <div class="gname" style="margin-left: 36px;">
                        <label for="">Guardian Name</label>
                        <input type="text" class="form-control" name="gname">
                    </div>

                    <div class="form-row ">
                        <div class="form-group col-md-6 blood mt-3" style="margin-left: 35px;">
                          <label for="inputCity">Blood Group</label>
                          <select id="inputState" class="form-control"  style="width: 121px;" name="blood">
                            <option hidden>Select</option>
                            <option value="">O+</option>
                            <option value="">A+</option>
                            <option value="">B+</option>
                            <option value="">AB+</option>
                            <option value="">O-</option>
                            <option value="">A-</option>
                            <option value="">B-</option>
                            <option value="">AB-</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 mt-3" style="margin-left: -141px;">
                          <label for="inputState">Marital Status</label>
                          <select id="inputState" class="form-control" name="status">
                            <option hidden>Choose...</option>
                            <option value="">Single</option>
                            <option value="">Married</option>
                            <option value="">Widowed</option>
                            <option value="">Separated</option>
                            <option value="">Not Specefied</option>
                          </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="formFileSm" class="form-label my-3 " style="width: 118px;">Patient Photo</label>
                            <input type="file" id="selectedFile"  accept="image/png, image/gif, image/jpeg" style="display: none;" name="file"/>
                            <div class="box-1">
                                <a href="#" class="animated-button1">
                                    <input type="button" value="Drop a file here or click " onclick="document.getElementById('selectedFile').click();" class="uploadfile" />
                                  </a>
                              </div>
                        </div>
                      </div>
                      <div class="gname" style="margin-left: 36px;">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="area mt-2" style="margin-left: 36px;">
                        <label for="">Any Known Allergies</label>
                        <textarea name="note" rows="3" cols="77" id="note" class="form-control" name="notetwo"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-primary my-3" style="/* display:block; *//* margin:auto; */width: 100px;height: 50px;top: 20p;/* margin-top: 124px; */position: static;margin-top: 450px !important;margin: auto;/* display: block; *//* margin: auto; */margin-left: -86px;position: absolute;left: 589px;" name="submit">Submit</button>
            </form>
            </div>
            <!-- <form action="">
                <button type="submit" class="btn btn-outline-primary my-3" style="display:block; margin:auto;" name="submit">Submit</button>
            </form> -->
        </div>
    </div>


    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>