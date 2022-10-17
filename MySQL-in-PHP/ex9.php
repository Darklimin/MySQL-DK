<?php

$connection = new \PDO('mysql:host=localhost:3306;dbname=film_rental',
    'root', '', [\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION],);

$a = "UPDATE actor
SET last_name =
    IF(first_name IN ('BELA', 'MARY', 'JULIA'),
        CONCAT('Mrs. ',last_name),
    IF(first_name IN ('BURT', 'JOHN', 'GREGORY'),
        CONCAT('Mr. ',last_name),
        last_name
        )
    )";

$statement = $connection->prepare($a);
$statement->execute();
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);
print_r($data);