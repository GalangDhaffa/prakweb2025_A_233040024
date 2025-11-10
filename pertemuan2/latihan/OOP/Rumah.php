<?php
class Rumah
{
  public $warna = "putih";
  public $jumlahKamar = "3";
  public $alamat = "setiabudi no. 100";

  public function __construct($warnaBaru, $kamarBaru)
  {
    $this->warna = $warnaBaru;
    $this->jumlahKamar = $kamarBaru;
  }

  public function kunciPintu()
  {
    return "pintu sudah terkunci!";
  }

  public function gantiwarna($warnaBaru)
  {
    $this->warna = $warnaBaru;
    return "rumah ini berwarna " . $this->warna;
  }
}

function pasangListrik($Rumah)
{
  return "rumah yang berwarna " . $Rumah->warna . " dipasang listrik<br>";
}

$rumahSaya = new Rumah('biru','5');
echo pasangListrik($rumahSaya);
// $rumahSaya->gantiwarna('merah');
// echo "rumah saya berwarna $rumahSaya->warna";
// echo "<br>";  
// echo "rumah saya $rumahSaya->jumlahKamar";
// echo "<br>";
// echo "rumah saya" . $rumahSaya->kunciPintu();
// echo "<br>";

$rumahRoni = new Rumah('hijau', '3');
echo pasangListrik($rumahRoni);
// $rumahRoni->gantiwarna('biru');
// echo "rumah Roni berwarna $rumahRoni->warna";
// echo "<br>";
// echo "rumah Roni $rumahRoni->jumlahKamar";
// echo "<br>";