</main>

<footer class="site-footer">
  <div class="footer-content">
    <div class="container">
      <div class="footer-grid">
        <!-- Colonne 1: À propos -->
        <div class="footer-column">
          <div class="footer-logo">
            <span class="footer-brand">TechSolutions</span>
          </div>
          <p class="footer-description">
            Votre partenaire de confiance pour tous vos besoins en services informatiques et développement logiciel.
          </p>
        </div>

        <!-- Colonne 2: Contact -->
        <div class="footer-column">
          <h3 class="footer-title">Contact</h3>
          <ul class="footer-contact">
            <li>
              <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/>
              </svg>
              <span>12 rue des Innovateurs<br>19100 Brive-la-Gaillarde</span>
            </li>
            <li>
              <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z"/>
              </svg>
              <span><a href="tel:+33123456789">+33 1 23 45 67 89</a></span>
            </li>
            <li>
              <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                <path d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z"/>
              </svg>
              <span><a href="mailto:contact@techsolutions.com">contact@techsolutions.com</a></span>
            </li>
          </ul>
        </div>

        <!-- Colonne 3: Horaires -->
        <div class="footer-column">
          <h3 class="footer-title">Horaires</h3>
          <ul class="footer-hours">
            <li><strong>Lundi – Vendredi :</strong> 08:00 — 18:00</li>
            <li><strong>Samedi :</strong> 09:00 — 12:00</li>
            <li><strong>Dimanche :</strong> Fermé</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container">
      <div class="footer-bottom-content">
        <p>&copy; <?= date('Y') ?> <?= SITE_NAME ?> — Tous droits réservés</p>
        <div class="footer-legal">
          <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees">Mentions légales</a>
          <span class="separator">•</span>
          <a href="#">Politique de confidentialité</a>
        </div>
      </div>
    </div>
  </div>
</footer>

<style>
.site-footer {
  background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
  color: #cbd5e1;
  margin-top: 60px;
  font-size: 14px;
}

.footer-content {
  padding: 50px 0 30px;
}

.footer-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 40px;
}

.footer-column h3 {
  margin: 0 0 20px 0;
}

.footer-logo {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 16px;
}

.footer-logo .logo {
  width: 40px;
  height: 40px;
  background: #374151;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.footer-logo .logo img {
  width: 100%;
  height: 100%;
  object-fit: contain;
}

.footer-brand {
  font-size: 20px;
  font-weight: 700;
  color: #fff;
}

.footer-description {
  color: #94a3b8;
  line-height: 1.6;
  margin-bottom: 20px;
}

.footer-title {
  color: #fff;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 20px;
}

.footer-links {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-links li {
  margin-bottom: 12px;
}

.footer-links a {
  color: #cbd5e1;
  text-decoration: none;
  transition: color 0.2s ease;
}

.footer-links a:hover {
  color: #fff;
  text-decoration: underline;
}

.footer-contact {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-contact li {
  display: flex;
  gap: 12px;
  margin-bottom: 16px;
  align-items: flex-start;
}

.footer-contact svg {
  flex-shrink: 0;
  margin-top: 2px;
  opacity: 0.7;
}

.footer-contact a {
  color: #cbd5e1;
  text-decoration: none;
}

.footer-contact a:hover {
  color: #fff;
  text-decoration: underline;
}

.footer-hours {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-hours li {
  margin-bottom: 12px;
  color: #cbd5e1;
}

.footer-hours strong {
  color: #fff;
}

.footer-bottom {
  border-top: 1px solid #334155;
  padding: 20px 0;
}

.footer-bottom-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 16px;
}

.footer-bottom p {
  margin: 0;
  color: #94a3b8;
}

.footer-legal {
  display: flex;
  gap: 12px;
  align-items: center;
}

.footer-legal a {
  color: #cbd5e1;
  text-decoration: none;
  transition: color 0.2s ease;
}

.footer-legal a:hover {
  color: #fff;
}

.footer-legal .separator {
  color: #475569;
}

@media (max-width: 768px) {
  .footer-grid {
    grid-template-columns: 1fr;
    gap: 30px;
  }
  
  .footer-bottom-content {
    flex-direction: column;
    text-align: center;
  }
  
  .footer-legal {
    flex-wrap: wrap;
    justify-content: center;
  }
}
</style>

</body>
</html>