<?php
$pageTitle = "Tanıtım ve Aksiyon Videoları";
require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Başlık Bandı -->
<section style="padding: 4.5rem 0 3rem 0; background: linear-gradient(180deg, rgba(7,13,25,0.9) 0%, var(--bg-dark) 100%);">
    <div class="container text-center">
        <span class="section-badge"><i class="fa-brands fa-youtube text-danger"></i> HD Video Galerisi</span>
        <h1 class="section-title">Ergan Dağı <span class="text-cyan">Resmi Videoları</span></h1>
        <p class="section-desc" style="max-width: 750px; margin: 0 auto;">
            2.970 metre zirve inişleri, drone uçuşları, gece kayağı etkinlikleri ve snowboard aksiyonlarını izleyin.
        </p>
    </div>
</section>

<!-- Videolar Grid -->
<section style="padding: 3rem 0 6rem 0;">
    <div class="container">
        <div class="videos-grid">
            <?php foreach ($videos as $vid): ?>
            <div class="glass-card video-card" data-youtube="<?= $vid['yt_id'] ?>">
                <div class="video-thumb-box">
                    <img src="https://img.youtube.com/vi/<?= $vid['yt_id'] ?>/maxresdefault.jpg" onerror="this.src='https://img.youtube.com/vi/<?= $vid['yt_id'] ?>/hqdefault.jpg'" alt="<?= htmlspecialchars($vid['title']) ?>">
                    <div class="video-play-btn"><i class="fa-solid fa-play"></i></div>
                    <span class="video-duration"><?= $vid['duration'] ?></span>
                </div>
                <div class="video-info">
                    <span class="video-category"><?= $vid['category'] ?></span>
                    <h3 class="video-title"><?= htmlspecialchars($vid['title']) ?></h3>
                    <p style="font-size:0.85rem; color:var(--text-muted); line-height:1.5; margin-top:0.4rem;"><?= htmlspecialchars($vid['desc']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
