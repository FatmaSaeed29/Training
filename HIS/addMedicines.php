<?php
require 'addMedicines1.php';
if (!empty($_SESSION["id"])) {
    header("Location: index.php");
}
if (isset($_POST["submit"])) {
    $name             = $_POST["name"];
    $category         = $_POST["category"];
    $company          = $_POST["company"];
    $composition      = $_POST["composition"];
    $group            = $_POST["group"];
    $unit             = $_POST["unit"];
    $min              = $_POST["min"];
    $order            = $_POST["re-order"];
    $tax              = $_POST["tax"];
    $packing          = $_POST["packing"];
    $vat              = $_POST["vat"];
    $note             = $_POST["note"];
    $file             = $_POST["file"];

    $sql1 = "INSERT INTO med VALUES ('$name', '$category ', '$company ', '$composition', '$group', '$unit', '$min', '$order', '$tax', '$packing', '$vat', '$note', '$file')";

    if (!mysqli_query($con, $sql1)) {
        "<script> alert('Successfuly added'); </script>";
    } else {
        "<script> alert('Data Does Not Inserted'); </script>";
    }
    // header("refresh:2; url=home.php");
}
// $sql = "SELECT name, category, company, composition, group, unit, min, re-order, tax, packing, vat, note, file FROM med";
// $result = mysqli_query($con, $sql);
// if (mysqli_num_rows($result) > 0){
//     while ($row = mysqli_fetch_array($result)) {
//         echo $row[1] . " " . $row[2] . " " . $row[3] . " " . $row[4] . " " . $row[5] . " " . $row[6] . " " . $row[7] . " " . $row[8] . " " . $row[9] . " " . $row[10] . " " . $row[11] . " " . $row[12];
//         echo "<br>";
//     }
// }
// mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addMedicines.css">
    <link rel="shortcut icon" href="images/1mini_logo.jpg" type="image/x-icon">
    <title>Your Hospital Name</title>
</head>
<!-- Medicines ->database name  -->
<!-- Med -> table name -->

<body>
    <h2>Add Medicines</h2>
    <form method="POST" action="" style="margin-left: -49px;">
        <div class="row">
            <div class="col">
                <label>Medicine Name<span>*</span></label><br>
                <input type="text" class="form-control" placeholder="Medicine Name*" required name="name">
            </div>
            <div class="col">
                <label>Medicine Category<span>*</span></label><br>
                <select class="form-control" name="category">
                    <option value="Medicine Category">Select</option>
                    <option>General Sales List</option>
                    <option>Pharmacy Medicines</option>
                    <option>Prescription Only Medicines</option>
                    <option>Controlled Drugs</option>
                </select>
            </div>
            <div class="col">
                <label>Medicine Company<span>*</span></label><br>
                <input type="text" class="form-control" placeholder="Medicine Company*" required name="company">
            </div>
            <div class="col">
                <label>Medicine Composition<span>*</span></label><br>
                <input type="text" class="form-control" placeholder="Medicine Composition*" required name="composition">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="labl1">Medicine Group<span>*</span></label><br>
                <input type="text" class="form-control" placeholder="Medicine Group*" required name="group">
            </div>
            <div class="col">
                <label class="labl1">Unit<span>*</span></label><br>
                <input type="text" class="form-control" placeholder="Unit" required name="unit">
            </div>
            <div class="col">
                <label class="labl1">Min Level</label><br>
                <input type="text" class="form-control" placeholder="Min Level" name="min">
            </div>
            <div class="col">
                <label class="labl1">Re-Order Level</label><br>
                <input type="text" class="form-control" placeholder="Re-Order Level" name="re-order">
            </div>

        </div>
        <div class="row">
            <div class="col">
                <label class="labl1">Tax</label><br>
                <input type="text" class="form-control" placeholder="%" name="tax">
            </div>
            <div class="col">
                <label class="labl1">Unit/Packing<span>*</span></label><br>
                <input type="text" class="form-control" placeholder="Unit/packing" required name="packing">
            </div>
            <div class="col">
                <label class="labl1">VAT A/C</label><br>
                <input type="text" class="form-control" placeholder="VAT A/C" name="vat">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label class="labl1">Note</label><br>
                <textarea class="form-control" placeholder="Note" name="note"></textarea>
            </div>
            <input class="filestyle form-control" type="file" name="file" id="file" size="20" placeholder="Drop file here or click" required name="file">
            <label for="file" class="labl1">Drop file here or click</label>
        </div>
        <button type="submit" id="save" name="submit">SAVE</button>
    </form>
</body>

</html>