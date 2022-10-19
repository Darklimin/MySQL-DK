<?php

require './connection.php';

$a = "SELECT st.first_name, st.last_name
FROM store AS s INNER JOIN staff AS st ON s.id = st.id
WHERE st.id = 1;";

$statement = $connection->prepare($a);
$statement->execute();
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);

print_r($data);
