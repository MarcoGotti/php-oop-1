<?php

//include __DIR__ . '/../database/db.php';

class Movie
{
    public $title;
    public $genre;
    public $duration;
    public $restrictions;
    public $poster = 'https://picsum.photos/400/200';

    public function __construct($_title, $_genre, $_duration)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->duration = $_duration;
        $this->restrictions = $this->setRestrictions($_genre);
    }

    public function setRestrictions($_genre)
    {
        return in_array('Horror', $_genre)
            ? $this->restrictions = 'over 14'
            : (in_array('Erotic', $_genre) || in_array('Violence', $_genre)
                ? $this->restrictions = 'over 18'
                : $this->restrictions = 'no age restrictions');
    }
}


/* $first_movie = new Movie('Matrix', ['Horror', 'Fantasy', 'Sci-Fi'], 120);
$second_movie = new Movie('Galaxy', ['Erotic', 'Thriller'], 120);
$third_movie = new Movie('Forrest', ['Comedy', 'History'], 120);

var_dump($first_movie, $second_movie, $third_movie); */
