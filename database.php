<?php
//gunakan file config.php
include_once("configure.php");

//ambil data dan simpan kedalam variabel result
$result = mysqli_query($conn, "SELECT * FROM cv_data ORDER BY nama ASC");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="main.css">

  <title>Database CV</title>
  
</head>

<body class="p-3">
<nav class="navbar sticky-top bg-body-tertiary biru">
  <h3>Database</h3>
  <a class="btn btn-success" href="add.php">Tambah User</a>
</nav>
  <table class="table table-hover">
    <tr>
      <th>Nama</th>
      <th>alamat</th>
      <th>telepon</th>
      <th>email</th>
      <th>web</th>
      <th>pendidikan</th>
      <th>keterampilan</th>
      <th>pengalaman kerja</th>
      <th>foto </th>
    </tr>

    <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['nama'] . "</td>";
      echo "<td>" . $row['alamat'] . "</td>";
      echo "<td>" . $row['telepon'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['web'] . "</td>";
      echo "<td>" . $row['pendidikan'] . "</td>";
      echo "<td>" . $row['keterampilan'] . "</td>";
      echo "<td>" . $row['pengalaman_kerja'] . "</td>";
      echo "<td>" . $row['foto_path'] . "</td>";
      echo "<td> 
             
            </td>";
      echo "</tr>";
    }
    ?>

  </table>
</body>

</html>
