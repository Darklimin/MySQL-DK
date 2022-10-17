<?php

require './connection.php';

$statement = $connection->prepare('SELECT * FROM rental 
         WHERE return_date BETWEEN "2005-08-30" AND "2005-09-01"');
$statement->execute();
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);
foreach ($data as $value){
    echo $value['id'] . ' ' . $value['return_date'] . PHP_EOL;
}