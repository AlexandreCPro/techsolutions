<?php
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/header.php';

$services = [
    [
        'name' => '💻 Développement logiciel',
        'description' => 'Responsable de la création et de la maintenance des logiciels sur mesure pour les clients',
        'image_url' => 'Photo/Dev.png',
        'icon' => '💻'
    ],
    [
        'name' => '📱 Gestion des infrastructures systèmes et réseau',
        'description' => 'Chargé de la mise en place et de l\'entretien des infrastructures informatiques, incluant les réseaux et les serveurs',
        'image_url' => 'Photo/Réseau.png',
        'icon' => '📱'
    ],
    [
        'name' => '🎨 Design UX/UI',
        'description' => 'Spécialisé dans la conception d\'interfaces utilisateur attrayantes et fonctionnelles',
        'image_url' => 'Photo/Design.jpg',
        'icon' => '🎨'
    ]
];
?>

<style>
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-10px);
    }
}

@keyframes scaleIn {
    from {
        opacity: 0;
        transform: scale(0.9);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

.hero {
    animation: fadeInUp 0.8s ease-out;
}

.hero-logo {
    animation: float 3s ease-in-out infinite;
}

.bio-section {
    animation: fadeInUp 1s ease-out 0.3s backwards;
    max-width: 800px;
    margin: 0 auto 40px;
    padding: 30px;
    background: linear-gradient(135deg, #169dd7 0%, #131312 100%);
    border-radius: 16px;
    color: white;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.bio-section h2 {
    margin-top: 0;
    font-size: 28px;
    margin-bottom: 20px;
}

.bio-section p {
    line-height: 1.8;
    font-size: 16px;
    margin-bottom: 12px;
}

.services-title {
    animation: fadeInUp 1.2s ease-out 0.4s backwards;
    text-align: center;
    margin: 50px 0 30px;
    font-size: 36px;
    background: linear-gradient(135deg, #169dd7 0%, #131312 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.grid {
    animation: fadeInUp 1.4s ease-out 0.5s backwards;
}

.card {
    animation: scaleIn 0.5s ease-out backwards;
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.card:nth-child(1) { animation-delay: 0.6s; }
.card:nth-child(2) { animation-delay: 0.7s; }
.card:nth-child(3) { animation-delay: 0.8s; }
.card:nth-child(4) { animation-delay: 0.9s; }
.card:nth-child(5) { animation-delay: 1s; }
.card:nth-child(6) { animation-delay: 1.1s; }

.service-icon {
    font-size: 48px;
    margin-bottom: 10px;
    display: block;
    animation: float 3s ease-in-out infinite;
}

.card img {
    transition: transform 0.3s ease;
}

.card:hover img {
    transform: scale(1.1);
}
</style>

<!-- Hero accueil : grand logo, nom et message de bienvenue -->
<section class="hero" style="text-align:center; padding:46px 0;">
  <div class="container">
    <div style="display:inline-flex;flex-direction:column;align-items:center;gap:12px;">
        <img src="Photo/techsolutions_logo_removed.png" class="hero-logo" alt="<?= defined('SITE_NAME') ? htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') : 'Logo' ?>">
      <p style="margin:6px 0 0;color:#444;font-size:18px;">Bienvenue sur notre site</p>
    </div>
  </div>
</section>

<!-- Section biographie de l'entreprise -->
<div class="container">
  <section class="bio-section">
    <h2>💻 À propos de TechSolutions</h2>
    <p>
      <strong>TechSolutions</strong> est une entreprise spécialisée dans les services informatiques et le développement de logiciel. 
      Depuis notre création, nous accompagnons nos clients dans leur suivis avec dévouement et expertise.
    </p>
    <p>
      Fière de culture inclusive, on met un point d'honneur à accueillir et soutenir toutes personnes, en particulier ceux en situation de handicap.
    </p>
    <p>
      💡 <strong>Notre mission :</strong> Transformer vos idées en solutions technologiques, 
      tout en garantissant un accompagnement et suivi de qualité.
    </p>
  </section>
</div>

<h1 class="services-title">✨ Nos Services</h1>

<section class="grid">
<?php foreach ($services as $service): ?>
  <article class="card">
    <div style="overflow:hidden;border-radius:12px 12px 0 0;">
      <img src="<?= htmlspecialchars($service['image_url'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($service['name'], ENT_QUOTES, 'UTF-8') ?>">
    </div>
    <div class="p">
      <h3><?= htmlspecialchars($service['name'], ENT_QUOTES, 'UTF-8') ?></h3>
      <p style="color:#666;margin-top:8px;"><?= htmlspecialchars($service['description'], ENT_QUOTES, 'UTF-8') ?></p>
    </div>
  </article>
<?php endforeach; ?>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>