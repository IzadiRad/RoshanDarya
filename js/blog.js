
// اضافه کردن قابلیت کشیدن به سمت راست و چپ
const blogScroll = document.getElementById('blogScroll');

let isDown = false;
let startX;
let scrollLeft;

blogScroll.addEventListener('mousedown', (e) => {
    isDown = true;
    blogScroll.classList.add('active');
    startX = e.pageX - blogScroll.offsetLeft;
    scrollLeft = blogScroll.scrollLeft;
});

blogScroll.addEventListener('mouseleave', () => {
    isDown = false;
    blogScroll.classList.remove('active');
});

blogScroll.addEventListener('mouseup', () => {
    isDown = false;
    blogScroll.classList.remove('active');
});

blogScroll.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - blogScroll.offsetLeft;
    const walk = (x - startX) * 2; // مقدار حرکت ماوس
    blogScroll.scrollLeft = scrollLeft - walk;
});

// جلوگیری از باز شدن لینک در حین کشیدن
blogScroll.addEventListener('click', (e) => {
    if (isDown) {
        e.preventDefault();
    }
});