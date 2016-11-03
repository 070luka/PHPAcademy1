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

$sql = 'SELECT * FROM  `attendee`';

//get statement from connection

$stmt = $conn->query($sql);

//1 nacin
/*while ($row = $stmt->fetch()) {
    print $row['id'] . "\t";
    print $row['name'] . "\t";
    print $row['email'] . "\n";
    
    
}

*/

/*foreach ($stmt->fetchAll() as $row){
    print $row['id'] . "\t";
    print $row['name'] . "\t";
    print $row['email'] . "\n";
    
    
}*/






/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

