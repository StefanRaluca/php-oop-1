<?php

require_once __DIR__ . "./models/production.php";
require_once __DIR__ . './models/genre.php';

$action = new Genre("Action", "Movies with action scenes,behavior of the program is checked against typical malware action patterns: Type of action and action sequences.");
$comedy = new Genre("Comedy", "Comedy entertainment, particular scenes in them, that are intended to make people laugh.");
$thriller = new Genre("Drama", "Thriller film, that tells an exciting fictional story about something such as criminal activities or spying.");

$productions = [
    new Production("Matrix", "Inglese", 9, $action),
    new Production("Done", "Italiano", 8, $action),
    new Production("Game of Throns", "Francese", 7, $thriller),
    new Production("Cold War", "Inglese", 10, $thriller),
    new Production(" OldBoy", "Italiano", 5, $comedy),
];