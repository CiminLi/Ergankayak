<?php
$pageTitle = "Ulaşım ve İletişim Rehberi";
require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Başlık Bandı -->
<section style="padding: 4.5rem 0 3rem 0; background: linear-gradient(180deg, rgba(7,13,25,0.9) 0%, var(--bg-dark) 100%);">
    <div class="container text-center">
        <span class="section-badge"><i class="fa-solid fa-location-dot"></i> Havalimanına 10-12 Dk</span>
        <h1 class="section-title">Ulaşım ve <span class="text-cyan">İletişim Rehberi</span></h1>
        <p class="section-desc" style="max-width: 750px; margin: 0 auto;">
            Ergan Dağı Kayak Merkezi'ne nasıl gidilir? Havalimanı, otogar, servis ve özel araç ulaşım yolları ile doğrudan iletişim bilgileri.
        </p>
    </div>
</section>

<!-- Ulaşım Avantajları Kartları -->
<section style="padding: 3rem 0 2rem 0;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.75rem; margin-bottom: 3.5rem;">
            <div class="glass-card" style="padding: 2rem;">
                <div style="font-size: 2.2rem; color: var(--accent); margin-bottom: 1rem;"><i class="fa-solid fa-plane-arrival"></i></div>
                <h3 style="font-size: 1.25rem; font-weight: 800; color: white; margin-bottom: 0.5rem;">Havalimanı Ulaşımı (10-12 Dk)</h3>
                <p style="font-size: 0.9rem; color: var(--text-light); line-height: 1.6;">
                    Erzincan Yıldırım Akbulut Havalimanı'na sadece 12 km mesafededir. Türkiye'de uçağınızdan indikten 12 dakika sonra telesiyeje binebileceğiniz tek kayak merkezidir!
                </p>
            </div>

            <div class="glass-card" style="padding: 2rem;">
                <div style="font-size: 2.2rem; color: var(--accent); margin-bottom: 1rem;"><i class="fa-solid fa-bus"></i></div>
                <h3 style="font-size: 1.25rem; font-weight: 800; color: white; margin-bottom: 0.5rem;">Otogar & Şehir Merkezi (15 Dk)</h3>
                <p style="font-size: 0.9rem; color: var(--text-light); line-height: 1.6;">
                    Erzincan şehir merkezine 12 km mesafede olup Yaylabaşı beldesi üzerinden duble yolla kesintisiz ulaşım sağlanmaktadır. Kış aylarında düzenli servisler kalkmaktadır.
                </p>
            </div>

            <div class="glass-card" style="padding: 2rem;">
                <div style="font-size: 2.2rem; color: var(--accent); margin-bottom: 1rem;"><i class="fa-solid fa-car"></i></div>
                <h3 style="font-size: 1.25rem; font-weight: 800; color: white; margin-bottom: 0.5rem;">Özel Araç & Geniş Otopark</h3>
                <p style="font-size: 0.9rem; color: var(--text-light); line-height: 1.6;">
                    Karayolları ekipleri tarafından yol sürekli açık tutulmaktadır. Alt istasyonda yüzlerce araç kapasiteli ücretsiz otopark bulunmaktadır.
                </p>
            </div>
        </div>

        <!-- İletişim Detayları ve Form -->
        <div class="contact-grid">
            <!-- Sol Bilgi Paneli -->
            <div class="glass-card contact-info-panel">
                <div>
                    <h3 style="font-family:var(--font-display); font-size:1.6rem; font-weight:800; color:white; margin-bottom:1.5rem;">
                        Tesis İletişim Bilgileri
                    </h3>

                    <div class="info-item">
                        <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="info-text">
                            <h4>Açık Adres</h4>
                            <p><?= htmlspecialchars($resortInfo['address']) ?></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="info-text">
                            <h4>Danışma & Santral</h4>
                            <p><a href="tel:<?= $resortInfo['phone_clean'] ?>"><?= $resortInfo['phone'] ?></a></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
                        <div class="info-text">
                            <h4>Resmi E-Posta</h4>
                            <p><a href="mailto:<?= $resortInfo['email'] ?>"><?= $resortInfo['email'] ?></a></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="fa-brands fa-whatsapp text-success"></i></div>
                        <div class="info-text">
                            <h4>WhatsApp Danışma Hattı</h4>
                            <p><a href="https://wa.me/<?= $resortInfo['whatsapp'] ?>" target="_blank" style="color:#34d399; font-weight:700;">+90 535 578 86 24</a></p>
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
                    Bize Ulaşın & Rezervasyon Talebi
                </h3>
                <p style="font-size:0.9rem; color:var(--text-muted); margin-bottom:1.75rem;">
                    Ergan Dağı Kayak Merkezi hakkında öğrenmek istediğiniz her şeyi aşağıdaki formdan iletebilirsiniz.
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
                                <option value="Ulaşım Servis">Ulaşım ve Servis Bilgisi</option>
                                <option value="Diğer">Diğer</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 1.5rem;">
                        <label class="form-label">Mesajınız *</label>
                        <textarea name="message" class="form-control" placeholder="Mesajınızı veya sormak istediklerinizi yazınız..." required></textarea>
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
