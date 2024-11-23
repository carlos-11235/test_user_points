<?php
// db.php: Database connection
$host = 'localhost';
$dbname = 'simple_php_app';
$user = 'root';
$pass = ''; // Replace with your MySQL password if needed

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
