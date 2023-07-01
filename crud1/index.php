<!DOCTYPE html>
<html>
<head>
  <title>Pendaftaran Siswa Baru | SMK Coding</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <style>
    body {
      padding-top: 60px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">SMK Coding</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="form-daftar.php">Daftar Baru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="list-siswa.php">Pendaftar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <div class="card text-center">
          <div class="card-header">
            <h3>Pendaftaran Siswa Baru</h3>
          </div>
          <div class="card-body">
            <?php if(isset($_GET['status'])): ?>
              <div class="alert alert-primary" role="alert">
                <?php echo $_GET['status'] == 'sukses' ? 'Pendaftaran siswa baru berhasil!' : 'Pendaftaran gagal!'; ?>
              </div>
            <?php endif; ?>
            <a class="btn btn-primary btn-lg" href="form-daftar.php">Daftar Baru</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card text-center">
          <div class="card-header">
            <h3>Siswa yang sudah mendaftar</h3>
          </div>
          <div class="card-body">
            <a class="btn btn-secondary btn-lg" href="list-siswa.php">Pendaftar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
