<?php
include "koneksi.php";
$id=$_GET["id"];

$sql="DELETE from provinsi where kode_provinsi='$id'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:provinsi.php');
}
?>