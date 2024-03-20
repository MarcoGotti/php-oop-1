<?php

include __DIR__ . '/../models/classMovie.php'; //

$movies =
    [
        $first_movie = new Movie('Matrix', ['Horror', 'Fantasy', 'Sci-Fi'], 120, 'Wachowsky Bros', 4),
        $second_movie = new Movie('Lolita', ['Erotic', 'Thriller'], 104, 'Tinto Bras', 2.2),
        $third_movie = new Movie('Forrest Gump', ['Comedy', 'History'], 186, 'Pinco Pallino', 3.3),
        $fourth_movie = new Movie('V for Vendetta', ['Fantasy', 'Sci-Fi'], 115, 'Wachowsky Bros', 5),
        $fifth_movie = new Movie('The Joker', ['Fantasy', 'Drama', 'Violence'], 115, 'Pinco Pallino', 4.8),

    ];

//read from models.php
//var_dump($first_movie->normalFunct());



//var_dump($movies);

//array_push($movies, $first_movie, $second_movie, $third_movie, $fourth_movie, $fifth_movie);
