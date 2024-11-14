function toggleFAQ(button) {
    const faqAnswer = button.nextElementSibling;
    faqAnswer.classList.toggle('active');
    const icon = button.querySelector('i');
    icon.style.transform = faqAnswer.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0deg)';
}
