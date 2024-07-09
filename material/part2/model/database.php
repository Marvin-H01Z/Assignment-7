<?php
$dsn = 'mysql:host=localhost;port=3306;dbname=Z124066'; //change dbname to your database name (your user name)
$username = 'phpUser';  //your username for logging in university server
$password = 'phpPW1234';  //your password for logging in university server
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include 'errors/db_error_connect.php';
    exit;
}

function display_db_error($error_message) {
    include 'errors/db_error.php';
    exit;
}
?>