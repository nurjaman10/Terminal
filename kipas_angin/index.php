<?php
class kipas_angin
{
	public function on()
	{
		echo "kipas sedang menyala... <br/>";
	}	
	public function off()
	{
		echo "kipas sedang mati...";
	}
}
$kipas = new kipas_angin;
echo "on : ";
$kipas->on();
echo "off : ";
$kipas->off();