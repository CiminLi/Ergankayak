<?php
$pageTitle = "Avrupa'nın En Uzun Pisti & Kış Turizm Merkezi";
require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- 1. HERO SHOWCASE BÖLÜMÜ -->
<section class="hero-section" id="top">
    <div class="hero-bg-wrapper">
        <img src="assets/images/DJI_0554.jpg" alt="Ergan Dağı Zirve ve Pistleri" class="hero-bg-img">
        <div class="hero-overlay"></div>
    </div>

    <div class="container">
        <div class="hero-content">
            <div class="hero-badge-row">
                <span class="hero-badge badge-blue">
                    <i class="fa-solid fa-mountain"></i> Munzur Dağları • Erzincan
                </span>
                <span class="hero-badge badge-gold">
                    <i class="fa-solid fa-trophy"></i> FIS Europa Cup Resort 2026
                </span>
                <span class="hero-badge" style="background:rgba(16,185,129,0.15); border:1px solid rgba(16,185,129,0.4); color:#34d399;">
                    <i class="fa-solid fa-plane-arrival"></i> Havalimanına 10-12 Dk
                </span>
            </div>

            <h1 class="hero-title">
                Avrupa'nın En Uzun Pistinde <br>
                <span class="text-gradient">Karın ve Adrenalinin Zirvesi</span>
            </h1>

            <p class="hero-lead">
                2.970 metre zirve rakımı, 17.950 metre kesintisiz doğal iniş hattı, dünyaca ünlü kristal kar kalitesi, gece kayağı ve modern tesisleriyle Ergan Dağı Kış Sporları Merkezi'ne hoş geldiniz.
            </p>

            <div class="hero-cta-group">
                <a href="canli-yayin.php" class="btn btn-primary btn-lg">
                    <i class="fa-solid fa-video"></i>
                    <span>Canlı Kameraları İzle</span>
                </a>
                <a href="fiyatlar.php" class="btn btn-outline btn-lg">
                    <i class="fa-solid fa-ticket text-cyan"></i>
                    <span>Skipass & Fiyatlar</span>
                </a>
                <a href="tesis-durumu.php" class="btn btn-outline btn-lg">
                    <i class="fa-solid fa-person-skiing text-cyan"></i>
                    <span>Pist ve Lift Durumu</span>
                </a>
            </div>

            <!-- Hero Anahtar İstatistikler -->
            <div class="hero-stats-grid">
                <div class="hero-stat-card">
                    <div class="stat-icon"><i class="fa-solid fa-route"></i></div>
                    <div class="stat-info">
                        <div class="stat-val">17.950 M</div>
                        <div class="stat-lbl">Kesintisiz Doğal Pist</div>
                    </div>
                </div>

                <div class="hero-stat-card">
                    <div class="stat-icon"><i class="fa-solid fa-mountain-sun"></i></div>
                    <div class="stat-info">
                        <div class="stat-val">2.970 M</div>
                        <div class="stat-lbl">Zirve İstasyon Rakımı</div>
                    </div>
                </div>

                <div class="hero-stat-card">
                    <div class="stat-icon"><i class="fa-solid fa-users"></i></div>
                    <div class="stat-info">
                        <div class="stat-val">3.700/S</div>
                        <div class="stat-lbl">Mekanik Taşıma Kapasitesi</div>
                    </div>
                </div>

                <div class="hero-stat-card">
                    <div class="stat-icon"><i class="fa-solid fa-plane"></i></div>
                    <div class="stat-info">
                        <div class="stat-val">10-12 DK</div>
                        <div class="stat-lbl">Havalimanına Mesafe</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. CANLI TESİS & PİST DURUMU PANELİ -->
