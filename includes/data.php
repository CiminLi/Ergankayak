<?php
/**
 * Ergan Dağı Kış Sporları ve Turizm Merkezi
 * Merkezi Veri Yapısı ve Bilgi Bankası
 */

// Genel Tesis Bilgileri
$resortInfo = [
    'name' => 'Ergan Dağı Kayak Merkezi',
    'title_en' => 'Ergan 3300 World Ski Center',
    'slogan' => "Avrupa'nın En Uzun Kesintisiz Pistinde Karın ve Adrenalinin Zirvesi",
    'location' => 'Munzur Dağları, Erzincan / Türkiye',
    'base_altitude' => '1.750 m',
    'peak_altitude' => '2.970 m (Munzur Zirve 3.258 m)',
    'vertical_drop' => '1.220 m',
    'longest_run' => '17.950 m (Kesintisiz Doğal Pist)',
    'total_slopes' => '9 Adet Ana Pist + Alternatif Freeride Hatları',
    'capacity' => '3.700 Kişi / Saat Taşıma Kapasitesi',
    'airport_distance' => '10-12 Dakika (Erzincan Yıldırım Akbulut Havalimanı)',
    'city_distance' => '12 km (Erzincan İl Merkezi)',
    'season_length' => 'Aralık - Nisan (Ortalama 120+ Gün)',
    'phone' => '(0446) 242 40 24',
    'phone_clean' => '904462424024',
    'emergency_phone' => '112 (Jandarma Arama Kurtarma - JAK)',
    'whatsapp' => '905355788624',
    'email' => 'info@ergankayak.com',
    'address' => 'Yaylabaşı Mahallesi, Ergan Kayak Merkezi Yolu, Merkez / Erzincan',
    'coordinates' => ['lat' => 39.6385, 'lng' => 39.5218],
    'social' => [
        'instagram' => 'https://instagram.com/ergandagikayakmerkezi',
        'facebook' => 'https://facebook.com/ergankayak',
        'youtube' => 'https://youtube.com',
        'twitter' => 'https://twitter.com'
    ]
];

// Mekanik Tesisler (Liftler)
$lifts = [
    [
        'id' => 'gondola',
        'name' => '1. Etap Gondol Teleferik',
        'type' => '8 Kişilik Bağımsız Gondol Kabin',
        'capacity' => '1.000 Kişi / Saat (22 Adet Kabin)',
        'length' => '1.800 m',
        'elevation' => '1.750 m - 2.150 m',
        'status' => 'Açık', // Açık / Bakımda / Kapalı
        'icon' => 'cable-car',
        'img' => 'assets/icons/cable-car-2.svg',
        'description' => 'Alt istasyondan 1. etap sosyal tesislere ve göl istasyonuna panoramik konforlu ulaşım.'
    ],
    [
        'id' => 'chairlift_1',
        'name' => '2. Etap Telesiyej (Göl - Zirve Altı)',
        'type' => '4 Kişilik Klemensli Hızlı Telesiyej',
        'capacity' => '2.700 Kişi / Saat',
        'length' => '2.662 m',
        'elevation' => '2.150 m - 2.700 m',
        'status' => 'Açık',
        'icon' => 'chairlift',
        'img' => 'assets/icons/alpine.svg',
        'description' => 'Ardıçlı Gölü üzerinden zirve alt istasyonuna çıkan yeni nesil yüksek hızlı telesiyej sistemi.'
    ],
    [
        'id' => 'chairlift_2',
        'name' => '3. Etap Telesiyej (Zirve Hattı)',
        'type' => '4 Kişilik Telesiyej',
        'capacity' => '1.500 Kişi / Saat',
        'length' => '2.455 m',
        'elevation' => '2.700 m - 2.970 m',
        'status' => 'Açık',
        'icon' => 'mountain',
        'img' => 'assets/icons/slope.svg',
        'description' => 'Ergan Dağının 2.970 metre zirvesine çıkan, Munzur Dağları panoramasını sunan zirve hattı.'
    ],
    [
        'id' => 'tbar',
        'name' => 'T-Bar Teleski',
        'type' => 'Çift Kişilik Teleski',
        'capacity' => '800 Kişi / Saat',
        'length' => '650 m',
        'elevation' => '2.150 m - 2.300 m',
        'status' => 'Açık',
        'icon' => 'user-check',
        'img' => 'assets/images/people-1.png',
        'description' => 'Acemi pisti, snowboard eğitimi ve orta seviye antrenman alanları için kesintisiz servis.'
    ],
    [
        'id' => 'alpine_coaster',
        'name' => 'Dağ Kızağı (Alpine Coaster)',
        'type' => 'Dört Mevsim Raylı Dağ Kızağı',
        'capacity' => '840 Kişi / Saat (65 İki Kişilik Araç)',
        'length' => '2.744 m Hat Uzunluğu',
        'elevation' => '355 m Kot Farkı',
        'status' => 'Açık',
        'icon' => 'gauge-high',
        'img' => 'assets/images/sled.png',
        'description' => "Avrupa'nın en uzun dağ kızağı projelerinden biri olan 2.744 metrelik heyecan dolu raylı coaster."
    ],
    [
        'id' => 'magic_carpet',
        'name' => 'Yürüyen Bant & Çocuk Pisti',
        'type' => 'Kapalı Konveyör Bant',
        'capacity' => '1.200 Kişi / Saat',
        'length' => '180 m',
        'elevation' => 'Acemi ve Aile Bölgesi',
        'status' => 'Açık',
        'icon' => 'baby',
        'img' => 'assets/images/people-1.png',
        'description' => 'Kayağa yeni başlayanlar, çocuklar ve kızak tutkunları için güvenli taşıma bandı.'
    ]
];

