<?php

require_once __DIR__ . "./models/Production.php";
require_once __DIR__ . './models/Genre.php';
require_once __DIR__ . "/models/Movie.php";
require_once __DIR__ . "/models/Tvseries.php";

$action = new Genre("Action", "Movies with action scenes,behavior of the program is checked against typical malware action patterns: Type of action and action sequences.");
$comedy = new Genre("Comedy", "Comedy entertainment, particular scenes in them, that are intended to make people laugh.");
$thriller = new Genre("Drama", "Thriller film, that tells an exciting fictional story about something such as criminal activities or spying.");

/* $productions = [
    new Production("Matrix", "Inglese", 9, $action),
    new Production("Done", "Italiano", 8, $action),
    new Production("Cold War", "Inglese", 10, $thriller),
    new Production(" OldBoy", "Italiano", 5, $comedy),
]; */
//var_dump($productions);

$movies = [
    new Movie("The Matrix", "English", 9, $action, "460$", "2h 16min"),
    new Movie("Game of Throns", "English", 8, $action, "830$", "2h 28min"),
    new Movie("OldBoy", "English", 7, $comedy, "467$", "1h 40min"),
    new Movie("Done", "Italiano", 8, $action, "400$", "3h 40min"),
];
//var_dump($movies);

$tvSeries = [
    new TVSerie("AVATAR", "English", 9, $thriller, 12),
    new TVSerie("Stranger Things", "English", 8, $thriller, 40),
    new TVSerie("THE OUTSIDER", "Italiano", 9, $comedy, 30),
    new TVSerie("IL TRONO DI SPADE", "Italiano", 8, $action, 20)
];

//var_dump($tvSeries);