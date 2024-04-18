<main>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group">
                        <?php require_once __DIR__ . '/../db.php'; ?>
                        <?php foreach ($productions as $production): ?>
                            <li class="list-group-item text-center">
                                <h3 class="card-title "><?php echo $production->title; ?></h3>
                                <p class="card-text">Language: <?php echo $production->language; ?></p>
                                <p class="card-text">Vote: <?php echo $production->vote; ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>