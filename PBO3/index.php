<?php
require_once 'Balok.php';

$balok1 = new Balok();

$balok1->setPanjang(panjang: 2.2);
$balok1->setLebar(lebar: 3.3);
// $balok1->panjang = 2;

echo "Keliling balok : ";
$balok1->hitungKeliling();
echo "\n";

echo "Luas balok : " . $balok1->hitungLuas() . "\n";
echo "Volume Balok : " . $balok1->hitungVolume(tinggi: 5.5);
?>
