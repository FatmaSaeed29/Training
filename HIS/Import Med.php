<?php
require 'addMedicines1.php';
if (!empty($_SESSION["id"])) {
    header("Location: index.php");
}
if (isset($_POST["submit"])) {
    $sele            = $_POST["sele"];
    $file             = $_POST["file"];

    $sql1 = "INSERT INTO add_med VALUES ('$sele', '$file')";

    if (!mysqli_query($con, $sql1)) {
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
    <link rel="stylesheet" href="css/Import Med.css">
    <link rel="shortcut icon" href="images/1mini_logo.jpg" type="image/x-icon">
    <title>Your Hospital Name</title>
</head>

<body>
    <div class="card text-center" id="car2">
        <div class="card-header" id="carHead1">
            Medicines
            <div id="div2">
                <a href="SampleData.excel" download><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Import Medicines" id="butt1">Download Sample Data
                    </button></a>
            </div><br><br>
            <hr>
            <div class="div3">
                <span>Note:</span>
                <p class="p2"> Your CSV data should be in the format below. The first line of your CSV file should be the column headers as in the table example. Also make sure that your file is UTF-8 to avoid unnecessary encoding problems</p>
            </div><br>
            <hr>
            <a src="#"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="span1">*</span> Medicine
                </button></a>
            <a src="#"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="span1">*</span> Company
                </button></a>
            <a src="#"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="span1">*</span> Composition
                </button></a>
            <a src="#"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="span1">*</span> Group
                    <button></a>
            <a src="#"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Unit
                </button></a>
            <a src="#"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Min Level
                </button></a>
            <a src="#"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="span1">*</span> Re-Order Level
                </button></a>
            <a src="#"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    VAT
                </button></a>
            <a src="#"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Unit/Packing
                </button></a>
            <a src="#"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Note
                </button></a>
        </div>
        <hr>
        <div class="div4">
            <p class="p3">
                Sample Data
            </p>
            <p class="p3">
                Sample Data
            </p>
            <p class="p3">
                Sample Data
            </p>
            <p class="p3">
                Sample Data
            </p>
            <p class="p3">
                Sample Data
            </p>
            <p class="p3">
                Sample Data
            </p>
            <p class="p3">
                Sample Data
            </p>
            <p class="p3">
                Sample Data
            </p>
            <p class="p3">
                Sample Data
            </p>
            <p class="p3">
                Sample Data
            </p>
        </div>
        <div class="div5">
            <form action="" method="post">
                <p class="p4">Medicine Category<span class="span1">*</span></p>
                <select class="sele1" name="sele">
                    <option>Select</option>
                    <option>Select</option>
                </select>
                <p class="p5">Select CSV file <span class="span1">*</span></p>
                <input class="filestyle form-control" type="file" name="file" id="file" size="20" placeholder="Drop file here or click" required>
                <label for="file" class="labl1">Drop file here or click</label>
                <button type="submit" id="save" name="submit">Import Medicines</button>
            </form>
        </div>
</body>

</html>