<main>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    <h2 class="mb-4">Movies:</h2>
                    <ul class="list-group">
                        <?php require_once __DIR__ . '/../db.php'; ?>
                        <?php foreach ($movies as $movie): ?>
                        <li class="list-group-item text-center">
                            <h3 class="card-title "><?php echo $movie->title; ?></h3>
                            <p class="card-text">Language: <?php echo $movie->language; ?></p>
                            <p class="card-text">Vote: <?php echo $movie->vote; ?></p>
                            <p class="card-text text-decoration-underline">Genre:
                                <?php echo $movie->genre->getName(); ?>
                            </p>
                            <p class="card-text fst-italic"> <?php echo $movie->genre->getDescription(); ?>
                            </p>
                            <p class="card-text fst-italic">Duration: <?php echo $movie->duration; ?></p>
                            <p class="card-text">Profits: <?php echo $movie->profits; ?></p>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    <h2 class="mb-4">TV Series:</h2>
                    <ul class="list-group">
                        <?php foreach ($tvSeries as $tvSerie): ?>
                        <li class="list-group-item text-center">
                            <h3 class="card-title "><?php echo $tvSerie->title; ?></h3>
                            <p class="card-text">Language: <?php echo $tvSerie->language; ?></p>
                            <p class="card-text">Vote: <?php echo $tvSerie->vote; ?></p>
                            <p class="card-text text-decoration-underline">Genre:
                                <?php echo $tvSerie->genre->getName(); ?>
                            </p>
                            <p class="card-text fst-italic"> <?php echo $tvSerie->genre->getDescription(); ?>
                            </p>
                            <p class="card-text fst-italic">Seasons: <?php echo $tvSerie->seasons; ?></p>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>