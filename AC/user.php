<?php
/**
 *
 * Class dalam php dengan nama "AC".
 * Deklarasi class
 *
 */
class AC
{
	// attribute
	public $merk;
	public $bentuk;
	public $warna;
	// method
	public function on()
	{
		return 'sedang dinyalakan';
	}	
	public function off()
	{
		return 'sedang dimatikan';
	}
}