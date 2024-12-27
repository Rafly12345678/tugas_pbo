<?php 

include 'PersegiPanjang.php';

$persegiPanjang = new PersegiPanjang();

$persegiPanjang->getPanjang(10.0);
$persegiPanjang->getLebar(5.0);

echo "Panjang Persegi Panjang: " .  $persegiPanjang->panjang . "\n";
echo "Lebar Persegi Panjang: " . $persegiPanjang->lebar . "\n";