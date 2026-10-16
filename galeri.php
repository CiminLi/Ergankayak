<?php
$pageTitle = "Fotoğraf Galerisi";
require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/header.php';

$galleryPhotos = [
    ['src' => 'assets/images/8J4C5496.jpg', 'caption' => 'Munzur Sıradağları Zirvesi ve Sonsuz Toz Kar', 'cat' => 'piste'],
    ['src' => 'assets/images/DJI_0554.jpg', 'caption' => 'Ergan Dağı Kuşbakışı Pist ve Ardıçlı Gölü Görünümü', 'cat' => 'piste'],
    ['src' => 'assets/images/8J4C5517.jpg', 'caption' => 'Snowboard Freestyle Atlayışı ve Kristal Kar', 'cat' => 'action'],
    ['src' => 'assets/images/Ergan-Tatil-Koyu.jpeg', 'caption' => 'Ergan Tatil Köyü Ahşap A-Frame Dağ Bungalovları', 'cat' => 'hotel'],
    ['src' => 'assets/images/Ramada-Otel.jpeg', 'caption' => 'Ramada By Wyndham Erzincan Resort Tesisleri', 'cat' => 'hotel'],
    ['src' => 'assets/images/8J4C5789.jpg', 'caption' => 'Kristal Toz Karda Zirveden Vadiye Kayak İnişi', 'cat' => 'piste'],
    ['src' => 'assets/images/OE__1346.jpg', 'caption' => '2.970 Metre Munzur Zirvesi Panoramik Manzarası', 'cat' => 'piste'],
    ['src' => 'assets/images/8J4C5956.jpg', 'caption' => 'Gondol Teleferik İstasyonu ve Tesis Meydanı', 'cat' => 'piste'],
    ['src' => 'assets/images/8J4C9609.jpg', 'caption' => 'Ergan Kayak Pistlerinde Hızlı Slalom Aksiyonu', 'cat' => 'action'],
    ['src' => 'assets/images/8J4C9971.jpg', 'caption' => '1. Etap Sosyal Tesisler ve Telesiyej Biniş İstasyonu', 'cat' => 'piste'],
    ['src' => 'assets/images/DJI_0503.jpg', 'caption' => 'Munzur Zirveleri ve Bulutların Üzerinde Kayak Keyfi', 'cat' => 'piste'],
    ['src' => 'assets/images/IMG_2550.jpg', 'caption' => 'Ergan Dağında Muhteşem Kış Güneşi ve Kar Kalitesi', 'cat' => 'piste'],
    ['src' => 'assets/images/IMG_6208.jpg', 'caption' => 'Profesyonel Kayakçıların Munzur Zirve İnişi', 'cat' => 'action'],
    ['src' => 'assets/images/Ergan-Dagi.jpg', 'caption' => 'Ergan Dağı Kış Sporları Merkezi Genel Görünüm', 'cat' => 'piste'],
    ['src' => 'assets/images/tasarim-yatay.jpg', 'caption' => 'FIS Europa Cup Snowboard Cross 2026 Şampiyonası', 'cat' => 'action']
];
?>

<!-- Başlık Bandı -->
<section style="padding: 4.5rem 0 3rem 0; background: linear-gradient(180deg, rgba(7,13,25,0.9) 0%, var(--bg-dark) 100%);">
    <div class="container text-center">
        <span class="section-badge"><i class="fa-solid fa-camera"></i> Yüksek Çözünürlüklü Arşiv</span>
        <h1 class="section-title">Ergan Dağı <span class="text-cyan">Fotoğraf Galerisi</span></h1>
        <p class="section-desc" style="max-width: 750px; margin: 0 auto;">
            Munzur Dağları'nın bembeyaz zirveleri, pistlerdeki adrenalini ve Ergan Tatil Köyü atmosferini keşfedin.
        </p>
    </div>
</section>

<!-- Galeri Grid & Lightbox -->
<section style="padding: 2rem 0 6rem 0;">
    <div class="container">
        <div class="photo-gallery-grid">
            <?php foreach ($galleryPhotos as $photo): ?>
            <div class="gallery-item" data-caption="<?= htmlspecialchars($photo['caption']) ?>">
                <img src="<?= $photo['src'] ?>" alt="<?= htmlspecialchars($photo['caption']) ?>" loading="lazy">
                <div class="gallery-item-overlay">
                    <span><i class="fa-solid fa-magnifying-glass-plus"></i> <?= htmlspecialchars($photo['caption']) ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
