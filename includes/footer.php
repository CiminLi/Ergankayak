<?php
if (!isset($resortInfo)) {
    require_once __DIR__ . '/data.php';
}
?>

<!-- Ana Sayfa Alt Bilgi (Footer) -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-top-grid">
            <!-- Kolon 1: Marka & Açıklama -->
            <div class="footer-brand">
                <div class="brand-logo">
                    <img src="assets/images/Ergandagi_logo_yeni.png" alt="Ergan Dağı Logo" style="height: 48px;">
                    <div class="brand-text">
                        <span class="brand-title">ERGAN DAĞI</span>
                        <span class="brand-subtitle">WORLD SKI CENTER</span>
                    </div>
                </div>
                <p>
                    Munzur Dağları'nın eşsiz coğrafyasında, 2.970 metre zirve rakımı, 17.950 metre kesintisiz doğal pisti ve dünya standartlarındaki kristal kar kalitesiyle kış ve doğa sporlarının Türkiye'deki cazibe merkezi.
                </p>
                <div class="footer-social-row">
                    <a href="<?= $resortInfo['social']['instagram'] ?>" target="_blank" class="social-link" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="<?= $resortInfo['social']['facebook'] ?>" target="_blank" class="social-link" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="<?= $resortInfo['social']['youtube'] ?>" target="_blank" class="social-link" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="<?= $resortInfo['social']['twitter'] ?>" target="_blank" class="social-link" title="X / Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                </div>
            </div>

            <!-- Kolon 2: Hızlı Bağlantılar -->
            <div>
                <h4 class="footer-col-title">Hızlı Bağlantılar</h4>
                <ul class="footer-links">
                    <li><a href="index.php"><i class="fa-solid fa-angle-right"></i> Ana Sayfa</a></li>
                    <li><a href="tesis-durumu.php"><i class="fa-solid fa-angle-right"></i> Canlı Tesis ve Pistler</a></li>
                    <li><a href="canli-yayin.php"><i class="fa-solid fa-angle-right"></i> Canlı Yayın Kameraları</a></li>
                    <li><a href="fiyatlar.php"><i class="fa-solid fa-angle-right"></i> Skipass & Fiyat Tarifesi</a></li>
                    <li><a href="oteller.php"><i class="fa-solid fa-angle-right"></i> Oteller & Bungalovlar</a></li>
                    <li><a href="projeler.php"><i class="fa-solid fa-angle-right"></i> 4 Mevsim Vizyon Projeleri</a></li>
                    <li><a href="galeri.php"><i class="fa-solid fa-angle-right"></i> Fotoğraf & Video Galerisi</a></li>
                </ul>
            </div>

            <!-- Kolon 3: Tesis Özet Verileri -->
            <div>
                <h4 class="footer-col-title">Tesis İstatistikleri</h4>
                <ul class="footer-links" style="gap: 0.9rem;">
                    <li><span class="text-cyan">Zirve Rakımı:</span> 2.970 Metre</li>
                    <li><span class="text-cyan">Pist Uzunluğu:</span> 17.950 m Kesintisiz</li>
                    <li><span class="text-cyan">Mekanik Kapasite:</span> 3.700 Kişi / Saat</li>
                    <li><span class="text-cyan">Teleferik & Gondol:</span> 22 Adet 8 Kişilik</li>
                    <li><span class="text-cyan">Telesiyej Sistemi:</span> 2 Etap Yeni Nesil</li>
                    <li><span class="text-cyan">Dağ Kızağı:</span> 2.744 m Hat Uzunluğu</li>
                    <li><span class="text-cyan">Gece Kayağı:</span> Işıklandırılmış Pistler</li>
                </ul>
            </div>

            <!-- Kolon 4: Acil & İletişim -->
            <div>
                <h4 class="footer-col-title">İletişim & Acil</h4>
                <div style="display:flex; flex-direction:column; gap:0.9rem; font-size:0.9rem; color:var(--text-light);">
                    <div>
                        <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Danışma & Tesis</div>
                        <strong style="color:white;"><?= $resortInfo['phone'] ?></strong>
                    </div>
                    <div>
                        <div style="font-size:0.75rem; color:var(--danger); text-transform:uppercase; font-weight:700;">JAK Pist Kurtarma</div>
                        <strong style="color:#fb7185;">112 Acil Çağrı Merkezi</strong>
                    </div>
                    <div>
                        <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Ulaşım Avantajı</div>
                        <span style="color:var(--accent);">Havalimanına 10-12 Dakika Mesafede</span>
                    </div>
                    <div>
                        <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">E-Posta</div>
                        <a href="mailto:<?= $resortInfo['email'] ?>" style="color:white;"><?= $resortInfo['email'] ?></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alt Telif & Yasal -->
        <div class="footer-bottom">
            <div>
                &copy; <?= date('Y') ?> <strong><?= $resortInfo['name'] ?></strong>. Tüm hakları saklıdır.
            </div>
            <div style="display: flex; gap: 1.5rem; align-items: center;">
                <span>Erzincan Valiliği & Erzincan İl Özel İdaresi</span>
                <a href="#top" style="color: var(--accent);"><i class="fa-solid fa-arrow-up"></i> Başa Dön</a>
            </div>
        </div>
    </div>
</footer>

<!-- Yüzen Hızlı Aksiyon Butonları -->
<div class="floating-actions">
    <a href="https://wa.me/<?= $resortInfo['whatsapp'] ?>?text=Merhaba,%20Ergan%20Kayak%20Merkezi%20hakk%C4%B1nda%20bilgi%20almak%20istiyorum." 
       target="_blank" class="float-btn whatsapp" title="WhatsApp Canlı Destek">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
    <button class="float-btn back-to-top" title="Yukarı Çık">
        <i class="fa-solid fa-arrow-up"></i>
    </button>
</div>

<!-- Video Oynatıcı Modalı -->
<div class="modal-overlay" id="videoModal">
    <div class="modal-container">
        <button class="modal-close-btn" id="modalVideoClose" aria-label="Videoyu Kapat">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="modal-video-wrapper">
            <iframe id="modalVideoIframe" src="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

<!-- Resim Büyütme Lightbox Modalı -->
<div class="modal-overlay" id="lightboxModal">
    <div class="modal-container" style="max-width: 1000px; text-align: center;">
        <button class="modal-close-btn" id="lightboxClose" aria-label="Resmi Kapat">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div style="max-height: 80vh; overflow: hidden; border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
            <img id="lightboxImg" src="" alt="Büyütülmüş Fotoğraf" style="max-height: 80vh; width: auto; margin: 0 auto; object-fit: contain;">
        </div>
        <div id="lightboxCaption" style="margin-top: 1rem; font-size: 1.1rem; color: white; font-weight: 600;"></div>
    </div>
</div>

<!-- Main Script -->
<script src="assets/js/main.js"></script>
</body>
</html>
