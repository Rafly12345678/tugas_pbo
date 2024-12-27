<?php

require_once "Pegawai.php";
require_once "Transaksi.php";

$pegawai1 = new Pegawai();
$pegawai1->id = 80;
$pegawai1->nama = "Rafli";
echo $pegawai1->id ."\n";
echo $pegawai1->nama ."\n";
$pegawai1->showPegawai();
echo "\n". $pegawai1->pinjamBuku() . "\n";
echo $pegawai1->bayarDenda() ."\n\n";

$pelanggan1 = new Transaksi();
$pelanggan1->nomor = 94;
$pelanggan1->namaPelanggan = "Rafli";
echo $pelanggan1->nomor."\n";
echo $pelanggan1->namaPelanggan."\n";
echo $pelanggan1->showTotal()."\n";
$pelanggan1->showInfoTransaksi();
echo "\n".$pelanggan1->showDataBelanja()."\n\n";

