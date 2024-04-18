<?php


class Production
{
    public $title;
    public $language;
    public $vote;
    public $genre;
    public function __construct($title, $language, $vote, $genre, )
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
        $this->genre = $genre;
    }
}