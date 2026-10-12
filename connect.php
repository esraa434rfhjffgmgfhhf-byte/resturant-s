<?php
$conn=mysqli_connect('localhost','root',"",'restaurant');
if(!$conn){
    die("connection feild".mysqli_connect_error());
}