// Pist Bilgileri (9 Adet Ana Pist)
$pistes = [
    [
        'no' => 'Pist 1',
        'name' => 'Munzur Zirve Pisti',
        'difficulty' => 'Siyah (Zor / Profesyonel)',
        'diff_level' => 'black',
        'length' => '3.200 m',
        'elevation' => '2.970 m - 2.500 m',
        'slope' => '%38',
        'lighting' => false,
        'snow_making' => true,
        'status' => 'Açık',
        'description' => 'Adrenalin ve dik eğim arayan profesyonel kayakçılar için nefes kesici serbest iniş hattı.'
    ],
    [
        'no' => 'Pist 2',
        'name' => 'Ardıçlı Gölü Panaroma Pisti',
        'difficulty' => 'Kırmızı (Orta - İleri)',
        'diff_level' => 'red',
        'length' => '4.500 m',
        'elevation' => '2.500 m - 2.150 m',
        'slope' => '%26',
        'lighting' => false,
        'snow_making' => true,
        'status' => 'Açık',
        'description' => 'Ardıçlı Gölü üzerinden göl manzarası eşliğinde geniş ve akıcı iniş keyfi.'
    ],
    [
        'no' => 'Pist 3',
        'name' => "Avrupa'nın En Uzun Doğal Pisti (Vadi İnişi)",
        'difficulty' => 'Mavi (Orta Seviye)',
        'diff_level' => 'blue',
        'length' => '17.950 m Kesintisiz',
        'elevation' => '2.970 m - 1.750 m',
        'slope' => '%18 - %22',
        'lighting' => false,
        'snow_making' => true,
        'status' => 'Açık',
        'description' => "Zirveden alt istasyona kadar tek seferde durmaksızın kesintisiz doğal kayak imkanı sağlayan efsanevi hat."
    ],
    [
        'no' => 'Pist 4',
        'name' => 'Işıklandırılmış Gece Kayağı Pisti',
        'difficulty' => 'Mavi (Orta Seviye)',
        'diff_level' => 'blue',
        'length' => '2.500 m',
        'elevation' => '2.150 m - 1.750 m',
        'slope' => '%20',
        'lighting' => true,
        'snow_making' => true,
        'status' => 'Açık',
        'description' => 'Son teknoloji projektörlerle aydınlatılan, yıldızlar altında gece kayağı yapılan özel hat.'
    ],
    [
        'no' => 'Pist 5',
        'name' => 'Ergan Acemi & Kayak Okulu Pisti',
        'difficulty' => 'Yeşil (Kolay / Başlangıç)',
        'diff_level' => 'green',
        'length' => '1.200 m',
        'elevation' => '1.750 m - 1.820 m',
        'slope' => '%9',
        'lighting' => true,
        'snow_making' => true,
        'status' => 'Açık',
        'description' => 'Geniş emniyet alanı, yürüyen bant erişimi ve tecrübeli eğitmenlerle ilk kayak deneyimi için ideal.'
    ],
    [
        'no' => 'Pist 6',
        'name' => 'Snowpark & Freestyle Aksiyon Alanı',
        'difficulty' => 'Kırmızı (Freestyle)',
        'diff_level' => 'red',
        'length' => '1.800 m',
        'elevation' => '2.300 m - 2.150 m',
        'slope' => '%24',
        'lighting' => false,
        'snow_making' => true,
        'status' => 'Açık',
        'description' => 'Snowboardcular ve serbest stil kayakçılar için rampalar, box ve jump modülleri barındıran parkur.'
    ],
    [
        'no' => 'Pist 7',
        'name' => 'Munzur Freeride & Toz Kar Pisti',
        'difficulty' => 'Siyah (Ekstrem)',
        'diff_level' => 'black',
        'length' => '3.400 m',
        'elevation' => '2.970 m - 2.200 m',
        'slope' => '%42',
        'lighting' => false,
        'snow_making' => false,
        'status' => 'Açık',
        'description' => 'Erzincan’ın kristal toz kar kalitesinde bol karda serbest sürüş (off-piste) tutkunlarına özel.'
    ],
    [
        'no' => 'Pist 8',
        'name' => 'Aile Eğlence & Kızak Parkuru',
        'difficulty' => 'Yeşil (Kızak)',
        'diff_level' => 'green',
        'length' => '1.500 m',
        'elevation' => '1.800 m - 1.750 m',
        'slope' => '%11',
        'lighting' => true,
        'snow_making' => true,
        'status' => 'Açık',
        'description' => 'Kızakla kaymak isteyen aileler, çocuklar ve günübirlik misafirler için eğlence dolu güvenli parkur.'
    ],
    [
        'no' => 'Pist 9',
        'name' => 'Göl Kenarı Gezi & Doğa Bağlantı Yolu',
        'difficulty' => 'Mavi (Gezi / Manzara)',
        'diff_level' => 'blue',
        'length' => '2.100 m',
        'elevation' => '2.200 m - 2.050 m',
        'slope' => '%14',
        'lighting' => false,
        'snow_making' => true,
        'status' => 'Açık',
        'description' => 'Doğa fotoğrafçılığı ve rahat tempo kayak yapmak isteyenler için göl etrafı panoramik gezi hattı.'
    ]
];

