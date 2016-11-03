<?php
header('Content-Type: text/plain');



$dsn = 'mysql:host=localhost;dbname=academy2016;charset=utf8';
$username = 'root';
$password = '';

try {
    $conn = new PDO ($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}

$sql = 'SELECT * FROM  `attendee` WHERE id = ' . $_GET['id'];
echo 'SQL: ' . $sql . PHP_EOL . PHP_EOL; 
//get statement from connection

$stmt = $conn->query($sql);


echo 'Result: ';
print_r($stmt->fetchAll());
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

