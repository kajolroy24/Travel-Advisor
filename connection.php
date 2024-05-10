<?php
// connect to the database
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "registration_db";
$conn = mysqli_connect($host,$user,$pass,$dbname);

if(mysqli_connect_error()){
    echo"<script>alert('Cannot connect to the Database')</script>";
    exit();
}
?>