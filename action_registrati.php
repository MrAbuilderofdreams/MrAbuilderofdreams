<?php
// Inizio della sessione per gestire eventuali messaggi di errore
session_start();

// Include del file di configurazione per connettersi al database
require 'config.php';

// Controlla se i dati del modulo sono stati inviati
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ottieni i dati dal modulo
    $nome = $_POST['nome'] ?? '';
    $cognome = $_POST['cognome'] ?? '';
    $sesso = $_POST['sesso'] ?? '';
    $data_di_nascita = $_POST['data_di_nascita'] ?? '';
    $indirizzo = $_POST['indirizzo'] ?? '';
    $email = $_POST['email'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Validazione semplice (da migliorare in base alle necessità)
    if (empty($username) || empty($password) || empty($email)) {
        echo "Tutti i campi sono obbligatori.";
        exit;
    }
    
    try {
        // Verifica l'unicità dello username e della password
        $stmt = $pdo->prepare("SELECT * FROM utenti WHERE username = ? OR password = ?");
        $stmt->execute([$username, $password]);
        
        if ($stmt->rowCount() > 0) {
            // Verifica se è lo username o la password ad essere già in uso
            $result = $stmt->fetchAll();
            foreach ($result as $row) {
                if ($row['username'] == $username) {
                    echo "Username già esistente. Scegli un altro username.";
                    exit;
                }
                if ($row['password'] == $password) {
                    echo "Password già in uso. Scegli un'altra password.";
                    exit;
                }
            }
        } else {
            // Hash della password per motivi di sicurezza
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
            // Inserisci i dati nel database
            $stmt = $pdo->prepare("INSERT INTO utenti (nome, cognome, sesso, data_di_nascita, indirizzo, email, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$nome, $cognome, $sesso, $data_di_nascita, $indirizzo, $email, $username, $hashedPassword]);
            
            echo "Registrazione avvenuta con successo!";
        }
    } catch (PDOException $e) {
        // Gestione degli errori di connessione o query
        echo "Errore nella registrazione: " . $e->getMessage();
    }
} else {
    // Messaggio di errore se lo script è stato accesso senza invio di dati POST
    echo "Accesso non autorizzato.";
}
?>
