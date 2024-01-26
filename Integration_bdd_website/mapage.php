<?php 
    require_once  __DIR__ . ('/config/config.php');
    require_once  __DIR__ . ('/function/database.fn.php');
    $db = getPDOlink($config);
    require_once __DIR__ . ('/function/movies.fn.php');

    if (isset($_GET['id']) || empty($film['id'])) {
      $film = findMovies($db, $_GET['id']);
      $title = $film['title'];
    } else {
      header("Location: /");
    }

    
    require_once __DIR__ . ('/utilities/header.php');
    
    $picture = findPictureMovies($db, $_GET['id']);
    $path = $picture['pathImg'];

?>

  <div class="text-center my-5">
    <h1>Detail du film <h2>
  </div>
  <?php require_once __DIR__ . ('/utilities/card.php'); ?>
  <?php require_once __DIR__ . ('/utilities/footer.php'); ?>

</body>
</html>