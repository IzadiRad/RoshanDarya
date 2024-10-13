function toggleFAQ(element) {
    const answer = element.nextElementSibling;
    const icon = element.querySelector('i');

    // Toggle the answer display
    answer.classList.toggle('hidden');
    // Change the icon direction
    icon.classList.toggle('fa-chevron-down');
    icon.classList.toggle('fa-chevron-up');
}