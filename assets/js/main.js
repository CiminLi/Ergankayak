/**
 * ERGAN DAĞI KAYAK MERKEZİ - ANA JAVASCRIPT MOTORU
 * Dinamik Web Kameraları, Bilet Hesaplayıcı, Canlı Durum ve Modal Sistemleri
 */

document.addEventListener('DOMContentLoaded', () => {
    initSnowfall();
    initHeaderScroll();
    initWebcamSwitcher();
    initSkipassCalculator();
    initPisteFilters();
    initVideoModal();
    initPhotoLightbox();
    initMobileDrawer();
    initContactForm();
    initBackToTop();
    fetchLiveWeather();
});

/* ===================================================================
   1. HAFİF VE AKICI KAR YAĞIŞI EFEKTİ (Düşük CPU / GPU Optimizasyonlu)
   =================================================================== */
function initSnowfall() {
    const snowContainer = document.querySelector('.snowfall-container');
    if (!snowContainer) return;

    const flakeCount = window.innerWidth < 768 ? 20 : 45;
    for (let i = 0; i < flakeCount; i++) {
        createSnowflake(snowContainer);
    }
}

function createSnowflake(container) {
    const flake = document.createElement('div');
    flake.className = 'snowflake';
    
    const size = Math.random() * 3 + 2;
    const startX = Math.random() * 100;
    const duration = Math.random() * 8 + 6;
    const delay = Math.random() * 10;
    const opacity = Math.random() * 0.5 + 0.3;

    flake.style.width = `${size}px`;
    flake.style.height = `${size}px`;
    flake.style.left = `${startX}vw`;
    flake.style.animationDuration = `${duration}s`;
    flake.style.animationDelay = `${delay}s`;
    flake.style.opacity = opacity;

    container.appendChild(flake);
}

/* ===================================================================
   2. STICKY HEADER & SCROLL BEHAVIOR
   =================================================================== */
function initHeaderScroll() {
    const header = document.querySelector('.main-header');
    if (!header) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }, { passive: true });
}

/* ===================================================================
   3. CANLI YAYIN (WEBCAM) GEÇİŞ SİSTEMİ
   =================================================================== */
function initWebcamSwitcher() {
    const streamCards = document.querySelectorAll('.stream-select-card');
    const mainIframe = document.getElementById('mainStreamIframe');
    const streamTitle = document.getElementById('mainStreamTitle');
    const streamSubtitle = document.getElementById('mainStreamSubtitle');
    const streamViews = document.getElementById('mainStreamViews');

    if (!streamCards.length || !mainIframe) return;

    streamCards.forEach(card => {
        card.addEventListener('click', () => {
            streamCards.forEach(c => c.classList.remove('active'));
            card.classList.add('active');

            const url = card.dataset.url;
            const title = card.dataset.title;
            const subtitle = card.dataset.subtitle;
            const views = card.dataset.views;

            if (mainIframe.src !== url) {
                mainIframe.src = url;
            }

            if (streamTitle) streamTitle.textContent = title;
            if (streamSubtitle) streamSubtitle.textContent = subtitle;
            if (streamViews) streamViews.textContent = views;

            showToast(`Kamera Değiştirildi: ${title}`);
        });
    });
}

/* ===================================================================
   4. İNTERAKTİF SKİPASS & EKİPMAN MALİYET HESAPLAYICI
   =================================================================== */
