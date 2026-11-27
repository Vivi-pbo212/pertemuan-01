<?php
// Eksekusi Versi OOP - 3 Object Buku

require_once __DIR__ . '/Buku.php';

$daftarBuku = [
    new Buku('Laskar Pelangi', 'Andrea Hirata', 2005),
    new Buku('Bumi Manusia', 'Pramoedya Ananta Toer', 1980),
    new Buku('Negeri 5 Menara', 'Ahmad Fuadi', 2009),
];

echo "=== Versi OOP ===\n";
foreach ($daftarBuku as $item) {
    echo $item->info() . "\n";
}
