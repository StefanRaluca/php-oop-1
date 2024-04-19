<?php
require_once __DIR__ . "/production.php";

class Movie extends Production
{
    public $profits;
    public $duration;
    public function __construct($title, $language, $vote, Genre $genre, $profits, $duration)
    {
        parent::__construct($title, $language, $vote, $genre);
        $this->profits = $profits;
        $this->duration = $duration;
    }

}

?>