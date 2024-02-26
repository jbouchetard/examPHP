<?php
$dsn = 'mysql:dbname=exam_php;host=localhost';
$user = 'root';
$password = '';
$db = new PDO($dsn, $user, $password);
// $users = $db->query('SELECT * FROM utilisateurs');
// var_dump($users->fetchAll());
?>