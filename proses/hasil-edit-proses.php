<?php
include'../koneksi.php';
$id=$_POST['id'];
$terapi=$_POST['terapi'];
$tarif=$_POST['tarif'];

	
if(isset($_POST['simpan'])){	
	$sql = 
	"UPDATE tb_periksa 
	 SET terapi = '$terapi', tarif = '$tarif'
	 WHERE id='$id'";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=hariIni");
}
?>