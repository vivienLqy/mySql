<div class="card col-10 mx-auto my-2 bg-secondary-subtle">
    <img class="card-img-top" src="<?= $path; ?>" alt="<?= $film['title']; ?>" />
    <div class="card-body p-4">
        <div class="text-center">
            <h3 class="fw-bolder"><?= $film['title']; ?></h3>
            <div class="d-flex justify-content-center small text-warning mb-2">
                <?= $film['rating'] . '/ 10 &nbsp;'; ?>
                <?= getStar($film['rating']); ?>  
            </div>
            <h5>Par : <?= $film['director']; ?></h5>
            <span class="text-muted">
                Année de réalisation : <?= $film['year_released']; ?>
            </span>
        </div>
        <div class="d-flex justify-content-between my-2">
            <h2>
                <span class="badge bg-primary">
                    <i class="bi bi-ticket-perforated">&nbsp;</i><?= $film['box_office']; ?>
                </span>
            </h2>
            <h2>
                <span class="badge bg-primary">
                    <i class="bi bi-cash"></i>&nbsp;<?= $film['budget']; ?> $
                </span>
            </h2>
            <h2>
                <span class="badge bg-primary">
                    <i class="bi bi-flag"></i>&nbsp;<?= $film['languages']; ?>
                </span>
            </h2>
            <h2>
                <span class="badge bg-primary">
                    <i class="bi bi-hourglass"></i>&nbsp;<?= $film['duration']; ?> min.
                </span>
            </h2>
        </div>
        <div class="d-flex justify-content-around my-3">
            <h4 class="text-muted">De : <?= $film['distributeur']; ?></h4>
            <h4 class="text-muted">Genre : <?= $film['genre']; ?></h4>
        </div>
        
    </div>
</div>