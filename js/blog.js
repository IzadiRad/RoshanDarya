const blogs = [
    {
        title: "How to build a website",
        description: "Short description about the first blog. You can write more details about the topic here.",
        imgSrc: "https://via.placeholder.com/350",
        date: "01 Jan, 2022",
        author: "John Doe",
    },
    {
        title: "10 Tips for SEO Improvement",
        description: "Short description about the second blog. You can write more details about the topic here.",
        imgSrc: "https://via.placeholder.com/350",
        date: "01 Jan, 2022",
        author: "John Doe",
    },
    // Add more blog objects here...
];

let currentBlogIndex = 0;

function loadMoreBlogs() {
    const blogContainer = document.querySelector('.row.g-4');
    const maxBlogsToLoad = 3; // Number of blogs to load each time
    const nextBlogs = blogs.slice(currentBlogIndex, currentBlogIndex + maxBlogsToLoad);

    nextBlogs.forEach(blog => {
        const blogItem = document.createElement('div');
        blogItem.classList.add('col-lg-4');
        blogItem.innerHTML = `
            <div class="blog-item bg-light rounded overflow-hidden">
                <div class="blog-img position-relative overflow-hidden">
                    <a href="blog-details.html">
                        <img class="img-fluid" src="${blog.imgSrc}" alt="${blog.title}" style="max-width: 100%; height: auto;">
                    </a>
                </div>
                <div class="p-4">
                    <h4 class="mb-3 text-primary">${blog.title}</h4>
                    <p>${blog.description}</p>
                    <p><small>${blog.author} | ${blog.date}</small></p>
                    <a class="text-uppercase text-primary" href="blog-details.html">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        `;
        blogContainer.appendChild(blogItem);
    });

    currentBlogIndex += maxBlogsToLoad;

// Hide load more button if there are no more blogs to load
