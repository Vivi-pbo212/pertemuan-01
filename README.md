# Lab Sheet Pertemuan 1: Paradigma Pemrograman Berorientasi Objek

- **Nama:** Novy Astoty
- **NIM:** 24.24.032569
- **Program Studi:** Pendidikan Teknologi Informasi
- **Fakultas:** Fakultas Bahasa Ilmu Pengetahuan dan Teknologi
- **Universitas:** Universitas Muhammadiyah Palangkaraya

## Struktur File

- `prosedural.php` : Implementasi data 3 buku menggunakan pendekatan prosedural (array & perulangan).
- `Buku.php` : Definisi `class Buku` beserta properti, `__construct()`, dan method `info()`.
- `oop.php` : Pembuatan 3 objek `Buku` dan pemanggilan method `info()`.
- `index.php` : Menjalankan keseluruhan contoh program (`prosedural.php` dan `oop.php`).

## 3 Perbedaan Gaya Prosedural dan OOP

1. **Pengorganisasian Data dan Perilaku:** Gaya prosedural memisahkan data (array) dan logika pemrosesan (`foreach`), sedangkan OOP menyatukan properti dan method (`info()`) di dalam `class Buku`.
2. **Keamanan dan Ketegasan Tipe Data:** Pada array prosedural, nama *key* (`judul`, `penulis`, `tahun`) mudah terjadi *typo* dan tipe data kurang terkontrol, sementara OOP memanfaatkan *type hint* pada properti, parameter *constructor*, serta nilai balik method.
3. **Kemudahan Pengembangan (Maintainability):** OOP lebih rapi saat proyek berkembang—misalnya menambah method baru atau membuat kelas turunan—dibandingkan mengubah struktur array dan blok kode yang tersebar pada gaya prosedural.
   
