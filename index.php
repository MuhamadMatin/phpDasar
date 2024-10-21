<?php
session_start();
require './config.php';

if (isset($_POST["btn"])) {
  $kode = $_POST["kode"];
  $nama = $_POST["nama"];
  $satuan = $_POST["satuan"];
  $jumlah = $_POST["jumlah"];

  $query = mysqli_query($conn, "INSERT INTO product VALUE('$kode', '$nama', '$satuan', '$jumlah')");

  if (mysqli_affected_rows($conn) > 0) {
    echo "
          <script>
              alert('Product berhasil di tambahkan')
          </script>
      ";
  } else {
    echo "
          <script>
              alert('Product gagal di tambahkan')
          </script>
      ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masukan</title>
</head>

<body>
  <div class="container">
    <form method="post">
      <h1>Tambah Product</h1>
      <div class="label">
        <label for="kode">kode barang</label>
      </div>
      <input type="text" name="kode" id="kode" class="field" required>
      <div class="label">
        <label for="nama">nama barang</label>
      </div>
      <input type="text" name="nama" id="nama" class="field" required>
      <div class="label">
        <label for="satuan">satuan barang</label>
      </div>
      <input type="number" name="satuan" id="satuan" class="field" required>
      <div class="label">
        <label for="jumlah">jumlah barang</label>
      </div>
      <input type="number" name="jumlah" id="jumlah" class="field" required>
      <button type="submit" name="btn">Tambahkan</button>
    </form>
  </div>
</body>

</html>