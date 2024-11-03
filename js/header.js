document.addEventListener('DOMContentLoaded', function () {


    // باز و بسته کردن منوی اصلی همبرگری
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenu = document.getElementById('close-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    closeMenu.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
    });
});

document.getElementById('services-linkss').addEventListener('click', function (e) {
    e.preventDefault();
    var servicesSubmenu = document.getElementById('services-submenu');
    servicesSubmenu.classList.toggle('hidden');
    servicesSubmenu.classList.toggle('show');
});

// برای منوی EQC
document.getElementById('eqc-linkss').addEventListener('click', function (e) {
    e.preventDefault(); // جلوگیری از پیش‌فرض لینک
    console.log('EQC link clicked'); // برای تست اینکه کلیک شده
    var eqcSubmenu = document.getElementById('eqc-submenu');
    eqcSubmenu.classList.toggle('hidden');
    eqcSubmenu.classList.toggle('show');
});