<section class="status-section" id="tesisler">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fa-solid fa-tower-broadcast"></i> Gerçek Zamanlı Bilgi</span>
            <h2 class="section-title">Mekanik Tesisler ve <span class="text-cyan">Pist Durumu</span></h2>
            <p class="section-desc">
                22 adet 8 kişilik gondol, 2 etaplı yeni teknoloji telesiyej, T-Bar ve kızak tesislerimizle zirveye kesintisiz ulaşım sağlayın.
            </p>
        </div>

        <!-- Lift Durum Kartları -->
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
                            <span class="metric-lbl">Sistem Durumu</span>
                            <span class="metric-val text-cyan">Aktif / Güvenli</span>
                        </div>
                    </div>
                </div>
                <p class="lift-desc"><?= htmlspecialchars($lift['description']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Pist Durum Tablosu ve Filtreler -->
        <div class="piste-box">
            <div class="piste-controls">
                <div>
                    <h3 style="font-size: 1.4rem; font-weight: 800; color: white;">Ergan Kayak Pistleri Haritası</h3>
                    <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 0.2rem;">9 adet tescilli pist ve alternatif freeride rotaları</p>
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
                            <th>Pist Adı</th>
                            <th>Zorluk Seviyesi</th>
                            <th>Uzunluk</th>
                            <th>Rakım Farkı</th>
                            <th>Ort. Eğim</th>
                            <th>Gece Kayağı</th>
                            <th>Durum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pistes as $piste): ?>
                        <tr data-diff="<?= $piste['diff_level'] ?>" data-status="<?= $piste['status'] ?>" data-night="<?= $piste['lighting'] ? 'true' : 'false' ?>">
                            <td><strong><?= $piste['no'] ?></strong></td>
                            <td>
                                <div style="font-weight: 700; color: white;"><?= htmlspecialchars($piste['name']) ?></div>
                                <div style="font-size: 0.78rem; color: var(--text-muted);"><?= htmlspecialchars($piste['description']) ?></div>
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

            <div style="margin-top: 1.5rem; text-align: center;">
                <a href="tesis-durumu.php" class="btn btn-outline">
                    <span>Tüm Pist Eğim Profillerini ve Detayları Gör</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 3. CANLI YAYIN (WEBCAM) MERKEZİ -->
<section class="webcam-section" id="kameralar">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fa-solid fa-satellite-dish"></i> 7/24 Kesintisiz Yayın</span>
            <h2 class="section-title">Ergan Dağı <span class="text-cyan">Canlı Yayın Kameraları</span></h2>
            <p class="section-desc">
                Pistlerin anlık kar durumunu, hava şartlarını ve tesis hareketliliğini yüksek çözünürlüklü canlı kameralarımızdan takip edin.
            </p>
        </div>

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
                        <h4 id="mainStreamSubtitle" style="font-size:1.1rem; color:white; font-weight:700;"><?= htmlspecialchars($webcams[0]['subtitle']) ?></h4>
                        <p id="mainStreamViews" style="font-size:0.85rem; color:var(--text-muted); margin-top:0.2rem;"><?= htmlspecialchars($webcams[0]['views']) ?></p>
                    </div>
                    <div style="display:flex; gap:0.75rem;">
                        <a href="canli-yayin.php" class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-expand"></i> Tam Ekran Modu
                        </a>
                    </div>
                </div>
            </div>

            <!-- Kamera Seçim Listesi -->
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

