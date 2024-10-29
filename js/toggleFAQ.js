function toggleFAQ(element) {
    const answer = element.nextElementSibling;
    const icon = element.querySelector("i");

    answer.classList.toggle("show");
    icon.classList.toggle("fa-chevron-down");
    icon.classList.toggle("fa-chevron-up");
}
