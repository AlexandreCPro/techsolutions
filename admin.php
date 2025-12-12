<?php
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/header.php';

// Récupérer tous les PC
$pcs = pdo()->query('SELECT * FROM pc ORDER BY id')->fetchAll();
?>

<style>
  .admin-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 40px 20px;
  }
  
  .admin-header {
    margin-bottom: 40px;
    text-align: center;
  }
  
  .admin-header h1 {
    font-size: 2.5em;
    color: #1a202c;
    margin-bottom: 10px;
    background: linear-gradient(135deg, #169dd7 0%, #131312 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  
  .admin-header p {
    color: #64748b;
    font-size: 1.1em;
  }
  
  .pc-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
    gap: 30px;
    margin-top: 30px;
  }
  
  .pc-card {
    background: white;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    transition: all 0.3s ease;
    border: 1px solid #e2e8f0;
  }
  
  .pc-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
  }
  
  .pc-image-placeholder {
    height: 220px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
  }
  
  .pc-image-placeholder::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: repeating-linear-gradient(
      45deg,
      transparent,
      transparent 10px,
      rgba(255, 255, 255, 0.05) 10px,
      rgba(255, 255, 255, 0.05) 20px
    );
  }
  
  .pc-image-placeholder svg {
    width: 80px;
    height: 80px;
    color: rgba(255, 255, 255, 0.9);
    z-index: 1;
  }
  
  .pc-image-placeholder img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  .pc-content {
    padding: 24px;
  }
  
  .pc-header-info {
    margin-bottom: 20px;
  }
  
  .pc-title {
    font-size: 1.4em;
    font-weight: 700;
    color: #1a202c;
    margin: 0 0 10px 0;
  }
  
  .pc-service {
    display: inline-block;
    background: linear-gradient(135deg, #169dd7 0%, #131312 100%);
    color: white;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 0.85em;
    font-weight: 600;
    margin-bottom: 10px;
  }
  
  .pc-meta {
    display: flex;
    gap: 20px;
    margin-top: 12px;
    padding-top: 12px;
    border-top: 1px solid #e2e8f0;
  }
  
  .meta-item {
    display: flex;
    align-items: center;
    gap: 6px;
    color: #64748b;
    font-size: 0.9em;
  }
  
  .meta-item svg {
    width: 16px;
    height: 16px;
  }
  
  .meta-item strong {
    color: #1a202c;
    font-weight: 600;
  }
  
  .pc-description {
    color: #64748b;
    font-size: 0.95em;
    line-height: 1.6;
    margin: 15px 0;
  }
  
  .components-section {
    margin-top: 20px;
  }
  
  .components-toggle {
    background: #f8fafc;
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    padding: 14px 18px;
    width: 100%;
    text-align: left;
    font-weight: 600;
    color: #1a202c;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 0.95em;
  }
  
  .components-toggle:hover {
    background: #f1f5f9;
    border-color: #cbd5e1;
  }
  
  .components-toggle svg {
    width: 20px;
    height: 20px;
    transition: transform 0.3s ease;
  }
  
  .components-toggle[open] svg {
    transform: rotate(180deg);
  }
  
  .components-list {
    margin-top: 12px;
    padding: 0;
    list-style: none;
  }
  
  .component-item {
    padding: 10px 14px;
    background: #f8fafc;
    border-left: 3px solid #169dd7;
    margin-bottom: 8px;
    border-radius: 6px;
    font-size: 0.9em;
    color: #334155;
    transition: all 0.2s ease;
  }
  
  .component-item:hover {
    background: #f1f5f9;
    transform: translateX(4px);
  }
  
  .component-item strong {
    color: #1a202c;
    font-weight: 600;
  }
  
  .no-components {
    padding: 20px;
    text-align: center;
    color: #94a3b8;
    font-style: italic;
  }
  
  .stats-bar {
    background: white;
    border-radius: 16px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    border: 1px solid #e2e8f0;
  }
  
  .stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
  }
  
  .stat-card {
    text-align: center;
    padding: 20px;
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    border-radius: 12px;
    border: 1px solid #e2e8f0;
  }
  
  .stat-value {
    font-size: 2.5em;
    font-weight: 800;
    background: linear-gradient(135deg, #169dd7 0%, #131312 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 8px;
  }
  
  .stat-label {
    color: #64748b;
    font-size: 0.9em;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
  }
  
  @media (max-width: 768px) {
    .pc-grid {
      grid-template-columns: 1fr;
    }
    
    .admin-header h1 {
      font-size: 2em;
    }
  }
</style>

<main class="container">
  <div class="admin-container">
    <div class="admin-header">
      <h1>🖥️ Administration des PC</h1>
      <p>Visualisation des configurations PC par service</p>
    </div>
    
    <?php
    // Calculer les statistiques
    $total_pcs = count($pcs);
    $total_effectif = array_sum(array_column($pcs, 'effectif'));
    $services_count = count(array_unique(array_column($pcs, 'service')));
    ?>
    
    <div class="stats-bar">
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-value"><?= $total_pcs ?></div>
          <div class="stat-label">Configurations PC</div>
        </div>
        <div class="stat-card">
          <div class="stat-value"><?= $total_effectif ?></div>
          <div class="stat-label">Total Effectif</div>
        </div>
        <div class="stat-card">
          <div class="stat-value"><?= $services_count ?></div>
          <div class="stat-label">Services</div>
        </div>
      </div>
    </div>
    
    <div class="pc-grid">
      <?php foreach ($pcs as $pc): ?>
        <article class="pc-card">
          <div class="pc-image-placeholder">
            <?php if (!empty($pc['image'])): ?>
              <img src="<?= e($pc['image']) ?>" alt="<?= e($pc['nom']) ?>">
            <?php else: ?>
              <svg fill="currentColor" viewBox="0 0 24 24">
                <path d="M20 18c1.1 0 1.99-.9 1.99-2L22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2h-4zM4 6h16v10H4V6z"/>
              </svg>
            <?php endif; ?>
          </div>
          
          <div class="pc-content">
            <div class="pc-header-info">
              <h2 class="pc-title"><?= e($pc['nom']) ?></h2>
              <span class="pc-service"><?= e($pc['service']) ?></span>
              
              <div class="pc-meta">
                <div class="meta-item">
                  <svg fill="currentColor" viewBox="0 0 24 24">
                    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                  </svg>
                  <strong><?= (int)$pc['effectif'] ?></strong> poste<?= $pc['effectif'] > 1 ? 's' : '' ?>
                </div>
                <div class="meta-item">
                  <svg fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                  </svg>
                  ID: <strong><?= (int)$pc['id'] ?></strong>
                </div>
              </div>
            </div>
            
            <?php if (!empty($pc['description'])): ?>
              <p class="pc-description"><?= e($pc['description']) ?></p>
            <?php endif; ?>
            
            <div class="components-section">
              <details>
                <summary class="components-toggle">
                  <span>🔧 Voir les composants</span>
                  <svg fill="currentColor" viewBox="0 0 24 24">
                    <path d="M7 10l5 5 5-5z"/>
                  </svg>
                </summary>
                
                <?php
                  $stmt = pdo()->prepare('
                    SELECT c.id, c.name, c.description
                    FROM pc_components pc
                    JOIN components c ON c.id = pc.component_id
                    WHERE pc.pc_id = ?
                    ORDER BY c.name
                  ');
                  $stmt->execute([(int)$pc['id']]);
                  $components = $stmt->fetchAll();
                ?>
                
                <?php if (count($components) > 0): ?>
                  <ul class="components-list">
                    <?php foreach ($components as $component): ?>
                      <li class="component-item">
                        <strong><?= e($component['name']) ?></strong>
                        <?php if (!empty($component['description'])): ?>
                          <br><small style="color: #64748b;"><?= e($component['description']) ?></small>
                        <?php endif; ?>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                <?php else: ?>
                  <div class="no-components">
                    Aucun composant associé à ce PC
                  </div>
                <?php endif; ?>
              </details>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>