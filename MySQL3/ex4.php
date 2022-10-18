<?php

require './connection.php';

$fName = "MARY";
$lName = "Jon";

$a = "SELECT p.*, c.first_name, s.first_name 
FROM payment AS p LEFT JOIN customer AS c ON p.customer_id = c.id 
LEFT JOIN staff AS s ON p.staff_id = s.id WHERE c.first_name = :fName AND s.first_name = :lName";

$statement = $connection->prepare($a);
$statement->execute(['fName'=>$fName, 'lName'=>$lName]);
$data = $statement->fetchAll(\PDO::FETCH_BOTH);
//echo $data[0][0] . PHP_EOL;
//foreach ($data as $value) {
//    echo $value['name'] . PHP_EOL;
//}
print_r($data);