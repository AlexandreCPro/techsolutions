<?php require_once __DIR__ . '/includes/header.php'; ?>
<?php require_once __DIR__ . '/includes/db.php'; ?>

<style>
  /* Overlay avec effet de flou */
  .login-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    animation: fadeIn 0.3s ease;
    padding: 20px;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  @keyframes slideIn {
    from {
      opacity: 0;
      transform: translateY(-30px) scale(0.95);
    }
    to {
      opacity: 1;
      transform: translateY(0) scale(1);
    }
  }

  /* Container de login */
  .login-container {
    background: white;
    border-radius: 20px;
    padding: 36px 28px;
    max-width: 360px;
    width: 100%;
    box-shadow: 0 16px 48px rgba(0, 0, 0, 0.28);
    animation: slideIn 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
  }

  .login-header {
    text-align: center;
    margin-bottom: 35px;
  }

  .login-logo {
    width: 56px;
    height: 56px;
    margin: 0 auto 16px;
    background: linear-gradient(135deg, #5ccf26ff 0%, #1f941aff 100%);
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 6px 18px rgba(92, 207, 38, 0.28);
    animation: float 3s ease-in-out infinite;
  }

  @keyframes float {
    0%, 100% {
      transform: translateY(0px);
    }
    50% {
      transform: translateY(-8px);
    }
  }

  .login-logo svg {
    width: 28px;
    height: 28px;
    color: white;
  }

  .login-header h1 {
    margin: 0 0 8px 0;
    font-size: 24px;
    color: #1f2937;
    font-weight: 700;
  }

  .login-header p {
    margin: 0;
    color: #6b7280;
    font-size: 15px;
  }

  /* Formulaire */
  .login-form {
    margin-top: 30px;
  }

  .form-group {
    margin-bottom: 24px;
  }

  .form-group label {
    display: block;
    margin-bottom: 8px;
    color: #374151;
    font-weight: 600;
    font-size: 14px;
  }

  .input-wrapper {
    position: relative;
  }

  .input-icon {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: #9ca3af;
    width: 20px;
    height: 20px;
  }

  .form-group input {
    width: 100%;
    padding: 12px 14px 12px 44px;
    border: 2px solid #e5e7eb;
    border-radius: 10px;
    font-size: 14px;
    transition: all 0.3s ease;
    background: #f9fafb;
  }

  .form-group input:focus {
    outline: none;
    border-color: #169dd7;
    background: white;
    box-shadow: 0 0 0 4px rgba(22, 157, 215, 0.1);
  }

  .forgot-password {
    text-align: right;
    margin-top: -12px;
    margin-bottom: 24px;
  }

  .forgot-password a {
    color: #169dd7;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    transition: color 0.3s ease;
  }

  .forgot-password a:hover {
    color: #0f7aa8;
    text-decoration: underline;
  }

  .login-btn {
    width: 100%;
    padding: 12px;
    background: linear-gradient(135deg, #5ccf26ff 0%, #1f941aff 100%);
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(92, 207, 38, 0.5);
  }

  .login-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(92, 207, 38, 0.4);
  }

  .login-btn:active {
    transform: translateY(0);
  }

  /* Lien administrateur */
  .admin-link {
    text-align: center;
    margin-top: 30px;
    padding-top: 30px;
    border-top: 1px solid #e5e7eb;
  }

  .admin-link a {
    color: #6b7280;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: all 0.3s ease;
  }

  .admin-link a:hover {
    color: #169dd7;
  }

  .admin-link svg {
    width: 16px;
    height: 16px;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .login-container {
      padding: 28px 20px;
    }

    .login-header h1 {
      font-size: 20px;
    }
  }
</style>

<div class="login-overlay">
  <div class="login-container">
    <div class="login-header">
      <div class="login-logo">
        <svg fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>
        </svg>
      </div>
      <h1>Connexion</h1>
      <p>Bienvenue ! Connectez-vous à votre compte</p>
    </div>

    <form class="login-form" method="post" action="utilisateur.php">
      <div class="form-group">
        <label for="email">Adresse email</label>
        <div class="input-wrapper">
          <svg class="input-icon" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
          </svg>
          <input type="email" id="email" name="email" required placeholder="exemple@email.com" autocomplete="email">
        </div>
      </div>

      <div class="form-group">
        <label for="password">Mot de passe</label>
        <div class="input-wrapper">
          <svg class="input-icon" fill="currentColor" viewBox="0 0 24 24">
            <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/>
          </svg>
          <input type="password" id="password" name="password" required placeholder="••••••••" autocomplete="current-password">
        </div>
      </div>

      <div class="forgot-password">
        <a href="mdpoublie.php">Mot de passe oublié ?</a>
      </div>

      <button type="submit" class="login-btn">
        Se connecter
      </button>
    </form>

    <div class="admin-link">
      <a href="loginadmin.php">
        <svg fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>
        </svg>
        Login Administrateur
      </a>
    </div>
  </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>