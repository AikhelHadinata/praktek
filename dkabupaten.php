<?php
include "koneksi.php";
$id=$_GET["id"];

$sql="DELETE from kabupaten where kode_kab='$id'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:kabupaten.php');
}
?>