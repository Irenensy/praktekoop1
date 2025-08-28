<?php
// ---- Bagian PHP ----
$title = "Website Sederhana dengan PHP";
$pesan = "";

// Jika form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $pesan = "Halo, $nama! Selamat datang di websitemu 😊";
}
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
    form {
      margin-top: 20px;
    }
    input, button {
      padding: 8px;
      margin: 5px;
    }
  </style>
</head>
<body>
  <header>
    <h1><?php echo $title; ?></h1>
  </header>

  <main>
    <h2>Formulir Sapa</h2>
    <form method="post">
      <input type="text" name="nama" placeholder="Masukkan namamu" required>
      <button type="submit">Kirim</button>
    </form>

    <?php if ($pesan): ?>
      <p><b><?php echo $pesan; ?></b></p>
    <?php endif; ?>
  </main>
<a href="index.php"> Kembali ke halaman Index
</a>
  <footer>
    <p>&copy; <?php echo date("Y"); ?> Website Sederhana PHP</p>
  </footer>
</body>
</html>
