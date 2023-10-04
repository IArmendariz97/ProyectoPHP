<?php 
declare(strict_types=1);
include 'includes/header.php';


function sumar(int $a=0,int $b=0) {
  echo $a + $b;
}

sumar(2,2);
echo '<br>';
sumar();
echo '<br>';
sumar(15,2);

sumar(b: 15, a: 12);  // Named Parameters
include 'includes/footer.php';