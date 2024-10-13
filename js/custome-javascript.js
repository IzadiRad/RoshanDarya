document.addEventListener('DOMContentLoaded', function () {
    // Check if the elements exist before using them

    // Menu toggle and close functionality
    const menuToggle = document.getElementById('menu-toggle');
    const closeMenuBtn = document.getElementById('close-menu');
    const overlay = document.getElementById('overlay');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuToggle && closeMenuBtn && overlay && mobileMenu) {
        menuToggle.addEventListener('click', function () {
            mobileMenu.classList.toggle('show');
            overlay.classList.toggle('show');
        });

        closeMenuBtn.addEventListener('click', closeMenu);
        overlay.addEventListener('click', closeMenu);

        function closeMenu() {
            mobileMenu.classList.remove('show');
            overlay.classList.remove('show');
        }
    } else {
        console.error('Menu elements not found.');
    }

    // Fixed header on scroll
    const header = document.querySelector('header');
    const butt = document.getElementById('logo-butt');
    const mymenu = document.querySelector('.mymenu');

    if (header && butt && mymenu) {
        window.onscroll = function () {
            if (window.scrollY > 100) {
                header.classList.add('fixed-header');
                if (window.innerWidth >= 768) {
                    butt.classList.add("bg-white");
                    mymenu.classList.add("bg-white");
                }
            } else {
                header.classList.remove('fixed-header');
                butt.classList.remove("bg-white");
                mymenu.classList.remove("bg-white");
            }
        };
    }

    // Service details functionality
    const detailsContent = {
        service1: `<h3 class="text-3xl font-bold mb-4">Service 1 Details</h3>
                    <video controls class="w-full mb-4">
                        <source src="service1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <p class="text-gray-700">Detailed explanation about Service 1.</p>`,
        service2: `<h3 class="text-3xl font-bold mb-4">Service 2 Details</h3>
                    <img src="service2-details.jpg" alt="Service 2 Details" class="w-full mb-4">
                    <p class="text-gray-700">Detailed explanation about Service 2.</p>`,
        service3: `<h3 class="text-3xl font-bold mb-4">Service 3 Details</h3>
                    <video controls class="w-full mb-4">
                        <source src="service3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <p class="text-gray-700">Detailed explanation about Service 3.</p>`
    };

    function showDetails(service) {
        const detailsPanel = document.getElementById('details-panel');
        const detailsContentDiv = document.getElementById('details-content');

        if (detailsPanel && detailsContentDiv) {
            detailsContentDiv.innerHTML = detailsContent[service];
            detailsPanel.classList.remove('hidden');
        } else {
            console.error('Details panel or content not found.');
        }
    }

    function hideDetails() {
        const detailsPanel = document.getElementById('details-panel');
        if (detailsPanel) {
            detailsPanel.classList.add('hidden');
        }
    }

});

