<?php include 'includes/header.php';


$autenticado = true;

if($autenticado) {
  echo "usuario autenticado";
} else {
  echo "usuario no autenticado";
}

$cliente = [
  'nombre' => 'Kipi',
  'apellido' => 'Armen',
  'saldo' => 200,
  'vip' => true
];

if (!empty($cliente)) {
  if ($cliente['saldo']>0) {
    echo 'El array no esta vacio y tiene saldo';
  } else {
    echo 'el array no esta vacio pero no tiene saldo';
  }
} else if ($autenticado) {
  echo 'el array esta vacio pero el user esta autenticado';
} else {
  echo 'array vacio user no autentificado';
}

//Switch 
$tecnologia = 'php';

switch ($tecnologia) {
  case 'php':
  echo 'PHP PAAAA';
  break;
  case 'js':
  echo 'JS PAAAA';
  break;
  case 'react':
  echo 'REACT PAAAA';
  break;
  default:
  echo 'Lenguaje desconocido';
  break;
}





include 'includes/footer.php';