// 2025 / 2026 Resmi Fiyat Tarifesi (Screenshot_7 ve Tesis Onaylı)
$prices = [
    'skipass' => [
        [
            'title' => 'Gece Kayağı',
            'price' => 300,
            'unit' => '₺ / Seans',
            'type' => 'Tam / Öğrenci',
            'badge' => 'Işıklandırmalı Pist',
            'popular' => false,
            'features' => ['Özel aydınlatmalı pistlerde gece kayağı', '1. Etap lift kullanımı', '18:00 - 21:30 arası geçerli']
        ],
        [
            'title' => '1 Günlük Sınırsız Skipass',
            'price' => 900,
            'unit' => '₺ / Gün',
            'type' => 'Tam Bilet',
            'badge' => 'En Çok Tercih Edilen',
            'popular' => true,
            'features' => ['Tüm gondol ve telesiyej hatlarında sınırsız geçiş', '9 pistin tamamına tam erişim', 'Gün boyu kesintisiz kullanım']
        ],
        [
            'title' => '1 Günlük Öğrenci (Sınırsız)',
            'price' => 700,
            'unit' => '₺ / Gün',
            'type' => 'Öğrenci İndirimli',
            'badge' => 'Öğrenciye Özel',
            'popular' => false,
            'features' => ['Öğrenci kimliği ibrazı ile geçerli', 'Tüm mekanik tesislerde sınırsız geçiş', 'Gün boyu kesintisiz kullanım']
        ],
        [
            'title' => '10 Çıkış Kontör Kartı',
            'price' => 800,
            'unit' => '₺ / 10 Çıkış',
            'type' => 'Kontörlü Bilet',
            'badge' => 'Esnek Kullanım',
            'popular' => false,
            'features' => ['İstenilen günlerde parça parça kullanım', 'Devredilebilir kart özelliği', 'Sezon boyunca geçerlilik']
        ],
        [
            'title' => '20 Çıkış Kontör Kartı',
            'price' => 1500,
            'unit' => '₺ / 20 Çıkış',
            'type' => 'Kontörlü Bilet',
            'badge' => 'Avantajlı Paket',
            'popular' => false,
            'features' => ['Tüm telesiyej ve gondol etaplarında geçerli', 'Arkadaş grubu ile paylaşılabilir', 'Sezon boyu esnek sürüş']
        ],
        [
            'title' => '50 Çıkış Kontör Kartı',
            'price' => 3500,
            'unit' => '₺ / 50 Çıkış',
            'type' => 'Maksimum Tasarruf',
            'badge' => 'Ekonomik Kontör',
            'popular' => false,
            'features' => ['Yoğun kayak yapanlar ve kulüpler için', 'Çıkış başı sadece 70 ₺ maliyet', 'Tüm sezon geçerli']
        ],
        [
            'title' => 'Sezonluk Sınırsız Kart',
            'price' => 17000,
            'unit' => '₺ / Sezon',
            'type' => 'VIP Sezon Kartı',
            'badge' => 'Erken Satış: 12.500 ₺',
            'popular' => false,
            'features' => ['Sezon boyunca her gün sınırsız kayak', 'Gondol, telesiyej ve gece kayağı dahil', 'Erken satışta 12.500 TL avantajı']
        ]
    ],
    'single_rides' => [
        [
            'title' => '1 Çıkış Gondol (Tam)',
            'price' => 120,
            'unit' => '₺ / Tek Geçiş',
            'type' => 'Yaya & Ziyaretçi',
            'desc' => 'Göl istasyonuna panoramik çıkış ve iniş.'
        ],
        [
            'title' => '1 Çıkış Gondol (Öğrenci)',
            'price' => 90,
            'unit' => '₺ / Tek Geçiş',
            'type' => 'Öğrenci İndirimli',
            'desc' => 'Öğrenci kimliği ile tek seferlik seyir çıkışı.'
        ],
        [
            'title' => '1 Çıkış T-Bar',
            'price' => 90,
            'unit' => '₺ / Tek Geçiş',
            'type' => 'Tek Çıkış',
            'desc' => 'Eğitim ve kısa pist antrenman geçişi.'
        ],
        [
            'title' => 'Kızak Alanı (1 Saat)',
            'price' => 300,
            'unit' => '₺ / Saat',
            'type' => 'Eğlence',
            'desc' => 'Özel korumalı kızak parkurunda 1 saat sınırsız eğlence.'
        ],
        [
            'title' => 'Yürüyen Bant (2 Saat)',
            'price' => 500,
            'unit' => '₺ / 2 Saat',
            'type' => 'Acemi Alanı',
            'desc' => 'Başlangıç pistinde konveyör bant ile güvenli eğitim.'
        ]
    ]
];

