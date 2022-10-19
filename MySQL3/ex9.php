<?php

require './connection.php';

$address = "1913 Hanoi Way";

$a = "SELECT a.*, s.id, s.address_id
FROM address AS a RIGHT JOIN store AS s ON a.id = s.address_id
WHERE a.address = :address;";

$statement = $connection->prepare($a);
$statement->execute(['address'=>$address]);
$data = $statement->fetchAll(\PDO::FETCH_DEFAULT);

print_r($data);