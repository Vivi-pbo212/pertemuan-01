<?php
// Definisi Class Buku (OOP)

class Buku
{
    public string $judul;
    public string $penulis;
    public int $tahun;

    public function __construct(string $judul, string $penulis, int $tahun)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }

    public function info(): string
    {
        return "{$this->judul} ({$this->tahun}) - Penulis: {$this->penulis}";
    }
}
