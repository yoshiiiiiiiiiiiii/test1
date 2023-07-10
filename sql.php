<?php

$dsn = 'mysql:host=localhost;dbname=directory_app;charset=utf8';

$user = 'yoshi_test';
$pass = 'Yossy325';
$dbh = new PDO ($dsn,$user,$pass);

$sql = 'SELECT * FROM Directory';

$stmt = $dbh->query($sql);
$result = $stmt->fetchall(PDO::FETCH_ASSOC);
var_dump($result);
$dbh = null;



?>

test