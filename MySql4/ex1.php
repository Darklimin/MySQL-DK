<?php

require './connection.php';

$idnum = 5;

$a = "SELECT MIN(f.rental_rate), MAX(f.rental_rate), fc.category_id
FROM film AS f JOIN film_category AS fc ON f.id = fc.film_id
GROUP BY fc.category_id
HAVING fc.category_id < :idnum";

$statement = $connection->prepare($a);
$statement->execute(['idnum'=>$idnum]);
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);

foreach ($data as $value) {
    foreach ($value as $key => $secvalue) {
        echo $key . " - " . $secvalue . " ";
    }
        echo PHP_EOL;
}