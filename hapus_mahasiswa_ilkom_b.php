<?php

include "loading.php";
	
	$nim=$_GET["nim"];
	$hapus="delete from ilkom_b where NIM='$nim'";

//$hasil=mysql_query($query);
	$hasil=mysqli_query($koneksidb,$hapus);
	echo "<a href=home_ilkom_b.php>Kembali ke Tabel</a>";
	echo "<br><br>";
if ($hasil)
{
	echo "Mahasiswa berhasil diKILL";
}
else
{
	echo "Mahasiswa Gagal diKILL";
}

?> 

<!DOCTYPE html>
<html>
<head>
	<title>::::: KILL Mahasiswa :::::</title>
</head>
<body>

</body>
</html>