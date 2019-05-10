<?php
include "koneksi.php";
$kode_prov=$_POST["kode_provinsi"];
$nama_prov=$_POST["nama_provinsi"];

$sql="UPDATE provinsi set nama_provinsi='$nama_prov' where kode_provinsi='$kode_prov'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:provinsi.php');
}
?>