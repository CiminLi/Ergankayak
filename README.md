# 🎿 Ergan Dağı Kayak Merkezi - Yeni Resmi Web Sitesi (v1.0.0)

Munzur Dağları eteklerinde, 2.970 metre zirve rakımı ve **17.950 metre kesintisiz doğal pistiyle** Avrupa'nın en uzun pistine sahip Ergan Dağı Kayak Merkezi için sıfırdan modern, ultra hızlı, mobil uyumlu ve zengin içerikli olarak geliştirilmiş yeni nesil web platformu.

---

## 🌟 Öne Çıkan Özellikler

1. **Canlı Tesis & 9 Pist Durumu Paneli:**
   - 22 adet 8 kişilik gondol teleferik, 2 etaplı klemensli telesiyej, T-Bar ve Dağ Kızağı mekanik tesislerinin anlık durumları.
   - 9 adet tescilli pistin zorluk dereceleri (Yeşil, Mavi, Kırmızı, Siyah), uzunlukları, rakım farkları ve gece kayağı filtreleri.

2. **Gerçek Zamanlı 4 Canlı Yayın Kamerası (RTSP / HD Webcams):**
   - Alt İstasyon Gondol Girişi (`https://rtsp.me/embed/9bBEy66a/`)
   - 1. Etap Meydan & Kafe Terası (`https://rtsp.me/embed/BsTTesdZ/`)
   - Ardıçlı Gölü İstasyonu 2.500m (`https://rtsp.me/embed/Gn6GfzDQ/`)
   - Munzur Zirve 2.970m & Ana İniş Pisti (`https://rtsp.me/embed/NnFrSEdG/`)

3. **2025 / 2026 Sezonu Resmi Skipass Tarifesi & İnteraktif Hesaplayıcı:**
   - Onaylı resmi bilet fiyatları: Gece Kayağı (300 ₺), 1 Günlük Sınırsız (900 ₺), Öğrenci (700 ₺), 10/20/50 Kontör Kartları, Gondol Tek Biniş (120 ₺), vb.
   - Kişi sayısı, gün süresi ve kayak/snowboard kiralama durumuna göre anlık bütçe hesaplayan interaktif modül.
   - Tek tıkla WhatsApp bilet danışmanına rezervasyon iletme özelliği.

4. **Dev Yatırımlar & 4 Mevsim Vizyon Projeleri:**
   - **Avrupa'nın En Uzun Dağ Kızağı Projesi (Alpine Coaster):** 493 Milyon TL bütçe, 2.744m hat uzunluğu, 355m kot farkı, 65 iki kişilik araç, saatte 840 yolcu.
   - **Yeni Günübirlik Tesis Kompleksi:** 111 Milyon TL bütçe, modern kafeterya, kayak kiralama/satış merkezi, sağlık birimleri, yıllık 2 milyon ziyaretçi hedefi.
   - **FIS Europa Cup Snowboard Cross 2026** (15-18 Ocak) uluslararası şampiyona alanı.

5. **Oteller & Dağ Konaklama Rehberi:**
   - Pist başındaki **Ergan Tatil Köyü A-Frame ahşap dağ evleri**, **Ramada by Wyndham Resort**, **Aziris**, **Grand Emir** ve **Mesut Otel** için doğrudan telefon, WhatsApp ve servis bilgileri.

6. **Medya & Galeri:**
   - 6 adet yüksek çözünürlüklü YouTube tanıtım ve drone videosu (Modal player ile sayfa yenilenmeden izleme).
   - Munzur Dağları ve pist aksiyonlarından oluşan filtreli Lightbox fotoğraf galerisi.

7. **Ulaşım Rehberi & İletişim:**
   - Erzincan Yıldırım Akbulut Havalimanı'na sadece **10-12 dakika** mesafede.
   - JAK (Jandarma Arama Kurtarma 112) acil müdahale entegrasyonu.
   - AJAX tabanlı, gelen mesajları kaydeden çalışan iletişim formu.

---

## 💻 Başka Bir Bilgisayara Kurulum ve Çalıştırma

Projeyi başka herhangi bir bilgisayara (Windows, macOS veya Linux) çekip çalıştırmak son derece kolaydır.

### Yöntem 1: Git ile Klonlama (Önerilen)

```bash
# 1. Projeyi bilgisayarınıza klonlayın
git clone https://github.com/KULLANICI_ADINIZ/Ergankayak.git

# 2. Proje dizinine girin
cd Ergankayak
```

### Yöntem 2: PHP Dahili Web Sunucusu ile Hızlı Başlatma (Herhangi bir kurulum gerektirmez)

Bilgisayarınızda PHP yüklüyse (veya XAMPP kuruluysa), terminal veya PowerShell'de tek satır komutla projeyi ayağa kaldırabilirsiniz:

```bash
# Proje klasörü içindeyken:
php -S localhost:8000
```

Tarayıcınızı açıp `http://localhost:8000` adresine gidin. Site tüm fonksiyonlarıyla anında çalışacaktır!

### Yöntem 3: XAMPP / WampServer ile Çalıştırma

1. Klonlanan `Ergankayak` klasörünü XAMPP'ın `htdocs` klasörünün içine kopyalayın:
   - Windows için: `C:\xampp\htdocs\Ergankayak`
2. XAMPP Kontrol Panelinden **Apache** servisini başlatın.
3. Tarayıcınızdan şu adrese gidin:
   `http://localhost/Ergankayak/`

---

## 📁 Proje Dizin Yapısı

```
Ergankayak/
├── api/
│   └── contact.php          # İletişim formu API işleyicisi (JSON kaydı)
├── assets/
│   ├── css/
│   │   └── style.css        # Modern Alpine koyu/buz temalı stil dosyası
│   ├── js/
│   │   └── main.js          # Canlı kamera geçişleri, hesaplayıcı, modal ve filtreler
│   ├── icons/               # SVG pist ve lift simgeleri
│   └── images/              # Yüksek çözünürlüklü drone, otel ve pist fotoğrafları
├── includes/
│   ├── data.php             # Tüm pist, lift, fiyat, otel ve proje veri tabanı
│   ├── header.php           # Canlı hava durumu bandı ve navigasyon
│   └── footer.php           # Alt bilgi, acil durumlar, modallar ve scriptler
├── index.php                # Ana vitrin sayfası
├── tesis-durumu.php         # Detaylı Tesis ve Pistler sayfası
├── canli-yayin.php          # 4 Canlı RTSP Webcam sayfası
├── fiyatlar.php             # Skipass tarifesi ve interaktif bilet hesaplayıcı
├── oteller.php              # Dağ bungalovları ve oteller rehberi
├── projeler.php             # Dağ kızağı ve günübirlik tesis vizyon raporu
├── galeri.php               # Fotoğraf galerisi ve Lightbox
├── videolar.php             # YouTube aksiyon videoları sayfası
├── iletisim.php             # Ulaşım rehberi, Google Harita ve iletişim formu
├── .gitignore               # Versiyon kontrolü hariç tutulanlar
└── README.md                # Proje dokümantasyonu ve kurulum rehberi
```

---

## 🏷️ Versiyon Bilgisi
- **Sürüm:** `v1.0.0`
- **Tarih:** 2026
- **Geliştirici:** Antigravity AI Pair Programming
- **Kurumsal:** Ergan Dağı Kayak Merkezi • Erzincan