// Canlı Yayın Kameraları (RTSP Embeds)
$webcams = [
    [
        'id' => 'cam1',
        'title' => 'Gondol Alt İstasyon',
        'subtitle' => 'Tesis Girişi ve Bilet Gişeleri (1.750 m)',
        'url' => 'https://rtsp.me/embed/9bBEy66a/',
        'thumb' => 'assets/images/8J4C5956.jpg',
        'status' => 'CANLI YAYIN',
        'views' => 'Alt istasyon otoparkı, gişeler ve gondol biniş noktası'
    ],
    [
        'id' => 'cam2',
        'title' => '1. Etap Meydan & Kafe',
        'subtitle' => 'Sosyal Tesisler ve Ara İstasyon (2.150 m)',
        'url' => 'https://rtsp.me/embed/BsTTesdZ/',
        'thumb' => 'assets/images/8J4C9971.jpg',
        'status' => 'CANLI YAYIN',
        'views' => 'Kafe terası, acemi pisti başlangıcı ve telesiyej transfer alanı'
    ],
    [
        'id' => 'cam3',
        'title' => 'Ardıçlı Gölü İstasyonu',
        'subtitle' => 'Doğal Gölet ve 2. Etap Telesiyej (2.500 m)',
        'url' => 'https://rtsp.me/embed/Gn6GfzDQ/',
        'thumb' => 'assets/images/DJI_0554.jpg',
        'status' => 'CANLI YAYIN',
        'views' => 'Ardıçlı Gölü, orta iniş pisti ve vadi manzarası'
    ],
    [
        'id' => 'cam4',
        'title' => 'Munzur Zirve & 3. Etap',
        'subtitle' => 'Zirve Çıkışı ve Ana İniş Pisti (2.970 m)',
        'url' => 'https://rtsp.me/embed/NnFrSEdG/',
        'thumb' => 'assets/images/OE__1346.jpg',
        'status' => 'CANLI YAYIN',
        'views' => '2.970 metre zirve noktası, hava durumu ve Munzur Dağları zirveleri'
    ]
];

