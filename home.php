<?php
// ---- Bagian PHP ----
$title = "Website Sederhana dengan PHP";
$pesan = "Halo, Selamat datang di websitemu 😊"; // pesan langsung tampil tanpa input
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?></title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f9;
      text-align: center;
      margin: 0;
      padding: 20px;
    }
    header {
      background: #4CAF50;
      color: white;
      padding: 15px;
    }
    main {
      margin-top: 30px;
    }
    footer {
      margin-top: 50px;
      font-size: 14px;
      color: #555;
    }
  </style>
</head>
<body>
  <header>
    <h1><?php echo $title; ?></h1>
  </header>

  <main>
    <h2>Selamat Datang!</h2>
    <p><b><?php echo $pesan; ?></b></p>
  </main>
<a href="index.php"> Kembali ke halaman Index
  <footer>
    <p>&copy; <?php echo date("Y"); ?> Website Sederhana PHP</p>
  </footer>
</body>
</html>
