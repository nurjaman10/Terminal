<?php
/**
 *
 * Memanggil file (user.php) dengan require.
 *
 */
require 'user.php';
// menjalakan / menampilkan semua yang ada di dalam attribute.
$gelas = new gelas();
echo "-GELAS-";
echo "<br/>";
$gelas->warna="Warna : putih";
echo $gelas->warna;
echo "<br/>";
$gelas->type="Type : Kaca";
echo $gelas->type;
echo "<br/>";
$gelas->ukuran="Ukuran : Kecil";
echo $gelas->ukuran;
echo "<br/>";
echo "<br/>";
// menjalankan / menampilkan semua yang ada di dalam method.
$gelas = new gelas;
$gelas->minum();