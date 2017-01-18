<?php
/**
 *
 * Memanggil file (user.php) dengan menggunakan require.
 *
 */
require 'user.php';
//* menjalankan / menampilakan semua yang ada di dalam attribute *//
$lampu = new lampu;
echo "<h3>-Lampu-";
echo "<br/>";
$lampu->daya="Daya : 25 Watt";
echo $lampu->daya;
echo "<br/>";
$lampu->jenis="Jenis : LED";
echo $lampu->jenis;
echo "<br/>";
$lampu->warna="Warna : Putih";
echo $lampu->warna;
echo "<br/>";
echo "<br/>";
//* menjalankan / menampilkan semua yang ada di dalam method *//
$lampu = new lampu;
echo "ON : ";
$lampu->on();
echo "OFF : ";
$lampu->off();