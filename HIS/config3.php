<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "purchase_medicine");
if(!$con){
    echo("Not Cnnected To Database !");
}
?>