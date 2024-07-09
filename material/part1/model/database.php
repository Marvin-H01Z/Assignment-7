<?php
    //login into the DB-Server mySQL
    $dsn = 'mysql:host=localhost;port=3306;dbname=Z124066'; //change dbname to your database name (your user name)
    $username = 'phpUser';  //your username for logging in university server
    $password = 'phpPW1234';  //your password for logging in university server
    


    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>