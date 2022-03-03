<?php
include'../koneksi.php';
$id_pasien=$_POST['id_pasien'];
$nm_pasien=$_POST['nm_pasien'];
$tgl_lhr=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$pekerjaan=$_POST['pekerjaan'];

	
if(isset($_POST['simpan'])){	
	$sql = 
	"INSERT INTO tb_pasien(id_pasien,nm_pasien,tgl_lahir,alamat,pekerjaan)
		VALUES('$id_pasien','$nm_pasien','$tgl_lhr','$alamat','$pekerjaan')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=anggota");
}
?>