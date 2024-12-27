<?php 

class Transaksi {
    public int $nomor;
    public string $namaPelanggan;

    public function showTotal(): int {
        return 150000;
    }

    public function showInfoTransaksi(): void {
        echo 'berikut pemberitahuan transaksi';
    }

    public function showDataBelanja(): string {
        return "Berikut pemberirahuan data belanja";
    }
}

