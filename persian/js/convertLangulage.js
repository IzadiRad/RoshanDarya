document.addEventListener('DOMContentLoaded', function () {
    const languageToggle = document.querySelector('.language-toggle');

    // بررسی زبان در URL و تنظیم زبان پیش‌فرض
    const urlLang = window.location.pathname.includes('/fa') ? 'fa' : 'en';
    localStorage.setItem('language', urlLang);  // ذخیره زبان در لوکال‌استورج
    const currentLang = localStorage.getItem('language') || 'en';

    const jsonFile = currentLang === 'fa' ? 'translations_fa.json' : 'translations_en.json';

    // بارگذاری فایل JSON با توجه به زبان انتخابی
    fetch(`../persian/Assest/${jsonFile}`)
        .then(response => response.json())
        .then(data => {

            const setText = (id, text) => {
                const element = document.getElementById(id);
                if (element) {
                    element.textContent = text;
                } else {
                    console.warn(`Element with ID '${id}' not found`);
                }
            };

            // تغییر جهت صفحه بر اساس زبان
            document.documentElement.setAttribute('dir', currentLang === 'fa' ? 'rtl' : 'ltr');
            localStorage.setItem('language', currentLang);

            // تابع اعمال ترجمه‌های بخش هدر
            const headerTrans = () => {
                setText('home-link', data.header.home);
                setText('services-linkss', data.header.services);
                setText('maritime-link', data.header.maritime_transport);
                setText('air-freight-link', data.header.air_freight);
                setText('ground-transport-link', data.header.ground_transport);
                setText('services-maps-link', data.header.services_maps);
                setText('request-quote-link', data.header.request_quote);
                setText('eqc-linkss', data.header.eqc);
                setText('incoterms-link', data.header.incoterms);
                setText('cargo-link', data.header.cargo);
                setText('about-us-link', data.header.about_us);
                setText('contact-us-link', data.header.contact_us);

                // اعمال ترجمه‌ها برای نسخه موبایل
                setText('home-link-mob', data.header.home);
                setText('services-link-mob', data.header.services);
                setText('maritime-link-mob', data.header.maritime_transport);
                setText('air-freight-link-mob', data.header.air_freight);
                setText('ground-transport-link-mob', data.header.ground_transport);
                setText('services-maps-link-mob', data.header.services_maps);
                setText('request-quote-link', data.header.request_quote);
                setText('incoterms-link-mob', data.header.incoterms);
                setText('cargo-link-mob', data.header.cargo);
                setText('about-us-link-mob', data.header.about_us);
                setText('contact-us-link-mob', data.header.contact_us);
                setText('desktop-services', data.header.services);
                setText('desktop-eqc', data.header.eqc);

                // تغییر پرچم و تنظیم لینک زبان دیگر
                const flagIcon = document.getElementById('flag-icon');
                const languageLink = document.querySelector('.language-toggle');

                if (currentLang === 'fa') {
                    flagIcon.src = './Images/usa-flag-icon.svg'; // مسیر پرچم آمریکا
                    flagIcon.alt = 'USA Flag';
                    languageLink.href = '/en'; // تنظیم لینک برای زبان انگلیسی
                } else {
                    flagIcon.src = './Images/iran-flag-icon.svg'; // مسیر پرچم ایران
                    flagIcon.alt = 'Iran Flag';
                    languageLink.href = '/fa'; // تنظیم لینک برای زبان فارسی
                }
            };

            // فراخوانی تابع ترجمه هدر
            headerTrans();
        })
        .catch(error => console.error('Error loading translations:', error));
});
