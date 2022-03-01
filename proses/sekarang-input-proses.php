<?php
include'../koneksi.php';

$id_pasien=$_POST['id_pasien'];
$tanggal=$_POST['tanggal'];

	
if(isset($_POST['simpan'])){	
	$sql = 
	"INSERT INTO tb_pengunjung(id_pasien,tanggal)
		VALUES('$id_pasien','$tanggal')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=hariIni");
}
?>