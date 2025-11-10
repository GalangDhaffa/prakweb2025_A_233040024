<?php
class Produk
{
  // Properti umum
  // visibility
  private $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon = 0;

  // Constructor milik Parent
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }
  // setter dan getter
  public function setJudul($judul)
  {
    $this->judul = $judul;
  }

  public function getJudul()
  {
    return $this->judul;
  }

  public function setPenulis($penulis)
  {
    $this->penulis = $penulis;
  }

  public function getPenulis()
  {
    return $this->penulis;
  }

  public function setPenerbit($penerbit)
  {
    $this->penerbit = $penerbit;
  }

  public function getPenerbit()
  {
    return $this->penerbit;
  }

  public function setHarga($harga)
  {
    $this->harga = $harga;
  }

  public function getHarga()
  {
    return $this->harga - (($this->harga * $this->diskon) / 100);
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

  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
  }

  public function getDiskon()
  {
    return $this->diskon;
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
echo "<hr>";

// melihat judul setelah diubah
$komik1->setJudul("One Piece");
echo $komik1->getJudul();
echo "<br>";
echo "<hr>";

// melihat harga setelah diubah
$game1->setHarga(500000);
echo $game1->getHarga();
echo "<br>";
echo "<hr>";

// melihat harga setelah diskon
$game1->setDiskon(50);
echo $game1->getHarga();
echo "<br>";
echo "<hr>";

// melihat penulis setelah diubah
$komik1->setPenulis("Eiichiro Oda");
echo $komik1->getPenulis();
echo "<br>";


