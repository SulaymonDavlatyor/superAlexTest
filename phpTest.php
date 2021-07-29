<?php


define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'test');

$mysqli  = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


$result_set = $mysqli->query("INSERT INTO users (tel, email, name, text, checkbox) 
                                    VALUES (".$_POST['tel']." ".$_POST['email']." ".$_POST['name']." ".$_POST['text']." ".$_POST['checkbox'].")");

$mysqli->close();



?>

