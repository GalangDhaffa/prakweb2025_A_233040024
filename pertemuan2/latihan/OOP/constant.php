<?php 

// define('NAMA', 'Dhaffa Galang F');

// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;


// class CobaConstant
// {
//   // constanta di dalam kelas
//   const NAMA = 'Dhaffa Galang F';
//   const UMUR = 20;

//   public function getInfo()
//   {
//     return self::NAMA . " adalah berumur " . self::UMUR . " tahun.";
//   }
// }

// echo CobaConstant::NAMA;
// echo "<br>";
// echo CobaConstant::UMUR;


// echo __FILE__;

// function coba()
// {
//   return __FUNCTION__;
// }

// echo coba();

class Coba
{
  public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;



?>