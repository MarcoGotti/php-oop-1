<?php

//include __DIR__ . '/../database/db.php';

class Movie
{
    public $title;
    public $genre;
    public $duration;
    public $regist;
    public $restrictions;
    public $feedback;
    public $poster = 'https://picsum.photos/400/200';

    public function __construct($_title, $_genre, $_duration, $_regist, $_feedback)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->duration = $_duration;
        $this->regist = $_regist;
        $this->feedback = $_feedback;
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
