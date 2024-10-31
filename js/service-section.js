const serviceTabs = document.querySelectorAll('.service-tab');
const serviceContents = document.querySelectorAll('.service-content');

// Event listener برای هر تب
serviceTabs.forEach(tab => {
    tab.addEventListener('click', () => {
        // پنهان کردن همه محتواها
        serviceContents.forEach(content => content.classList.add('hidden'));

        // نمایش محتوای مربوط به تب انتخاب شده
        const target = tab.getAttribute('data-content');
        document.getElementById(target).classList.remove('hidden');
    });
});

// افزودن listener کلیک به هر دکمه
serviceTabs.forEach(tab => {
    tab.addEventListener('click', () => {
        // حذف کلاس active از تمامی دکمه‌ها
        serviceTabs.forEach(t => t.classList.remove('active'));

        // افزودن کلاس active به دکمه کلیک‌شده
        tab.classList.add('active');
    });
});