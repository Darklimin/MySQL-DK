<?php

require './connection.php';

$a = "SELECT s.id, s.address_id, st.first_name, st.last_name, st.email
FROM store AS s INNER JOIN staff AS st ON s.id = st.id";

$statement = $connection->prepare($a);
$statement->execute();
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);
//echo $data[0][0] . PHP_EOL;
foreach ($data as $value) {
    foreach ($value as $key => $secValue) {
        echo $key . " = " . $secValue . PHP_EOL;
    }
}
