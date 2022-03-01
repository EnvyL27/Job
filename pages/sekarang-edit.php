<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tb_pasien WHERE id_pasien='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);

?>
<div id="label-page"><h3>Edit Data Anggota</h3></div>
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
			<td class="label-formulir">Jenis Kelamin</td>			
			<?php
			if($r_tampil_anggota['gender']=="Pria")
			{
				echo "<td class='isian-formulir'><input type='radio' name='gender' value='Pria' checked>Pria</label></td>
					</tr>
		<tr>
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='gender' value='Wanita'>Wanita</td>";
			}
			elseif($r_tampil_anggota['gender']=="Wanita")
			{
				echo "<td class='isian-formulir'><input type='radio' name='gender' value='Pria'>Pria</label></td>
					</tr>
		<tr>
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='gender' value='Wanita' checked>Wanita</td>";
			}
			?>
			<input type="text" name="gender" value="<?php echo $r_tampil_anggota['gender']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['alamat']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir">Keluhan</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="keluhan" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['keterangan']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir">Terapi</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="terapi" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['terapi']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>