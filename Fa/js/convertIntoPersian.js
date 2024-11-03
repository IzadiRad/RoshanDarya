console.log("read out");

document.querySelector('.language-toggle').addEventListener('click', function () {
    fetch('../fa/Assest/translations.json')
        .then(response => response.json())
        .then(data => {
            // تغییر جهت صفحه به راست‌چین
            document.documentElement.setAttribute('dir', 'rtl');
            console.log("read fucking in ");
            // اعمال ترجمه‌ها به لینک‌های هدر

            document.getElementById('home-link').textContent = data.header.home;
            document.getElementById('maritime-link').textContent = data.header.maritime_transport;
            document.getElementById('air-freight-link').textContent = data.header.air_freight;
            document.getElementById('ground-transport-link').textContent = data.header.ground_transport;
            document.getElementById('services-maps-link').textContent = data.header.services_maps;
            document.getElementById('request-quote-link').textContent = data.header.request_quote;git 
            document.getElementById('eqc-linkss').textContent = data.header.eqc;
            document.getElementById('incoterms-link').textContent = data.header.incoterms;
            document.getElementById('cargo-link').textContent = data.header.cargo;
            document.getElementById('about-us-link').textContent = data.header.about_us;
            document.getElementById('contact-us-link').textContent = data.header.contact_us;

            document.getElementById('desktop-eqc').textContent = data.header.eqc;
            document.getElementById('services-linkss').textContent = data.header.services;
            document.getElementById('desktop-services').textContent = data.header.services;
            document.getElementById('home-link-mob').textContent = data.header.home;
            document.getElementById('maritime-link-mob').textContent = data.header.maritime_transport;
            document.getElementById('air-freight-link-mob').textContent = data.header.air_freight;
            document.getElementById('ground-transport-link-mob').textContent = data.header.ground_transport;
            document.getElementById('services-maps-link-mob').textContent = data.header.services_maps;
            document.getElementById('request-quote-link-mob').textContent = data.header.request_quote;
            document.getElementById('incoterms-link-mob').textContent = data.header.incoterms;
            document.getElementById('cargo-link-mob').textContent = data.header.cargo;
            document.getElementById('about-us-link-mob').textContent = data.header.about_us;
            document.getElementById('contact-us-link-mob').textContent = data.header.contact_us;
        })
        .catch(error => console.error('Error loading translations:', error));
});
