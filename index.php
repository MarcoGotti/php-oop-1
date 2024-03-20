<?php

//include __DIR__ . '/models/models.php';
include __DIR__ . '/database/db.php';
include __DIR__ . '/models/feedback.php'; //
include __DIR__ . '/layouts/head.php';


?>



<main>
    <div class="container my-5 ">
        <div class="row row-cols-4 row-gap-3">
            <?php foreach ($movies as $movie) : ?>

                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="<?= Movie::$poster ?>" alt="<?php echo $movie->title . "poster" ?>" />
                        <div class="card-body">
                            <h3 class="card-title text-danger"><?= $movie->title ?></h3>
                            <div class="card-text"><strong>Regist:&nbsp;</strong><?= $movie->regist ?></div>
                            <div class="card-text"><strong>Genre:&nbsp;</strong>
                                <?php foreach ($movie->genre as $genre) {
                                    echo $genre . ', ';
                                } ?>
                            </div>
                            <div class="card-text"><strong>Restrictions:&nbsp;</strong><?= $movie->restrictions ?></div>
                            <div class="card-text"><strong>Duration:&nbsp;</strong><?= $movie->duration . "'" ?></div>
                            <div class="card-text"><strong>Feedback:&nbsp;</strong><?php renderStars($movie->feedback) ?></div>
                        </div>
                    </div>

                </div>

            <?php endforeach ?>
        </div>
    </div>
</main>

</body>

</html>