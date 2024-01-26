<?php
  require (__DIR__) . ('/utilities/header.php');
  require (__DIR__) . ('/function/movies.fn.php');
  
  $films = findAllMovies($db);
 ?>
 
  <h1>Les films Utopia</h1>

  <?php foreach ($films as $film) { ?>
    <p>
      <a href="mapage.php?id=<?= $film['id'] ?>"><?= $film['title'] ?></a>
    </p>
  <?php } ?>
  
<div class="py-3">
    <div class="text-center my-4">
        <h1>Les films Utopia</h1>
    </div>

    <!-- Boucle qui parcourt chaque élément du tableau $movies et affiche un lien vers la page de détails pour chaque film. -->
    <ul>
        <?php foreach ($movies as $movie) : ?>
            <li>
              <a href="mapage.php?id=<?= $film['id'] ?>"><?= $film['title'] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

</div>
</body>
</html>