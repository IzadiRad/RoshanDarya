// Enable drag scrolling for the training section
const trainingScroll = document.getElementById('trainingScroll');

let isDownTraining = false;
let startXTraining;
let scrollLeftTraining;

trainingScroll.addEventListener('mousedown', (e) => {
    isDownTraining = true;
    trainingScroll.classList.add('active');
    startXTraining = e.pageX - trainingScroll.offsetLeft;
    scrollLeftTraining = trainingScroll.scrollLeft;
});

trainingScroll.addEventListener('mouseleave', () => {
    isDownTraining = false;
    trainingScroll.classList.remove('active');
});

trainingScroll.addEventListener('mouseup', () => {
    isDownTraining = false;
    trainingScroll.classList.remove('active');
});

trainingScroll.addEventListener('mousemove', (e) => {
    if (!isDownTraining) return;
    e.preventDefault();
    const x = e.pageX - trainingScroll.offsetLeft;
    const walk = (x - startXTraining) * 2; // adjust the scroll speed if needed
    trainingScroll.scrollLeft = scrollLeftTraining - walk;
});

trainingScroll.addEventListener('click', (e) => {
    if (isDownTraining) {
        e.preventDefault();
    }
});


