<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		.container {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
	</style>
</head>
<body>
	<div class="container">
		<form action="proses-pendaftaran.php" method="POST" class="col-md-6">
			<h3 class="text-center mb-4">Formulir Pendaftaran Siswa Baru</h3>
			<div class="form-group">
				<label for="nama">Nama:</label>
				<input type="text" name="nama" placeholder="Nama lengkap" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat:</label>
				<textarea name="alamat" class="form-control" required></textarea>
			</div>
			<div class="form-group">
				<label for="jenis_kelamin">Jenis Kelamin:</label><br>
				<div class="form-check form-check-inline">
					<input type="radio" name="jenis_kelamin" value="laki-laki" class="form-check-input" required>
					<label class="form-check-label">Laki-laki</label>
				</div>
				<div class="form-check form-check-inline">
					<input type="radio" name="jenis_kelamin" value="perempuan" class="form-check-input" required>
					<label class="form-check-label">Perempuan</label>
				</div>
			</div>
			<div class="form-group">
				<label for="agama">Agama:</label>
				<select name="agama" class="form-control" required>
					<option>Islam</option>
					<option>Kristen</option>
					<option>Hindu</option>
					<option>Budha</option>
					<option>Atheis</option>
				</select>
			</div>
			<div class="form-group">
				<label for="sekolah_asal">Sekolah Asal:</label>
				<input type="text" name="sekolah_asal" placeholder="Nama sekolah" class="form-control" required>
			</div>
			<div class="form-group text-center">
				<input type="submit" value="Daftar" name="daftar" class="btn btn-primary">
			</div>
		</form>
	</div>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
