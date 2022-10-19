<?php

require './connection.php';

$city = "London";

$a = "SELECT c.*, co.name
FROM city AS c 
RIGHT JOIN country AS co ON c.country_id = co.id 
WHERE c.name = :city";

$statement = $connection->prepare($a);
$statement->execute(['city'=>$city]);
$data = $statement->fetchAll(\PDO::FETCH_BOTH);

print_r($data);