<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "contact");
if(!$con){
    echo("Not Connected To Database !");
}
?>