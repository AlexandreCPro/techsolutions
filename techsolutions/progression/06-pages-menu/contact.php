<?php require_once __DIR__ . '/includes/header.php';
$sent=false;$name=$_POST['name']??'';$email=$_POST['email']??'';$message=$_POST['message']??'';
if($_SERVER['REQUEST_METHOD']==='POST' && $name!=='' && $email!=='' && $message!==''){ $sent=true; }
?>
<h1>Contact</h1>
<?php if($sent): ?><p class="card">Merci <?= $name ?> ! (envoi factice)</p><?php endif; ?>
<form method="post" class="card">
  <p><label>Nom<br><input name="name" required value="<?= $name ?>"></label></p>
  <p><label>Email<br><input type="email" name="email" required value="<?= $email ?>"></label></p>
  <p><label>Message<br><textarea name="message" rows="4" required><?= $message ?></textarea></label></p>
  <button>Envoyer</button>
</form>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
