<?php

require './connection.php';

$country = "United States";

$a = "SELECT c.name, ci.name
FROM country AS c 
LEFT JOIN city AS ci ON c.id = ci.country_id 
WHERE c.name = :cname
AND ci.name like '%on%'";

$statement = $connection->prepare($a);
$statement->execute(['cname'=>$country]);
$data = $statement->fetchAll(\PDO::FETCH_BOTH);
echo $data[0][0] . PHP_EOL;
foreach ($data as $value) {
    echo $value['name'] . PHP_EOL;
}
//print_r($data);