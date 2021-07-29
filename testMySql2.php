<?php

$now  = new DateTime();
$interval = new DateInterval('P18Y');
$appropriateAge = $now->sub($interval);
$appropriateAge = $appropriateAge->format('Y-m-d H:m:s');
echo $appropriateAge;

$query = "SELECT * FROM users WHERE birthday > "."$appropriateAge";


?>