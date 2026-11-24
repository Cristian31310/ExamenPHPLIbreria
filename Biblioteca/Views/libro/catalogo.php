<h1>Catálogo</h1>
<div class="catalogo">
  <?php if (count($libros) > 0): ?>
    <?php foreach ($libros as $libro): ?>
      <?php require 'imprimeFicha.php' ?>
    <?php endforeach; ?>
  <?php elseif (count($libros) == 0): ?>
    <h2>Todovía no ha libros en la biblioteca</h2>
  <?php endif; ?>
</div>

<?php
// TODO (apartado 3): recibe la variable $libros (array de objetos Libro).
// Recórrela y pinta cada ficha reutilizando imprimeFicha.php.
// Si no hay libros, muestra «Todavía no hay libros en la biblioteca».
?>
