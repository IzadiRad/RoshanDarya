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


//section 
const detailsContent = {
    service1: `
      <h3 class="text-3xl font-bold mb-4">Service 1 Details</h3>
      <video controls class="w-full mb-4">
        <source src="service1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <p class="text-gray-700">Detailed explanation about Service 1 goes here. This can include images, videos, or more detailed descriptions.</p>
    `,
    service2: `
      <h3 class="text-3xl font-bold mb-4">Service 2 Details</h3>
      <img src="service2-details.jpg" alt="Service 2 Details" class="w-full mb-4">
      <p class="text-gray-700">Detailed explanation about Service 2 goes here. This can include images, videos, or more detailed descriptions.</p>
    `,
    service3: `
      <h3 class="text-3xl font-bold mb-4">Service 3 Details</h3>
      <video controls class="w-full mb-4">
        <source src="service3.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <p class="text-gray-700">Detailed explanation about Service 3 goes here. This can include images, videos, or more detailed descriptions.</p>
    `
};

function showDetails(service) {
    document.getElementById('details-content').innerHTML = detailsContent[service];
    document.getElementById('details-panel').classList.remove('hidden');
}

function hideDetails() {
    document.getElementById('details-panel').classList.add('hidden');
}



//gallery

window.addEventListener('scroll', function () {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const gridContainer = document.querySelector('.grid-container');

    // تنظیم حرکت گالری با توجه به مقدار اسکرول
    const offset = scrollTop * 0.5; // تنظیم سرعت حرکت
    gridContainer.style.transform = `translateX(-${offset}px)`;

    // اضافه کردن انیمیشن به تصاویر بر اساس اسکرول
    const gridItems = document.querySelectorAll('.grid-item');
    gridItems.forEach((item, index) => {
        const direction = (index < 5) ? 20 : -20; // تعیین جهت حرکت برای دو ردیف
        item.style.transform = `translateY(${direction * Math.sin(scrollTop * 0.01 + index)}px)`; // انیمیشن بر اساس اسکرول
    });
});
window.addEventListener('scroll', function () {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const gridContainer = document.querySelector('.grid-container');

    // تنظیم حرکت گالری با توجه به مقدار اسکرول
    const offset = scrollTop * 0.5; // تنظیم سرعت حرکت
    gridContainer.style.transform = `translateX(-${offset}px)`;

    // اضافه کردن انیمیشن به تصاویر بر اساس اسکرول
    const gridItems = document.querySelectorAll('.grid-item');
    gridItems.forEach((item, index) => {
        const direction = (index < 5) ? 20 : -20; // تعیین جهت حرکت برای دو ردیف
        item.style.transform = `translateY(${direction * Math.sin(scrollTop * 0.01 + index)}px)`; // انیمیشن بر اساس اسکرول
    });
});


const modal = document.getElementById("modal");
const modalImg = document.getElementById("modal-img");
const galleryItems = document.querySelectorAll(".gallery-item img");
const closeModal = document.getElementById("close-modal");

galleryItems.forEach(item => {
    item.addEventListener("click", function () {
        modalImg.src = this.src;
        modal.classList.remove("hidden");
    });
});

closeModal.addEventListener("click", function () {
    modal.classList.add("hidden");
});