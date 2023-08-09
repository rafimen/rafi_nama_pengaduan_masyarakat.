<?php
//PDO
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");

$query = $koneksi->query("select * from pengaduan");
$data = $query->fetchall();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
</head>
<body>
   <nav class="navbar navbar-expand-lg bg-body-tertiary" style="box-shadow: 0px 2px 2px black;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">laporan masyarakat</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="isi.php">isi</a>
              <a class="nav-link" href="#">log out</a>

              
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
      <h3 style="text-align: center;">data laporan</h3>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">tanggal</th>
            <th scope="col">nik</th>
            <th scope="col">laporan</th>
            <th scope="col">foto</th>
            <th scope="col">status</th>
        
          </tr>
        </thead>
        <tbody>
         <?php foreach($data as $pengaduan) { ?>
          <tr>
            <th scope="row">1</th>
            <td><?= $pengaduan['tgl_pengaduan']?></td>
            <td><?= $pengaduan['NIK'] ?></td>
            <td><?= $pengaduan ['isi_laporan']?></td>
            <td><?= $pengaduan ['foto']?></td>
            <td><?= $pengaduan ['status']?></td>

           <?php }?>
         
            

        </tbody>
      </table>
    </div>
</body>
</html>