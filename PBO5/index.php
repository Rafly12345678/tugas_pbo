<?php
require_once 'Aerox.php';

$Aerox = new Aerox(nama: 'Aerox', merk: "Yamaha Semakin Didepan");
echo "Nama Kendaraan Roda Dua : ". $Aerox->nama. "\n";
echo "Merk : ". $Aerox->merk. "\n";

$Aerox->Darat();
