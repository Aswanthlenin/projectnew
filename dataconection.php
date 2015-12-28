<?php


$hostname = 'localhost';

$username = 'root';

$password = '';

try {
    
    $dbh = new PDO("mysql:host=$hostname;dbname=db", $username, $password);
    /*** echo a message saying we have connected ***/
 
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>
