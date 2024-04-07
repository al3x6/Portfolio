<?php
define('HOST', 'localhost');
define('DB_NAME', 'PORTFOLIO');
define('USER', 'root');
define('PASS', 'q4ToTaeWRz3QHd3V');

// Connexion à la base de données
$conn = new mysqli(HOST, USER, PASS, DB_NAME);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Vous pouvez maintenant exécuter vos requêtes SQL avec l'objet $conn

// Exemple de requête SELECT
$sql = "SELECT * FROM test_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Parcourir les lignes de résultat
    while ($row = $result->fetch_assoc()) {
        // Faites quelque chose avec chaque ligne
        print_r($row);
    }
} else {
    echo "0 résultats";
}

// Fermer la connexion
$conn->close();
?>
