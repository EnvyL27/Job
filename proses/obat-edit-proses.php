<?php
include'../koneksi.php';

$id_obat=$_POST['id_obat'];
$nm_obat=$_POST['nm_obat'];
$stok=$_POST['stok'];
$harga_obat=$_POST['harga_obat'];

If(isset($_POST['simpan'])){
	
	mysqli_query($db,
		"UPDATE tbobat
		SET nm_obat='$nm_obat', stok='$stok', harga_obat='$harga_obat'
		WHERE id_obat='$id_obat'"
	);
	header("location:../index.php?p=obat");
}
?>
