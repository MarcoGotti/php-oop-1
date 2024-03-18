<?php

include __DIR__ . '/../models/models.php'; //

$first_movie = new Movie('Matrix', ['Horror', 'Fantasy', 'Sci-Fi'], 120, 'Wachowsky Bros', 4);
$second_movie = new Movie('Lolita', ['Erotic', 'Thriller'], 104, 'Tinto Bras', 3.5);
$third_movie = new Movie('Forrest Gump', ['Comedy', 'History'], 186, 'Pinco Pallino', 4.5);
$fourth_movie = new Movie('V for Vendetta', ['Fantasy', 'Sci-Fi'], 115, 'Wachowsky Bros', 5);
$fifth_movie = new Movie('The Joker', ['Fantasy', 'Drama', 'Violence'], 115, 'Pinco Pallino', 4.5);

$movies = [];

array_push($movies, $first_movie, $second_movie, $third_movie, $fourth_movie, $fifth_movie);
var_dump($movies);


/* $movies =
    [
        'Matrix' =>
        [
            'genre' => ['Horror', 'Fantasy', 'Sci-Fi'],
            'duration' => 120,
            'regist' => 'Wachowsky Bros',
            'feedback' => 4,
            'poster' => 'https://picsum.photos/400/200'
        ],
        'Lolita' =>
        [
            'genre' => ['Erotic', 'Thriller'],
            'duration' => 104,
            'regist' => 'Tinto Bras',
            'feedback' => 3.5,
            'poster' => 'https://picsum.photos/400/200'
        ],
        'Forrest Gump' =>
        [
            'genre' => ['Comedy', 'History'],
            'duration' => 186,
            'regist' => 'Pinco Pallino',
            'feedback' => 4.5,
            'poster' => 'https://picsum.photos/400/200'
        ],
        'V for Vendetta' =>
        [
            'genre' => ['Fantasy', 'Sci-Fi'],
            'duration' => 115,
            'regist' => 'Wachowsky Bros',
            'feedback' => 5,
            'poster' => 'https://picsum.photos/400/200'
        ],
        'The Joker' =>
        [
            'genre' => ['Fantasy', 'Drama', 'Violence'],
            'duration' => 115,
            'regist' => 'Wachowsky Bros',
            'feedback' => 5,
            'poster' => 'https://picsum.photos/400/200'
        ],
    ]; */
