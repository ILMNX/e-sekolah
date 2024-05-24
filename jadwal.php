<?php
	if (isset($_SESSION['kelas'])) {
		$kelas = $_SESSION['kelas'];
		unset($_SESSION['kelas']);
	} else {
		$kelas = @$_POST['kelas'];
	}
	if (isset($_SESSION['action'])) {
		$action = $_SESSION['action'];
		unset($_SESSION['action']);
	} else {
		$action = @$_POST['action'];
	}
	$sekolah = $_SESSION['idsekolah'];
	if ($kelas == "") {
		$result = $db->query("SELECT id FROM smartsch_kes.kelas WHERE idsekolah = '$sekolah' LIMIT 0,1");
		while ($data = $result->fetch(PDO::FETCH_BOTH)) {
			$kelas = $data['id'];
		}
	}
	if (isset($_POST['simpan'])) {
		// SELECT id, hari, kelas, pelajaran, sekolah, jam_masuk, jam_keluar FROM jadwal_1 WHERE 1
		$hari = $_POST['hari'];
		$pelajaran = $_POST['pelajaran'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = $_POST['jam_keluar'];
		$_SESSION['kelas'] = $kelas;
		$bukan_pelajaran = @$_POST['bukan_pelajaran'];

		$error = FALSE;
		if ($jam_masuk >= $jam_keluar) {
			$_SESSION['action'] = "new";
			$_SESSION['error'] = "Jam masuk tidak boleh lebih besar/sama dengan jam keluar.";
			header("Location:?r=kes&m=jadwal_dan_pelajaran&type=jadwal");
		}

		// CEK APAKAH JAM PELAJARAN ADA YANG BENTROK DI KELAS TERBEUT
		$bentrok = FALSE;
		$result = $db->query("SELECT id FROM smartsch_kes.jadwal_1 WHERE hari = '$hari' AND kelas = '$kelas' AND ((jam_masuk > '$jam_masuk' AND jam_masuk < '$jam_keluar') OR (jam_keluar > '$jam_masuk' AND jam_keluar < '$jam_keluar') OR ('$jam_masuk' > jam_masuk AND '$jam_masuk' < jam_keluar) OR ('$jam_keluar' > jam_masuk AND '$jam_keluar' < jam_keluar))");
		while ($data = $result->fetch(PDO::FETCH_BOTH)) {
			$bentrok = TRUE;
		}
		// echo "bentrok => $bentrok";

		if ($bentrok == TRUE) {
			$_SESSION['action'] = "new";
			$_SESSION['error'] = "Jadwal gagal dimasukan, sudah ada pelajaran lain di kelas terebut pada jam $jam_masuk - $jam_keluar.";
			header("Location:?r=kes&m=jadwal_dan_pelajaran&type=jadwal");
		}


		$guru_bentrok = FALSE;
		if ($bukan_pelajaran == "") {
			$result = $db->query("SELECT id FROM smartsch_kes.jadwal_1 WHERE hari = '$hari' AND ((jam_masuk > '$jam_masuk' AND jam_masuk < '$jam_keluar') OR (jam_keluar > '$jam_masuk' AND jam_keluar < '$jam_keluar') OR ('$jam_masuk' > jam_masuk AND '$jam_masuk' < jam_keluar) OR ('$jam_keluar' > jam_masuk AND '$jam_keluar' < jam_keluar)) AND pelajaran IN (SELECT id FROM smartsch_kes.pelajaran WHERE idpegawai = (SELECT idpegawai FROM smartsch_kes.pelajaran WHERE id = '$pelajaran'))");
			while ($data = $result->fetch(PDO::FETCH_BOTH)) {
				$guru_bentrok = TRUE;
			}
			if ($guru_bentrok == TRUE) {
				$_SESSION['action'] = "new";
				$_SESSION['error'] = "Jadwal gagal dimasukan, guru pada mata pelajaran tersebut sudah ada jadwal lain pada jam $jam_masuk - $jam_keluar.";
				header("Location:?r=kes&m=jadwal_dan_pelajaran&type=jadwal");
			}
			$bukan_pelajaran = 0;
		} else {
			$pelajaran = $_POST['pelajaran_1'];
		}
		if ($bentrok == FALSE && $guru_bentrok == FALSE) {
			$simpan = $db->query("INSERT INTO smartsch_kes.jadwal_1 (hari, kelas, pelajaran, sekolah, jam_masuk, jam_keluar, bukan_pelajaran) VALUES ('$hari', '$kelas', '$pelajaran', '$sekolah', '$jam_masuk', '$jam_keluar', '$bukan_pelajaran')");
			if ($simpan) {
				$_SESSION['success'] = "Jadwal berhasil dimasukan";
				header("Location:?r=kes&m=jadwal_dan_pelajaran&type=jadwal");
			} else {
				$_SESSION['action'] = "new";
				$_SESSION['error'] = "Jadwal gagal dimasukan";
				header("Location:?r=kes&m=jadwal_dan_pelajaran&type=jadwal");
			}
		}
	}
	if (isset($_POST['delete'])) {
		$id = $_POST['id'];
		$_SESSION['kelas'] = $_POST['kelas'];

		$delete = $db->query("DELETE FROM smartsch_kes.jadwal_1 WHERE id = '$id' AND kelas = '$kelas'");
		if ($delete) {
			$_SESSION['success'] = "Jadwal berhasil dihapus";
			header("Location:?r=kes&m=jadwal_dan_pelajaran&type=jadwal");
		} else {
			$_SESSION['error'] = "Jadwal gagal dihapus";
			header("Location:?r=kes&m=jadwal_dan_pelajaran&type=jadwal");
		}
	}
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".select2").select2();
    })
