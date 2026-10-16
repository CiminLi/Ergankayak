<?php
$pageTitle = "Skipass ve Fiyat Tarifesi";
require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Başlık Bandı -->
<section style="padding: 4.5rem 0 3rem 0; background: linear-gradient(180deg, rgba(7,13,25,0.9) 0%, var(--bg-dark) 100%);">
    <div class="container text-center">
        <span class="section-badge"><i class="fa-solid fa-tags"></i> 2025 / 2026 Kış Sezonu</span>
        <h1 class="section-title">Skipass ve <span class="text-cyan">Tesis Fiyat Listesi</span></h1>
        <p class="section-desc" style="max-width: 750px; margin: 0 auto;">
            Ergan Dağı Kayak Merkezi resmi ücret tarifesi. Bütçenize uygun sınırsız günlük biletler, esnek kontör paketleri ve sezonluk geçiş kartları.
        </p>
    </div>
</section>

<!-- Fiyat Kartları Grid -->
<section style="padding: 3rem 0;">
    <div class="container">
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
                        <i class="fa-solid fa-cart-shopping"></i> Hesapla & WhatsApp ile Al
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Tek Biniş ve Kızak Ücretleri -->
        <div class="single-rides-box">
            <div style="display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:1rem;">
                <div>
                    <h3 style="font-size:1.35rem; font-weight:800; color:white;">Tek Çıkış, Kızak ve Yürüyen Bant Tarifesi</h3>
                    <p style="font-size:0.85rem; color:var(--text-muted);">Yaya binişler, manzara seyri ve kızak eğlencesi için geçerli biletler</p>
                </div>
                <span class="section-badge" style="margin:0;"><i class="fa-solid fa-clock"></i> Gişelerden Temin Edilebilir</span>
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

        <!-- Resmi Fiyat Tablosu Görseli (Screenshot_7) -->
        <div style="margin: 4rem 0;">
            <div class="section-header" style="margin-bottom: 2rem;">
                <span class="section-badge"><i class="fa-solid fa-certificate"></i> Resmi Tarife İlanı</span>
                <h2 class="section-title">Ergan 3300 <span class="text-cyan">Resmi Fiyat Posteri</span></h2>
                <p class="section-desc">Erzincan İl Özel İdaresi ve Ergan Dağı Yönetimi tarafından onaylanan resmi bilet tarifesi.</p>
            </div>

            <div class="glass-card" style="padding: 1.5rem; text-align: center; max-width: 950px; margin: 0 auto; overflow: hidden;">
                <img src="assets/images/Screenshot_7.png" alt="Ergan Dağı Resmi Fiyat Listesi" style="width: 100%; height: auto; border-radius: var(--radius-md);">
            </div>
        </div>

        <!-- İnteraktif Hesaplayıcı -->
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
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
