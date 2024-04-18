<?php


require_once __DIR__ . "./models/production.php";
require_once __DIR__ . './models/genre.php';

$productions = [
    new Production("Matrix", "Inglese", 9),
    new Production("Done", "Italiano", 8),
    new Production("Game of Throns", "Francese", 7),
    new Production("Cold War", "Inglese", 10),
    new Production(" OldBoy", "Italiano", 5),
];