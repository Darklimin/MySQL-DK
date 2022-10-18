<?php

require './connection.php';

$country = "Lithuania";

$a = "SELECT c.id, c.name, c.created_at, c.updated_at, ci.id, ci.name,
    ci.created_at, ci.updated_at
    FROM country AS c 
    LEFT JOIN city AS ci ON c.id = ci.country_id
    WHERE c.name = :name";

$statement = $connection->prepare($a);
$statement->execute(['name'=>$country]);
$data = $statement->fetchAll(\PDO::FETCH_BOTH);
echo $data[0][1] . PHP_EOL;
foreach ($data as $value) {
    echo $value[5] . PHP_EOL;
}
//print_r($data);