<?php

require './connection.php';

$a = "SELECT p.*
FROM payment AS p
WHERE p.customer_id = p.staff_id";

$statement = $connection->prepare($a);
$statement->execute();
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);

foreach ($data as $value) {
    foreach ($value as $key => $secValue) {
        echo $key . ' - ' . $secValue . '; ';
    }
    echo PHP_EOL;
}
