<?php
$pageTitle = "Konaklama ve Oteller Rehberi";
require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Başlık Bandı -->
<section style="padding: 4.5rem 0 3rem 0; background: linear-gradient(180deg, rgba(7,13,25,0.9) 0%, var(--bg-dark) 100%);">
    <div class="container text-center">
        <span class="section-badge"><i class="fa-solid fa-bed"></i> Dağ ve Şehir Konaklaması</span>
        <h1 class="section-title">Ergan Dağı ve Erzincan <span class="text-cyan">Oteller Rehberi</span></h1>
        <p class="section-desc" style="max-width: 750px; margin: 0 auto;">
            Pistin yanı başındaki ahşap A-Frame dağ bungalovlarından lüks resort otellere ve şehir merkezindeki konforlu otellere kadar en iyi konaklama seçenekleri.
        </p>
    </div>
</section>

<!-- Oteller Grid -->
<section style="padding: 3rem 0 6rem 0;">
    <div class="container">
        <div class="hotels-grid">
            <?php foreach ($hotels as $hotel): ?>
            <div class="glass-card hotel-card">
                <div class="hotel-img-wrapper">
                    <img src="<?= $hotel['image'] ?>" alt="<?= htmlspecialchars($hotel['name']) ?>">
                    <span class="hotel-badge-tag"><?= $hotel['badge'] ?></span>
                    <span class="hotel-rating-tag"><i class="fa-solid fa-star"></i> <?= $hotel['rating'] ?></span>
                </div>

                <div class="hotel-body">
                    <div>
                        <h3 class="hotel-name"><?= htmlspecialchars($hotel['name']) ?></h3>
                        <div class="hotel-loc">
                            <i class="fa-solid fa-location-dot text-cyan"></i>
                            <span><?= htmlspecialchars($hotel['location']) ?></span>
                        </div>

                        <div style="background:rgba(0,136,255,0.1); border:1px solid rgba(0,180,255,0.25); border-radius:var(--radius-sm); padding:0.6rem 0.85rem; margin-bottom:1rem; font-size:0.83rem;">
                            <div style="color:var(--ice-blue); font-weight:700;"><i class="fa-solid fa-route text-cyan"></i> Dağa Mesafe: <?= $hotel['distance'] ?></div>
                            <div style="color:var(--accent); font-weight:700; margin-top:0.2rem;"><i class="fa-solid fa-van-shuttle"></i> Servis: <?= $hotel['shuttle'] ?></div>
                        </div>

                        <ul class="hotel-features-list">
                            <?php foreach ($hotel['features'] as $f): ?>
                            <li><i class="fa-solid fa-circle-check"></i> <span><?= htmlspecialchars($f) ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="hotel-actions">
                        <a href="tel:<?= $hotel['phone_clean'] ?>" class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-phone"></i> <?= $hotel['phone'] ?>
                        </a>
                        <a href="https://wa.me/<?= $hotel['phone_clean'] ?>?text=Merhaba,%20Ergan%20Kayak%20tatili%20i%C3%A7in%20rezervasyon%20yapmak%20istiyorum." target="_blank" class="btn btn-outline btn-sm">
                            <i class="fa-brands fa-whatsapp text-success"></i> WhatsApp
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Konaklama İpuçları ve Transfer Tavsiyesi -->
        <div class="glass-card" style="margin-top: 4rem; padding: 2.5rem;">
            <div style="display: grid; grid-template-columns: 1.5fr 1fr; gap: 2.5rem; align-items: center;">
                <div>
                    <span class="section-badge"><i class="fa-solid fa-circle-info"></i> Seyahat Rehberi</span>
                    <h3 style="font-size: 1.6rem; font-weight: 800; color: white; margin: 0.75rem 0 1rem 0;">
                        Ergan Dağında Konaklama & <span class="text-cyan">Transfer Kolaylığı</span>
                    </h3>
                    <p style="font-size: 0.95rem; color: var(--text-light); line-height: 1.7; margin-bottom: 1rem;">
                        Erzincan, Türkiye'de havalimanından kayak pistlerine en hızlı ulaşılan ildir. Havalimanına indiğiniz andan itibaren 10-12 dakika içinde otelinize veya gondol teleferik istasyonuna varabilirsiniz.
                    </p>
                    <p style="font-size: 0.95rem; color: var(--text-light); line-height: 1.7;">
                        Dağ üzerinde konaklamak isteyen misafirlerimiz için <strong>Ergan Tatil Köyü A-Frame ahşap dağ bungalovları</strong> ve <strong>Ramada By Wyndham Resort</strong> doğrudan pist başında yer alırken; şehir merkezindeki otellerimiz grup servisi ve taksi imkanlarıyla ekonomik bir alternatif sunar.
                    </p>
                </div>

                <div style="background: rgba(0,0,0,0.3); border: 1px solid var(--border-glass); border-radius: var(--radius-lg); padding: 1.75rem;">
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: white; margin-bottom: 1rem;"><i class="fa-solid fa-clock text-cyan"></i> Mesafeler</h4>
                    <div style="display:flex; flex-direction:column; gap:0.75rem; font-size:0.9rem; color:var(--text-light);">
                        <div style="display:flex; justify-content:space-between; border-bottom:1px solid rgba(255,255,255,0.08); padding-bottom:0.5rem;">
                            <span>Havalimanı - Dağ:</span>
                            <strong style="color:var(--accent);">10-12 Dakika</strong>
                        </div>
                        <div style="display:flex; justify-content:space-between; border-bottom:1px solid rgba(255,255,255,0.08); padding-bottom:0.5rem;">
                            <span>Şehir Merkezi - Dağ:</span>
                            <strong style="color:var(--accent);">12 km (15 Dk)</strong>
                        </div>
                        <div style="display:flex; justify-content:space-between; border-bottom:1px solid rgba(255,255,255,0.08); padding-bottom:0.5rem;">
                            <span>Otogar - Dağ:</span>
                            <strong style="color:var(--accent);">15 Dakika</strong>
                        </div>
                        <div style="display:flex; justify-content:space-between;">
                            <span>Pist Başı Oteller:</span>
                            <strong style="color:#34d399;">0 Metre (Pistte)</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
