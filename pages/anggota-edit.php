
<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tb_pasien WHERE id_pasien='$id_anggota'");
	$q_tampil_periksa=mysqli_query($db,"SELECT * FROM tb_periksa WHERE id_pasien='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
	$r_tampil_periksa=mysqli_fetch_array($q_tampil_periksa);
?>
<div id="label-page"><h3>Edit Data Pasien</h3></div>
<div id="content">
	<form action="proses/anggota-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
	
		<tr>
			<td class="label-formulir">ID Anggota</td>
			<td class="isian-formulir"><input type="text" name="id_pasien" value="<?php echo $r_tampil_anggota['id_pasien']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><input type="text" name="nm_pasien" value="<?php echo $r_tampil_anggota['nm_pasien']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Lahir</td>
			<td class="isian-formulir"><input type="date" name="tgl_lahir" value="<?php echo $r_tampil_anggota['tgl_lahir']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
	
		<tr>
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['alamat']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir">Pekerjaan</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="pekerjaan" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['pekerjaan']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td><div class="tombol-opsi-container"><a href="index.php?p=hasil-periksa&id=<?php echo $r_tampil_anggota['id_pasien'];?>" class="tombol">Hasil</a></div></td>
		</tr>
		<!-- <tr>
			<td class="label-formulir"></td>
			<td><div class="tombol-opsi-container"><a href="pages/PrintPage.php" class="tombol">Surat Sakit</a></div></td>
		</tr> -->
	</table>
	</form>
</div>