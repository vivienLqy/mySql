<?php
require(__DIR__) . ('/utilities/header.php');
require(__DIR__) . ('/function/movies.fn.php');

if (isset($_POST['mySelect'])) {
  $limit = $_POST['mySelect'];
} else {
  $limit = 3;
}

$films = top3Movies($db, $limit);

?>

<div class="py-3">
  <div class="text-center my-4">
    <h1>Les films Utopia</h1>
    <div class="p-5">
      <div class="col-3">
        <form method="post" action="" class="d-flex">
          <select name="mySelect" class="form-select" aria-label="Default select exemple">
            <option value="3">Les 3 meilleurs films</option>
            <option value="5">Les 5 meilleurs films</option>
            <option value="10">Les 10 meilleurs films</option>
          </select>
          <input type="submit" value="Soumettre" class="bg-primary rounded-3">
        </form>
      </div>
    </div>
</div>
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
