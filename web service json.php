<?php
// Data yang akan dienkripsi
$data = '...'; // Masukkan data JSON Anda di sini

// Kunci untuk enkripsi AES
$key = 'kuncirahasia'; // Ganti dengan kunci yang aman

// Generate initialisasi vektor secara acak
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-ctr'));

// Melakukan enkripsi menggunakan AES 256 CTR
$encrypted = openssl_encrypt($data, 'aes-256-ctr', $key, 0, $iv);

// Melakukan encoding base64
$encoded = base64_encode($iv . $encrypted);

// Menyimpan hasil enkripsi pada suatu watermark
// Misalnya, Anda dapat menyimpan $encoded ke dalam database atau file

// Untuk dekripsi, Anda dapat menggunakan langkah-langkah sebaliknya

?>
