<?php

function findAllMovies ($db) {
    $sql = "SELECT * FROM `movies`;";
    $requete = $db->query($sql);
    $films = $requete->fetchAll();
    return $films;
}
function findPictureMovies ($db,  $currentId) {
    $sql = "SELECT * FROM `picture` WHERE movieId = $currentId";
    $requete = $db->query($sql);
    $films = $requete->fetch();
    return $films;
}

function findMovies ($db, $currentId) {
    $sql = "SELECT 
    m.id, m.title, m.rating, m.year_released, 
    m.box_office, m.budget, m.duration, 
    d.name AS director,
    dc.name AS distributeur,
    g.name AS genre,
    GROUP_CONCAT(l.name SEPARATOR ', ') as languages
    FROM `movies` AS m 
    INNER JOIN director d ON m.directorID = d.id
    INNER JOIN distribution_company dc ON m.companyID = dc.id
    INNER JOIN genre g ON m.genreID = g.id
    INNER JOIN movie_language ml ON m.id = ml.movieID
    JOIN languages l ON ml.languageID = l.id
    WHERE m.id = $currentId";
    $requete = $db->query($sql);
    $result = $requete->fetch();
    return $result;
}

function top3Movies ($db , $limit) {
    $sql = "SELECT * FROM movies ORDER BY rating DESC LIMIT $limit;";
    $requete = $db->query($sql);
    $films = $requete->fetchAll();
    return $films;
    
}
function getStar($rating) {

    $starRating = round($rating);
    $note = $starRating / 2;
    $starSplit = explode('.', $note);
    $starNbr = 0;

    for ($i=0; $i < $starSplit[0]  ; $i++) { 
        echo '<i class="bi bi-star-fill"></i>';
        $starNbr++;
    }
    if (isset($starSplit[1])){
        echo '<i class="bi bi-star-half"></i>';
        $starNbr++;
    }
    for ($i=0; $i < 5 - $starNbr ; $i++) { 
        echo '<i class="bi bi-star"></i>';
    }
}

