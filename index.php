<?php

class Movie
{
    public $title;
    public $genre;
    public $duration;
    public $parental;

    public function __construct($_title, $_genre, $_duration)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->duration = $_duration;
        $this->parental = $this->setParental($_genre);
    }

    public function setParental($_genre)
    {
        return in_array('Horror', $_genre)
            ? $this->parental = 'over 14'
            : (in_array('Erotic', $_genre)
                ? $this->parental = 'over 18'
                : $this->parental = 'no restrictions');
    }
}


$first_movie = new Movie('Matrix', ['Horror', 'Fantasy', 'Sci-Fi'], 120);
$second_movie = new Movie('Galaxy', ['Erotic', 'Thriller'], 120);
$third_movie = new Movie('Forrest', ['Comedy', 'History'], 120);

var_dump($first_movie, $second_movie, $third_movie);
