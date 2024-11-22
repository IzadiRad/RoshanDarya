document.addEventListener('DOMContentLoaded', function () {


    // باز و بسته کردن منوی اصلی همبرگری
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenu = document.getElementById('close-menu');
    const over = document.getElementById('overlayy');


    let div = document.createElement("div");
    document.body.appendChild(div);
    div.style.position = "absolute";
    div.classList.add('hidden');
    div.style.width = "100%";
    div.style.height = "100%";
    div.style.zIndex = "999";
    div.style.backgroundColor = "rgba(0,0,0,var(--tw-bg-opacity))";
    step1.style.zIndex = "9999";
    div.id = "darkside";

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('show');
        over.style.width = "100%";
        over.style.height = "100%";
        over.style.top = "0"
        over.style.left = "0"
        over.style.right = "0"
        over.style.zIndex = "999";
        over.style.backgroundColor = "rgba(0,0,0,var(--tw-bg-opacity))";
        div.classList.toggle('show');


    });

    closeMenu.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        div.classList.add('hidden');

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

// document.getElementById('menu-toggle').addEventListener("click", function () {
//     document.getElementById("mobile-menu").classList.toggle("show");
// })