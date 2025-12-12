<?php
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/header.php';

$pc = pdo()->query("SELECT id, name, image_url, price FROM pcs WHERE id = 1")->fetch();
?>
<h1>Accueil</h1>
<div class="card">
  <h2><?= $pc ? $pc['name'] : 'PC introuvable' ?></h2>
  <?php if ($pc): ?>
    <img src="<?= $pc['image_url'] ?>" alt="Image" style="max-width:400px">
    <p>Prix : <?= number_format((float)$pc['price'], 2, ',', ' ') . ' ' . CURRENCY ?></p>
  <?php endif; ?>
</div>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
