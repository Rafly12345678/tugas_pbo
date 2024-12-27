<?php
require_once 'Binatang.php';
class Kucing extends Binatang{
    public function bunyisuara(): void {
        echo "Meong meong meong";
    }
}