const clientsCount = document.getElementById('clientsCount');
const projectsCount = document.getElementById('projectsCount');
const companiesCount = document.getElementById('companiesCount');
const experienceCount = document.getElementById('experienceCount');

function animateCounter(element, target, duration) {
    let count = 0;
    const increment = target / (duration / 100); // Calculate the increment value

    const interval = setInterval(() => {
        count += increment;
        if (count >= target) {
            count = target;
            clearInterval(interval);
        }
        element.textContent = Math.floor(count);
    }, 100);
}


// Call the animateCounter function with desired values
animateCounter(clientsCount, 1500, 2000); // Example: 1500 happy clients
animateCounter(projectsCount, 350, 2000); // Example: 350 completed projects
animateCounter(companiesCount, 45, 2000); // Example: 45 partner companies
animateCounter(experienceCount, 6, 2000); // Example: 12 partner companies