// YouTube Tanıtım & Aksiyon Videoları
$videos = [
    [
        'yt_id' => 'XvqzoelNhuo',
        'title' => "Ergan Dağı Tanıtım Filmi & Pist Turu",
        'category' => 'Tanıtım & Pistler',
        'duration' => '03:45',
        'desc' => "Avrupa'nın en uzun pistine sahip Ergan Dağı Kayak Merkezi'nin tüm tesisleri ve kış manzaraları."
    ],
    [
        'yt_id' => 'f0nGKFvFodw',
        'title' => 'Zirveden Erzincan Ovasına Drone Bakışı',
        'category' => 'Hava Çekimi / Drone',
        'duration' => '02:30',
        'desc' => '2.970 metre zirveden Munzur Dağları ve bembeyaz Erzincan ovasının büyüleyici drone görüntüleri.'
    ],
    [
        'yt_id' => 'bUfVj_9MwBc',
        'title' => 'Kristal Toz Kar & Serbest Stil Snowboard',
        'category' => 'Snowboard & Aksiyon',
        'duration' => '04:10',
        'desc' => 'Dünyaca ünlü kristal toz kar kalitesinde freeride inişleri ve heyecan verici atlayışlar.'
    ],
    [
        'yt_id' => 'aIwkBGjuDZ4',
        'title' => 'Yıldızlar Altında Gece Kayağı Keyfi',
        'category' => 'Gece Kayağı',
        'duration' => '02:50',
        'desc' => 'Ergan Dağında ışıklandırılmış pistlerde gece kayağının eşsiz atmosferi ve müzik dolu eğlence.'
    ],
    [
        'yt_id' => 'ubZPrCxWR48',
        'title' => 'Aileler ve Çocuklar İçin Kış Eğlencesi',
        'category' => 'Yaşam & Eğlence',
        'duration' => '03:15',
        'desc' => 'Kızak parkuru, yürüyen bant, kayak okulu ve Ergan Tatil Köyü bungalovlarında kış tatili.'
    ],
    [
        'yt_id' => 'WEgvPACKVqY',
        'title' => 'Uluslararası Dağ Kayağı ve Kış Sporları',
        'category' => 'Şampiyonalar & Organizasyon',
        'duration' => '05:20',
        'desc' => "Dünya Dağ Kayağı Şampiyonası ve FIS Snowboard Europa Cup yarışlarının nefes kesen anları."
    ]
];

