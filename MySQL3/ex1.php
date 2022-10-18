<?php

require './connection.php';

$country = "Spain";

$a = "SELECT c.id, c.name, c.created_at, c.updated_at, ci.id, ci.name,
    ci.created_at, ci.updated_at
    FROM country AS c 
    LEFT JOIN city AS ci ON c.id = ci.country_id
    WHERE c.name = :name";

$statement = $connection->prepare($a);
$statement->execute(['name'=>$country]);
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);
print_r($data);