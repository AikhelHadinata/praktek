<!doctype html>
<html lang="en">
<h1>Input Provinsi</h1>
 <head><br>
  <title>Data Provinsi</title>
  <script>
		function onlynumber(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		   	alert('Please enter data in the form of numbers (ex: 0,1,2,3....etc)');
		   	return false;
		   } else {
		   	return true;
		   }
		  	
		}
	</script>
 </head>
 <body>
  <form method="post" action="sprovinsi.php">
	<table>
	<tr>
		<td>Kode Provinsi</td>
		<td>:</td>
		<td>

			<input type="text" name="kode_provinsi" onkeypress="return onlynumber(event)"></td>
	</tr>
	<tr>
		<td>Nama Provinsi</td>
		<td>:</td>
		<td><input type="text" name="nama_provinsi"></td>
	</tr>
	<tr>
		<td><input type="reset" value="Batal"></td>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
	</table>
  </form>
  <strong>Data Provinsi</strong>
  <table border="1" width=50%>
  <tr>
	<td align=center>Kode Provinsi</td>
	<td align=center>Nama Provinsi</td>
	<td align=center>Pilihan</td>
  </tr>
  <?php
  include "koneksi.php";
  $sql="select * from Provinsi";
  $query=mysqli_query($conn,$sql);
  while($data=mysqli_fetch_array($query)){
  echo"<tr>";
	echo"<td>$data[0]</td>";
	echo"<td>$data[1]</td>";
	echo"<td><a href=./eprovinsi.php?id=$data[0]>Edit</a>|<a href=./dprovinsi.php?id=$data[0]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
 </body>
</html>
