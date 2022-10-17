<?php

$connection = new \PDO('mysql:host=localhost:3306;dbname=film_rental',
    'root', '', [\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION],);

$firstName = 'Marius';
$lastName = 'Slimis';

$a = "INSERT INTO actor (first_name, last_name)
VALUES (:firstName, :lastName)";

$statement = $connection->prepare($a);
$statement->execute(
    ['firstName'=>$firstName,
     'lastName'=>$lastName]
);
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);
print_r($data);
