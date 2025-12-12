<?php
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/header.php';

$pc = pdo()->query("SELECT id, name, image_url, price FROM pcs WHERE id = 1")->fetch();
?>
<h1><?= $pc ? $pc['name'] : 'PC introuvable' ?></h1>
<?php if ($pc): ?>
  <img src="<?= $pc['image_url'] ?>" alt="Image">
  <p>Prix : <?= number_format((float)$pc['price'], 2, ',', ' ') . ' ' . CURRENCY ?></p>
<?php endif; ?>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
