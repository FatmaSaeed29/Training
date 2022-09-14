<?php
session_start();
$conn2 = mysqli_connect("localhost", "root", "", "pharmacy");
if(!$conn2){
    echo("Not Cnnected To Database !");
}
?>