<!-- 4. SKIPASS FİYATLARI & İNTERAKTİF HESAPLAYICI -->
<section class="pricing-section" id="fiyatlar">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fa-solid fa-tags"></i> 2025 / 2026 Sezon Tarifesi</span>
            <h2 class="section-title">Resmi Skipass ve <span class="text-cyan">Tesis Ücretleri</span></h2>
            <p class="section-desc">
                Türkiye'nin en avantajlı fiyatlarıyla dünya standartlarında kayak deneyimi. Bütçenize uygun günlük, kontörlü ve sezonluk seçenekler.
            </p>
        </div>

        <!-- Ana Fiyat Kartları -->
        <div class="pricing-grid">
            <?php foreach ($prices['skipass'] as $pass): ?>
            <div class="glass-card pricing-card <?= !empty($pass['popular']) ? 'popular' : '' ?>">
                <?php if (!empty($pass['popular'])): ?>
                <div class="popular-ribbon">En Popüler</div>
                <?php endif; ?>

                <div>
                    <div class="price-header">
                        <span class="price-badge"><?= $pass['badge'] ?></span>
                        <h3 class="price-title" style="margin-top:0.75rem;"><?= htmlspecialchars($pass['title']) ?></h3>
                        <div style="font-size:0.85rem; color:var(--text-muted);"><?= $pass['type'] ?></div>
                    </div>

                    <div class="price-amount-box">
                        <span class="price-val"><?= number_format($pass['price'], 0, ',', '.') ?></span>
                        <span class="price-curr">₺</span>
                        <span class="price-unit">/ <?= $pass['unit'] ?></span>
                    </div>

                    <ul class="price-features-list">
                        <?php foreach ($pass['features'] as $feat): ?>
                        <li><i class="fa-solid fa-circle-check"></i> <span><?= htmlspecialchars($feat) ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div>
                    <a href="#hesaplayici" class="btn <?= !empty($pass['popular']) ? 'btn-primary' : 'btn-outline' ?>" style="width:100%;">
                        <i class="fa-solid fa-cart-shopping"></i> Hesapla & Rezerve Et
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Tek Çıkış & Kızak Ücretleri -->
        <div class="single-rides-box">
            <div style="display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:1rem;">
                <div>
                    <h3 style="font-size:1.3rem; font-weight:800; color:white;">Tek Çıkış, Kızak ve Yürüyen Bant Ücretleri</h3>
                    <p style="font-size:0.85rem; color:var(--text-muted);">Yaya ziyaretçiler, gezi amaçlı binişler ve kızak tutkunları için</p>
                </div>
                <span class="section-badge" style="margin:0;"><i class="fa-solid fa-clock"></i> Anlık Gişe Satışı</span>
            </div>

            <div class="rides-cards-row">
                <?php foreach ($prices['single_rides'] as $ride): ?>
                <div class="single-ride-item">
                    <div class="ride-name"><?= htmlspecialchars($ride['title']) ?></div>
                    <div class="ride-price"><?= number_format($ride['price'], 0, ',', '.') ?> ₺</div>
                    <div class="ride-sub"><?= htmlspecialchars($ride['desc']) ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- İNTERAKTİF BİLET VE EKİPMAN MALİYET HESAPLAYICI -->
        <div class="calculator-box" id="hesaplayici">
            <div class="calc-grid">
                <div>
                    <span class="section-badge" style="background:rgba(0,229,255,0.15); border-color:var(--accent); color:var(--accent);">
                        <i class="fa-solid fa-calculator"></i> Bütçe Planlayıcı
                    </span>
                    <h3 style="font-family:var(--font-display); font-size:2rem; font-weight:800; color:white; margin:0.75rem 0 1rem 0;">
                        Skipass ve Ekipman <span class="text-cyan">Maliyet Hesaplayıcı</span>
                    </h3>
                    <p style="color:var(--text-light); font-size:0.95rem; margin-bottom:2rem;">
                        Kişi sayısı, gün süresi ve ekipman kiralama tercihlerinizi seçerek anlık toplam tutarı hesaplayın ve tek tıkla WhatsApp bilet danışmanımıza iletin.
                    </p>

                    <div class="calc-controls">
                        <!-- Bilet Türü Seçimi -->
                        <div class="control-group">
                            <label class="control-label">
                                <span>Bilet / Skipass Türü</span>
                                <span class="text-cyan"><i class="fa-solid fa-ticket"></i></span>
                            </label>
                            <select id="calcPassType" class="custom-select">
                                <option value="gunluk" data-price="900" selected>1 Günlük Sınırsız Skipass (900 ₺)</option>
                                <option value="ogrenci" data-price="700">1 Günlük Öğrenci Sınırsız (700 ₺)</option>
                                <option value="gece" data-price="300">Gece Kayağı Bileti (300 ₺)</option>
                                <option value="kontor10" data-price="800">10 Çıkış Kontör Kartı (800 ₺)</option>
                                <option value="kontor20" data-price="1500">20 Çıkış Kontör Kartı (1.500 ₺)</option>
                                <option value="kontor50" data-price="3500">50 Çıkış Kontör Kartı (3.500 ₺)</option>
                                <option value="sezon" data-price="17000">Sezonluk Sınırsız VIP Kart (17.000 ₺)</option>
                                <option value="gondol" data-price="120">1 Çıkış Gondol Teleferik (120 ₺)</option>
                                <option value="kizak" data-price="300">Kızak Parkuru 1 Saat (300 ₺)</option>
                            </select>
                        </div>

                        <!-- Kişi / Bilet Sayısı Counter -->
                        <div class="control-group">
                            <label class="control-label">
                                <span>Kişi / Bilet Sayısı</span>
                                <span class="text-cyan"><i class="fa-solid fa-users"></i></span>
                            </label>
                            <div class="qty-counter">
                                <button type="button" class="qty-btn" id="calcBtnDec">-</button>
                                <div class="qty-display" id="calcQtyDisplay">1</div>
                                <input type="hidden" id="calcTicketQty" value="1">
                                <button type="button" class="qty-btn" id="calcBtnInc">+</button>
                                <span style="font-size:0.85rem; color:var(--text-muted); margin-left:0.5rem;">Kişi</span>
                            </div>
                        </div>

                        <!-- Gün Sayısı -->
                        <div class="control-group">
                            <label class="control-label">
                                <span>Kayak Yapılacak Gün Sayısı</span>
                                <span class="text-cyan"><i class="fa-solid fa-calendar-days"></i></span>
                            </label>
                            <select id="calcDays" class="custom-select">
                                <option value="1" selected>1 Günlük</option>
                                <option value="2">2 Gün (Hafta Sonu)</option>
                                <option value="3">3 Günlük Paket</option>
                                <option value="5">5 Günlük Tatil Paketi</option>
                                <option value="7">7 Gün (1 Hafta)</option>
                            </select>
                        </div>

                        <!-- Ekipman Kiralama -->
                        <div class="control-group">
                            <label class="control-label">
                                <span>Ekipman Kiralama Tercihi</span>
                                <span class="text-cyan"><i class="fa-solid fa-person-snowboarding"></i></span>
                            </label>
                            <select id="calcEquipment" class="custom-select">
                                <option value="none" data-price="0" selected>Kendi Ekipmanım Var (0 ₺)</option>
                                <option value="ski" data-price="450">Kayak Takımı (Kayak + Ayakkabı + Baton) (+450 ₺/gün)</option>
                                <option value="snowboard" data-price="500">Snowboard Takımı (Board + Bot) (+500 ₺/gün)</option>
                                <option value="full_ski" data-price="600">Tam Set Kayak + Kask + Gözlük (+600 ₺/gün)</option>
                                <option value="full_board" data-price="650">Tam Set Snowboard + Kask + Gözlük (+650 ₺/gün)</option>
                                <option value="kizak" data-price="200">Kızak Kiralama (+200 ₺/gün)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Özet ve Sipariş Kartı -->
                <div class="calc-summary-card">
                    <div style="font-size:1.15rem; font-weight:800; color:white; border-bottom:1px solid var(--border-glass); padding-bottom:1rem;">
                        <i class="fa-solid fa-receipt text-cyan"></i> Tahmini Maliyet Özeti
                    </div>

                    <div class="summary-row">
                        <span>Bilet / Skipass Tutarı:</span>
                        <strong id="calcUnitPriceDisplay" style="color:white;">900 ₺</strong>
                    </div>

                    <div class="summary-row">
                        <span>Ekipman Kiralama:</span>
                        <strong id="calcEquipPriceDisplay" style="color:var(--text-light);">0 ₺</strong>
                    </div>

                    <div class="summary-row">
                        <span>Otopark & Tesis Girişi:</span>
                        <span class="text-success font-bold">ÜCRETSİZ</span>
                    </div>

                    <div class="summary-total">
                        <span class="total-label">TOPLAM TUTAR:</span>
                        <span class="total-amount" id="calcTotalDisplay">900 ₺</span>
                    </div>

                    <a href="#" id="calcWhatsappBtn" target="_blank" class="btn btn-primary btn-lg" style="width:100%; justify-content:center; gap:0.75rem;">
                        <i class="fa-brands fa-whatsapp" style="font-size:1.3rem;"></i>
                        <span>WhatsApp ile Rezervasyon Yap</span>
                    </a>

                    <div style="font-size:0.75rem; color:var(--text-muted); text-align:center;">
                        * Fiyatlar 2025/2026 kış sezonu resmi tarife olup nakit/kredi kartı geçerlidir.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. FIS EUROPA CUP VE BÜYÜK ETKİNLİKLER -->
