<div id="label-page"><h3>Tampil Data Obat</h3></div>
<div id="content">
	
	<p id="tombol-tambah-container"><a href="index.php?p=obat-input" class="tombol">Tambah Data</a>
	<!-- <a target="_blank" href="pages/cetak.php"><img src="print.png" height="50px" height="50px"></a> -->
	<FORM CLASS="form-inline" METHOD="POST">
	<div align="right"><form method=post><input type="text" name="pencarian"><input type="submit" name="search" value="search" class="tombol"></form>
	</FORM>
	</p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>No Obat</th>
			<th>Nama Obat</th>
			<th>Harga</th>
            <th>Stok</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		

		
		<?php
		$batas = 5;
		extract($_GET);
		if(empty($hal)){
			$posisi = 0;
			$hal = 1;
			$nomor = 1;
		}
		else {
			$posisi = ($hal - 1) * $batas;
			$nomor = $posisi+1;
		}	
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian']));
			if($pencarian != ""){
				$sql = "SELECT * FROM tbobat WHERE nm_obat LIKE '%$pencarian%'
						OR id_obat LIKE '%$pencarian%'
						OR kategori LIKE '%$pencarian%'";
				
				$query = $sql;
				$queryJml = $sql;	
						
			}
			else {
				$query = "SELECT * FROM tbobat LIMIT $posisi, $batas";
				$queryJml = "SELECT * FROM tbobat";
				$no = $posisi * 1;
			}			
		}
		else {
			$query = "SELECT * FROM tbobat LIMIT $posisi, $batas";
			$queryJml = "SELECT * FROM tbobat";
			$no = $posisi * 1;
		}
		
		//$sql="SELECT * FROM tbanggota ORDER BY idanggota DESC";
		$q_tampil_anggota = mysqli_query($db, $query);
		if(mysqli_num_rows($q_tampil_anggota)>0)
		{
		while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
			if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto']=='-'))
				$foto = "admin-no-photo.jpg";
			else
				$foto = $r_tampil_anggota['foto'];
		?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td width=70px height=70px><?php echo $r_tampil_anggota['id_obat']; ?></td>
			<td width=140px><?php echo $r_tampil_anggota['nm_obat']; ?></td>
			<td width=70px><?php echo 'Rp. '.$r_tampil_anggota['harga_obat']; ?></td>
			<td width=140px><?php echo $r_tampil_anggota['stok']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="index.php?p=obat-edit&id=<?php echo $r_tampil_anggota['id_obat'];?>" class="tombol">Edit</a></div>
			</td>
		</tr>		
		<?php $nomor++; } 
		}
		else {
			echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
		}?>		
	</table>
	<?php
	if(isset($_POST['pencarian'])){
	if($_POST['pencarian']!=''){
		echo "<div style=\"float:left;\">";
		$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
		echo "Data Hasil Pencarian: <b>$jml</b>";
		echo "</div>";
	}
	}
	else{ ?>
		<div style="float: left;">		
		<?php
			$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
			echo "Jumlah Data : <b>$jml</b>";
		?>			
		</div>		
		<div class="pagination">		
				<?php
				$jml_hal = ceil($jml/$batas);
				for($i=1; $i<=$jml_hal; $i++){
					if($i != $hal){
						echo "<a href=\"?p=obat&hal=$i\">$i</a>";
					}
					else {
						echo "<a class=\"active\">$i</a>";
					}
				}
				?>
		</div>
	<?php
	}
	?>
</div>