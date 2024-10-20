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

if (modal && modalImg && galleryItems.length > 0 && closeModal) {
    galleryItems.forEach(item => {
        item.addEventListener("click", function () {
            modalImg.src = this.src;
            modal.classList.remove("hidden");
        });
    });

    closeModal.addEventListener("click", function () {
        modal.classList.add("hidden");
    });
} else {
    console.error('Modal elements for gallery not found.');
}

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
