<?php
$host = 'localhost';
$dbname = 'coworking_space';
$username = 'root';
$password = '';

try {
    $PDO = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: ". $e->getMessage());
}
?>
