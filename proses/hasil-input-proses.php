<?php
include'../koneksi.php';
$id_pasien=$_POST['id_pasien'];
$tanggal=$_POST['tanggal'];
$keluhan=$_POST['keluhan'];
$diagnosa=$_POST['diagnosa'];
$terapi=$_POST['terapi'];

	
if(isset($_POST['simpan'])){	
	$sql = 
	"INSERT INTO tb_periksa(id, id_pasien,tanggal,keluhan,terapi,diagnosa)
		VALUES('','$id_pasien','$tanggal','$keluhan','$terapi','$diagnosa')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=hasil-periksa&id=$id_pasien;");
}
?>