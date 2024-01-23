<?php
    $config = array(
       'dbhost' => 'localhost',
       'dbname' => 'dbmovie_utopia',
       'dbport' => '3306',
       'dbusername' => 'root',
       'dbpassword' => ''

    );

    $dsn= 'mysql:dbname=' . $config['dbname'] . ';host=' . $config['dbhost'] . ';port=' . $config['dbport'];

    try {
        $db = new PDO($dsn, $config['dbusername'], $config['dbpassword']);

        $db->exec('SET NAMES utf8');

        //On definit le mode de fetch par defaut
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    }catch(PDOException $e) {
        exit('BDD Erreur de connexion : ' . $e->getMessage());
    }

  $sql = "SELECT m.id, m.title, m.rating, m.year_released, m.box_office, m.budget, m.duration, 
    d.name AS director,
    dc.name AS distributeur
    FROM `movies` AS m 
    INNER JOIN director d ON m.directorID = d.id 
    INNER JOIN distribution_company dc ON m.companyID = dc.id;";

    $requete = $db->query($sql);
    
    var_dump($requete);

    //On recupere les data avec fetchAll :
    $movies = $requete->fetchAll();

    //On affiche le resultat de notre requete
    // var_dump($movies);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Les film Utopia </h1>
    <?php
    // foreach ($movies as $movies) {
    //     echo '<h3>'. $movies['title']. '</h3>'
    //     . '<p>' . 'l\'année de production est :' . $movies['year_released']. '</p>'
    //     . '<p> par :' . $movies['director']. '</p>';
    // }
    ?>
    <?php foreach ($movies as $movies) { ?>
        <h2><?=$movies['title'] ?></h2>
        <p>l'année de production est : <?= $movies['year_released'] ?></p>
        <p>par : <?= $movies['director'] ?></p>
        <p>de : <?= $movies['distributeur'] ?></p>
        <p>note des spectateur : <?= $movies['rating'] ?></p>
        <p>nbr d'entree : <?= $movies['box_office'] ?></p>
        <p>durée : <?= $movies['duration'] ?></p>
        <p>cout de production : <?= $movies['budget'] ?></p>
        
        
    <?php } ?>
</body>
</html>

