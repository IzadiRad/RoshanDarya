document.querySelectorAll('.blogScroll').forEach((scrollContainer) => {
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

    // جلوگیری از باز شدن لینک در حین کشیدن
    scrollContainer.addEventListener('click', (e) => {
        if (isDown) {
            e.preventDefault();
        }
    });
});
