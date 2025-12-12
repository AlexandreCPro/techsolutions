<?php
// Connexion rapide (XAMPP par défaut)
$pdo = new PDO('mysql:host=127.0.0.1;dbname=techsolutions;charset=utf8mb4', 'root', '', [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);

// Requête : composants du PC #1 (alias SQL et qualification des colonnes)
$sql = "SELECT c.name
        FROM pc_components pc
        JOIN components c ON c.id = pc.component_id
        WHERE pc.pc_id = 1";
$rows = $pdo->query($sql)->fetchAll();
?>
<!doctype html>
<html lang="fr">
<head><meta charset="utf-8"><title>Étape 02 — Composants du PC #1</title></head>
<body>
  <h1>Composants du PC #1</h1>
  <ul>
    <?php if (!$rows): ?>
      <li>Aucun composant</li>
    <?php else: ?>
      <?php foreach ($rows as $r): ?>
        <li><?php echo $r['name']; // version simple, sans htmlspecialchars ?></li>
      <?php endforeach; ?>
    <?php endif; ?>
  </ul>
</body>
</html>
