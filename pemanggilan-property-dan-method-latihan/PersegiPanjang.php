<?php
class PersegiPanjang {
    public float $panjang;
    public float $lebar;
    public float $luas;

    public function hitungKeliling(): void {
        $keliling = 2 * ($this->panjang + $this->lebar);
        echo $keliling;
    }

    public function hitungLuas(): float {
        return $this->luas = $this->panjang * $this->lebar;
    }

    public function getPanjang(float $panjang): float {
        return $this->panjang = $panjang;
    }

    public function getLebar(float $lebar): float {
        return $this->lebar = $lebar;
    }

    public function getLuas(): float {
        return $this->luas;
    }

    public function showPersegiPanjang(): void {
        $this->hitungKeliling();
        echo " - " . $this->hitungLuas();
    }
}
?>
