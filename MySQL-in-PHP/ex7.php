<?php

$connection = new \PDO('mysql:host=localhost:3306;dbname=film_rental',
    'root', '', [\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION],);

$amount = 2;

$a = "DELETE FROM payment WHERE amount < :amount";

$statement = $connection->prepare($a);
$statement->execute(
    ['amount'=>$amount]
);
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);
print_r($data);
