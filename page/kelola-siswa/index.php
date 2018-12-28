<?php 
require '../../include/koneksi.php';

if (isset($_POST['tombolTambah'])) {
	$nama_siswa = htmlspecialchars(mysqli_real_escape_string($konek, $_POST['nama_siswa']));
	$availability = htmlspecialchars(mysqli_real_escape_string($konek, $_POST['availability']));
	$tempat_tinggal = htmlspecialchars(mysqli_real_escape_string($konek, $_POST['tempat_tinggal']));
	$ttl = htmlspecialchars(mysqli_real_escape_string($konek, $_POST['ttl']));
	$umur = htmlspecialchars(mysqli_real_escape_string($konek, $_POST['umur']));
	$email = htmlspecialchars(mysqli_real_escape_string($konek, $_POST['email']));

	if (empty($nama_siswa) || empty($availability) || empty($tempat_tinggal) || empty($ttl) || empty($umur) || empty($email)) {
		$gagal = "Data masih ada yang kosong";
	} else {
		$simpan = mysqli_query($konek, "INSERT INTO data_siswa VALUES ('','$nama_siswa','$availability','$tempat_tinggal','$ttl','$umur','$email')");
		if ($simpan === TRUE) {
			$berhasil = "Siswa berhasil di tambahkan";
		} else {
			$gagal = "Siswa gagal di tambahkan";
		}
	}

}

if (isset($_POST['tombolSimpan'])) {
	$idSiswa = htmlspecialchars(mysqli_real_escape_string($konek, $_POST['idSiswa']));
	$nama_siswa = htmlspecialchars(mysqli_real_escape_string($konek, $_POST['nama_siswa']));
	$availability = htmlspecialchars(mysqli_real_escape_string($konek, $_POST['availability']));
	$tempat_tinggal = htmlspecialchars(mysqli_real_escape_string($konek, $_POST['tempat_tinggal']));
	$ttl = htmlspecialchars(mysqli_real_escape_string($konek, $_POST['ttl']));
	$umur = htmlspecialchars(mysqli_real_escape_string($konek, $_POST['umur']));
	$email = htmlspecialchars(mysqli_real_escape_string($konek, $_POST['email']));

	if (empty($nama_siswa) || empty($availability) || empty($tempat_tinggal) || empty($ttl) || empty($umur) || empty($email)) {
		$gagal = "Data masih ada yang kosong";
	} else {
		$simpan = mysqli_query($konek, "UPDATE data_siswa SET nama_siswa = '$nama_siswa', availability = '$availability', tempat_tinggal = '$tempat_tinggal', ttl = '$ttl', umur = '$umur', email = '$email' WHERE id = '$idSiswa'");
		if (mysqli_affected_rows($konek) === 1) {
			$berhasil = "Data siswa berhasil di ubah";
		} else {
			$gagal = "Data siswa gagal di ubah";
		}
	}

}

if (isset($_POST['tombolEdit'])) {
	if (isset($_POST['siswaEdit'])) {
		/* Cari siswa */
		$siswaEdit = htmlspecialchars(mysqli_real_escape_string($konek, $_POST['siswaEdit']));
		if (empty($siswaEdit)) {
			$gagal = "Siswa tidak ditemukan";
		} else if (!is_numeric($siswaEdit)) {
			$gagal = "Siswa tidak ditemukan";
		} else {
			$querySiswaEdit = mysqli_query($konek, "SELECT * FROM data_siswa WHERE id = '$siswaEdit'");
			if (mysqli_num_rows($querySiswaEdit) !== 1) {
				$gagal = "Data siswa gagal di edit";
			} else {
				$fetchDataSiswa = mysqli_fetch_assoc($querySiswaEdit);
				$dataSiswaEdit = [
					"idSiswa" => $fetchDataSiswa['id'],
					"nama_siswa" => $fetchDataSiswa['nama_siswa'],
					"availability" => $fetchDataSiswa['availability'],
					"tempat_tinggal" => $fetchDataSiswa['tempat_tinggal'],
					"ttl" => $fetchDataSiswa['ttl'],
					"umur" => $fetchDataSiswa['umur'],
					"email" => $fetchDataSiswa['email']
				];
				$editData = true;
			}
		}
	} else {
		$gagal = "Data tidak di temukan";
	}
}

