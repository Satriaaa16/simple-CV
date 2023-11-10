<?php
include 'configure.php';

$result = mysqli_query($conn, "SELECT * FROM cv_data WHERE id=12415"); // Sesuaikan dengan id CV
$data = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <script src="script.js"></script>
  <title>Curriculum Vitae</title>
  <style>  </style>
</head>

<body class="p-3">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#"></a>
        <a class="navbar-brand" href="admin.php">Tambahkan</a>
        <a class="navbar-brand" href="database.php">Data</a>
        <a class="navbar-brand" href="configure.php">connect status</a>
        <a class="nav-link disabled" aria-disabled="true"></a>
      </div>
    </div>
  </div>
</nav>
    <div class="container-fluid bg-body tertiary">
      <h1>Curriculum Vitae</h1>
    </div>
  <div class="card">
    <div class="p-3">
    <img src="img/<?php echo $data['foto_path']; ?>">
      <div class="card-body">
        <h1 class="card-title"><?php echo $data['nama']; ?></h1>
        <p class="card-text"><?php echo $data['alamat']; ?></p>
        <p class="card-text"><?php echo $data['telepon']; ?></p>
        <p class="card-text"><?php echo $data['email']; ?></p>
        <p class="card-text"><?php echo $data['web']; ?></p>
        <h2>Pendidikan</h2>
        <p class="card-text"><?php echo $data['pendidikan']; ?></p>
        <h2>Pengalaman Kerja</h2>
        <p class="card-text"><?php echo $data['pengalaman_kerja']; ?></p>
        <h2>Keterampilan</h2>
        <p class="card-text"><?php echo $data['keterampilan']; ?></p>
      </div>
    </div>
    </div>

  </table>
</body>

</html>
