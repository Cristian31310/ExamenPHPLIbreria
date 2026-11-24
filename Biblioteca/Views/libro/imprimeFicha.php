<article class="ficha">
  <img src=<?htmlspecialchars($libro['portada'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8' ) ?> alt="">
  <h3><?= htmlspecialchars($libro['titulo'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></h3>
  <p class="autor">Por: <?= htmlspecialchars($libro['autor'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></p>
  <span class="genero"> <?= htmlspecialchars($libro['genero'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></span>
</article>
<?php
// TODO (apartado 2): vista de la ficha de un libro.
// Recibe la variable $libro (objeto Libro). Solo HTML y PHP para pintar.
