<?php
/**
 *
 * Memanggil file (user.php) dengan require.
 *
 */
require 'user.php';
// menjalakan / menampilkan semua yang ada di dalam attribute.
$AC = new AC();
echo "-AC RUANGAN-";
echo "<br/>";
$AC->Merk="Merk : Toshiba";
echo $AC->Merk;
echo "<br/>";
$AC->Bentuk="Bentuk : Persegi Panjang";
echo $AC->Bentuk;
echo "<br/>";
$AC->Warna="Warna : Putih";
echo $AC->Warna;
echo "<br/>";