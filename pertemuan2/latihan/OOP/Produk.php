<?php
class Produk
{
  // Properti umum
  public $judul,
    $penulis,
    $penerbit;
  // visibility
  private $harga;

  // Constructor milik Parent
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getHarga()
  {
    return $this->harga;
  }

  // Method milik Parent
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
  }
}

class Komik extends Produk
{
  public $jumlahHal;

  public function __construct($judul, $penulis, $penerbit, $harga, $jumlahHal)
  {
    // hapus trailing comma
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jumlahHal = $jumlahHal;
  }

  public function getInfoProduk()
  {
    $infoParent = parent::getInfoProduk();

    return "Komik : {$infoParent} - {$this->jumlahHal} Halaman.";
  }
}

// === CHILD CLASS KEDUA ===
class Game extends Produk
{

  // Properti khusus milik Game
  public $waktuMain;

  public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
  }

  // Method khusus Game
  public function getInfoProduk()
  {
    $infoParent = parent::getInfoProduk();
    return "Game: {$infoParent} ~ {$this->waktuMain} jam.";
  }
}

// === BAGIAN OBJECT ===

// perbaiki penamaan kelas saat instansiasi
$komik1 = new Komik('naruto', 'masasih ajinomoto', '2033', 1000, 10);
$game1 = new Game('Valorant', 'papi riot', 'RIOT', "gratis", '120');

echo $komik1->getInfoProduk();
echo "<br>";
echo $game1->getInfoProduk();
echo "<br>";

// melihat harga setelah diubah
// $game1->harga = 500000;
// echo $game1->getHarga();