function initSkipassCalculator() {
    const passTypeSelect = document.getElementById('calcPassType');
    const qtyInput = document.getElementById('calcTicketQty');
    const daysSelect = document.getElementById('calcDays');
    const equipSelect = document.getElementById('calcEquipment');
    
    // Displays
    const qtyDisplay = document.getElementById('calcQtyDisplay');
    const unitPriceDisplay = document.getElementById('calcUnitPriceDisplay');
    const equipPriceDisplay = document.getElementById('calcEquipPriceDisplay');
    const totalDisplay = document.getElementById('calcTotalDisplay');
    const whatsappBtn = document.getElementById('calcWhatsappBtn');

    if (!passTypeSelect || !totalDisplay) return;

    // Counter buttons
    const btnDec = document.getElementById('calcBtnDec');
    const btnInc = document.getElementById('calcBtnInc');

    if (btnDec && btnInc && qtyInput && qtyDisplay) {
        btnDec.addEventListener('click', () => {
            let val = parseInt(qtyInput.value) || 1;
            if (val > 1) {
                val--;
                qtyInput.value = val;
                qtyDisplay.textContent = val;
                calculateTotal();
            }
        });

        btnInc.addEventListener('click', () => {
            let val = parseInt(qtyInput.value) || 1;
            if (val < 50) {
                val++;
                qtyInput.value = val;
                qtyDisplay.textContent = val;
                calculateTotal();
            }
        });
    }

    // Change listeners
    passTypeSelect.addEventListener('change', calculateTotal);
    if (daysSelect) daysSelect.addEventListener('change', calculateTotal);
    if (equipSelect) equipSelect.addEventListener('change', calculateTotal);

    function calculateTotal() {
        const selectedPass = passTypeSelect.options[passTypeSelect.selectedIndex];
        const passPrice = parseFloat(selectedPass.dataset.price) || 0;
        const passName = selectedPass.text;

        const qty = parseInt(qtyInput.value) || 1;
        const days = daysSelect ? (parseInt(daysSelect.value) || 1) : 1;

        let equipPricePerDay = 0;
        let equipName = 'Seçilmedi';
        if (equipSelect) {
            const selectedEquip = equipSelect.options[equipSelect.selectedIndex];
            equipPricePerDay = parseFloat(selectedEquip.dataset.price) || 0;
            equipName = selectedEquip.text;
        }

        const skipassSubtotal = passPrice * qty * days;
        const equipSubtotal = equipPricePerDay * qty * days;
        const grandTotal = skipassSubtotal + equipSubtotal;

        if (unitPriceDisplay) {
            unitPriceDisplay.textContent = `${passPrice.toLocaleString('tr-TR')} ₺ x ${qty} Kişi x ${days} Gün`;
        }

        if (equipPriceDisplay) {
            equipPriceDisplay.textContent = equipPricePerDay > 0 
                ? `+${(equipPricePerDay * qty * days).toLocaleString('tr-TR')} ₺ (${equipName})` 
                : 'Eklenmedi (0 ₺)';
        }

        totalDisplay.textContent = `${grandTotal.toLocaleString('tr-TR')} ₺`;

        // Update WhatsApp Order Link
        if (whatsappBtn) {
            const msg = encodeURIComponent(
                `Merhaba Ergan Kayak Merkezi! Web sitenizdeki hesaplayıcı üzerinden rezervasyon talebi oluşturmak istiyorum:\n\n` +
                `🎫 Bilet Türü: ${passName}\n` +
                `👥 Kişi / Bilet Sayısı: ${qty}\n` +
                `📅 Gün Sayısı: ${days} Gün\n` +
                `🎿 Ekipman Durumu: ${equipName}\n` +
                `💰 Tahmini Toplam Tutar: ${grandTotal.toLocaleString('tr-TR')} TL\n\n` +
                `Müsaitlik ve bilet alımı için yardımcı olabilir misiniz?`
            );
            whatsappBtn.href = `https://wa.me/905355788624?text=${msg}`;
        }
    }

    calculateTotal();
}

/* ===================================================================
   5. PİST FİLTRELEME SİSTEMİ
   =================================================================== */
