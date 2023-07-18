<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nama = isset($_POST['name']) ? $_POST['name'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $telepon = isset($_POST['phone']) ? $_POST['phone'] : '';
  $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
  $tempat_lahir = isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : '';
  $tanggal_lahir = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';
  $pesan = isset($_POST['message']) ? $_POST['message'] : '';

  // Cek apakah data yang diterima tidak kosong sebelum menyimpan ke file.txt
  if (!empty($nama) || !empty($email) || !empty($telepon) || !empty($alamat) || !empty($tempat_lahir) || !empty($tanggal_lahir) || !empty($pesan)) {
    // Format data yang akan disimpan di file.txt
    $data = "Nama: " . $nama . "\n" .
            "Email: " . $email . "\n" .
            "Telepon: " . $telepon . "\n" .
            "Alamat: " . $alamat . "\n" .
            "Tempat Lahir: " . $tempat_lahir . "\n" .
            "Tanggal Lahir: " . $tanggal_lahir . "\n" .
            "Pesan: " . $pesan . "\n\n";

    // Buka file.txt dengan mode append
    $file = fopen('file.txt', 'a');

    // Tulis data ke dalam file.txt
    fwrite($file, $data);

    // Tutup file.txt
    fclose($file);

    echo "Data berhasil disimpan!";
  } else {
    echo "Data tidak lengkap. Mohon isi semua field.";
  }
}
?>
