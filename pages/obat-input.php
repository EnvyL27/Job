<div id="label-page"><h3>Input Data Pasien</h3></div>
<div id="content">
	<form action="proses/obat-input-proses.php" method="post" enctype="multipart/form-data">
	
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Obat</td>
			<td class="isian-formulir"><input type="text" name="id_obat" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama Obat</td>
			<td class="isian-formulir"><input type="text" name="nm_obat" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Stok</td>
			<td class="isian-formulir"><input type="text" name="stok" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Harga Obat</td>
			<td class="isian-formulir"><input type="text" name="harga" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>