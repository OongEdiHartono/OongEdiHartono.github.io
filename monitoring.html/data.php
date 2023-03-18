<?php
// Koneksi ke database atau membaca data dari file teks
// Lakukan pengolahan data sesuai dengan kebutuhan Anda

// Baca data daya dari database atau file teks
$data = array();
for ($i = 0; $i < 10; $i++) {
  $time = time() - 10 + $i; // waktu 10 detik terakhir
  $value = rand(1, 100) / 10; // nilai daya acak antara 0.1 dan 10 watt
  $data[] = array('time' => $time, 'value' => $value);
}

// Mengembalikan data dalam format JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
