<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'test');

$mysqli  = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$result_set = $mysqli->query("SELECT * FROM table1 
     INNER JOIN table2 ON table1.order_id = table2.order_id 
     WHERE table2.product_id IN (1234,7345) AND 
     EXISTS(SELECT * FROM table2 AS table3 WHERE table3.order_id = table1.order_id AND IF(table2.product_id = 7345, table3.product_id = 1234 , table3.product_id = 7345)) 
     AND table1.status_id = 2");

$table = [];

while(($row = $result_set->fetch_assoc()) != false){

    $table[] = $row;
}

print_r($table);

$mysqli->close();

?>