</script>
<form class="form-inline" method="POST" action="">
	<label>Pilih Kelas</label>
    <select required="" class="form-control" name="kelas" onchange="form.submit()">
        <option value="" disabled="" selected="">Pilih Kelas</option>
        <?php
            $result = $db->query("SELECT * FROM smartsch_ools.departemen WHERE id IN (SELECT iddepartemen FROM smartsch_ools.jenjang WHERE idsekolah = '$_SESSION[idsekolah]')");
            while ($data = $result->fetch(PDO::FETCH_BOTH)) { ?>
                <optgroup label="<?=$data[1]?>">
                    <?php
                        $result1 = $db->query("SELECT id, kelas FROM smartsch_kes.kelas WHERE idsekolah = '$_SESSION[idsekolah]' AND idtingkat IN (SELECT id FROM smartsch_ools.tingkat WHERE iddepartemen = '$data[0]') ORDER BY idtingkat ASC, kelas ASC");
                        while ($data1 = $result1->fetch(PDO::FETCH_BOTH)) { ?>
                            <option value="<?=$data1['id']?>" <?php if($data1['id'] == $kelas) echo "selected"; ?>>Kelas <?=$data1['kelas']?></option>
                        <?php }
                    ?>
                </optgroup>
            <?php }
        ?>
    </select>
</form>
<hr>
<?php
    $result = $db->query("SELECT kelas, idpegawai FROM smartsch_kes.kelas WHERE id = '$kelas'");
    while ($data = $result->fetch(PDO::FETCH_BOTH)) {
        $nama_kelas = $data['kelas'];
        $pegawai = $data['idpegawai'];
    }
    $result = $db->query("SELECT nama FROM smartsch_kep.pegawai WHERE id = '$pegawai'");
    while ($data = $result->fetch(PDO::FETCH_BOTH)) {
        $wali_kelas = ucwords($data['nama']);
    }
?>
<table style="border-left: 3px solid #337AB7;">
    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td style="font-weight: bold;"><?php echo $nama_kelas ?></td>
    </tr>
    <tr>
        <td>Wali Kelas</td>
        <td>:</td>
        <td style="font-weight: bold;"><?php echo $wali_kelas ?></td>
    </tr>
</table>
<form class="inline pull-right" method="POST" action="">
	<?php if ($action == ""): ?>
		<div class="form-group">
			<input type="hidden" name="action" value="new">
			<input type="hidden" name="kelas" value="<?php echo $kelas ?>">
			<button type="submit" name="" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Jadwal</button>
		</div>
	<?php endif ?>
	<?php if ($action == "new"): ?>
		<div class="form-group">
			<input type="hidden" name="action" value="">
			<input type="hidden" name="kelas" value="<?php echo $kelas ?>">
			<button type="submit" name="" class="btn btn-danger"><i class="fa fa-times"></i> Cancel</button>
		</div>
	<?php endif ?>
