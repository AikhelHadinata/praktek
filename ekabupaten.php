<?php
include "koneksi.php";
$id=$_GET["id"];
$sql="select * from kabupaten where kode_kab='$id'";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
 <head>
  <title>Edit Kabupaten</title>
 </head>
 <body>
  <form method="post" action="ukabupaten.php">
	<table>
	<tr>
		<td>Kode Provinsi</td>
		<td>:</td>
		<td><input type="text" name="kode_provinsi" value="<?php echo $data[0]; ?>" ></td>
	</tr>
	<tr>
		<td>Kode Kabupaten</td>
		<td>:</td>
		<td><input type="text" name="kode_kabupaten" value="<?php echo $data[1]; ?>" ></td>
	</tr>
	<tr>
		<td>Nama Kabupaten</td>
		<td>:</td>
		<td><input type="text" name="nama_kabupaten" value="<?php echo $data[2]; ?>"></td>
	</tr>
	<tr>
		<td><input type="reset" value="Batal"></td>
		<td></td>
		<td><input type="submit" value="Update"></td>
	</tr>
	</table>
  </form>
  <strong>Data Kabupaten</strong>
  <table border="1">
  <tr>
	<td>Kode Provinsi</td>
	<td>Kode Kabupaten</td>
	<td>Nama Kabupaten</td>
	<td>Aksi</td>
  </tr>
  <?php
  include "koneksi.php";
  $sql="select * from kabupaten";
  $query=mysqli_query($conn,$sql);
  while($data=mysqli_fetch_array($query)){
  echo"<tr>";
	echo"<td>$data[0]</td>";
	echo"<td>$data[1]</td>";
	echo"<td>$data[2]</td>";
	echo"<td><a href=./ekabupaten.php?id=$data[1]>Edit</a>|<a href=./dkabupaten.php?id=$data[1]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
  </body>
  </html>