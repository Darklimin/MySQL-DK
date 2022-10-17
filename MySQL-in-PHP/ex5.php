<?php

$connection = new \PDO('mysql:host=localhost:3306;dbname=film_rental',
    'root', '', [\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION],);

$firstName = 'Nick';
$lastName = 'Degeneres';

$a = "SELECT * FROM actor WHERE first_name = :firstName AND last_name = :lastName";

$statement = $connection->prepare($a);
$statement->execute(
    ['firstName'=>$firstName,
     'lastName'=>$lastName]
);
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);
print_r($data);