// باز کردن و بستن منو همبرگری
document.getElementById('menu-toggle').addEventListener('click', function () {
    var mobileMenu = document.getElementById('mobile-menu');
    var overlay = document.getElementById('overlay');
    mobileMenu.classList.toggle('show'); // نمایش یا مخفی کردن منو
    overlay.classList.toggle('show'); // نمایش یا مخفی کردن پوشش
});

// بستن منو با کلیک روی دکمه بستن
document.getElementById('close-menu').addEventListener('click', function () {
    var mobileMenu = document.getElementById('mobile-menu');
    var overlay = document.getElementById('overlay');
    mobileMenu.classList.remove('show'); // مخفی کردن منو
    overlay.classList.remove('show'); // مخفی کردن پوشش
});

// بستن منو با کلیک روی پوشش
document.getElementById('overlay').addEventListener('click', function () {
    var mobileMenu = document.getElementById('mobile-menu');
    var overlay = document.getElementById('overlay');
    mobileMenu.classList.remove('show'); // مخفی کردن منو
    overlay.classList.remove('show'); // مخفی کردن پوشش
});

// دکمه همبرگری و منوی موبایل
const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const overlay = document.getElementById('overlay');
const closeMenu = document.getElementById('close-menu');

// باز کردن منوی موبایل و نمایش overlay
menuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    overlay.style.display = 'block'; // نمایش overlay
});

// بستن منو و پنهان کردن overlay
closeMenu.addEventListener('click', () => {
    mobileMenu.classList.add('hidden');
    overlay.style.display = 'none'; // پنهان کردن overlay
});

// بستن منو با کلیک بر روی overlay
overlay.addEventListener('click', () => {
    mobileMenu.classList.add('hidden');
    overlay.style.display = 'none'; // پنهان کردن overlay
});

document.addEventListener('DOMContentLoaded', function () {
    // گرفتن عناصر مورد نیاز
    const header = document.querySelector('header');
    const butt = document.getElementById('logo-butt');
    const mymenu = document.querySelector('.mymenu');

    // تابعی برای اضافه یا حذف کردن کلاس به هنگام اسکرول
    function checkWindowSize() {
        if (window.innerWidth >= 1000) {
            butt.classList.remove("bg-white"); // در اندازه بزرگ، رنگ حذف شود
        }
    }

    // بررسی اندازه در بارگذاری صفحه
    checkWindowSize();

    window.onscroll = function () {
        if (window.scrollY > 100) {  // عدد 100 قابل تنظیم است
            header.classList.add('fixed-header');
            if (window.innerWidth >= 768) {
                butt.classList.add("bg-white"); // فقط در اندازه بزرگ
                mymenu.classList.add("bg-white"); // فقط در اندازه بزرگ
            }
        } else {
            header.classList.remove('fixed-header');
            if (window.innerWidth >= 768) {
                butt.classList.remove("bg-white");
                mymenu.classList.remove("bg-white");
            }
        }
    };
});

// // افزودن event listener برای تغییر اندازه صفحه
// window.addEventListener('resize', checkWindowSize);


//section 4
document.querySelectorAll('.cursor-pointer').forEach((service) => {
    service.addEventListener('click', function () {
        const serviceId = this.id;
        let serviceDetails = '';

        if (serviceId === 'service1') {
            serviceDetails = `
          <h3 class="text-2xl font-bold text-blue-700 mb-4">Service 1 Details</h3>
          <p class="text-gray-600">Detailed information about Service 1.</p>
          <img src="https://via.placeholder.com/300" alt="Service 1" class="mt-4 rounded-lg">
        `;
        } else if (serviceId === 'service2') {
            serviceDetails = `
          <h3 class="text-2xl font-bold text-blue-700 mb-4">Service 2 Details</h3>
          <p class="text-gray-600">Detailed information about Service 2.</p>
          <img src="https://via.placeholder.com/300" alt="Service 2" class="mt-4 rounded-lg">
        `;
        } else if (serviceId === 'service3') {
            serviceDetails = `
          <h3 class="text-2xl font-bold text-blue-700 mb-4">Service 3 Details</h3>
          <p class="text-gray-600">Detailed information about Service 3.</p>
          <img src="https://via.placeholder.com/300" alt="Service 3" class="mt-4 rounded-lg">
        `;
        }

        document.getElementById('service-details-content').innerHTML = serviceDetails;
    });
});
