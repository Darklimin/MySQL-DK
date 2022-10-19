<?php

require './connection.php';

$id = 5;

$a = "SELECT p.staff_id, p.customer_id, c.first_name, c.last_name
FROM payment AS p CROSS JOIN customer AS c ON p.customer_id = c.id
WHERE c.id = :id";

$statement = $connection->prepare($a);
$statement->execute(['id'=>$id]);
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);

foreach ($data as $value) {
    foreach ($value as $key => $secValue) {
        echo $key . ' - ' . $secValue . '; ';
    }
    echo PHP_EOL;
}