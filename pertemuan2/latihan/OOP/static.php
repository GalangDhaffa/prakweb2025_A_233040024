<?php

class ContohStatic
{
  // properti static
  public static $angka = 1;

  // method static
  public static function halo()
  {
    return "Halo " . self::$angka++ . " kali. <br>";
  }
}
// akses properti dan method static
echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();
