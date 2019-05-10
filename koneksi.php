<?php
$host="localhost";
$user="root";
$pass="";
$db="data";

$conn=mysqli_connect("$host","$user","$pass");
if(!$conn){
die("database tidak konek").mysqli_error();
}

$database=mysqli_select_db($conn,"$db");
if(!$database){
die("database tidak terpilih").mysqli_error();
}