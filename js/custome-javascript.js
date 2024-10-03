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

// گرفتن عنصر هدر
const header = document.querySelector('header');
const butt = document.getElementById('logo-butt');
// تابعی برای اضافه یا حذف کردن کلاس به هنگام اسکرول
function checkWindowSize() {
    if (window.innerWidth < 1000) {
        butt.classList.add("bg-white");
    }
}

// بررسی اندازه در بارگذاری صفحه
checkWindowSize();
window.onscroll = function () {
    if (window.scrollY > 100) {  // عدد 100 قابل تنظیم است
        header.classList.add('fixed-header');
        if (window.innerWidth >= 768) {
            butt.classList.add("bg-white");
        }
    } else {
        header.classList.remove('fixed-header');
        if (window.innerWidth >= 768) {
            butt.classList.remove("bg-white");
        }
    }
};

// // افزودن event listener برای تغییر اندازه صفحه
// window.addEventListener('resize', checkWindowSize);