</form>
<?php if ($action == ""): ?>
	<table width="100%" border="1" style="border-collapse: collapse;margin-top: 10px;">
		<thead>
			<tr>
				<td style="text-align: center;">Jam/Hari</td>
				<?php
					$result = $db->query("SELECT * FROM smartsch_kes.hari");
					while ($data = $result->fetch(PDO::FETCH_BOTH)) { ?>
						<td style="text-align: center;" width="13%"><?php echo $data['hari'] ?></td>
					<?php }
				?>
			</tr>
		</thead>
		<tbody>
			<?php
				$stop = FALSE;
				for ($jam = 6; $jam <= 18; $jam++) { 
					for ($menit = 0; $menit < 60; $menit+=5) { 
						switch (strlen($jam)) {
							case '1':
								$jam_pelajaran = "0".$jam;
								break;
							case '2':
								$jam_pelajaran = $jam;
								break;
							default:
								break;
						}
						switch (strlen($menit)) {
							case '1':
								$jam_pelajaran .= ":0".$menit;
								break;
							case '2':
								$jam_pelajaran .= ":".$menit;
								break;
							default:
								break;
						}
						?>
						<tr>
							<?php if ($menit == 0): ?>
								<td height="1px" rowspan="12" style="text-align: center;"><?php echo $jam_pelajaran ?></td>
							<?php endif ?>
							<?php
								$result = $db->query("SELECT * FROM smartsch_kes.hari");
								while ($data = $result->fetch(PDO::FETCH_BOTH)) {
									$ada_pelejaran = FALSE;
									$rowspan = 1;
									$result1 = $db->query("SELECT * FROM smartsch_kes.jadwal_1 WHERE kelas = '$kelas' AND hari = '$data[id]' AND jam_masuk = '$jam_pelajaran'");
									while ($data1 = $result1->fetch(PDO::FETCH_BOTH)) {
										$ada_pelejaran = TRUE;
										list($h,$m) = explode(":",$data1['jam_masuk']);
										$dtAwal = mktime($h,$m,"1","1");
										list($h,$m) = explode(":",$data1['jam_keluar']);
										$dtAkhir = mktime($h,$m,"1","1");
										$dtSelisih = $dtAkhir-$dtAwal;
										$rowspan = $dtSelisih/60/5;
										$jam_masuk = $data1['jam_masuk'];
										$jam_keluar = $data1['jam_keluar'];
										$pelajaran = $data1['pelajaran'];
										$bukan_pelajaran = $data1['bukan_pelajaran'];
										$id = $data1['id'];
									} ?>
									<?php if ($ada_pelejaran == FALSE): ?>
										<?php
											$kolom_kosong = FALSE;
											$result1 = $db->query("SELECT * FROM smartsch_kes.jadwal_1 WHERE kelas = '$kelas' AND hari = '$data[id]' AND jam_masuk != '$jam_pelajaran' AND '$jam_pelajaran' > jam_masuk AND '$jam_pelajaran' < jam_keluar");
											while ($data1 = $result1->fetch(PDO::FETCH_BOTH)) {
												$kolom_kosong = TRUE;
											}
										?>
										<?php if ($kolom_kosong == FALSE): ?>
											<td style="border-top: none;border-bottom: none;"></td>
										<?php endif ?>
									<?php endif ?>
									<?php if ($ada_pelejaran == TRUE): ?>
										<td style="text-align: center;border-top: none;border-bottom: none;" rowspan="<?php echo $rowspan ?>">
											<?php
												if ($bukan_pelajaran == 0) {
													$result1 = $db->query("SELECT smartsch_kes.pelajaran.kode, smartsch_kes.pelajaran.pelajaran, smartsch_kep.pegawai.nama FROM smartsch_kep.pegawai, smartsch_kes.pelajaran WHERE smartsch_kep.pegawai.id = smartsch_kes.pelajaran.idpegawai AND smartsch_kes.pelajaran.id = '$pelajaran'");
													while ($data1 = $result1->fetch(PDO::FETCH_BOTH)) {
														$nama_pelajaran = ucwords($data1['pelajaran']);
														$guru_pengajar = ucwords($data1['nama']);
													}
												} else {
													$nama_pelajaran = $pelajaran;
													$guru_pengajar = "";
												}
											?>
											<span style="font-size: 12px;font-weight: bold;"><?php echo $nama_pelajaran ?></span><br>
											<?php if ($bukan_pelajaran == 0): ?>
												<span style="font-size: 12px;"><?php echo $guru_pengajar ?></span><br>
											<?php endif ?>
											<span style="font-size: 12px;"><?php echo $jam_masuk."-".$jam_keluar ?></span>
											<form method="POST" action="">
												<input type="hidden" name="id" value="<?php echo $id ?>">
												<input type="hidden" name="kelas" value="<?php echo $kelas ?>">
												<button type="submit" name="delete" class="" style="background:none;border:none;font-size:1em;color:red;"><i class="fa fa-trash"></i></button>
											</form>
										</td>
									<?php endif ?>
								<?php }
							?>
						</tr>
					<?php }
				}
			?>
		</tbody>
	</table>
