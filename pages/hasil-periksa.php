
<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tb_pasien WHERE id_pasien='$id_anggota'");
	$id_hasil_pasien=mysqli_query($db,"SELECT  id, id_pasien, tanggal, keluhan, hasilPeriksa, tarif,diagnosa, terapi  FROM tb_periksa WHERE id_pasien = $id_anggota");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
	
	
?>
<div id="label-page"><h3>Hasil Pemeriksaan Pasien</h3></div>
<div id="content">
	<form action="proses/anggota-edit-proses.php" method="post" enctype="multipart/form-data"> 
    <div class="tombol-opsi-container"><a href="index.php?p=hasil-input&id=<?php echo $r_tampil_anggota['id_pasien'];?>" class="tombol">Tambah data</a></div><br><br>
	<?php
		echo "Nama Pasien: ".$r_tampil_anggota['nm_pasien'];
	?>
	<br><br>
    <table width="400px" id="tabel-tampil">
		<tr>
			<th>Tanggal</th>
			<th>Keluhan</th>
			<th>Hasil Pemeriksaan</th>
			<th>Diagnosa</th>			
			<th>Terapi</th>
			<th>Tarif</th>
			<th>Opsi</th>
		</tr>	
		<?php
		while ($r_tampil_periksa=mysqli_fetch_array($id_hasil_pasien))
			{
	 ?>
 		<tr>
			<td width=70px height=70px><?php echo $r_tampil_periksa['tanggal']; ?></td>
			<td width=70px><?php echo $r_tampil_periksa['keluhan']; ?></td>
			<td width=70px><?php echo $r_tampil_periksa['hasilPeriksa']; ?></td>
			<td width=70px><?php echo $r_tampil_periksa['diagnosa']; ?></td>
			<td width=70px><?php echo $r_tampil_periksa['terapi']; ?></td>
			<td width=70px><?php echo "Rp. ".$r_tampil_periksa['tarif']; ?></td>
			<td width=70px>
				<div class="tombol-opsi-container"><a href="index.php?p=hasil-edit&id=<?php echo $r_tampil_periksa['id'];?>" class="tombol">Edit</a></div>
			</td>
		</tr>		
		<?php
			}		
		?>		
		
	</table>
    <br>
    <div class="tombol-opsi-container"><a href="index.php?p=anggota" class="tombol">Kembali</a></div>
</div>