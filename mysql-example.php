<?php

$connStr = 'mysql:host=localhost;dbname=scotchbox';

echo 'do conn ' . $connStr;

$conn = new PDO($connStr, 'root', 'root');

var_dump($conn);


echo "hello world";

 ?>
