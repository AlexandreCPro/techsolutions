<?php
require_once __DIR__ . '/../config.php';

function pdo(): PDO {
  static $pdo = null;
  
  if ($pdo === null) {
    try {
      $pdo = new PDO(
        'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4',
        DB_USER,
        DB_PASS,
        [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES => false,
        ]
      );
    } catch (PDOException $e) {
      die('Erreur de connexion à la base de données : ' . $e->getMessage());
    }
  }
  
  return $pdo;
}
function e($s) {
  return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
}
