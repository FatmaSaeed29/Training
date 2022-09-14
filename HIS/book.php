<?php
session_start();
$conne = mysqli_connect("localhost", "root", "", "appointment");

if(!$conne){
    echo("Not Cnnected To Database !");
}
?>