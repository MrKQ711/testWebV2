<?php

$con = new mysqli("abc", "thai123", "passne", "mystore");
if(!$con) {
       die("Connection failed: " . mysqli_connect_error()); 
}
?>