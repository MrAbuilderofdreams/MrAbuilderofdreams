<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<frameset>
    <frame>
    <frame>
    <noframes>
    <body>
    <p>This page uses frames. The current browser you are using does not support frames.</p>
    <?php
    require 'config.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
        $sesso = $_POST['sesso'];
        $data_di_nascita = $_POST['data_di_nascita'];
        $indirizzo = $_POST['indirizzo'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        
        // Preparazione della query per controllare l'unicità di username e password
        $stmt = $pdo->prepare("SELECT * FROM utenti WHERE username = ? OR password = ?");
        $stmt->execute([$username, $password]);
        
        // Controlla se l'username esiste già
        
        if ($stmt->rowCount() > 0) {
            // Verifica quale dei campi è già esistente
            $result = $stmt->fetchAll();
            foreach ($result as $row) {
                if ($row['username'] == $username) {
                    echo "Username già esistente. Scegli un altro username.";
                    return; // Interrompi l'esecuzione se l'username esiste
                }
                if ($row['password'] == $password) {
                    echo "Password già in uso. Scegli un'altra password.";
                    return; // Interrompi l'esecuzione se la password esiste
                }
            }
        } else {
            // Inserisci i dati nel database
            $stmt = $pdo->prepare("INSERT INTO utenti (nome, cognome, sesso, data_di_nascita, indirizzo, email, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$nome, $cognome, $sesso, $data_di_nascita, $indirizzo, $email, $username, $password]);
            echo "Registrazione avvenuta con successo!";
        }    
        }


    	?>
    </body>
    </noframes>
</frameset>
</html>