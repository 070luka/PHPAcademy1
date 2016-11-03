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
/*
$id = 1; //user input, nema povjerenja, laze!
$sql = 'SELECT * FROM  `attendee` WHERE id = ?';




$stmt = $conn->prepare($sql);
$stmt->execute([$id]);

foreach ($stmt as $row){
    print $row['id'] . "\t";
    print $row['name'] . "\t";
    print $row['email'] . "\n";

}
*/
$id = 1; //user input, nema povjerenja, laze!
$sql = 'SELECT * FROM  `attendee` WHERE id = :id';




$stmt = $conn->prepare($sql);
$stmt->execute([
    'id' => $id
        
        ]);

foreach ($stmt as $row){
    print $row['id'] . "\t";
    print $row['name'] . "\t";
    print $row['email'] . "\n";

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

