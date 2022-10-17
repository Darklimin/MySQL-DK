<?php

$connection = new \PDO('mysql:host=localhost:3306;dbname=film_rental',
    'root', '', [\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION],);

$statement = $connection->prepare('SELECT name FROM city WHERE country_id IN 
                            (SELECT id FROM country WHERE name IN ("Lithuania", "Latvia", "Estonia"))');
$statement->execute();
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);
print_r($data);