// Oteller ve Konaklama
$hotels = [
    [
        'name' => 'Ergan Tatil Köyü (Dağ Bungalovları)',
        'badge' => 'Pist Üzerinde Dağ Konsepti',
        'rating' => 4.9,
        'location' => 'Yaylabaşı Mahallesi, Ergan Kayak Merkezi',
        'distance' => '0 Metre (Doğrudan Pist Üzerinde)',
        'shuttle' => 'Tesis İçinde / Servis Gerekmez',
        'phone' => '0535 578 86 24',
        'phone_clean' => '905355788624',
        'image' => 'assets/images/Ergan-Tatil-Koyu.jpeg',
        'features' => ['Özel A-Frame ahşap dağ evleri', 'Şömineli sıcak oda konforu', 'Pencereden direkt kayak pisti manzarası', 'Yöresel kahvaltı ve restoran hizmeti', 'Kayak odası ve ekipman kurutma alanı']
    ],
    [
        'name' => 'Ramada By Wyndham Erzincan',
        'badge' => '5 Yıldızlı Tesis Konforu',
        'rating' => 4.8,
        'location' => 'Yaylabaşı Mahallesi, Ergan Kayak Merkezi',
        'distance' => 'Tesis Alanı İçerisinde (Zirve Yolu)',
        'shuttle' => 'Kayak Merkezine Özel Servis Mevcut',
        'phone' => '0547 811 24 24',
        'phone_clean' => '905478112424',
        'image' => 'assets/images/Ramada-Otel.jpeg',
        'features' => ['Lüks spa, sauna ve ısıtmalı kapalı havuz', 'Uluslararası standartlarda oda konforu', 'Panoramik dağ manzaralı alakart restoran', 'Simit Sarayı ve kafe alanları', 'Geniş açık otopark ve vale hizmeti']
    ],
    [
        'name' => 'Aziris Butik Otel',
        'badge' => 'Şehir İçi Butik Deneyim',
        'rating' => 4.6,
        'location' => 'Gülabibey, 798. Sk. No:4, Merkez / Erzincan',
        'distance' => '12 km (Merkeze 2 Dk, Dağa 15 Dk)',
        'shuttle' => 'Merkezi Konum (Taksi & Özel Araç)',
        'phone' => '0531 246 86 24',
        'phone_clean' => '905312468624',
        'image' => 'assets/images/IMG_0228-scaled-1.jpg',
        'features' => ['Tarihi doku ve sıcak butik mimari', 'Zengin serpme Erzincan kahvaltısı', 'Hızlı Wi-Fi ve konforlu yataklar', 'Şehir merkezindeki restoranlara yürüme mesafesinde', 'Kayak gruplarına özel rehberlik']
    ],
    [
        'name' => 'Grand Emir Otel',
        'badge' => 'Merkezi Konfor & Grup Servisi',
        'rating' => 4.5,
        'location' => 'Recep Tayyip Erdoğan Cad. Gölcük Mah. No:14, Merkez / Erzincan',
        'distance' => '12.5 km (Ergan Dağına 15 Dk)',
        'shuttle' => 'Grup Halinde Kayak Merkezine Servis Var',
        'phone' => '0532 785 65 90',
        'phone_clean' => '905327856590',
        'image' => 'assets/images/Screenshot_3.png',
        'features' => ['Kayak gruplarına özel transfer servisi', 'Toplantı ve etkinlik salonları', 'Fitness salonu ve dinlenme odaları', 'Zengin açık büfe kahvaltı', '24 saat oda servisi ve resepsiyon']
    ],
    [
        'name' => 'Mesut Otel',
        'badge' => 'Şehrin Kalbinde Samimi Konaklama',
        'rating' => 4.4,
        'location' => 'Ordu Caddesi No:82, Merkez / Erzincan',
        'distance' => '13 km (Havalimanına 8 Dk)',
        'shuttle' => 'Grup Halinde Kayak Merkezine Servis Var',
        'phone' => '0446 214 14 24',
        'phone_clean' => '904462141424',
        'image' => 'assets/images/Mesut-Otel.png',
        'features' => ['Merkezi cadde üzerinde kolay ulaşım', 'Kayak takımı muhafaza odası', 'Güler yüzlü aile işletmesi atmosferi', 'Uygun fiyatlı konaklama paketleri', 'Havalimanı transfer desteği']
    ]
];

// Dev Projeler & Yeni Yatırımlar (Resmi Belgelerden Alınan Veriler)
$projects = [
    [
        'title' => "Avrupa'nın En Uzun Dağ Kızağı Projesi (Alpine Coaster)",
        'tag' => '493 Milyon TL Sabit Yatırım',
        'badge' => 'Dört Mevsim Adrenalin',
        'icon' => 'gauge-high',
        'summary' => "Ergan Dağı Sıra Dışı Sporlar Merkezi bünyesinde hayata geçirilen proje; 2.744 metre hat uzunluğu ve 355 metre kot farkıyla Avrupa'nın en uzun dağ kızağı tesislerinden biri olmaktadır.",
        'stats' => [
            ['value' => '2.744 m', 'label' => 'Hat Uzunluğu'],
            ['value' => '355 m', 'label' => 'Kot Farkı'],
            ['value' => '65 Adet', 'label' => 'İki Kişilik Araç'],
            ['value' => '840 Kişi/Saat', 'label' => 'Taşıma Kapasitesi'],
            ['value' => '810.000', 'label' => 'Yıllık Biniş Kapasitesi']
        ],
        'details' => [
            'Otomatik frenleme ve hız kontrol sistemiyle en üst düzey güvenlik',
            'Elektronik biletleme ve akıllı turnike altyapısı',
            'Tüm hat boyunca yüksek çözünürlüklü kamera izleme sistemi',
            'Yalnızca kışın değil, 12 ay boyunca ilkbahar ve yaz aylarında da kesintisiz kullanım'
        ]
    ],
    [
        'title' => 'Yeni Günübirlik Tesis & 4 Mevsim Sürdürülebilir Turizm Merkezi',
        'tag' => '111 Milyon TL Toplam Yatırım',
        'badge' => 'Yıllık 2 Milyon Ziyaretçi Hedefi',
        'icon' => 'mountain-sun',
        'summary' => "Turizm faaliyetlerinin yıl geneline yayılması amacıyla planlanan yeni kompleks; kafeteryalar, modern kayak kiralama ve satış alanları, telesiyej garajı, sağlık üniteleri ve idari yönetim merkezini içermektedir.",
        'stats' => [
            ['value' => '111.060.510 ₺', 'label' => 'Yatırım Maliyeti'],
            ['value' => '3.700 Kişi/Saat', 'label' => 'Toplam Mekanik Kapasite'],
            ['value' => '2 Milyon', 'label' => 'Hedeflenen Ziyaretçi'],
            ['value' => '17.950 m', 'label' => 'Kesintisiz Pist Ağı'],
            ['value' => '10-12 Dk', 'label' => 'Havalimanı Mesafesi']
        ],
        'details' => [
            'Geniş gastronomi alanları, sıcak kafe ve yöresel lezzet restoranları',
            'Son model kayak, snowboard ve kış ekipmanları kiralama ve satış mağazası',
            'Tam teşekküllü ilk yardım ve sağlık müdahale merkezi',
            'Doğa ve macera sporları (rafting, yamaç paraşütü, dağ bisikleti) entegrasyonu'
        ]
    ]
];

