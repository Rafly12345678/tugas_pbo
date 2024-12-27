<?php 
 require_once 'Kambing.php';
 require_once 'Kucing.php';


 $kambing = new Kambing();
 echo "Bunyi suara kambing : ";
 $kambing->bunyisuara();
 echo "\n";

 $kambing = new Kambing();
 echo "Bunyi suara kambing";
 $kambing->bunyisuara();

 
