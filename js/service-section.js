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
