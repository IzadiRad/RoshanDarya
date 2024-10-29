// Define an array of fetch requests for all components
const loadSections = [
    // fetch('../Components/header.html').then(response => response.text()).then(data => {
    //     const section = document.getElementById('section01');
    //     if (section) {
    //         section.innerHTML = data;

    //         // Add event listeners for menu toggle and close
    //         const menuToggle = document.getElementById('menu-toggle');
    //         const closeMenuBtn = document.getElementById('close-menu');
    //         const overlay = document.getElementById('overlay');
    //         const mobileMenu = document.getElementById('mobile-menu');

    //         if (menuToggle && closeMenuBtn && overlay && mobileMenu) {
    //             menuToggle.addEventListener('click', function () {
    //                 mobileMenu.classList.toggle('show');
    //                 overlay.classList.toggle('show');
    //             });
    //             closeMenuBtn.addEventListener('click', closeMenu);
    //             overlay.addEventListener('click', closeMenu);
    //         } else {
    //             console.error('One or more elements for menu interaction are missing.');
    //         }

    //         function closeMenu() {
    //             mobileMenu.classList.remove('show');
    //             overlay.classList.remove('show');
    //         }
    //     } else {
    //         console.error('Section 01 (header) not found.');
    //     }
    // }),
    // fetch('../Components/serviceCard.html').then(response => response.text()).then(data => {
    //     const section = document.getElementById('section02');
    //     if (section) {
    //         section.innerHTML = data;
    //     } else {
    //         console.error('Section 02 (services) not found.');
    //     }
    // }),
    fetch('../Components/AboutUs.html').then(response => response.text()).then(data => {
        const section = document.getElementById('section03');
        if (section) {
            section.innerHTML = data;
        } else {
            console.error('Section 03 (about us) not found.');
        }
    }),
    fetch('../Components/Gallery.html').then(response => response.text()).then(data => {
        const section = document.getElementById('section04');
        if (section) {
            section.innerHTML = data;
        } else {
            console.error('Section 04 (gallery) not found.');
        }
    }),
    fetch('../Components/blog.html').then(response => response.text()).then(data => {
        const section = document.getElementById('section05');
        if (section) {
            section.innerHTML = data;
        } else {
            console.error('Section 05 (blog) not found.');
        }
    }),
    fetch('../Components/Footer.html').then(response => response.text()).then(data => {
        const section = document.getElementById('section99');
        if (section) {
            section.innerHTML = data;
        } else {
            console.error('Section 99 (footer) not found.');
        }
    })
];

// After all sections are loaded, load the custom JS
Promise.all(loadSections).then(() => {
    console.log("All sections loaded");

    // Dynamically load the custom JS file
    const script = document.createElement('script');
    script.src = './custome-javascript.js';
    script.onload = function () {
        console.log("custome-javascript.js loaded and ready to execute");
    };
    document.body.appendChild(script);
}).catch(error => {
    console.error('Error loading sections:', error);
});