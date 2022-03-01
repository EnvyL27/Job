<?php
include'../koneksi.php';
$id_pasien=$_POST['id_pasien'];
$nm_pasien=$_POST['nm_pasien'];
$tgl_lhr=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];

	
if(isset($_POST['simpan'])){	
	$sql = 
	"INSERT INTO tb_pasien(id_pasien,nm_pasien,tgl_lahir,alamat)
		VALUES('$id_pasien','$nm_pasien','$tgl_lhr','$alamat')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=anggota");
}
?>