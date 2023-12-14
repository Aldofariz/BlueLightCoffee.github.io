<?php

function luas_persegi($sisi){
return $sisi * $sisi;
}

function luas_lingkaran($jari)
{
      return 3.14 * $jari * $jari;
}

function luas_persegi_panjang($panjang, $lebar)
{
      return $panjang * $lebar;
}

echo "Luas persegi: " . luas_persegi(5) . "\n";
echo "Luas lingkaran: " . luas_lingkaran(5) . "\n";
echo "Luas persegi panjang: " . luas_persegi_panjang(5, 6) . "\n";

function luas_bangun_ruang_datar($bangun_ruang, $data)
{
      if ($bangun_ruang == "persegi") {
            return luas_persegi($data['sisi']);
      } else if ($bangun_ruang == "lingkaran") {
            return luas_lingkaran($data['jari']);
      } else if ($bangun_ruang == "persegi_panjang") {
            return luas_persegi_panjang($data['panjang'], $data['lebar']);
      }
      return null;
}

echo "Luas bangun ruang datar: " . luas_bangun_ruang_datar("persegi", ['sisi' => 5]) . "\n";
echo "Luas bangun ruang datar: " . luas_bangun_ruang_datar("lingkaran", ['jari' => 5]) . "\n";
echo "Luas bangun ruang datar: " . luas_bangun_ruang_datar("persegi_panjang", ['panjang' => 5, 'lebar' => 6]) . "\n";