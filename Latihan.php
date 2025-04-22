<?php
//soal 1
$tahunsekarang = 2025;
$tahunlahir = 2006;
$umur = $tahunsekarang - $tahunlahir;
echo "Umur saya sekarnag adalah " ;
echo $umur;

echo "<br/>";
//soal 2
$dollar = 3;
$rupiah = 160000;
$konversi = $dollar * $rupiah;
echo "Konversi $dollar dollar amerika ke rupiah adalah ";
echo $konversi;

echo "<br/>";
//soal 3 Mengkonversi Celcius ke Farenheit
$celcius = 2;
$konversi = $celcius * 9/5 + 32;
echo "Jadi Konversi $celcius celcius ke farenheit adalah ";
echo $konversi;

echo "<br/>";
//soal 4 Menghitung Luas Lingkaran
$phi = 3.14;
$jarijari = 7;
$Luas = $phi * $jarijari * $jarijari;
echo "Jika Jari-Jari adalah $jarijari dan phi adalah $phi maka luas lingkarannya adalah $Luas";
?>