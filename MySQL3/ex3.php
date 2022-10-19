<?php

require './connection.php';

$country = "United States";
$search = "%on%";

$a = "SELECT c.name, ci.name
FROM country AS c 
LEFT JOIN city AS ci ON c.id = ci.country_id 
WHERE c.name = :cname
AND ci.name like :search";

$statement = $connection->prepare($a);
$statement->execute(['cname'=>$country, 'search'=>$search]);
$data = $statement->fetchAll(\PDO::FETCH_BOTH);
echo $data[0][0] . PHP_EOL;
foreach ($data as $value) {
    echo $value['name'] . PHP_EOL;
}
//print_r($data);