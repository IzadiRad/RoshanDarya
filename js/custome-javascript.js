// اسکریپت مربوط به منوی همبرگری
const menuToggle = document.getElementById('menu-toggle');
const menu = document.getElementById('menu');

menuToggle.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});

// اسکریپت مربوط به تغییر رنگ هدر هنگام اسکرول
window.addEventListener('scroll', function () {
    const header = document.getElementById('main-header');
    if (window.scrollY > 100) {
        header.classList.add('shadow-lg');
    } else {
        header.classList.remove('shadow-lg');
    }
});


// WOW.js initialization
new WOW().init();
