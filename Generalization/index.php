<?php 

require_once "Geprek.php";

$makanan = new Geprek();
$makanan->nama = 'geprek';
echo $makanan->nama;
echo "\n";
$makanan->dimasak();
echo "\n";
$makanan->dimasak();