// Büyük Etkinlik
$featuredEvent = [
    'title' => 'FIS Snowboard Europa Cup Cross 2026',
    'date' => '15 - 18 Ocak 2026',
    'location' => 'Ergan Dağı Kayak Merkezi • Erzincan',
    'badge' => 'Uluslararası Şampiyona',
    'image' => 'assets/images/tasarim-yatay.jpg',
    'desc' => "Dünyanın ve Avrupa'nın en yetenekli snowboard sporcuları, FIS Europa Cup Snowboard Cross şampiyonasında Ergan Dağı'nın zorlu ve heyecan dolu pistlerinde kıyasıya mücadele ediyor."
];

// Sıkça Sorulan Sorular
$faqs = [
    [
        'q' => "Ergan Dağı Kayak Merkezi'ne havalimanından nasıl gidilir?",
        'a' => "Ergan Dağı, Erzincan Yıldırım Akbulut Havalimanı'na sadece 10-12 dakika (yaklaşık 12 km) mesafededir. Türkiye'de havalimanına en hızlı ve kolay ulaşılabilen kayak merkezidir. Havalimanından taksi, özel transfer veya kayak merkezi servisleriyle 12 dakikada pistlere varabilirsiniz."
    ],
    [
        'q' => "Pistlerin kar kalitesi ve sezon süresi nasıldır?",
        'a' => "Ergan Dağı, Munzur Sıradağları'nın mikrokliması sayesinde Alp Dağları standartlarında dünyaca ünlü 'kristal toz kar' yapısına sahiptir. Sezon genellikle Aralık ayı ortasında başlar ve Nisan ortasına kadar ortalama 4 ay kesintisiz sürer."
    ],
    [
        'q' => "Pist uzunluğu gerçekten Avrupa'nın en uzunu mu?",
        'a' => "Evet! Ergan Dağı, 2.970 metre zirveden alt istasyona kadar yaklaşık 17.950 metrelik kesintisiz doğal iniş hattıyla Avrupa'nın en uzun kesintisiz kayak pistlerinden birine ev sahipliği yapmaktadır."
    ],
    [
        'q' => "Gece kayağı yapılıyor mu?",
        'a' => "Evet! Tesisimizde modern projektörlerle donatılmış aydınlatmalı pistlerde haftanın belirli günlerinde gece kayağı yapılmaktadır. Gece kayağı bileti 300 ₺ olup müzik eşliğinde keyifli bir kış gecesi sunar."
    ],
    [
        'q' => "Kayak veya snowboard kiralayabilir miyim?",
        'a' => "Tesis içerisindeki kiralama merkezimizde her seviyeye uygun son model kayak takımları, snowboard, bot, kask, gözlük ve kızak kiralanabilmektedir. Ayrıca profesyonel antrenörlerimizden özel kayak ve snowboard dersi alabilirsiniz."
    ],
    [
        'q' => "Ergan Dağında konaklama imkanı var mı?",
        'a' => "Pistlerin hemen yanı başında A-Frame mimarili Ergan Tatil Köyü dağ evleri ve 5 yıldızlı Ramada by Wyndham Oteli bulunmaktadır. Ayrıca Erzincan şehir merkezindeki oteller sadece 12 km mesafede olup servis ve taksi olanakları bulunmaktadır."
    ]
];
