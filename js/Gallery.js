// متغیر برای دنبال کردن مقدار اسکرول
let scrollPos = 0;

window.addEventListener('scroll', () => {
    // محاسبه موقعیت اسکرول
    scrollPos = window.scrollY;

    // درخواست انیمیشن
    requestAnimationFrame(() => {
        // حرکت گالری
        document.querySelector('.grid-container').style.transform = `translateX(-${scrollPos - 2500}px)`;

        // انیمیشن عناصر گالری
        const gridItems = document.querySelectorAll('.grid-item');
        gridItems.forEach((item, index) => {
            const direction = (index < 5) ? 20 : -20; // تنظیم جهت
            item.style.transform = `translateY(${-direction * Math.sin(scrollPos * 0.01 + index)}px)`; // حرکت بالا
        });
    });
});

// مدال برای تصاویر گالری
const modal = document.getElementById("modal");
const modalImg = document.getElementById("modal-img");
const galleryItems = document.querySelectorAll(".gallery-item img");
const closeModal = document.getElementById("close-modal");


document.addEventListener("DOMContentLoaded", function () {
    const gridItems = document.querySelectorAll('.grid-item');
    const delay = 300; // زمان تاخیر بین انیمیشن‌ها

    function animateGallery() {
        gridItems.forEach((item, index) => {
            setTimeout(() => {
                item.classList.add('show'); // اضافه کردن کلاس نمایش
                item.classList.add(index % 2 === 0 ? 'slide-in-left' : 'slide-in-right'); // تعیین سمت انیمیشن
            }, index * delay);
        });
    }

    animateGallery();
});


document.querySelectorAll('.gallery-scroll').forEach((scrollContainer) => {
    let isDown = false;
    let startX, scrollLeft;
    scrollContainer.addEventListener('mousedown', (e) => {
        isDown = true;
        scrollContainer.classList.add('active');
        startX = e.pageX - scrollContainer.offsetLeft;
        scrollLeft = scrollContainer.scrollLeft;
    });

    scrollContainer.addEventListener('mouseleave', () => {
        isDown = false;
        scrollContainer.classList.remove('active');
    });

    scrollContainer.addEventListener('mouseup', () => {
        isDown = false;
        scrollContainer.classList.remove('active');
    });

    scrollContainer.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - scrollContainer.offsetLeft;
        const walk = (x - startX) * 2; // میزان حرکت
        scrollContainer.scrollLeft = scrollLeft - walk;
    });

    scrollContainer.addEventListener('touchstart', (e) => {
        isDown = true;
        startX = e.touches[0].pageX - scrollContainer.offsetLeft;
        scrollLeft = scrollContainer.scrollLeft;
    });

    scrollContainer.addEventListener('touchend', () => {
        isDown = false;
    });

    scrollContainer.addEventListener('touchmove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.touches[0].pageX - scrollContainer.offsetLeft;
        const walk = (x - startX) * 2;
        scrollContainer.scrollLeft = scrollLeft - walk;
    });

    // جلوگیری از باز شدن لینک در حین کشیدن
    scrollContainer.addEventListener('click', (e) => {
        if (isDown) {
            e.preventDefault();
        }
    });
});
