<?php 

require_once "Makanan.php";

class Geprek extends Makanan {
    public function dimakan(): void {
        echo "Geprek dimakan langsung";
    }
}