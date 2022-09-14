<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "medicines");
if(!$con){
    echo("Not Cnnected To Database !");
}
?>