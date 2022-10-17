<?php

$connection = new \PDO('mysql:host=localhost:3306;dbname=film_rental',
    'root', '', [\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION],);

$statement = $connection->prepare('INSERT INTO city (name, country_id) SELECT  "Klaipeda", id FROM country WHERE name = "Lithuania"');
$statement->execute();
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);
print_r($data);