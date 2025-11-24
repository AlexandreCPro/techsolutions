<?php require_once __DIR__ . '/includes/header.php';

$news = [
  1 => [
    'id' => 1,
    'title' => 'Panne majeure chez Cloudflare, vérifier vos sites web',
    'date' => '2025-11-18',
    'content' => "L'hébergeur américain Cloudflare a subi une panne majeure affectant de nombreux sites web. Si vos sites sont hébergés Chez Cloudflare, nous vous recommandons de vérifier leur statut et de prendre les mesures nécessaires pour minimiser l'impact sur vos utilisateurs.",
    'image_url' => 'Photo/Cloudflare.jpg'
  ],
  2 => [
    'id' => 2,
    'title' => "Accueil d'une personne malvoyante au sein de notre équipe dans le département Support Client",
    'date' => '2025-09-15',
    'content' => "Aujourd'hui, nous sommes ravis d'annoncer l'intégration d'un nouvel collègue malvoyant dans notre équipe de support client. Cette initiative reflète notre engagement envers la diversité et l'inclusion au sein de notre entreprise. Nous croyons fermement que chaque individu, indépendamment de ses capacités, apporte une valeur unique à notre équipe.",
    'image_url' => 'Photo/malvoyant.png'
  ],
  3 => [
    'id' => 3,
    'title' => 'Bonne vacances à toute notre équipe !',
    'date' => '2025-08-01',
    'content' => "Les vacances sont enfin arrivées pour toute notre équipe. Nous serons de retour le 1er septembre, reposés et prêts à vous servir avec encore plus d'énergie et de passion pour la technologie.",
    'image_url' => 'Photo/plage.png'
  ],
];

function h($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$item = $news[$id] ?? null;

?>

<style>
  .article-container {
    max-width: 900px;
    margin: 40px auto;
    padding: 0 20px;
  }

  .article-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  }

  .article-image {
    width: 100%;
    height: 400px;
    object-fit: cover;
  }

  .article-content {
    padding: 40px;
  }

  .article-title {
    font-size: 2.2em;
    color: #2c3e50;
    margin: 0 0 15px 0;
    font-weight: 700;
    line-height: 1.3;
  }

  .article-date {
    display: inline-block;
    color: #95a5a6;
    font-size: 1em;
    margin-bottom: 30px;
    font-weight: 500;
  }

  .article-text {
    color: #555;
    font-size: 1.1em;
    line-height: 1.8;
    margin-bottom: 40px;
  }

  .back-link {
    display: inline-flex;
    align-items: center;
    color: #3498db;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .back-link:hover {
    color: #2980b9;
    transform: translateX(-5px);
  }

  .back-link::before {
    content: '←';
    margin-right: 8px;
    transition: margin-right 0.3s ease;
  }

  .back-link:hover::before {
    margin-right: 12px;
  }

  .not-found {
    text-align: center;
    padding: 60px 20px;
  }

  .not-found h1 {
    font-size: 2em;
    color: #2c3e50;
    margin-bottom: 20px;
  }

  .not-found p {
    color: #7f8c8d;
    font-size: 1.1em;
  }

  @media (max-width: 768px) {
    .article-image {
      height: 250px;
    }
    
    .article-content {
      padding: 25px;
    }
    
    .article-title {
      font-size: 1.6em;
    }
    
    .article-text {
      font-size: 1em;
    }
  }
</style>

<?php if(!$item): ?>
  <div class="not-found">
    <h1>Actualité non trouvée</h1>
    <p>L'actualité demandée est introuvable.</p>
    <br>
    <a href="actualites.php" class="back-link">Retour aux actualités</a>
  </div>
<?php else: ?>
  <div class="article-container">
    <article class="article-card">
      <img src="<?= h($item['image_url']) ?>" 
           alt="<?= h($item['title']) ?>" 
           class="article-image">
      
      <div class="article-content">
        <h1 class="article-title"><?= h($item['title']) ?></h1>
        
        <time datetime="<?= h($item['date']) ?>" class="article-date">
          <?= date('d/m/Y', strtotime($item['date'])) ?>
        </time>
        
        <div class="article-text">
          <p><?= nl2br(h($item['content'])) ?></p>
        </div>
        
        <a href="actualites.php" class="back-link">
          Retour aux actualités
        </a>
      </div>
    </article>
  </div>
<?php endif; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