if (isset($_POST['tombolHapus'])) {
	$siswaHapus = htmlspecialchars(mysqli_real_escape_string($konek, $_POST['siswaHapus']));
	if (empty($siswaHapus)) {
		$gagal = "Siswa tidak ditemukan";
	} else {
		$hapus = mysqli_query($konek, "DELETE FROM data_siswa WHERE id = '$siswaHapus'");
		$berhasil = "Siswa berhasil di hapus";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="author" content="Frendy Santoso">

		<!-- Title -->
		<title>Kelola Siswa - <?= $judul; ?></title>

		<!-- ../Vendor CSS -->
		<link rel="stylesheet" href="../../vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../vendor/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="../../vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../../vendor/animate.css/animate.min.css">
		<link rel="stylesheet" href="../../vendor/jscrollpane/jquery.jscrollpane.css">
		<link rel="stylesheet" href="../../vendor/waves/waves.min.css">
		<link rel="stylesheet" href="../../vendor/chartist/chartist.min.css">
		<link rel="stylesheet" href="../../vendor/switchery/dist/switchery.min.css">
		<link rel="stylesheet" href="../../vendor/DataTables/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="../../vendor/DataTables/Responsive/css/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="../../vendor/DataTables/Buttons/css/buttons.dataTables.min.css">
		<link rel="stylesheet" href="../../vendor/DataTables/Buttons/css/buttons.bootstrap4.min.css">

		<!-- Neptune CSS -->
		<link rel="stylesheet" href="../../css/core.css">

		<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="large-sidebar fixed-sidebar fixed-header">
		<div class="wrapper">

			<?php require '../../include/sidebar.php'; ?>

			<div class="site-content">
				<!-- Content -->
				<div class="content-area p-y-1">
					<div class="container-fluid">
						<h4>Kelola Siswa</h4>
						<ol class="breadcrumb no-bg m-b-1">
							<li class="breadcrumb-item"><a href="<?= $link; ?>">Home</a></li>
							<li class="breadcrumb-item">Page</li>
							<li class="breadcrumb-item active">Kelola Siswa</li>
						</ol>

						<?php if (isset($berhasil)): ?>
						<div class="alert alert-success alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
							</button>
							<strong>Berhasil!</strong> <?= $berhasil; ?>
						</div>
						<?php endif ?>

						<?php if (isset($gagal)): ?>
						<div class="alert alert-danger alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
							</button>
							<strong>Terjadi kesalahan!</strong> <?= $gagal; ?>
						</div>
						<?php endif ?>

						<div class="row">
							<div class="col-md-4">
								<button class="btn btn-success btn-block m-b-1 btn-md" data-toggle="modal" data-target=".tambahSiswa">Tambah Siswa Baru</button>
							</div>
							<div class="col-md-4">
								<button class="btn btn-primary btn-block m-b-1 btn-md" data-toggle="modal" data-target=".editSiswa">Edit Data Siswa</button>
							</div>
							<div class="col-md-4">
								<button class="btn btn-danger btn-block m-b-1 btn-md" data-toggle="modal" data-target=".hapusSiswa">Hapus Siswa</button>
							</div>
						</div>

						<!-- Modal Tambah Siswa -->
						<div class="modal fade tambahSiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										<h4 class="modal-title" id="myModalLabel">Tambah Siswa</h4>
									</div>
									<form action="" method="POST">
										<div class="modal-body">
											<div class="form-group row">
												<label for="namaSiswa" class="col-xs-3 col-form-label">Nama Siswa</label>
												<div class="col-xs-9">
													<input class="form-control" type="text" id="namaSiswa" placeholder="Masukan Nama Siswa" autocomplete="off" name="nama_siswa">
												</div>
											</div>
											<div class="form-group row">
												<label for="Availability" class="col-xs-3 col-form-label">Availability</label>
												<div class="col-xs-9">
													<input class="form-control" type="text" id="Availability" placeholder="Masukan Availability" name="availability">
												</div>
											</div>
											<div class="form-group row">
												<label for="tempatTinggal" class="col-xs-3 col-form-label">Tempat Tinggal</label>
												<div class="col-xs-9">
													<input class="form-control" type="text" id="tempatTinggal" placeholder="Tempat Tinggal" name="tempat_tinggal">
												</div>
											</div>
											<div class="form-group row">
												<label for="TTL" class="col-xs-3 col-form-label">TTL</label>
												<div class="col-xs-9">
													<input class="form-control" type="text" id="TTL" placeholder="Tempat, tanggal lahir" name="ttl">
												</div>
											</div>
											<div class="form-group row">
												<label for="umur" class="col-xs-3 col-form-label">Umur</label>
												<div class="col-xs-9">
													<input class="form-control" type="number" id="umur" placeholder="Masukan Umur" name="umur">
												</div>
											</div>
											<div class="form-group row">
												<label for="email" class="col-xs-3 col-form-label">Email</label>
												<div class="col-xs-9">
													<input class="form-control" type="email" id="email" placeholder="Masukan Email" name="email">
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
											<button type="submit" name="tombolTambah" class="btn btn-primary">Tambah Siswa</button>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="modal fade editSiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										<h4 class="modal-title" id="myModalLabel">Edit Siswa</h4>
									</div>
									<form action="" method="POST">
										<div class="modal-body">
											<div class="form-group row">
												<label for="namaSiswa" class="col-xs-3 col-form-label">Nama Siswa</label>
												<div class="col-xs-9">
													<select name="siswaEdit" id="siswaEdit" class="form-control">
														<option value="0">Pilih salah satu</option>
														<?php 
														$queryEditSiswa = mysqli_query($konek, "SELECT * FROM data_siswa ORDER BY id DESC");
														while($rowEditSiswa = mysqli_fetch_assoc($queryEditSiswa)) :
														?>
														<option value="<?= $rowEditSiswa['id']; ?>"><?= $rowEditSiswa['nama_siswa']; ?></option>
														<?php endwhile; ?>
													</select>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
											<button type="submit" name="tombolEdit" class="btn btn-primary">Edit Siswa</button>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="modal fade hapusSiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										<h4 class="modal-title" id="myModalLabel">Hapus Siswa</h4>
									</div>
									<form action="" method="POST">
										<div class="modal-body">
											<div class="form-group row">
												<label for="namaSiswa" class="col-xs-3 col-form-label">Nama Siswa</label>
												<div class="col-xs-9">
													<select name="siswaHapus" id="siswaHapus" class="form-control">
														<option value="0">Pilih salah satu</option>
														<?php 
														$queryHapusSiswa = mysqli_query($konek, "SELECT * FROM data_siswa ORDER BY id DESC");
														while($rowHapusSiswa = mysqli_fetch_assoc($queryHapusSiswa)) :
														?>
														<option value="<?= $rowHapusSiswa['id']; ?>"><?= $rowHapusSiswa['nama_siswa']; ?></option>
														<?php endwhile; ?>
													</select>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
											<button type="submit" name="tombolHapus" class="btn btn-primary">Hapus Siswa</button>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header clearfix">
								<h5 class="pull-xs-left m-b-0">Kelola Siswa</h5>
							</div>
							<div class="box box-block bg-white"  style="margin-bottom: -10px;">
								<?php if (!isset($editData)): ?>
								<table class="table table-striped table-bordered dataTable" id="table-2">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Siswa</th>
											<th>Availability</th>
											<th>Tempat Tinggal</th>
											<th>TTL</th>
											<th>Umur</th>
											<th>Email</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$no = 1;
										$query_dataSiswa = mysqli_query($konek, "SELECT * FROM data_siswa ORDER BY id DESC");
										while($row_dataSiswa = mysqli_fetch_assoc($query_dataSiswa)) :
										?>
										<tr>
											<td><?= $no; ?></td>
											<td><?= $row_dataSiswa['nama_siswa']; ?></td>
											<td><?= $row_dataSiswa['availability']; ?></td>
											<td><?= $row_dataSiswa['tempat_tinggal']; ?></td>
											<td><?= $row_dataSiswa['ttl']; ?></td>
											<td><?= $row_dataSiswa['umur']; ?> Tahun</td>
											<td><?= $row_dataSiswa['email']; ?></td>
										</tr>
										<?php endwhile; ?>
									</tbody>
								</table>
								<?php endif ?>
								<?php if (isset($editData)): ?>
								<form action="" method="POST">
									<div class="modal-body">
										<div class="form-group row">
											<label for="namaSiswa" class="col-xs-3 col-form-label">Nama Siswa</label>
											<div class="col-xs-9">
												<input type="hidden" name="idSiswa" value="<?= $dataSiswaEdit['idSiswa']; ?>">
												<input class="form-control" type="text" id="namaSiswa" value="<?= $dataSiswaEdit['nama_siswa']; ?>" placeholder="Masukan Nama Siswa" autocomplete="off" name="nama_siswa">
											</div>
										</div>
										<div class="form-group row">
											<label for="Availability" class="col-xs-3 col-form-label">Availability</label>
											<div class="col-xs-9">
												<input class="form-control" type="text" value="<?= $dataSiswaEdit['availability']; ?>" id="Availability" placeholder="Masukan Availability" name="availability">
											</div>
										</div>
										<div class="form-group row">
											<label for="tempatTinggal" class="col-xs-3 col-form-label">Tempat Tinggal</label>
											<div class="col-xs-9">
												<input class="form-control" type="text" value="<?= $dataSiswaEdit['tempat_tinggal']; ?>" id="tempatTinggal" placeholder="Tempat Tinggal" name="tempat_tinggal">
											</div>
										</div>
										<div class="form-group row">
											<label for="TTL" class="col-xs-3 col-form-label">TTL</label>
											<div class="col-xs-9">
												<input class="form-control" value="<?= $dataSiswaEdit['ttl']; ?>" type="text" id="TTL" placeholder="Tempat, tanggal lahir" name="ttl">
											</div>
										</div>
										<div class="form-group row">
											<label for="umur" class="col-xs-3 col-form-label">Umur</label>
											<div class="col-xs-9">
												<input class="form-control" value="<?= $dataSiswaEdit['umur']; ?>" type="number" id="umur" placeholder="Masukan Umur" name="umur">
											</div>
										</div>
										<div class="form-group row">
											<label for="email" class="col-xs-3 col-form-label">Email</label>
											<div class="col-xs-9">
												<input class="form-control" value="<?= $dataSiswaEdit['email']; ?>" type="email" id="email" placeholder="Masukan Email" name="email">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<a href="../kelola-siswa"><button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button></a>
										<button type="submit" name="tombolSimpan" class="btn btn-primary">Simpan Data Siswa</button>
									</div>
								</form>
								<?php endif ?>
							</div>
						</div>
					</div>
				</div>
				<?php require '../../include/footer.php'; ?>
			</div>

		</div>

		<!-- ../Vendor JS -->
		<script type="text/javascript" src="../../vendor/jquery/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="../../vendor/tether/js/tether.min.js"></script>
		<script type="text/javascript" src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../../vendor/detectmobilebrowser/detectmobilebrowser.js"></script>
		<script type="text/javascript" src="../../vendor/jscrollpane/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="../../vendor/jscrollpane/mwheelIntent.js"></script>
		<script type="text/javascript" src="../../vendor/jscrollpane/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" src="../../vendor/waves/waves.min.js"></script>
		<script type="text/javascript" src="../../vendor/chartist/chartist.min.js"></script>
		<script type="text/javascript" src="../../vendor/switchery/dist/switchery.min.js"></script>
		<script type="text/javascript" src="../../vendor/DataTables/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="../../vendor/DataTables/js/dataTables.bootstrap4.min.js"></script>
		<script type="text/javascript" src="../../vendor/DataTables/Responsive/js/dataTables.responsive.min.js"></script>
		<script type="text/javascript" src="../../vendor/DataTables/Responsive/js/responsive.bootstrap4.min.js"></script>
		<script type="text/javascript" src="../../vendor/DataTables/Buttons/js/dataTables.buttons.min.js"></script>
		<script type="text/javascript" src="../../vendor/DataTables/Buttons/js/buttons.bootstrap4.min.js"></script>
		<script type="text/javascript" src="../../vendor/DataTables/JSZip/jszip.min.js"></script>
		<script type="text/javascript" src="../../vendor/DataTables/pdfmake/build/pdfmake.min.js"></script>
		<script type="text/javascript" src="../../vendor/DataTables/pdfmake/build/vfs_fonts.js"></script>
		<script type="text/javascript" src="../../vendor/DataTables/Buttons/js/buttons.html5.min.js"></script>
		<script type="text/javascript" src="../../vendor/DataTables/Buttons/js/buttons.print.min.js"></script>
		<script type="text/javascript" src="../../vendor/DataTables/Buttons/js/buttons.colVis.min.js"></script>


		<!-- Neptune JS -->
		<script type="text/javascript" src="../../js/app.js"></script>
		<script type="text/javascript" src="../../js/demo.js"></script>
		<script type="text/javascript" src="../../js/ui-modal.js"></script>
		<script type="text/javascript" src="../../js/tables-datatable.js"></script>
	</body>
</html>