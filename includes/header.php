<?php
if (!isset($resortInfo)) {
    require_once __DIR__ . '/data.php';
}
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? htmlspecialchars($pageTitle) . ' | ' : '' ?><?= htmlspecialchars($resortInfo['name']) ?> - Erzincan</title>
    <meta name="description" content="Ergan Dağı Kayak Merkezi Resmi Web Sitesi. Avrupa'nın en uzun kesintisiz pisti, 2.970m zirve rakımı, canlı yayın kameraları, skipass fiyatları ve otel rezervasyon rehberi.">
    <meta name="keywords" content="ergan kayak, ergan dağı, erzincan kayak merkezi, munzur kayak, skipass fiyatları, ergan canlı yayın webcam, dağ kızağı projesi, ergan oteller">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/ergan_dagi_favicon_512.png">
    
    <!-- FontAwesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Main Alpine Theme CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Arka Plan Kar Yağışı Efekti -->
<div class="snowfall-container" aria-hidden="true"></div>

<!-- Üst Canlı Dağ Durumu Bandı -->
<div class="top-live-bar">
    <div class="container">
        <div class="top-bar-content">
            <div class="weather-snow-ticker">
                <div class="live-indicator">
                    <span class="pulse-dot"></span>
                    <span>CANLI DAĞ DURUMU</span>
                </div>
                <div class="item">
                    <i class="fa-solid fa-temperature-low text-cyan"></i>
                    <span>Zirve Sıcaklık: <strong id="liveWeatherTemp">-4°C</strong></span>
                </div>
                <div class="item">
                    <i class="fa-solid fa-snowflake text-cyan"></i>
                    <span>Kar Kalınlığı: <strong id="liveSnowDepth">145 cm (Toz Kar)</strong></span>
                </div>
                <div class="item">
                    <i class="fa-solid fa-wind text-cyan"></i>
                    <span>Rüzgar: <strong id="liveWindSpeed">12 km/s</strong></span>
                </div>
                <div class="item">
                    <i class="fa-solid fa-person-skiing text-cyan"></i>
                    <span>Pistler: <strong class="text-cyan">9 Pist Açık</strong></span>
                </div>
            </div>

            <div class="top-bar-links">
                <a href="tel:<?= $resortInfo['phone_clean'] ?>">
                    <i class="fa-solid fa-phone"></i>
                    <span><?= $resortInfo['phone'] ?></span>
                </a>
                <a href="tel:112" class="text-danger">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <span>JAK Acil: 112</span>
                </a>
                <a href="https://wa.me/<?= $resortInfo['whatsapp'] ?>" target="_blank" class="text-success">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>WhatsApp</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Ana Navigasyon Başlığı -->
<header class="main-header">
    <div class="container">
        <div class="nav-container">
            <!-- Logo -->
            <a href="index.php" class="brand-logo">
                <img src="assets/images/Ergandagi_logo_yeni.png" alt="Ergan Dağı Kayak Merkezi Logo">
                <div class="brand-text">
                    <span class="brand-title">ERGAN DAĞI</span>
                    <span class="brand-subtitle">WORLD SKI CENTER • 2.970M</span>
                </div>
            </a>

            <!-- Menü Linkleri -->
            <ul class="nav-menu">
                <li><a href="index.php" class="nav-link <?= $current_page == 'index' ? 'active' : '' ?>">Ana Sayfa</a></li>
                <li><a href="tesis-durumu.php" class="nav-link <?= $current_page == 'tesis-durumu' ? 'active' : '' ?>">Tesis & Pistler</a></li>
                <li><a href="canli-yayin.php" class="nav-link <?= $current_page == 'canli-yayin' ? 'active' : '' ?>">Canlı Yayın</a></li>
                <li><a href="fiyatlar.php" class="nav-link <?= $current_page == 'fiyatlar' ? 'active' : '' ?>">Skipass Fiyatları</a></li>
                <li><a href="oteller.php" class="nav-link <?= $current_page == 'oteller' ? 'active' : '' ?>">Konaklama</a></li>
                <li><a href="projeler.php" class="nav-link <?= $current_page == 'projeler' ? 'active' : '' ?>">Dev Projeler</a></li>
                <li><a href="galeri.php" class="nav-link <?= $current_page == 'galeri' ? 'active' : '' ?>">Galeri</a></li>
                <li><a href="videolar.php" class="nav-link <?= $current_page == 'videolar' ? 'active' : '' ?>">Videolar</a></li>
                <li><a href="iletisim.php" class="nav-link <?= $current_page == 'iletisim' ? 'active' : '' ?>">İletişim</a></li>
            </ul>

            <!-- Aksiyon Butonları -->
            <div class="nav-actions">
                <a href="canli-yayin.php" class="btn btn-outline btn-sm">
                    <i class="fa-solid fa-video text-cyan"></i>
                    <span>Webcam</span>
                </a>
                <a href="fiyatlar.php#hesaplayici" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-ticket"></i>
                    <span>Bilet Hesapla</span>
                </a>
                <!-- Mobil Açma Butonu -->
                <button class="mobile-toggle" aria-label="Menüyü Aç">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Mobil Menü Çekmecesi -->
<div class="mobile-drawer" id="mobileDrawer">
    <div>
        <div class="drawer-header">
            <div class="brand-logo">
                <img src="assets/images/Ergandagi_logo_yeni.png" alt="Logo" style="height: 38px;">
                <span class="brand-title" style="font-size: 1.1rem;">ERGAN DAĞI</span>
            </div>
            <button class="drawer-close" style="background:none; border:none; color:white; font-size:1.5rem; cursor:pointer;">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <ul class="drawer-nav">
            <li><a href="index.php"><i class="fa-solid fa-house"></i> Ana Sayfa</a></li>
            <li><a href="tesis-durumu.php"><i class="fa-solid fa-mountain"></i> Tesis & Pist Durumu</a></li>
            <li><a href="canli-yayin.php"><i class="fa-solid fa-video"></i> Canlı Yayın Kameraları</a></li>
            <li><a href="fiyatlar.php"><i class="fa-solid fa-ticket"></i> Skipass Fiyat Listesi</a></li>
            <li><a href="oteller.php"><i class="fa-solid fa-hotel"></i> Oteller & Bungalovlar</a></li>
            <li><a href="projeler.php"><i class="fa-solid fa-rocket"></i> Dağ Kızağı & Vizyon Projeleri</a></li>
            <li><a href="galeri.php"><i class="fa-solid fa-images"></i> Fotoğraf Galerisi</a></li>
            <li><a href="videolar.php"><i class="fa-brands fa-youtube"></i> Tanıtım & Aksiyon Videoları</a></li>
            <li><a href="iletisim.php"><i class="fa-solid fa-location-dot"></i> Ulaşım & İletişim</a></li>
        </ul>
    </div>
    <div style="margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid rgba(255,255,255,0.1);">
        <a href="tel:<?= $resortInfo['phone_clean'] ?>" class="btn btn-primary" style="width: 100%; margin-bottom: 0.75rem;">
            <i class="fa-solid fa-phone"></i> <?= $resortInfo['phone'] ?>
        </a>
        <a href="tel:112" class="btn btn-danger" style="width: 100%;">
            <i class="fa-solid fa-triangle-exclamation"></i> JAK Acil: 112
        </a>
    </div>
</div>