<section style="padding: 4rem 0;">
    <div class="container">
        <div class="event-banner-box">
            <div class="event-banner-content">
                <div>
                    <span class="section-badge" style="background:rgba(225,29,72,0.15); border-color:#e11d48; color:#fb7185;">
                        <i class="fa-solid fa-flag-checkered"></i> Uluslararası Şampiyona
                    </span>
                    <h2 style="font-family:var(--font-display); font-size:2.4rem; font-weight:900; color:white; margin:1rem 0; line-height:1.2;">
                        <?= htmlspecialchars($featuredEvent['title']) ?>
                    </h2>
                    <p style="font-size:1.05rem; color:var(--ice-blue); line-height:1.7; margin-bottom:1.5rem;">
                        <?= htmlspecialchars($featuredEvent['desc']) ?>
                    </p>
                    <div style="display:flex; gap:1.5rem; flex-wrap:wrap; font-size:0.95rem; color:var(--text-light); margin-bottom:2rem;">
                        <div><i class="fa-regular fa-calendar-days text-cyan"></i> <strong>Tarih:</strong> <?= $featuredEvent['date'] ?></div>
                        <div><i class="fa-solid fa-location-dot text-cyan"></i> <strong>Yer:</strong> <?= $featuredEvent['location'] ?></div>
                    </div>
                    <a href="galeri.php" class="btn btn-primary">
                        <i class="fa-solid fa-images"></i> Şampiyona Galerisini Gör
                    </a>
                </div>

                <div class="event-poster-preview">
                    <img src="<?= $featuredEvent['image'] ?>" alt="FIS Europa Cup Ergan" style="width:100%; height:auto;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. YENİ DEV YATIRIMLAR VE 4 MEVSİM TURİZM PROJELERİ -->
