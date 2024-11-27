// مدیریت اسکرول
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
});

// اطلاعات کارت‌ها
const blogs = [
    {
        id: 1,
        title: "The Role of Maritime Transport in Global Trade",
        image: "/Images/Image/3.webp",
        description: "Explore how maritime transport drives international commerce, connecting continents efficiently.",
        hashtags: ["#MaritimeTransport", "#GlobalTrade", "#Logistics"]
    },
    {
        id: 2,
        title: "Boosting Supply Chain Efficiency",
        image: "/Images/Image/3.webp",
        description: "Discover practical strategies to streamline your supply chain for optimal results.",
        hashtags: ["#SupplyChain", "#Efficiency", "#FreightForwarding"]
    },
    {
        id: 3,
        title: "Eco-Friendly Shipping Solutions",
        image: "/Images/Image/3.webp",
        description: "Learn how sustainable shipping practices can reduce environmental impact and cost.",
        hashtags: ["#SupplyChain", "#Efficiency", "#FreightForwarding"]
    },
    {
        id: 4,
        title: "Overcoming Freight Challenges",
        image: "/Images/Image/3.webp",
        description: "Address common issues in freight forwarding and explore effective solutions.",
        hashtags: ["#FreightChallenges", "#RiskManagement", "#LogisticsSolutions"]
    },
    {
        id: 5,
        title: "Advanced Cargo Tracking Systems",
        image: "/Images/Image/3.webp",
        description: "Understand how innovative tracking systems enhance cargo visibility and security.",
        hashtags: ["#FreightChallenges", "#RiskManagement", "#LogisticsSolutions"]
    },
    {
        id: 6,
        title: "The Future of AI in Freight Management",
        image: "/Images/Image/3.webp",
        description: "Delve into how artificial intelligence is transforming the logistics industry, from predictive analysis to automated operations...",
        hashtags: ["#WebDevelopment", "#HTML", "#CSS"]
    },
    {
        id: 7,
        title: "Navigating the Persian Gulf: Key Routes and Challenges",
        image: "/Images/Image/3.webp",
        description: "Explore the significance of maritime routes in the Persian Gulf and how they impact regional trade and logistics...",
        hashtags: ["#CargoTracking", "#Innovation", "#SmartLogistics"]
    }
];

// // نمایش مودال
// document.querySelectorAll(".blog-item, .read-more-btn").forEach(item => {
//     item.addEventListener("click", function () {
//         const id = this.dataset.id;
//         const blog = blogs.find(b => b.id == id);

//         if (blog) {
//             document.getElementById("modalImage").src = blog.image;
//             document.getElementById("modalTitle").textContent = blog.title;
//             document.getElementById("modalDescription").textContent = blog.description;

//             const hashtagsContainer = document.getElementById("modalHashtags");
//             hashtagsContainer.innerHTML = "";
//             blog.hashtags.forEach(tag => {
//                 const span = document.createElement("span");
//                 span.textContent = tag;
//                 span.className = "px-2 py-1 bg-gray-200 rounded text-gray-800 text-sm";
//                 hashtagsContainer.appendChild(span);
//             });

//             document.getElementById("blogModal").classList.add("active");
//         }
//     });
// });

// // بستن مودال
// document.getElementById("closeModal").addEventListener("click", () => {
//     document.getElementById("blogModal").classList.remove("active");
// });


document.querySelectorAll(".open-modal-btn").forEach(button => {
    button.addEventListener("click", function () {
        const id = this.dataset.id;
        const blog = blogs.find(b => b.id == id);

        if (blog) {
            document.getElementById("modalImage").src = blog.image;
            document.getElementById("modalTitle").textContent = blog.title;
            document.getElementById("modalDescription").textContent = blog.description;

            const hashtagsContainer = document.getElementById("modalHashtags");
            hashtagsContainer.innerHTML = "";
            blog.hashtags.forEach(tag => {
                const span = document.createElement("span");
                span.textContent = tag;
                span.classList.add("bg-blue-100", "text-blue-600", "px-2", "py-1", "rounded");
                hashtagsContainer.appendChild(span);
            });

            document.getElementById("blogModal").classList.add("active");
        }
    });
});

// بستن مودال
document.getElementById("closeModal").addEventListener("click", () => {
    document.getElementById("blogModal").classList.remove("active");
});