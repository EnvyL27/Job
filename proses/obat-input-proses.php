<?php
include'../koneksi.php';
$id_obat=$_POST['id_obat'];
$nm_obat=$_POST['nm_obat'];
$stok=$_POST['stok'];
$harga=$_POST['harga'];

	
if(isset($_POST['simpan'])){	
	$sql = 
	"INSERT INTO tbobat(id_obat,nm_obat,harga_obat,stok)
		VALUES('$id_obat','$nm_obat','$harga','$stok')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=obat");
}
?>