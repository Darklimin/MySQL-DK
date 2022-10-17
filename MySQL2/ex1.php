<?php

require './connection.php';

$statement = $connection->prepare('SELECT * FROM actor LIMIT 10 OFFSET 10;');
$statement->execute();
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);
foreach ($data as $value){
    echo $value['id'] . ' ' . $value['first_name'] . PHP_EOL;
}
//print_r($data);