<section class="projects-section" id="projeler">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fa-solid fa-compass-drafting"></i> Geleceğin Vizyonu</span>
            <h2 class="section-title">Ergan Dağı <span class="text-cyan">Dev Yatırım Projeleri</span></h2>
            <p class="section-desc">
                Avrupa'nın en uzun dağ kızağı hattı ve 111 milyon TL'lik yeni günübirlik tesis yatırımı ile Ergan, 4 mevsim sürdürülebilir bir dünya turizm merkezine dönüşüyor.
            </p>
        </div>

        <div class="projects-grid">
            <?php foreach ($projects as $proj): ?>
            <div class="glass-card project-card">
                <div>
                    <div class="project-tag-row">
                        <span class="project-tag"><i class="fa-solid fa-chart-line"></i> <?= $proj['tag'] ?></span>
                        <span class="section-badge" style="margin:0; font-size:0.75rem;"><?= $proj['badge'] ?></span>
                    </div>

                    <h3 class="project-title"><?= htmlspecialchars($proj['title']) ?></h3>
                    <p class="project-summary"><?= htmlspecialchars($proj['summary']) ?></p>

                    <div class="project-stats-row">
                        <?php foreach ($proj['stats'] as $stat): ?>
                        <div class="proj-stat-item">
                            <div class="val"><?= $stat['value'] ?></div>
                            <div class="lbl"><?= $stat['label'] ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div>
                    <ul class="project-points-list">
                        <?php foreach ($proj['details'] as $det): ?>
                        <li><i class="fa-solid fa-check"></i> <span><?= htmlspecialchars($det) ?></span></li>
                        <?php endforeach; ?>
                    </ul>

                    <div style="margin-top: 1.75rem;">
                        <a href="projeler.php" class="btn btn-outline" style="width: 100%;">
                            <span>Proje Raporunu ve Detayları Oku</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 7. OTELLER & DAĞ KONAKLAMA REHBERİ -->
