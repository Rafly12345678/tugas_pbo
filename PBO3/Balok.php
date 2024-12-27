<?php
class Balok {
    public float $panjang = 0;
    public float $lebar = 0;
    public float $tinggi = 0;

    public function setPanjang(float $panjang): void {
        $this->panjang = $panjang;
    }

    public function setLebar(float $lebar): void {
        $this->lebar = $lebar;
    }

    public function getPanjang(): float {
        return $this->panjang;
    }

    public function getLebar(): float {
        return $this->lebar;
    }

    public function getTinggi(): float {
        return $this->tinggi;
    }

    public function hitungLuas(): float {
        return $this->getPanjang() * $this->getLebar();
    }

    public function hitungKeliling(): void {
        echo 2 * ($this->getPanjang() + $this->getLebar());
    }

    public function hitungVolume(float $tinggi): float {
        $this->tinggi = $tinggi;
        return $this->getPanjang() * $this->getLebar() * $this->getTinggi();
    }
}
?>
