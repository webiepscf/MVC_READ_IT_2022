<?php

// CONNEXION
try {
    $connexion = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PWD);
} catch (PDOException $e) {
    echo "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
