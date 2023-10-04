<?php include 'includes/header.php';



// While
$i = 0;
//sintaxis de php opcional
/* 
while ($i < 10):
  echo 'ajsbd';
  $i++;
endwhile;

if ($asd):
 echo ' ';
 elseif ($sadbf):
  echo '   ';
 else: 
  echo '        ';
 endif;

*/

while ($i < 10) {
  echo $i . '<br>';

  $i++;
} 
// Do While 
$i = 0;
do {
  echo $i . '<br>';

  $i++;

} while ($i < 10);

// For loop
for ($i = 0; $i < 10; $i++) {
  echo $i;
}

// for Each 
$clientes = array('Pedro','Juan', 'Kipi');

foreach($clientes as $cliente) {
  echo $cliente . '<br>';
}

for ($i = 0; $i< count($clientes); $i++) {
  echo $clientes[$i] . '<br>';
}
$cliente = [
  'nombre' => 'kipi',
  'saldo' => 200
];

foreach($cliente as $key => $valor) {
  echo $key . ' - ' . $valor . '<br>';
} 

include 'includes/footer.php';