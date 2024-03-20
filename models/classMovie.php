<?php

//include __DIR__ . '/../database/db.php';

/**
 * Movie Class
 * @author Marco Gotti
 * @license None
 * @copyright None
 */
class Movie
{
    /**
     * @var String $restrictions return of function setRestrictions()
     * @var String $poster loremPicsum random image
     */
    public $restrictions;
    public static string $poster = 'https://picsum.photos/400/200';

    /**
     * @param String $title movie title
     * @param Array $genre movie genres: array of strings
     * @param Int $duration movie duration
     * @param String $regist movie regist
     * @param Float $feedback movie avarage feedback
     */
    public function __construct(public $title, public $genre, public $duration, public $regist, public $feedback)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->duration = $duration;
        $this->regist = $regist;
        $this->feedback = round($feedback);
        $this->restrictions = $this->setRestrictions($genre);
    }

    /**
     * @param  Array $genre movie genres
     * @return String one out of three possible outputs depending on parameter
     */
    public function setRestrictions($genre)
    {
        return in_array('Horror', $genre)
            ? $this->restrictions = 'over 14'
            : (in_array('Erotic', $genre) || in_array('Violence', $genre)
                ? $this->restrictions = 'over 18'
                : $this->restrictions = Movie::staticFunct());
    }

    //normal function with static Key -> read in /models.php
    public function normalFunct()
    {
        return Movie::$poster;
    }

    //static function called in method setRestrictions()
    public static function staticFunct()
    {
        return 'no age restrictions';
    }
}
