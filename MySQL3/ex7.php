<?php

require './connection.php';

$language = "Japanese";

$a = "SELECT f.title, f.description
FROM film AS f JOIN language AS l ON f.language_id = l.id
WHERE l.name = :language LIMIT 10";

$statement = $connection->prepare($a);
$statement->execute(['language'=>$language]);
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);

echo $language . " language:" . PHP_EOL;
foreach ($data as $value) {
    foreach ($value as $key => $secvalue) {
        echo $key . " - " . $secvalue . PHP_EOL;
    }
}