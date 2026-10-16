<?php
$pageTitle = "Canlı Yayın Kameraları (Webcam)";
require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Başlık Bandı -->
<section style="padding: 4.5rem 0 3rem 0; background: linear-gradient(180deg, rgba(7,13,25,0.9) 0%, var(--bg-dark) 100%);">
    <div class="container text-center">
        <span class="section-badge"><i class="fa-solid fa-satellite-dish"></i> 7/24 Kesintisiz Yayın</span>
        <h1 class="section-title">Ergan Dağı <span class="text-cyan">Canlı Yayın Kameraları</span></h1>
        <p class="section-desc" style="max-width: 750px; margin: 0 auto;">
            Ergan Dağı'nın zirvesinden alt istasyonuna kadar 4 farklı noktadan gerçek zamanlı kar, hava ve pist koşullarını izleyin.
        </p>
    </div>
</section>

<!-- Canlı Yayın Konsolu (Ana Ekran + Seçici) -->
<section style="padding: 2rem 0 4rem 0;">
    <div class="container">
        <div class="webcam-console">
            <!-- Ana Canlı Yayın Ekranı -->
            <div class="main-stream-player">
                <div class="stream-ratio">
                    <iframe id="mainStreamIframe" class="stream-iframe" src="<?= $webcams[0]['url'] ?>" allowfullscreen></iframe>
                    
                    <div class="stream-overlay-bar">
                        <div class="stream-info-badge">
                            <span class="pulse-dot"></span>
                            <strong style="color:white; font-size:0.85rem;" id="mainStreamTitle"><?= htmlspecialchars($webcams[0]['title']) ?></strong>
                        </div>
                        <div class="stream-info-badge">
                            <i class="fa-solid fa-eye text-cyan"></i>
                            <span style="font-size:0.8rem; color:var(--text-light);">HD Canlı Akış</span>
                        </div>
                    </div>
                </div>

                <div class="stream-meta-footer">
                    <div>
                        <h4 id="mainStreamSubtitle" style="font-size:1.15rem; color:white; font-weight:700;"><?= htmlspecialchars($webcams[0]['subtitle']) ?></h4>
                        <p id="mainStreamViews" style="font-size:0.85rem; color:var(--text-muted); margin-top:0.2rem;"><?= htmlspecialchars($webcams[0]['views']) ?></p>
                    </div>
                    <div>
                        <span class="status-badge open">
                            <span class="pulse-dot"></span> Sinyal Aktif
                        </span>
                    </div>
                </div>
            </div>

            <!-- Kamera Seçim Kartları -->
            <div class="stream-selector-list">
                <?php foreach ($webcams as $idx => $cam): ?>
                <div class="stream-select-card <?= $idx === 0 ? 'active' : '' ?>" 
                     data-url="<?= $cam['url'] ?>" 
                     data-title="<?= htmlspecialchars($cam['title']) ?>" 
                     data-subtitle="<?= htmlspecialchars($cam['subtitle']) ?>" 
                     data-views="<?= htmlspecialchars($cam['views']) ?>">
                    <div class="stream-thumb">
                        <img src="<?= $cam['thumb'] ?>" alt="<?= htmlspecialchars($cam['title']) ?>">
                    </div>
                    <div>
                        <div class="stream-card-title"><?= htmlspecialchars($cam['title']) ?></div>
                        <div class="stream-card-sub"><?= htmlspecialchars($cam['subtitle']) ?></div>
                        <div style="margin-top:0.35rem; display:flex; align-items:center; gap:0.4rem; font-size:0.75rem; color:#34d399; font-weight:700;">
                            <span class="pulse-dot" style="width:6px; height:6px;"></span> Canlı Yayın
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Tüm Kameraları Yan Yana İzleme (Quad View) -->
<section style="padding: 3rem 0 6rem 0; background: rgba(0,0,0,0.25);">
    <div class="container">
        <div class="section-header" style="margin-bottom: 2.5rem;">
            <span class="section-badge"><i class="fa-solid fa-table-cells-large"></i> Çoklu Ekran Modu</span>
            <h2 class="section-title">4 Noktadan <span class="text-cyan">Eşzamanlı Dağ Görünümü</span></h2>
            <p class="section-desc">Pistlerin ve mekanik tesislerin anlık yoğunluğunu tek ekranda görün.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem;">
            <?php foreach ($webcams as $cam): ?>
            <div class="glass-card" style="overflow: hidden; border-radius: var(--radius-lg);">
                <div style="position: relative; padding-top: 56.25%; background: black;">
                    <iframe src="<?= $cam['url'] ?>" style="position: absolute; top:0; left:0; width:100%; height:100%; border:none;" allowfullscreen></iframe>
                </div>
                <div style="padding: 1.25rem 1.5rem; display: flex; align-items: center; justify-content: space-between;">
                    <div>
                        <h4 style="font-size: 1.05rem; font-weight: 700; color: white;"><?= htmlspecialchars($cam['title']) ?></h4>
                        <div style="font-size: 0.8rem; color: var(--text-muted);"><?= htmlspecialchars($cam['subtitle']) ?></div>
                    </div>
                    <span class="status-badge open">
                        <span class="pulse-dot"></span> Canlı
                    </span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