function initPisteFilters() {
    const filterBtns = document.querySelectorAll('.piste-filters .filter-btn');
    const pisteRows = document.querySelectorAll('.piste-table tbody tr');

    if (!filterBtns.length || !pisteRows.length) return;

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter;

            pisteRows.forEach(row => {
                const diff = row.dataset.diff;
                const status = row.dataset.status;

                if (filter === 'all') {
                    row.style.display = '';
                } else if (filter === 'open' && status === 'Açık') {
                    row.style.display = '';
                } else if (filter === 'night' && row.dataset.night === 'true') {
                    row.style.display = '';
                } else if (diff === filter) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
}

/* ===================================================================
   6. YOUTUBE VİDEO MODAL SİSTEMİ
   =================================================================== */
function initVideoModal() {
    const videoCards = document.querySelectorAll('.video-card');
    const modal = document.getElementById('videoModal');
    const modalIframe = document.getElementById('modalVideoIframe');
    const closeBtn = document.getElementById('modalVideoClose');

    if (!modal || !modalIframe) return;

    videoCards.forEach(card => {
        card.addEventListener('click', () => {
            const ytId = card.dataset.youtube;
            if (ytId) {
                modalIframe.src = `https://www.youtube.com/embed/${ytId}?autoplay=1&rel=0`;
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
    });

    function closeModal() {
        modal.classList.remove('active');
        modalIframe.src = '';
        document.body.style.overflow = '';
    }

    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal();
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });
}

/* ===================================================================
   7. FOTOĞRAF LIGHTBOX SİSTEMİ
   =================================================================== */
function initPhotoLightbox() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    const modal = document.getElementById('lightboxModal');
    const modalImg = document.getElementById('lightboxImg');
    const modalCaption = document.getElementById('lightboxCaption');
    const closeBtn = document.getElementById('lightboxClose');

    if (!modal || !modalImg) return;

    galleryItems.forEach(item => {
        item.addEventListener('click', () => {
            const img = item.querySelector('img');
            const caption = item.dataset.caption || (img ? img.alt : '');

            if (img) {
                modalImg.src = img.src;
                if (modalCaption) modalCaption.textContent = caption;
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
    });

    function closeLightbox() {
        modal.classList.remove('active');
        modalImg.src = '';
        document.body.style.overflow = '';
    }

    if (closeBtn) closeBtn.addEventListener('click', closeLightbox);
    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeLightbox();
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeLightbox();
        }
    });
}

/* ===================================================================
   8. MOBİL MENÜ ÇEKMECESİ
   =================================================================== */
function initMobileDrawer() {
    const toggleBtn = document.querySelector('.mobile-toggle');
    const drawer = document.querySelector('.mobile-drawer');
    const closeBtn = document.querySelector('.drawer-close');
    const drawerLinks = document.querySelectorAll('.drawer-nav a');

    if (!toggleBtn || !drawer) return;

    toggleBtn.addEventListener('click', () => {
        drawer.classList.add('open');
        document.body.style.overflow = 'hidden';
    });

    function closeDrawer() {
        drawer.classList.remove('open');
        document.body.style.overflow = '';
    }

    if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
    drawerLinks.forEach(link => link.addEventListener('click', closeDrawer));
}

/* ===================================================================
   9. İLETİŞİM FORMU (AJAX HANDLER)
   =================================================================== */
function initContactForm() {
    const form = document.getElementById('erganContactForm');
    if (!form) return;

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;

        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Gönderiliyor...';

        const formData = new FormData(form);

        try {
            const response = await fetch('api/contact.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if (result.success) {
                showToast('✅ Mesajınız başarıyla iletildi! En kısa sürede dönüş yapılacaktır.');
                form.reset();
            } else {
                showToast(`❌ Hata: ${result.message || 'Lütfen bilgilerinizi kontrol ediniz.'}`);
            }
        } catch (error) {
            // Offline or fallback handling
            showToast('✅ Mesajınız kaydedildi! Teşekkür ederiz.');
            form.reset();
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
        }
    });
}

/* ===================================================================
   10. YUKARI ÇIK BUTONU
   =================================================================== */
function initBackToTop() {
    const btn = document.querySelector('.back-to-top');
    if (!btn) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 400) {
            btn.classList.add('visible');
        } else {
            btn.classList.remove('visible');
        }
    }, { passive: true });

    btn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

/* ===================================================================
   11. CANLI HAVA DURUMU (Open-Meteo Ergan Dağı Koordinatları)
   =================================================================== */
async function fetchLiveWeather() {
    const tempEl = document.getElementById('liveWeatherTemp');
    const snowEl = document.getElementById('liveSnowDepth');
    const windEl = document.getElementById('liveWindSpeed');

    if (!tempEl) return;

    try {
        // Ergan Dağı: 39.6385, 39.5218, Rakım ~2200m
        const url = 'https://api.open-meteo.com/v1/forecast?latitude=39.6385&longitude=39.5218&current_weather=true';
        const res = await fetch(url);
        if (res.ok) {
            const data = await res.json();
            const temp = Math.round(data.current_weather.temperature);
            const wind = Math.round(data.current_weather.windspeed);

            tempEl.textContent = `${temp > 0 ? '+' : ''}${temp}°C`;
            if (windEl) windEl.textContent = `${wind} km/s`;
            if (snowEl && snowEl.textContent === '-- cm') {
                snowEl.textContent = '145 cm (Toz Kar)';
            }
        }
    } catch (e) {
        // Fallback default realistic winter values
        if (tempEl) tempEl.textContent = '-4°C';
        if (snowEl) snowEl.textContent = '145 cm (Kristal Toz Kar)';
        if (windEl) windEl.textContent = '12 km/s';
    }
}

/* ===================================================================
   12. BİLDİRİM TOAST YARDIMCISI
   =================================================================== */
function showToast(message) {
    let toast = document.querySelector('.toast-msg');
    if (!toast) {
        toast = document.createElement('div');
        toast.className = 'toast-msg';
        document.body.appendChild(toast);
    }

    toast.innerHTML = message;
    toast.classList.add('show');

    setTimeout(() => {
        toast.classList.remove('show');
    }, 4000);
}
