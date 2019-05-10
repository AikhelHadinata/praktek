<?php
include "koneksi.php";
$kode_prov=$_POST["kode_provinsi"];
$nama_prov=$_POST["nama_provinsi"];

$sql="insert into provinsi values('$kode_prov','$nama_prov')";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:provinsi.php');
}
?>