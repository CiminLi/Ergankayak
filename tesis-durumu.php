<?php
$pageTitle = "Canlı Tesis ve Pist Durumu";
require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Sayfa Başlık Bandı -->
<section style="padding: 4.5rem 0 3rem 0; background: linear-gradient(180deg, rgba(7,13,25,0.9) 0%, var(--bg-dark) 100%);">
    <div class="container text-center">
        <span class="section-badge"><i class="fa-solid fa-person-skiing"></i> Zirve 2.970M</span>
        <h1 class="section-title">Canlı Tesis & <span class="text-cyan">Pist Durumu</span></h1>
        <p class="section-desc" style="max-width: 750px; margin: 0 auto;">
            Ergan Dağı Kayak Merkezi'nin tüm mekanik tesisleri, liftleri, kar kalınlığı ve 9 pistinin anlık açılış durumları.
        </p>
    </div>
</section>

<!-- Liftler Listesi -->
<section style="padding: 3rem 0;">
    <div class="container">
        <div class="lifts-grid">
            <?php foreach ($lifts as $lift): ?>
            <div class="glass-card lift-card">
                <div>
                    <div class="lift-header">
                        <div class="lift-icon-title">
                            <div class="lift-icon">
                                <img src="<?= $lift['img'] ?>" alt="<?= htmlspecialchars($lift['name']) ?>">
                            </div>
                            <div>
                                <h3 class="lift-name"><?= htmlspecialchars($lift['name']) ?></h3>
                                <div class="lift-type"><?= htmlspecialchars($lift['type']) ?></div>
                            </div>
                        </div>
                        <span class="status-badge <?= $lift['status'] == 'Açık' ? 'open' : 'closed' ?>">
                            <span class="pulse-dot <?= $lift['status'] == 'Açık' ? '' : 'danger' ?>"></span>
                            <?= $lift['status'] ?>
                        </span>
                    </div>

                    <div class="lift-metrics">
                        <div class="metric-item">
                            <span class="metric-lbl">Hat Uzunluğu</span>
                            <span class="metric-val"><?= $lift['length'] ?></span>
                        </div>
                        <div class="metric-item">
                            <span class="metric-lbl">Kapasite</span>
                            <span class="metric-val"><?= $lift['capacity'] ?></span>
                        </div>
                        <div class="metric-item">
                            <span class="metric-lbl">İstasyon Rakımları</span>
                            <span class="metric-val"><?= $lift['elevation'] ?></span>
                        </div>
                        <div class="metric-item">
                            <span class="metric-lbl">Bakım & Kontrol</span>
                            <span class="metric-val text-cyan">Onaylı</span>
                        </div>
                    </div>
                </div>
                <p class="lift-desc"><?= htmlspecialchars($lift['description']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Pistler Tablosu ve Filtreler -->
<section style="padding: 2rem 0 5rem 0;">
    <div class="container">
        <div class="piste-box">
            <div class="piste-controls">
                <div>
                    <h3 style="font-size: 1.5rem; font-weight: 800; color: white;">9 Tescilli Pist ve Eğim Profilleri</h3>
                    <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 0.2rem;">Farklı zorluk derecelerine sahip uluslararası standartta pistlerimiz</p>
                </div>

                <div class="piste-filters">
                    <button class="filter-btn active" data-filter="all">Tüm Pistler (9)</button>
                    <button class="filter-btn" data-filter="open">Açık Olanlar</button>
                    <button class="filter-btn" data-filter="green">Yeşil (Kolay)</button>
                    <button class="filter-btn" data-filter="blue">Mavi (Orta)</button>
                    <button class="filter-btn" data-filter="red">Kırmızı (Zor)</button>
                    <button class="filter-btn" data-filter="black">Siyah (Ekstrem)</button>
                    <button class="filter-btn" data-filter="night">Gece Kayağı</button>
                </div>
            </div>

            <div class="piste-table-wrapper">
                <table class="piste-table">
                    <thead>
                        <tr>
                            <th>Pist No</th>
                            <th>Pist Adı & Detay</th>
                            <th>Zorluk</th>
                            <th>Uzunluk</th>
                            <th>Rakım Kotu</th>
                            <th>Maks. Eğim</th>
                            <th>Gece Kayağı</th>
                            <th>Yapay Kar</th>
                            <th>Durum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pistes as $piste): ?>
                        <tr data-diff="<?= $piste['diff_level'] ?>" data-status="<?= $piste['status'] ?>" data-night="<?= $piste['lighting'] ? 'true' : 'false' ?>">
                            <td><strong><?= $piste['no'] ?></strong></td>
                            <td>
                                <div style="font-weight: 700; color: white;"><?= htmlspecialchars($piste['name']) ?></div>
                                <div style="font-size: 0.8rem; color: var(--text-muted); margin-top: 0.2rem;"><?= htmlspecialchars($piste['description']) ?></div>
                            </td>
                            <td>
                                <span class="difficulty-pill <?= $piste['diff_level'] ?>">
                                    <span class="diff-circle"></span>
                                    <?= htmlspecialchars($piste['difficulty']) ?>
                                </span>
                            </td>
                            <td><strong style="color:var(--ice-blue);"><?= $piste['length'] ?></strong></td>
                            <td><?= $piste['elevation'] ?></td>
                            <td><?= $piste['slope'] ?></td>
                            <td>
                                <?php if ($piste['lighting']): ?>
                                <span style="color:#fbbf24; font-weight:700;"><i class="fa-solid fa-moon"></i> Işıklandırmalı</span>
                                <?php else: ?>
                                <span style="color:var(--text-muted);">-</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ($piste['snow_making']): ?>
                                <span style="color:var(--accent);"><i class="fa-solid fa-snowflake"></i> Mevcut</span>
                                <?php else: ?>
                                <span style="color:var(--text-muted);">Doğal Kar</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <span class="status-badge <?= $piste['status'] == 'Açık' ? 'open' : 'closed' ?>">
                                    <span class="pulse-dot <?= $piste['status'] == 'Açık' ? '' : 'danger' ?>"></span>
                                    <?= $piste['status'] ?>
                                </span>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- FIS Pist Güvenlik Kuralları -->
        <div style="margin-top: 4rem;">
            <div class="section-header" style="margin-bottom: 2rem;">
                <span class="section-badge"><i class="fa-solid fa-shield-halved"></i> Güvenlik İlkeleri</span>
                <h2 class="section-title">Pistte Güvenlik & <span class="text-cyan">FIS Kuralları</span></h2>
            </div>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem;">
                <div class="glass-card" style="padding: 1.75rem;">
                    <div style="font-size: 1.75rem; color: var(--accent); margin-bottom: 0.75rem;"><i class="fa-solid fa-helmet-safety"></i></div>
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: white; margin-bottom: 0.5rem;">Kask ve Ekipman Emniyeti</h4>
                    <p style="font-size: 0.88rem; color: var(--text-light); line-height: 1.5;">
                        Tesislerimizde özellikle çocuklar ve acemi kayakçılar için kask kullanımı zorunludur. Tüm bağlamalarınızın ayarlı olduğundan emin olunuz.
                    </p>
                </div>

                <div class="glass-card" style="padding: 1.75rem;">
                    <div style="font-size: 1.75rem; color: var(--accent); margin-bottom: 0.75rem;"><i class="fa-solid fa-arrows-down-to-people"></i></div>
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: white; margin-bottom: 0.5rem;">Öndeki Kayakçıya Öncelik</h4>
                    <p style="font-size: 0.88rem; color: var(--text-light); line-height: 1.5;">
                        Önünüzdeki kayakçı veya snowboardcunun her zaman geçiş önceliği vardır. Sollama yaparken güvenli mesafe bırakınız.
                    </p>
                </div>

                <div class="glass-card" style="padding: 1.75rem;">
                    <div style="font-size: 1.75rem; color: var(--accent); margin-bottom: 0.75rem;"><i class="fa-solid fa-triangle-exclamation"></i></div>
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: white; margin-bottom: 0.5rem;">Pist Dışı (Off-Piste) Uyarısı</h4>
                    <p style="font-size: 0.88rem; color: var(--text-light); line-height: 1.5;">
                        İşaretlenmiş pist sınırlarının dışına çıkmak çığ ve kaybolma tehlikesi barındırır. Acil bir durumda derhal 112 JAK hattını arayınız.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
