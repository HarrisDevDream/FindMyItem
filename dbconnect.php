<?php
$host = 'infra.zeabur.com';
$db = 'item_management';
$user = 'root';
$password = '5Pk69Ix8Do47';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}