<?php
require 'config2.php';
// require 'config3.php';
if(!empty($_SESSION["id"])){
    header("Location: index.php");
  }
if(isset($_POST["submit1"])){
    $medcateg       =$_POST["categ"];
    $medname        =$_POST["medname"];
    $batchno        =$_POST["batch"];
    $date           =$_POST["date"];
    $quantity       =$_POST["quantity"];
    $sale           =$_POST["sale"];
    $tax1            =$_POST["tax1"];
    $query = "INSERT INTO category VALUES('$medcateg','$medname','$batchno' , '$date' , '$quantity' , '$sale' ,' $tax1')";
    if (!mysqli_query($conn2, $query)) {
        "<script> alert('Successfuly added'); </script>";
    } else {
        "<script> alert('Data Does Not Inserted'); </script>";
    }
}
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
if(isset($_POST["submit2"])){

    $hosptialdoc        =$_POST["hosptialdoc"];
    $docname            =$_POST["docname"];
    $total              =$_POST["total"];
    $discount           =$_POST["discount"];
    $tax                =$_POST["tax"];
    $net                =$_POST["net"];
    $amount             =$_POST["amount"];
    $mode               =$_POST["mode"];
    $note               =$_POST["note"];
    
    $query1             ="INSERT INTO bill VALUES ('$hosptialdoc' , '$docname' , '$total' , '$discount' , '$tax',' $net','$amount' ,'$mode' , '$note')";
    if (!mysqli_query($conn2, $query1)) {
        "<script> alert('Successfuly added'); </script>";
    } else {
        "<script> alert('Data Does Not Inserted'); </script>";
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
    <link rel="stylesheet" href="css/bill.css">
    <link rel="shortcut icon" href="images/1mini_logo.jpg" type="image/x-icon">
    <title>Your Hospital Name</title>
</head>
<body>
    <div class="all">
        <nav class="navbar navbar-dark bg-primary">
            <div class="first">
                
                <div class="btn-group dropp">
                    <button class="btn bg-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu">
                      <input type="text">
                      <p>Enter Patient Name or id...</p>
                    </div>
                </div>
                  <a href="newpatient.php">
                    <button type="button" class="btn  btn-sm generatebill" id="load1" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Please Wait.." autocomplete="off"><i class="fa fa-plus"></i> New Patient</button>
                </a>
                <div class="input-group">
                    <div class="form-outline">
                      <input type="search" id="form1" class="form-control" placeholder="Prescription No"/>
                    </div>
                    <button type="button" class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </button>
                </div>
                <a href="index.php">
                    <div class="close">
                        <i class="fas fa-times"></i>
                    </div>
                </a>
                
            </div>
        </nav>
        
            <div class="second bg-secondary my-2">
                <div class="left font-weight-bold">
                    <span>Bill No 1</span>
                    <span class="two">Case ID</span>
                </div>
                <div class="datetime">
                    <label class="font-weight-bold">Date</label>
                    <input type="date" value="09-11-2022">
                </div>
            </div>

            <hr class="lineone">

            <div class="three">
                <table>
                    <thead>
                        <th class="mr-2">Medicine Category <span style="color: red;">*</span></th>
                        <th class="mr-2">Medicine Name <span style="color: red;">*</span></th>
                        <th class="mr-2">Batch No <span style="color: red;">*</span></th>
                        <th class="mr-2">Expiry Date <span style="color: red;">*</span></th>
                        <th class="mr-2">Quantity <span style="color: red;">*</span> | Available Qty</th>
                        <th class="mr-2">Sale Price ($) <span style="color: red;">*</span></th>
                        <th class="mr-2">Tax Amount ($) <span style="color: red;">*</span></th>
                    </thead>
                    
                </table>
                        <form action="" method="post">
                            <div class="mb-3 input-group repeatDiv" id="repeatDiv">
                               <div class="in">
                                    <div class="input-group mb-3 ml-1" style="width: 185px;">
                                        <input type="text" class="form-control" name="categ" placeholder="Category" aria-label="Recipient's username" aria-describedby="basic-addon2" width="130px" required>
                                        <div class="input-group-append" style="width: 90px;">
                                          <button class="btn btn-outline-secondary" type="button">Select</button>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3" style="width: 171px;margin-left: 36px;">
                                        <input type="text" class="form-control " placeholder="Name" aria-label="Recipient's username" aria-describedby="basic-addon2" width="130px" name="medname" required>
                                        <div class="input-group-append" style="width: 90px;">
                                          <button class="btn btn-outline-secondary" type="button">Select</button>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3" style="width: 187px;">
                                        <input type="text" class="form-control " placeholder="Batch No" aria-label="Recipient's username" aria-describedby="basic-addon2" width="130px" name="batch" required>
                                        <div class="input-group-append" style="width: 90px;">
                                          <button class="btn btn-outline-secondary" type="button">Select</button>
                                        </div>
                                    </div>
                                    
                                    <div class="input-group mb-3" style="width: 145px; margin-left: -11px;">
                                        <input type="date" class="form-control " placeholder="Expiry Date" aria-label="Recipient's username" aria-describedby="basic-addon2" width="130px" name="date" required >
                                    </div>

                                    <div class="input-group mb-3 ml-3" style="width: 230px; margin-left: 20px !important;">
                                        <input type="text" class="form-control" aria-label="Text input with checkbox" name="quantity" required>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <input type="checkbox" aria-label="Checkbox for following text input">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3 ml-4" style="width: 150px;">
                                        <input type="text" class="form-control" aria-label="Text input with checkbox" name="sale" required>
                                    </div>

                                    <div class="input-group ml-4" style="width: 150px;">
                                        <input type="text" class="form-control" aria-label="Text input with checkbox" name="tax1" required>
                                    </div>
                               </div>
                            </div>

                            <button type="button" class="btn  btn-sm generatebill ml-2" style="margin-top: -25px;" id="repeatDivBtn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Please Wait.." autocomplete="off" data-increment="1"><i class="fa fa-plus"></i> Add</button>
                            <button type="submit" name="submit1" class="btn btn-outline-primary " style="margin-top: -20px;">Submit</button>
                        </form>
            </div>

            <hr class="lineone">

            <div class="four">
                <form action="" method="post" class="row">
                    <div class="col-md-6">
                        <div class="form-row">
                            <div class="col">
                                <label for="" >Hospital Doctor</label>
                                <input type="text" class="form-control" placeholder="Enter Name" name="hosptialdoc">
                            </div>
                            <div class="col doctor">
                                <label for="">Doctor Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name" name="docname">
                            </div>
                        </div>
                        <label for="">Note</label>
                        <textarea name="note" rows="3" id="note" class="form-control" name="note"></textarea>
                        <input class="btn btn-primary mt-4" type="submit" value="Submit" name="submit2">
                    </div>
                    <div class="col-md last">
                        <div class="relate">
                            <label for="" class="lab1">Total ($)</label>
                            <input type="text" class="inp1" value="0" name="total"><br>

                            <label for="" class="lab2">Discount ($)</label>
                            <!-- <input type="text"class="inp2" value="0" name="discount"> -->

                            <input type="text"class="inp2" value="0" name="discount"><br>
                            
                            <label for="" class="lab3">Tax ($)</label>
                            <input type="text" class="inp3" value="0" name="tax"><br>
                            
                            <label for="" class="lab4">Net Amount ($)</label>
                            <input type="text" class="inp4" value="0" name="net"><br>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="exampleFormControlSelect1">Payment Mode</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="mode">
                                    <option selected>Cash</option>
                                    <option>Cheque</option>
                                    <option>Transfer to Bank Account</option>
                                    <option>UPI</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="col doctor">
                                <label for="">Payment Amount ($)</label>
                                <input type="text" class="form-control" name="amount">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>
    
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="js/script.js"></script>
</body>
</html>