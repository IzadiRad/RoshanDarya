document.getElementById("request-quote-link").addEventListener("click", function (event) {
    event.preventDefault(); // جلوگیری از رفتن به لینک دیگر
    document.getElementById("quoteModal").classList.add("show");
});

document.getElementById("closeModal").addEventListener("click", function () {
    document.getElementById("quoteModal").classList.remove("show");
});

// بستن مودال با کلیک خارج از آن
window.addEventListener("click", function (event) {
    if (event.target == document.getElementById("quoteModal")) {
        document.getElementById("quoteModal").classList.remove("show");
    }
});
