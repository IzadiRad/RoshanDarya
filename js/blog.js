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
        title: "How to Build a Website",
        image: "/Images/Image/3.webp",
        description: "Learn the fundamentals of building a modern website with this comprehensive guide.",
        hashtags: ["#WebDevelopment", "#HTML", "#CSS"]
    },
    {
        id: 2,
        title: "How to Build a Website",
        image: "/Images/Image/3.webp",
        description: "Learn the fundamentals of building a modern website with this comprehensive guide.",
        hashtags: ["#WebDevelopment", "#HTML", "#CSS"]
    },
    {
        id: 3,
        title: "How to Build a Website",
        image: "/Images/Image/3.webp",
        description: "Learn the fundamentals of building a modern website with this comprehensive guide.",
        hashtags: ["#WebDevelopment", "#HTML", "#CSS"]
    },
    {
        id: 4,
        title: "How to Build a Website",
        image: "/Images/Image/3.webp",
        description: "Learn the fundamentals of building a modern website with this comprehensive guide.",
        hashtags: ["#WebDevelopment", "#HTML", "#CSS"]
    },
    {
        id: 5,
        title: "How to Build a Website",
        image: "/Images/Image/3.webp",
        description: "Learn the fundamentals of building a modern website with this comprehensive guide.",
        hashtags: ["#WebDevelopment", "#HTML", "#CSS"]
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