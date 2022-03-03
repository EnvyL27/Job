<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tb_pasien WHERE id_pasien='$id_anggota'");
	$id_hasil_pasien=mysqli_query($db,"SELECT  id, id_pasien, tanggal, keluhan, diagnosa, terapi, hasilPeriksa, tarif  FROM tb_periksa WHERE id = $id_anggota");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
	$hari_ini = date('Y-m-d');
	$r_tampil_periksa=mysqli_fetch_array($id_hasil_pasien)
	
?>

<div id="label-page"><h3>Input Data Pasien</h3></div>
<div id="content">
	<form action="proses/hasil-edit-proses.php" method="post" enctype="multipart/form-data">
	
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID</td>
			<td class="isian-formulir"><input type="text" name="id" class="isian-formulir isian-formulir-border" value="<?php echo $id_anggota;?>"required></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal </td>
			<td class="isian-formulir"><input type="date" name="tanggal" class="isian-formulir isian-formulir-border" value = "<?php echo $hari_ini;?>" required></td>
		</tr>
		<tr>
        <td class="label-formulir">Keluhan</td>
			<td class="isian-formulir"><?php echo $r_tampil_periksa['keluhan'];?></td>
		</tr>
		<tr>
        <td class="label-formulir">Diagnosa</td>
			<td class="isian-formulir"><?php echo $r_tampil_periksa['diagnosa'];?></td>
		</tr>
		<tr>
        <td class="label-formulir">Hasil Periksa</td>
			<td class="isian-formulir"><?php echo $r_tampil_periksa['hasilPeriksa'];?></td>
		</tr>
		<tr>
			<td class="label-formulir">Terapi</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="terapi" class="isian-formulir isian-formulir-border" ><?php echo $r_tampil_periksa['terapi'];?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir">Tarif</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="tarif" class="isian-formulir isian-formulir-border" ><?php echo $r_tampil_periksa['tarif'];?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>