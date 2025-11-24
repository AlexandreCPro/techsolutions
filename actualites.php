<?php require_once __DIR__ . '/includes/header.php';

$news = [
  [
    'id' => 1,
    'title' => 'Panne majeure chez Cloudflare, vérifier vos sites web',
    'date' => '2025-11-18',
    'excerpt' => 'L\'hébergeur américain Cloudflare a subi une panne majeure affectant de nombreux sites web.',
    'content' => "L\'hébergeur américain Cloudflare a subi une panne majeure affectant de nombreux sites web. Si vos sites sont hébergés Chez Cloudflare, nous vous recommandons de vérifier leur statut et de prendre les mesures nécessaires pour minimiser l\'impact sur vos utilisateurs.",
    'image_url' => 'Photo/Cloudflare.jpg'
  ],
  [
    'id' => 2,
    'title' => 'Accueil d\'une personne malvoyante au sein de notre équipe dans le département Support Client',
    'date' => '2025-09-15',
    'excerpt' => 'Aujourd\'hui, nous sommes ravis d\'annoncer l\'intégration d\'un nouvel collègue malvoyant dans notre équipe de support client.',
    'content' => "Aujourd\'hui, nous sommes ravis d\'annoncer l\'intégration d\'un nouvel collègue malvoyant dans notre équipe de support client. Cette initiative reflète notre engagement envers la diversité et l'inclusion au sein de notre entreprise. Nous croyons fermement que chaque individu, indépendamment de ses capacités, apporte une valeur unique à notre équipe.",
    'image_url' => 'Photo/malvoyant.png'
  ],
  [
    'id' => 3,
    'title' => 'Bonne vacances à toute notre équipe !',
    'date' => '2025-08-01',
    'excerpt' => 'Les vacances sont enfin arrivées pour toute notre équipe.',
    'content' => "Les vacances sont enfin arrivées pour toute notre équipe. Nous serons de retour le 1er septembre, reposés et prêts à vous servir avec encore plus d'énergie et de passion pour la technologie.",
    'image_url' => 'Photo/plage.png'
  ],
];

function h($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

?>

<style>
  .news-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
  }

  .news-header {
    text-align: center;
    margin-bottom: 50px;
  }

  .news-header h1 {
    font-size: 2.5em;
    color: #2c3e50;
    margin-bottom: 10px;
    font-weight: 700;
  }

  .news-header p {
    color: #7f8c8d;
    font-size: 1.1em;
  }

  .news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 30px;
  }

  .news-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    cursor: pointer;
    position: relative;
  }

  .news-card:hover {
    transform: scale(1.08);
    box-shadow: 0 12px 24px rgba(0,0,0,0.2);
    z-index: 10;
  }

  .news-image {
    width: 100%;
    height: 240px;
    object-fit: cover;
    transition: transform 0.4s ease;
  }

  .news-card:hover .news-image {
    transform: scale(1.1);
  }

  .news-image-container {
    overflow: hidden;
    height: 240px;
    background: #f8f9fa;
  }

  .news-content {
    padding: 25px;
  }

  .news-title {
    font-size: 1.4em;
    color: #2c3e50;
    margin: 0 0 12px 0;
    font-weight: 600;
    line-height: 1.3;
  }

  .news-title a {
    color: #2c3e50;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .news-title a:hover {
    color: #3498db;
  }

  .news-date {
    display: inline-block;
    color: #95a5a6;
    font-size: 0.9em;
    margin-bottom: 15px;
    font-weight: 500;
  }

  .news-excerpt {
    color: #555;
    line-height: 1.6;
    margin-bottom: 20px;
  }

  .read-more {
    display: inline-flex;
    align-items: center;
    color: #3498db;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .read-more:hover {
    color: #2980b9;
    transform: translateX(5px);
  }

  .read-more::after {
    content: '→';
    margin-left: 8px;
    transition: margin-left 0.3s ease;
  }

  .read-more:hover::after {
    margin-left: 12px;
  }

  @media (max-width: 768px) {
    .news-grid {
      grid-template-columns: 1fr;
    }
    
    .news-header h1 {
      font-size: 2em;
    }
  }
</style>

<div class="news-container">
  <div class="news-header">
    <h1>Actualités de l'entreprise</h1>
    <p>Restez informé de nos dernières nouvelles et événements</p>
  </div>

  <div class="news-grid">
    <?php foreach($news as $item): ?>
      <article class="news-card">
        <div class="news-image-container">
          <img src="<?= h($item['image_url']) ?>" 
               alt="<?= h($item['title']) ?>" 
               class="news-image">
        </div>
        <div class="news-content">
          <h2 class="news-title">
            <a href="actualite.php?id=<?= $item['id'] ?>">
              <?= h($item['title']) ?>
            </a>
          </h2>
          <time datetime="<?= h($item['date']) ?>" class="news-date">
            <?= date('d/m/Y', strtotime($item['date'])) ?>
          </time>
          <p class="news-excerpt"><?= h($item['excerpt']) ?></p>
          <a href="actualite.php?id=<?= $item['id'] ?>" class="read-more">
            Lire la suite
          </a>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
