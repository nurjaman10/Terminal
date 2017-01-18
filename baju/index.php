<?php
/**
 *
 * Keyword 'FINAL' pada PHP
 *
 */
class baju
{
    public function buka()
    {
        echo "buka baju...<br/>";
    }
    public function pakai()
    {
        echo "pakai baju ...";
    }
}
class Batik extends baju
{
    public function pakai() 
    {
        echo "pakai baju batik ...";
    }
}
$batik = new Batik();
$batik->buka();
$batik->pakai();