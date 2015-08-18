<?php
$pdo = new PDO('mysql:host=localhost;dbname=streamingserverlist;charset=utf8', 'root', '');

$statement=$pdo->prepare("SELECT * FROM streamingservers");
$statement->execute();
$results=$statement->fetchAll(PDO::FETCH_ASSOC);
$json=json_encode($results);
echo $json;