<section class="hotels-section" id="oteller">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fa-solid fa-bed"></i> Konforlu Konaklama</span>
            <h2 class="section-title">Ergan ve Erzincan <span class="text-cyan">Oteller Rehberi</span></h2>
            <p class="section-desc">
                Pist başındaki ahşap dağ bungalovlarından 5 yıldızlı lüks resort ve butik şehir otellerine kadar konaklama alternatifleri.
            </p>
        </div>

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
                        <div style="font-size:0.8rem; color:var(--accent); font-weight:700; margin-bottom:1rem;">
                            <i class="fa-solid fa-van-shuttle"></i> <?= $hotel['shuttle'] ?>
                        </div>

                        <ul class="hotel-features-list">
                            <?php foreach ($hotel['features'] as $f): ?>
                            <li><i class="fa-solid fa-snowflake"></i> <span><?= htmlspecialchars($f) ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="hotel-actions">
                        <a href="tel:<?= $hotel['phone_clean'] ?>" class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-phone"></i> <?= $hotel['phone'] ?>
                        </a>
                        <a href="https://wa.me/<?= $hotel['phone_clean'] ?>?text=Merhaba,%20konaklama%20ve%20rezervasyon%20hakk%C4%B1nda%20bilgi%20almak%20istiyorum." target="_blank" class="btn btn-outline btn-sm">
                            <i class="fa-brands fa-whatsapp text-success"></i> WhatsApp
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 8. YOUTUBE TANITIM & DRONE VİDEOLARI -->
<section class="media-section" id="videolar">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fa-brands fa-youtube text-danger"></i> Aksiyon & Manzara</span>
            <h2 class="section-title">Ergan Dağı <span class="text-cyan">Video Galerisi</span></h2>
            <p class="section-desc">
                Drone ile zirve uçuşları, kristal toz kar aksiyonu, gece kayağı heyecanı ve kış sporları belgeselleri.
            </p>
        </div>

        <div class="videos-grid">
            <?php foreach ($videos as $vid): ?>
            <div class="glass-card video-card" data-youtube="<?= $vid['yt_id'] ?>">
                <div class="video-thumb-box">
                    <img src="https://img.youtube.com/vi/<?= $vid['yt_id'] ?>/hqdefault.jpg" alt="<?= htmlspecialchars($vid['title']) ?>">
                    <div class="video-play-btn"><i class="fa-solid fa-play"></i></div>
                    <span class="video-duration"><?= $vid['duration'] ?></span>
                </div>
                <div class="video-info">
                    <span class="video-category"><?= $vid['category'] ?></span>
                    <h3 class="video-title"><?= htmlspecialchars($vid['title']) ?></h3>
                    <p style="font-size:0.83rem; color:var(--text-muted); line-height:1.4;"><?= htmlspecialchars($vid['desc']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 9. FOTOĞRAF GALERİSİ -->
<section class="media-section" style="padding-top: 0;" id="galeri">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fa-solid fa-camera-retro"></i> Beyaz Zirveler</span>
            <h2 class="section-title">Kış Manzaraları <span class="text-cyan">Fotoğraf Galerisi</span></h2>
            <p class="section-desc">
                Munzur Sıradağları, pistlerdeki anlar ve eşsiz Ergan manzaraları arasından seçilmiş özel kareler.
            </p>
        </div>

        <div class="photo-gallery-grid">
            <div class="gallery-item" data-caption="Munzur Dağları Zirve ve Sonsuz Kar Manzarası">
                <img src="assets/images/8J4C5496.jpg" alt="Munzur Dağları Kayak">
                <div class="gallery-item-overlay"><span>Munzur Zirve Pisti</span></div>
            </div>
            <div class="gallery-item" data-caption="Ergan Dağı Havadan Panoramik Pist Çekimi">
                <img src="assets/images/DJI_0554.jpg" alt="Ergan Pist Kuşbakışı">
                <div class="gallery-item-overlay"><span>Ardıçlı Gölü ve Ana Pistler</span></div>
            </div>
            <div class="gallery-item" data-caption="Toz Karda Snowboard ve Serbest Stil Aksiyonu">
                <img src="assets/images/8J4C5517.jpg" alt="Snowboard Jump">
                <div class="gallery-item-overlay"><span>Snowboard Freestyle</span></div>
            </div>
            <div class="gallery-item" data-caption="Ergan Tatil Köyü Ahşap A-Frame Dağ Bungalovları">
                <img src="assets/images/Ergan-Tatil-Koyu.jpeg" alt="Ergan Tatil Köyü Evleri">
                <div class="gallery-item-overlay"><span>Ergan Tatil Köyü</span></div>
            </div>
            <div class="gallery-item" data-caption="Ramada By Wyndham Erzincan Resort">
                <img src="assets/images/Ramada-Otel.jpeg" alt="Ramada Resort Otel">
                <div class="gallery-item-overlay"><span>Ramada By Wyndham</span></div>
            </div>
            <div class="gallery-item" data-caption="Kristal Kar Kalitesi ve Eğlenceli Kayak Günleri">
                <img src="assets/images/8J4C5789.jpg" alt="Kayakçılar">
                <div class="gallery-item-overlay"><span>Kristal Toz Kar Keyfi</span></div>
            </div>
            <div class="gallery-item" data-caption="Yüksek İrtifa ve Munzur Uçsuz Bucaksız Zirveleri">
                <img src="assets/images/OE__1346.jpg" alt="Munzur Zirvesi">
                <div class="gallery-item-overlay"><span>2.970 Metre Zirve</span></div>
            </div>
            <div class="gallery-item" data-caption="Işıklandırılmış Pistlerde Gece Kayağı Atmosferi">
                <img src="assets/images/8J4C5956.jpg" alt="Gondol ve Tesisler">
                <div class="gallery-item-overlay"><span>Mekanik Tesisler</span></div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 2.5rem;">
            <a href="galeri.php" class="btn btn-outline">
                <i class="fa-solid fa-images text-cyan"></i> Tüm Fotoğrafları ve Albümleri İncele
            </a>
        </div>
    </div>
</section>

<!-- 10. SIKÇA SORULAN SORULAR ACCORDION -->
<section style="padding: 4rem 0;">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fa-solid fa-circle-question"></i> Bilmeniz Gerekenler</span>
            <h2 class="section-title">Sıkça Sorulan <span class="text-cyan">Sorular</span></h2>
        </div>

        <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 1rem;">
            <?php foreach ($faqs as $faq): ?>
            <div class="glass-card" style="padding: 1.5rem 2rem;">
                <h3 style="font-size: 1.15rem; font-weight: 700; color: white; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.75rem;">
                    <i class="fa-solid fa-circle-info text-cyan"></i>
                    <?= htmlspecialchars($faq['q']) ?>
                </h3>
                <p style="font-size: 0.95rem; color: var(--text-light); line-height: 1.6; margin-left: 2rem;">
                    <?= htmlspecialchars($faq['a']) ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 11. ULAŞIM, HARİTA & HIZLI İLETİŞİM FORMU -->
<section class="contact-section" id="iletisim">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fa-solid fa-paper-plane"></i> Bize Ulaşın</span>
            <h2 class="section-title">Ulaşım ve <span class="text-cyan">İletişim Bilgileri</span></h2>
            <p class="section-desc">
                Havalimanına sadece 10-12 dakika mesafede! Ulaşım rehberi, iletişim formu ve acil yardım hattı.
            </p>
        </div>

        <div class="contact-grid">
            <!-- Sol Bilgi Paneli -->
            <div class="glass-card contact-info-panel">
                <div>
                    <h3 style="font-family:var(--font-display); font-size:1.6rem; font-weight:800; color:white; margin-bottom:1.5rem;">
                        İletişim Kanalları
                    </h3>

                    <div class="info-item">
                        <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="info-text">
                            <h4>Tesis Adresi</h4>
                            <p><?= htmlspecialchars($resortInfo['address']) ?></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="info-text">
                            <h4>Santral & Danışma</h4>
                            <p><a href="tel:<?= $resortInfo['phone_clean'] ?>"><?= $resortInfo['phone'] ?></a></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
                        <div class="info-text">
                            <h4>E-Posta</h4>
                            <p><a href="mailto:<?= $resortInfo['email'] ?>"><?= $resortInfo['email'] ?></a></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="fa-solid fa-plane-arrival"></i></div>
                        <div class="info-text">
                            <h4>Havalimanı Ulaşımı</h4>
                            <p>Erzincan Yıldırım Akbulut Havalimanı: <strong>10-12 Dakika</strong></p>
                        </div>
                    </div>
                </div>

                <!-- JAK Kurtarma Acil Kutusu -->
                <div class="jak-card">
                    <div class="jak-icon"><i class="fa-solid fa-truck-medical"></i></div>
                    <div>
                        <div class="jak-title">JAK Pist Arama Kurtarma: 112</div>
                        <div class="jak-desc">Pistlerde acil durum ve sağlık müdahalesi için 7/24 hizmetinizdedir.</div>
                    </div>
                </div>
            </div>

            <!-- Sağ İletişim Formu -->
            <div class="glass-card contact-form-box">
                <h3 style="font-family:var(--font-display); font-size:1.6rem; font-weight:800; color:white; margin-bottom:0.75rem;">
                    Bize Mesaj Gönderin
                </h3>
                <p style="font-size:0.9rem; color:var(--text-muted); margin-bottom:1.75rem;">
                    Grup rezervasyonları, kayak dersi talepleri veya sorularınız için aşağıdaki formu doldurabilirsiniz.
                </p>

                <form id="erganContactForm">
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label">Adınız Soyadınız *</label>
                            <input type="text" name="name" class="form-control" placeholder="Ad Soyad" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Telefon Numaranız *</label>
                            <input type="tel" name="phone" class="form-control" placeholder="05XX XXX XX XX" required>
                        </div>
                    </div>

                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label">E-Posta Adresiniz</label>
                            <input type="email" name="email" class="form-control" placeholder="ornek@mail.com">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Konu</label>
                            <select name="subject" class="form-control">
                                <option value="Genel Bilgi">Genel Bilgi & Skipass</option>
                                <option value="Otel Rezervasyon">Konaklama & Rezervasyon</option>
                                <option value="Kayak Okulu Dersi">Özel Kayak / Snowboard Dersi</option>
                                <option value="Grup Etkinlik">Grup & Kurumsal Etkinlik</option>
                                <option value="Diğer">Diğer</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 1.5rem;">
                        <label class="form-label">Mesajınız *</label>
                        <textarea name="message" class="form-control" placeholder="Mesajınızı, rezervasyon tarihlerinizi veya sorularınızı buraya yazınız..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                        <i class="fa-solid fa-paper-plane"></i> Mesajı Gönder
                    </button>
                </form>
            </div>
        </div>

        <!-- Google Harita -->
        <div class="map-embed-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48956.128795493035!2d39.48911578335029!3d39.63854378170889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406e67cf5e81d77b%3A0x6b772e0fa525aa1!2sErgan%20Da%C4%9F%C4%B1%20Kayak%20Merkezi!5e0!3m2!1str!2str!4v1700000000000!5m2!1str!2str" 
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
