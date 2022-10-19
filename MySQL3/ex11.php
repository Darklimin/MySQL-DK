<?php

require './connection.php';

$title = "PATIENT SISTER";

$a = "SELECT i.id, i.film_id, i.store_id, i.created_at, i.updated_at
FROM inventory AS i RIGHT JOIN film AS f ON i.film_id = f.id
WHERE f.title = :title";

$statement = $connection->prepare($a);
$statement->execute(['title'=>$title]);
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);

print_r($data);
