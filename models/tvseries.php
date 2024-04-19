<?php
require_once __DIR__ . '/production.php';

class TVSerie extends Production
{
    public $seasons;

    public function __construct($title, $language, $vote, Genre $genre, $seasons)
    {
        parent::__construct($title, $language, $vote, $genre);
        $this->seasons = $seasons;
    }
}