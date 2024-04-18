<?php

require_once __DIR__ . "/production.php";

$firstProduct = new Production("Matrix", "Inglese", 9);
$secondProduct = new Production("Done", "Italiano", 8);

echo $firstProduct->title . "-" . $firstProduct->language . "-" . $firstProduct->vote . "<br>";
echo $secondProduct->title . "-" . $secondProduct->language . "-" . $secondProduct->vote
    ?>