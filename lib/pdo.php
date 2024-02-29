<?php

try {
    $pdo = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST.';charset=UTF8', DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    die ('Erreur : '.$e->getMessage());
}
catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}