// Load header
fetch('../Components/header.html')
    .then(response => response.text())
    .then(data => {
        document.getElementById('section01').innerHTML = data;
    });

// Load serviceCard
fetch('../Components/serviceCard.html')
    .then(response => response.text())
    .then(data => {
        document.getElementById('section02').innerHTML = data;
    });

// Load AboutUs
fetch('../Components/AboutUs.html')
    .then(response => response.text())
    .then(data => {
        document.getElementById('section03').innerHTML = data;
    });

// Load Gallery
fetch('../Components/Gallery.html')
    .then(response => response.text())
    .then(data => {
        document.getElementById('section04').innerHTML = data;
    });

// Load header
fetch('../Components/blog.html')
    .then(response => response.text())
    .then(data => {
        document.getElementById('section05').innerHTML = data;
    });

// Load Footer
fetch('../Components/Footer.html')
    .then(response => response.text())
    .then(data => {
        document.getElementById('section99').innerHTML = data;
    });