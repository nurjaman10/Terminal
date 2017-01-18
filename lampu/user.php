<?php
// Deklarasi class
class lampu
{
	// attribute
	var $daya;
	var $jenis;
	var $warna;
	// method
	public function on()
	{
		echo "Untuk menyalakan lampu<br/>";
	}	
	public function off()
	{
		echo "Untuk mematikan lampu";
	}
}