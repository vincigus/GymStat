<?php
    $dsn = 'mysql:host=localhost;dbname=gymstat_db';
    $username = 'gymstat_db';
    $password = 'dVa5uDBz';
    
    try 
    {
        $db = new PDO($dsn, $username, $password);
    } 
    catch (Exception $ex)
    {
        $error_message = $e->getMessage();
        include('../errors/database.php');
        exit();
    }
?>