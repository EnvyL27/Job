<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbobat WHERE id_obat='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
	
?>
<div id="label-page"><h3>Edit Data Obat</h3></div>
<div id="content">
	<form action="proses/obat-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		
		<tr>
			<td class="label-formulir">ID Obat</td>
			<td class="isian-formulir"><input type="text" name="id_obat" value="<?php echo $r_tampil_anggota['id_obat']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama Obat</td>
			<td class="isian-formulir"><input type="text" name="nm_obat" value="<?php echo $r_tampil_anggota['nm_obat']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		
		<tr>
			<td class="label-formulir">Kategori</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="kategori" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['kategori']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir">Stok</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="stok" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['stok']; ?></textarea></td>
		</tr>
        <tr>
			<td class="label-formulir">Harga</td>
			<td class="isian-formulir"><input type="text" name="harga_obat" value="<?php echo $r_tampil_anggota['harga_obat']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>