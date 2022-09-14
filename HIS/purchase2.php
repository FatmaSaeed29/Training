<?php
require 'config3.php';
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
if (isset($_POST["submit"])){
    $Medicine_category    =$_POST["cat"];
    $Medicine_name        =$_POST["name"];
    $Bath_no              =$_POST["bath-no"];
    $Expiry_date          =$_POST["date"];
    $MRP                  =$_POST["mrp"];
    $Bath_amount          =$_POST["bath-amount"];
    $Sale_price           =$_POST["sale-price"];
    $Packing_Qty          =$_POST["qty"];
    $Quantity             =$_POST["quantity"];
    $Purchase_price       =$_POST["purchase-price"];
    $Tax                  =$_POST["tax"];
    $Amount               =$_POST["amount"];
    $Note                 =$_POST["note"];
    $Attach_document      =$_POST["attach-document"];
    $Total                =$_POST["total"];
    $Discount             =$_POST["discount"];
    $Tax2                 =$_POST["tax2"];
    $Net_amount           =$_POST["net-amount"];
    $Payment_mode         =$_POST["pay-mode"];
    $Payment_note         =$_POST["pay-note"];

    $query = "INSERT INTO medicines VALUES('$Medicine_category','$Medicine_name ','$Bath_no ' , '$Expiry_date' , '$MRP ' , '$Bath_amount ' ,'$Sale_price','$Packing_Qty', '$Quantity', '$Purchase_price', '$Tax', '$Amount', '$Note', ' $Attach_document', '$Total', '$Discount', '$Tax2', '$Net_amount', '$Payment_mode', '$Payment_note' )";
    if (!mysqli_query($con, $query)) {
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="shortcut icon" href="css/1mini_logo.jpg" type="image/x-icon">
    <title>Your Hospital Name</title>
</head>
<body>

    <section class = "content">
        <article class = "navbar">
            <div class = "select">
                <select>
                    <option selected> Select Supplier </option>
                    <option> mohd </option>
                    <option label form = "input" type="text" > </option>
                </select>
            </div>
            <a class = "button" href = "purchase.php"> <i class="fas fa-times"></i> </a>
        </article>

        <article class = "nav2">
            <h1 class = "h1"> Bill No </h1>
            <label class = "date"> Purchase Date <input class = "input" type = "datetime-local" ></label>
        </article>
         
        
        <article class = "content2">
            <form action = "" method = "post">
                
                <label class = "lab"> Medicine Category <span class = "span"> * </span></label>
                <label class = "lab"> Medicine Name <span class = "span"> * </span></label>
                <label class = "lab"> Batch No <span class = "span"> * </span></label>
                <label class = "lab"> Expiry Date <span class = "span"> * </span></label>
                <label class = "lab"> MRP ($) <span class = "span"> * </span></label>
                <label class = "lab"> Batch Amount ($) </label>
                <label class = "lab"> Sale Price ($) <span class = "span"> * </span></label>
                <label class = "lab"> Packing Qty </label>
                <label class = "lab"> Quantity <span class = "span"> * </span></label>
                <label class = "lab"> Purchase Price ($) <span class = "span"> * </span></label> 
                <label class = "lab"> Tax <span class = "span"> * </span></label>
                <label class = "lab"> Amount ($) <span class = "span" > * </span></label>
            <br>
            
            <div class="mb-3 input-group repeatDiv" id="repeatDiv"> 
                <div class = "inputs" id="repeatDiv"> 
                     
                    <input class = "input1" type = "text" name = "cat" required> 
                    <input class = "input2" type = "text" name = "name" required> 
                    <input class = "input3" type = "text" name = "bath-no" required> 
                    <input class = "input4" type = "date" name = "date" required> 
                    <input class = "input5" type = "text" name = "mrp" required> 
                    <input class = "input6" type = "text" name = "bath-amount"> 
                    <input class = "input7" type = "text" name = "sale-price" required>  
                    <input class = "input8" type = "text" name = "qty"> 
                    <input class = "input9" type = "text" name = "quantity" required> 
                    <input class = "input10" type = "text" name = "purchase-price"required> 
                    <input class = "input11" type = "text" placeholder = "%" name = "tax"required> 
                    <input class = "input12" type = "text" name = "amount"required> 
                     
                    <div class="button" id="repeatDivBtn" data-loading-text="> <i class='fa fa-circle-o-notch fa-spin'></i> Please Wait.."  
                    autocomplete="off" data-increment="1"> <i class="fa fa-plus"></i> 
                    </div> 
                </div> 
            </div> 
            <hr>

        </article>
        </div>

        


        <article class = "content3">
            
            <div class = "notes">
                <label class = "note" > Note </label>
                <br>
                <input class = "input" type = "text" name = "note">
            </div>
            
            <div class="drop">
                <h2> Attach Document </h2>
                <button class = "button"> <input type="file" style = "width: 200px; height: 50px; border: none;" name="attach-document"></button>
            </div>

        </article>

        <article class = "content4">
            <div class = "labels">
                <label class = "one"> Total ($) </label>
                <label class = "two"> Discount ($) </label>
                <label class = "three"> Tax ($) </label>
                <label class = "four"> Net Amount ($) </label>
            </div>

            <div class = "inputs">
                <input class = "one" type = "number" name = "total">
                <input class = "two" type = "number" name = "discount">
                <input class = "three" type = "number" name = "tax2">
                <input class = "four" type = "number" name = "net-amount">
            </div>

            <div class = "payMode"> 
                <label class = "lab"> Payment Mode </label>
                <select class = "select" name = "pay-mode">
                    <option> Cash </option>
                    <option> Cheque </option>
                    <option> Transfer To Bank Account </option>
                    <option> UPI </option>
                    <option> Other </option>
                </select>
            </div>

            <div class = "payNote">
                <label class = "lab"> Payment Note </label>
                <input class = "input" type = "text" name = "pay-note">
            </div>

        </article>

        <article class = "footer">
            <button class = "button" type = "submit" name = "submit"> <i class="fas fa-check-circle"></i> Save </button>
        </article>
    </form>
    </section>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src = "js/script1.js"></script>
    </body>