<?php

require 'vendor/autoload.php';

use App\Config\Env;
use App\Database\Connection;
use App\Repositories\MySQLBookRepository;
use App\Services\BookService;

// Load environment & koneksi database
Env::load(__DIR__ . '/.env');
$pdo = Connection::get();
$service = new BookService(new MySQLBookRepository($pdo));

// Test 1: Ambil daftar buku
echo "Daftar buku: " . count($service->list()) . PHP_EOL;

// Test 2: Validasi (harus menangkap error jika judul kosong)
try {
    $service->create(['judul' => '']);
} catch (Exception $e) {
    echo "✅ Validasi berjalan: " . $e->getMessage() . PHP_EOL;
}

// Test 3: Tambah buku baru yang valid
$new = $service->create([
    'judul'   => 'Pulang',
    'penulis' => 'Leila S. Chudori',
    'tahun'   => 2012,
    'stok'    => 5
]);

echo "Buku dibuat: " . $new['judul'] . " (ID: " . $new['id'] . ")" . PHP_EOL;
