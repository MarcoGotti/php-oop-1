<?php

include __DIR__ . '/models/models.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <header class=" bg-body-secondary">
        <div class="container d-flex justify-content-evenly align-items-center text-danger p-2">
            <h1>MSD</h1>
            <h3>Movie in the Sky with Diamonds</h3>
        </div>
    </header>

    <main>
        <div class="container my-5 ">
            <div class="row row-cols-4 row-gap-3">
                <?php foreach ($movies as $title => $movie_infos) : ?>

                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="<?= $movie_infos['poster'] ?>" alt="<?php echo $title . "poster" ?>" />
                            <div class="card-body">
                                <h4 class="card-title text-danger"><?= $title ?></h4>
                                <div class="card-text"><strong>Regist:&nbsp;</strong><?= $movie_infos['regist'] ?></div>
                                <div class="card-text"><strong>Genre:&nbsp;</strong>
                                    <?php foreach ($movie_infos['genre'] as $genre) {
                                        echo $genre . ', ';
                                    } ?>
                                </div>
                                <div class="card-text"><strong>Duration:&nbsp;</strong><?= $movie_infos['duration'] . "'" ?></div>
                                <div class="card-text"><strong>Feedback:&nbsp;</strong><?= $movie_infos['feedback'] ?></div>
                            </div>
                        </div>

                    </div>

                <?php endforeach ?>
            </div>
        </div>
    </main>

</body>

</html>