<?php

$connection = new \PDO('mysql:host=localhost:3306;dbname=film_rental',
    'root', '', [\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION],);

$a = "UPDATE payment SET amount = amount * 100;";

$statement = $connection->prepare($a);
$statement->execute();
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);
print_r($data);