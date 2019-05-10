<?php
include "koneksi.php";
$kode_kab=$_POST["kode_kabupaten"];
$kode_kec=$_POST["kode_kecamatan"];
$nama_kec=$_POST["nama_kecamatan"];

$sql="insert into kecamatan values('$kode_kab','$kode_kec','$nama_kec')";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:kecamatan.php');
}
?>