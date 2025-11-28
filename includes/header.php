<?php 
require_once __DIR__ . '/../config.php';

// Déterminer la page actuelle
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= SITE_NAME ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  
  <style>
    * {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    }
    
    body {
      margin: 0;
      padding: 0;
    }
    
    .site-header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease;
    }
    
    .site-header.scrolled {
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.12);
    }
    
    .header-container {
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 75px;
    }
    
    .brand {
      display: flex;
      align-items: center;
      gap: 15px;
      text-decoration: none;
      transition: transform 0.3s ease;
    }
    
    .brand:hover {
      transform: translateY(-2px);
    }
    
    .logo {
      height: 45px;
      width: auto;
      transition: transform 0.3s ease;
    }
    
    .brand:hover .logo {
      transform: scale(1.05);
    }
    
    .name {
      font-size: 1.4em;
      font-weight: 700;
      background: linear-gradient(135deg, #169dd7 0%, #131312 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      letter-spacing: -0.5px;
    }
    
    .menu {
      display: flex;
      gap: 8px;
      align-items: center;
    }
    
    .menu a {
      position: relative;
      padding: 10px 20px;
      text-decoration: none;
      color: #4a5568;
      font-weight: 500;
      font-size: 0.95em;
      border-radius: 10px;
      transition: all 0.3s ease;
      letter-spacing: 0.3px;
    }
    
    .menu a:hover {
      color: #667eea;
      background: rgba(102, 126, 234, 0.08);
      transform: translateY(-1px);
    }
    
    .menu a.active {
      color: #fff;
      background: linear-gradient(135deg, #169dd7 0%, #131312 100%);
      font-weight: 600;
      box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
    }
    
    .menu a.active:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(102, 126, 234, 0.5);
    }
    
    /* Bouton de connexion */
    .menu a.login-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 24px;
      background: linear-gradient(135deg, #eba31fff 0%, #d69e25ff 100%);
      color: white;
      font-weight: 600;
      box-shadow: 0 4px 15px rgba(235, 163, 31, 0.3);
      margin-left: 8px;
    }
    
    .menu a.login-btn:hover {
      color: white;
      background: linear-gradient(135deg, #eba31fff 0%, #d69e25ff 100%);
      box-shadow: 0 6px 20px rgba(10, 14, 8, 0.5);
    }
    
    .menu a.login-btn svg {
      width: 18px;
      height: 18px;
    }
    
    /* Indicateur animé sous les liens */
    .menu a::after {
      content: '';
      position: absolute;
      bottom: 5px;
      left: 50%;
      transform: translateX(-50%) scaleX(0);
      width: 70%;
      height: 2px;
      background: linear-gradient(90deg, #169dd7, #131312);
      border-radius: 2px;
      transition: transform 0.3s ease;
    }
    
    .menu a:not(.active):not(.login-btn):hover::after {
      transform: translateX(-50%) scaleX(1);
    }
    
    /* Mobile menu button */
    .mobile-menu-btn {
      display: none;
      flex-direction: column;
      gap: 5px;
      background: none;
      border: none;
      cursor: pointer;
      padding: 8px;
      border-radius: 8px;
      transition: background 0.3s ease;
    }
    
    .mobile-menu-btn:hover {
      background: rgba(102, 126, 234, 0.1);
    }
    
    .mobile-menu-btn span {
      width: 25px;
      height: 3px;
      background: #4a5568;
      border-radius: 3px;
      transition: all 0.3s ease;
    }
    
    .mobile-menu-btn.active span:nth-child(1) {
      transform: rotate(45deg) translate(8px, 8px);
    }
    
    .mobile-menu-btn.active span:nth-child(2) {
      opacity: 0;
    }
    
    .mobile-menu-btn.active span:nth-child(3) {
      transform: rotate(-45deg) translate(7px, -7px);
    }
    
    main.container {
      padding-top: 95px;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
      .header-container {
        padding: 0 20px;
        height: 65px;
      }
      
      .name {
        font-size: 1.2em;
      }
      
      .logo {
        height: 38px;
      }
      
      .mobile-menu-btn {
        display: flex;
      }
      
      .menu {
        position: fixed;
        top: 65px;
        left: 0;
        right: 0;
        flex-direction: column;
        gap: 0;
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(10px);
        padding: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transform: translateY(-120%);
        opacity: 0;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
      }
      
      .menu.active {
        transform: translateY(0);
        opacity: 1;
      }
      
      .menu a {
        width: 100%;
        padding: 15px 20px;
        text-align: center;
        font-size: 1.05em;
      }
      
      .menu a.login-btn {
        margin-left: 0;
        margin-top: 8px;
        justify-content: center;
      }
      
      main.container {
        padding-top: 85px;
      }
    }
  </style>
</head>
<body>
  <header class="site-header" id="header">
    <div class="header-container">
      <a href="index.php" class="brand">
        <img class="logo" src="Photo/techsolutions_logo.png" alt="<?= SITE_NAME ?> logo">
        <span class="name"><?= SITE_NAME ?></span>
      </a>
      
      <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
      
      <nav class="menu" id="menu">
        <a href="index.php" class="<?= $current_page === 'index' ? 'active' : '' ?>">Accueil</a>
        <a href="actualites.php" class="<?= ($current_page === 'actualites' || $current_page === 'actualite') ? 'active' : '' ?>">Actualités</a>
        <a href="contact.php" class="<?= $current_page === 'contact' ? 'active' : '' ?>">Contact</a>
        <a href="login.php" class="login-btn">
          <svg fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>
          </svg>
          Connexion
        </a>
      </nav>
    </div>
  </header>
