<?php include 'includes/header.php';

$productos = [
  [
    'nombre' => 'Tablet',
    'precio' => 200,
    'disponible' => true
  ],
  [
    'nombre' => 'Television',
    'precio' => 500,
    'disponible' => true
  ],
  [
    'nombre' => 'Computadora',
    'precio' => 1000,
    'disponible' => true
  ],
  [
    'nombre' => 'Audifonos',
    'precio' => 100,
    'disponible' => false
  ]
];
foreach ($producto as $key => $value) { ?>
  <li>
    <p>Producto:  <?php echo $producto['nombre']; ?></p>
    <p>Precio:  <?php echo "$" . $producto['precio']; ?></p>
    <?php 
      if ($producto['disponible']) {
        echo "<p>Disponible</p>";
      } else {
        echo "<p>No disponible</p>";
      }
    ?>
  </li>

  <?php
}

// se pueden usar ternarios igual que en js

include 'includes/footer.php';