<?php endif ?>
<?php if ($action == "new"): ?>
	<hr>
	<form class="form-horizontal" method="POST" action="">
		<div class="form-group">
			<label class="col-md-2 control-label">Kelas<span class="required">*</span></label>
			<div class="col-md-2">
			    <select required="" class="form-control" name="kelas" readonly="">
			        <option value="" disabled="" selected="">Pilih Kelas</option>
			        <?php
                        $result = $db->query("SELECT id, kelas FROM smartsch_kes.kelas WHERE id = '$kelas'");
                        while ($data = $result->fetch(PDO::FETCH_BOTH)) { ?>
                            <option value="<?=$data['id']?>" <?php if($data['id'] == $kelas) echo "selected"; ?>>Kelas <?=$data['kelas']?></option>
                        <?php }
                    ?>
			    </select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Pelajaran<span class="required">*</span></label>
			<div class="col-md-3">
			    <select required="" class="form-control" name="pelajaran" id="hide_">
			        <option value="" disabled="" selected="">Pilih Pelajaran</option>
			        <?php
			        	$result = $db->query("SELECT id, kode, pelajaran FROM smartsch_kes.pelajaran WHERE id IN (SELECT idpelajaran FROM smartsch_kes.krs WHERE idkelas = '$kelas') ORDER BY pelajaran ASC");
			        	while ($data = $result->fetch(PDO::FETCH_BOTH)) { ?>
			        		<option value="<?php echo $data['id'] ?>"><?php echo ucwords($data['pelajaran']) ?></option>
			        	<?php }
			        ?>
			    </select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label"></label>
			<div class="col-md-4">
				<input type="checkbox" name="bukan_pelajaran" id="show_" class="" value="1"> Bukan Pelajaran
				<textarea name="pelajaran_1" class="form-control" id="show_1" placeholder="Upacara, Istirahat, dll." style="display: none;"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Hari<span class="required">*</span></label>
			<div class="col-md-2">
			    <select required="" class="form-control" name="hari">
			        <option value="" disabled="" selected="">Pilih Hari</option>
			        <?php
			        	$result = $db->query("SELECT id, hari FROM smartsch_kes.hari");
			        	while ($data = $result->fetch(PDO::FETCH_BOTH)) { ?>
			        		<option value="<?php echo $data['id'] ?>"><?php echo ucwords($data['hari']) ?></option>
			        	<?php }
			        ?>
			    </select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Jam Masuk<span class="required">*</span></label>
			<div class="col-md-2">
			    <select required="" class="form-control select2" name="jam_masuk">
			        <option value="" disabled="" selected="">Pilih Jam</option>
			        <?php
						for ($jam = 6; $jam <= 18; $jam++) { 
							for ($menit = 0; $menit < 60; $menit+=5) { 
								switch (strlen($jam)) {
									case '1':
										$jam_pelajaran = "0".$jam;
										break;
									case '2':
										$jam_pelajaran = $jam;
										break;
									default:
										break;
								}
								switch (strlen($menit)) {
									case '1':
										$jam_pelajaran .= ":0".$menit;
										break;
									case '2':
										$jam_pelajaran .= ":".$menit;
										break;
									default:
										break;
								} ?>
								<option value="<?php echo $jam_pelajaran ?>"><?php echo $jam_pelajaran ?></option>
							<?php }
						}
			        ?>
			    </select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Jam Keluar<span class="required">*</span></label>
			<div class="col-md-2">
			    <select required="" class="form-control select2" name="jam_keluar">
			        <option value="" disabled="" selected="">Pilih Jam</option>
			        <?php
						for ($jam = 6; $jam <= 18; $jam++) { 
							for ($menit = 0; $menit < 60; $menit+=5) { 
								switch (strlen($jam)) {
									case '1':
										$jam_pelajaran = "0".$jam;
										break;
									case '2':
										$jam_pelajaran = $jam;
										break;
									default:
										break;
								}
								switch (strlen($menit)) {
									case '1':
										$jam_pelajaran .= ":0".$menit;
										break;
									case '2':
										$jam_pelajaran .= ":".$menit;
										break;
									default:
										break;
								} ?>
								<option value="<?php echo $jam_pelajaran ?>"><?php echo $jam_pelajaran ?></option>
							<?php }
						}
			        ?>
			    </select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label"></label>
			<div class="col-md-4" style="text-align: right;">
				<span class="required">*required</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label"></label>
			<div class="col-md-2">
				<button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
			</div>
		</div>
	</form>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#show_").change(function(){
				if ($('#show_').is(':checked')) {
					$("#show_1").show();
					$("#hide_").attr("disabled", "disabled");
					$("#show_1").attr("required", "required");
					$("#hide_").removeAttr("required");
					$("#show_1").removeAttr("disabled");
				} else {
					$("#show_1").hide();
					$("#show_1").attr("disabled", "disabled");
					$("#hide_").attr("required", "required");
					$("#show_1").removeAttr("required");
					$("#hide_").removeAttr("disabled");
				}
			})
		})
	</script>
<?php endif ?>