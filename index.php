<?php
/*
require_once __DIR__ . '/db.php';


$firstProduct = new Production("Matrix", "Inglese", 9);
$secondProduct = new Production("Done", "Italiano", 8);

echo $firstProduct->title . "-" . $firstProduct->language . "-" . $firstProduct->vote . "<br>";
echo $secondProduct->title . "-" . $secondProduct->language . "-" . $secondProduct->vote

foreach ($productions as $production) {
    echo "Title: " . $production->title . "<br>";
    echo "Language: " . $production->language . "<br>";
    echo "Vote: " . $production->vote . "<br>" . "<br>";

}

 */

include_once __DIR__ . "/layout/header.php";
?>


<body>
    <div class="container">

        <?php include_once __DIR__ . "/layout/main.php"; ?>

        <?php include_once __DIR__ . "/layout/footer.php"; ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
</body>

</html>