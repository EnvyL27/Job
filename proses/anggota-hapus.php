<?php
include'../koneksi.php';
$id_pasien=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tb_pasien
	WHERE id_pasien='$id_pasien'"
);

header("location:../index.php?p=anggota");
?>