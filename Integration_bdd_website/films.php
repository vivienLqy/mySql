<?php
require(__DIR__) . ('/utilities/header.php');
require(__DIR__) . ('/function/movies.fn.php');

$films = findAllMovies($db);
?>

<div class="py-3">
  <div class="text-center my-4">
    <h1>Les films Utopia</h1>
  </div>

  <!-- Boucle qui parcourt chaque élément du tableau $movies et affiche un lien vers la page de détails pour chaque film. -->
  <ul class="list-group">
    <?php foreach ($films as $film): ?>
      <li class="alert alert-primary text-center" role="alert">
        <a href="mapage.php?id=<?= $film['id'] ?>">
          <?= $film['title'] ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

</div>
<?php require_once __DIR__ . ('/utilities/footer.php'); ?>
</body>

</html>