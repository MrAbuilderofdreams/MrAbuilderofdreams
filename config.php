<?php
// Configurazione del database
$host = 'localhost';
$username = 'root';  // Usa il tuo username di MySQL
$password = '';      // Usa la tua password di MySQL
$database = 'little_fashion';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Errore nella connessione al database: " . $e->getMessage());
}
?>
