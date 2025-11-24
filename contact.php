<?php require_once __DIR__ . '/includes/header.php';
$sent=false;$prenom=$_POST['prenom']??'';$nom=$_POST['nom']??'';$email=$_POST['email']??'';$telephone=$_POST['telephone']??'';$message=$_POST['message']??'';
if($_SERVER['REQUEST_METHOD']==='POST' && $prenom!=='' && $nom!=='' && $email!=='' && $telephone!=='' && $message!==''){ $sent=true; }
function e($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
?>
<style>
.contact-container { max-width: 1200px; margin: 0 auto; }
.contact-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin-top: 24px; }
.contact-card { background: linear-gradient(135deg, #169dd7 0%, #131312 100%); color: white; padding: 32px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); transition: transform 0.3s ease, box-shadow 0.3s ease; }
.contact-card:hover { transform: translateY(-5px); box-shadow: 0 15px 40px rgba(0,0,0,0.3); }
.form-card { background: white; padding: 32px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
.success-message { background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%); color: white; padding: 20px; border-radius: 12px; margin-bottom: 20px; animation: slideIn 0.5s ease; }
@keyframes slideIn { from { opacity: 0; transform: translateY(-20px); } to { opacity: 1; transform: translateY(0); } }
.form-group { margin-bottom: 20px; }
.form-group label { display: block; font-weight: 600; margin-bottom: 8px; color: #333; }
.form-group input, .form-group textarea { width: 100%; padding: 12px 16px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 15px; transition: border-color 0.3s ease; }
.form-group input:focus, .form-group textarea:focus { outline: none; border-color: #169dd7; }
.submit-btn { background: linear-gradient(135deg, #169dd7 0%, #131312 100%); color: white; padding: 14px 32px; border: none; border-radius: 8px; font-size: 16px; font-weight: 600; cursor: pointer; transition: transform 0.2s ease, box-shadow 0.2s ease; width: 100%; }
.submit-btn:hover { transform: scale(1.02); box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4); }
.info-item { display: flex; align-items: start; gap: 12px; margin-bottom: 20px; }
.info-icon { width: 24px; height: 24px; flex-shrink: 0; }
.map-container { width: 100%; height: 300px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.15); }
.hours-table { width: 100%; margin-top: 16px; }
.hours-table td { padding: 8px 0; }
.hours-table td:first-child { font-weight: 600; }
h1 { background: linear-gradient(135deg, #169dd7 0%, #131312 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-size: 2.5em; margin-bottom: 8px; }
h2 { font-size: 1.5em; margin-bottom: 20px; }
</style>

<div class="contact-container">
  <h1>Contactez-nous</h1>
  <p style="color: #666; font-size: 1.1em;">Nous sommes là pour répondre à toutes vos questions</p>
  
  <div class="contact-grid">
    <div class="form-card">
      <h2 style="color: #333;">Écrivez-nous</h2>
      <?php if($sent): ?>
        <div class="success-message">
          <strong>✓ Message envoyé !</strong><br>
          Merci <?= e($prenom) ?> <?= e($nom) ?>, nous vous répondrons rapidement.
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label>Prénom *</label>
          <input name="prenom" required value="<?= e($prenom) ?>" placeholder="Votre prénom">
        </div>
        <div class="form-group">
          <label>Nom *</label>
          <input name="nom" required value="<?= e($nom) ?>" placeholder="Votre nom">
        </div>
        <div class="form-group">
          <label>Email *</label>
          <input type="email" name="email" required value="<?= e($email) ?>" placeholder="votre@email.com">
        </div>
        <div class="form-group">
          <label>Téléphone *</label>
          <input type="tel" name="telephone" required value="<?= e($telephone) ?>" placeholder="+33 1 23 45 67 89">
        </div>
        <div class="form-group">
          <label>Message *</label>
          <textarea name="message" rows="5" required placeholder="Votre message..."><?= e($message) ?></textarea>
        </div>
        <button type="submit" class="submit-btn">Envoyer le message</button>
      </form>
    </div>

    <div>
      <div class="contact-card">
        <h2>Nos coordonnées</h2>
        <div class="info-item">
          <svg class="info-icon" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
          <div>
            <strong>Adresse</strong><br>
            12 rue des Innovateurs<br>19100 Brive-la-Gaillarde
          </div>
        </div>
        <div class="info-item">
          <svg class="info-icon" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
          <div>
            <strong>Téléphone</strong><br>
            <a href="tel:+33123456789" style="color: white;">+33 1 23 45 67 89</a>
          </div>
        </div>
        <div class="info-item">
          <svg class="info-icon" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/></svg>
          <div>
            <strong>Email</strong><br>
            <a href="mailto:contact@techsolutions.com" style="color: white;">contact@techsolutions.com</a>
          </div>
        </div>
      </div>

      <div class="contact-card" style="margin-top: 24px;">
        <h2>Horaires d'ouverture</h2>
        <table class="hours-table">
          <tr><td>Lundi - Vendredi</td><td>9h00 - 18h00</td></tr>
          <tr><td>Samedi</td><td>10h00 - 16h00</td></tr>
          <tr><td>Dimanche</td><td>Fermé</td></tr>
        </table>
        <p style="margin-top: 16px; opacity: 0.9; font-size: 0.9em;">
          📞 Support téléphonique disponible aux horaires d'ouverture
        </p>
      </div>
    </div>
  </div>

  <div style="margin-top: 32px;">
    <h2 style="color: #333;">Nous trouver</h2>
    <div class="map-container">
      <iframe 
        src="https://www.openstreetmap.org/export/embed.html?bbox=1.529518961906433%2C45.1456449205116%2C1.5315735340118408%2C45.14668539051869&amp;layer=mapnik" 
        width="100%" 
        height="300" 
        style="border: 0;" 
        loading="lazy">
      </iframe>
    </div>
    <p style="text-align: center; margin-top: 12px; color: #666;">
      <a href="https://www.google.com/maps/place/Av.+Edmond+Michelet,+19100+Brive-la-Gaillarde/@45.1462429,1.5310323,18.46z/data=!4m15!1m8!3m7!1s0x47f8bd494a823efb:0x405d39260ee76f0!2s19100+Brive-la-Gaillarde!3b1!8m2!3d45.1622927!4d1.5267596!16zL20vMDRiamZ2!3m5!1s0x47f897fda7bc4255:0xb1fdae6a2c13cb15!8m2!3d45.146132!4d1.5309015!16s%2Fg%2F11c4d_q8tm?authuser=0&entry=ttu&g_ep=EgoyMDI1MTExNy4wIKXMDSoASAFQAw%3D%3D" target="_blank" style="color: #667eea;">Voir sur une carte plus grande</a>
    </p>
  </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>