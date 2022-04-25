<?php
include'../koneksi.php';
$id_pasien=$_GET['id'];
$today   = new DateTime('today');
mysqli_query($db,
	"DELETE FROM tb_pengunjung
	WHERE id='$id_pasien' "
);

header("location:../index.php?p=hariIni");
?>