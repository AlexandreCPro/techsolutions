<?php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=techsolutions;charset=utf8mb4', 'root', '', [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);

$pc = $pdo->query("SELECT id, name, image_url, price FROM pcs WHERE id = 1")->fetch();
$components = $pdo->query("SELECT c.name FROM pc_components pc JOIN components c ON c.id=pc.component_id WHERE pc.pc_id=1")->fetchAll();
?>
<!doctype html>
<html lang="fr">
<head><meta charset="utf-8"><title>Étape 03 — PC #1</title></head>
<body>
  <h1><?php echo $pc ? $pc['name'] : 'PC introuvable'; ?></h1>
  <?php if ($pc): ?>
    <img src="<?php echo $pc['image_url']; ?>" alt="Image">
    <p>Prix : <?php echo number_format((float)$pc['price'], 2, ',', ' '); ?> €</p>
    <h2>Composants</h2>
    <ul>
      <?php foreach ($components as $r): ?>
        <li><?php echo $r['name']; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</body>
</html>
