// ** نمایش و مخفی‌سازی مودال **
const quoteModal = document.getElementById("quoteModal");
const step1 = document.getElementById("quoteModal").firstElementChild;

// ایجاد پس‌زمینه برای مودال
let div = document.createElement("div");
div.id = "darkside";
div.style.position = "absolute";
div.style.width = "100%";
div.style.height = "100%";
div.style.zIndex = "999";
div.style.backgroundColor = "rgba(0,0,0,var(--tw-bg-opacity))";
quoteModal.appendChild(div);
step1.style.zIndex = "9999";

// مدیریت کلیک برای باز و بسته شدن مودال
const quoteLinks = document.querySelectorAll(".request-quote-link");
quoteLinks.forEach(link => {
    link.addEventListener("click", (event) => {
        event.preventDefault();
        quoteModal.classList.remove("hidden");
        document.body.style.overflow = "hidden";
    });
});

document.getElementById("closeModal").addEventListener("click", () => {
    document.body.style.overflow = "";
    quoteModal.classList.add("hidden");
});

document.getElementById("darkside").addEventListener("click", () => {
    document.body.style.overflow = "";
    quoteModal.classList.add("hidden");
});

window.addEventListener("click", (event) => {
    if (event.target === quoteModal) {
        quoteModal.classList.add("hidden");
    }
});

// ** مدیریت تغییرات فیلدهای اضافی بر اساس نوع کانتینر **
document.querySelectorAll(".containerType").forEach(containerTypeDropdown => {
    containerTypeDropdown.addEventListener("change", function () {
        const parentForm = this.closest("form");
        const dimensionsFields = parentForm.querySelector(".dimensionsFields");
        const gaugeOptions = parentForm.querySelector(".gaugeOptions");
        const isoTankOptions = parentForm.querySelector(".isoTankOptions");

        // مدیریت نمایش فیلدهای Open Top و Flat Rack
        if (this.value === "OP" || this.value === "FR") {
            dimensionsFields.classList.remove("hidden");
            gaugeOptions.classList.remove("hidden");
        } else {
            dimensionsFields.classList.add("hidden");
            gaugeOptions.classList.add("hidden");
        }

        // مدیریت نمایش فیلدهای ISO Tank
        if (this.value === "ISO") {
            isoTankOptions.classList.remove("hidden");
        } else {
            isoTankOptions.classList.add("hidden");
        }
    });
});

// ** مدیریت Dropdown کشورها و پورت‌ها **
fetch('/js/assist/ports.json')
    .then(response => response.json())
    .then(portsData => {
        document.querySelectorAll("form").forEach(form => {
            const countrySelect = form.querySelector(".countrySelect");
            const portsSelect = form.querySelector(".portsSelect");
            const destinationCountrySelect = form.querySelector(".destinationCountry");
            const destinationPortsSelect = form.querySelector(".destinationPortsSelect");

            // تابع پر کردن Dropdown
            const populateDropdown = (selectElement, items, placeholder) => {
                selectElement.innerHTML = `<option value="" disabled selected>${placeholder}</option>`;
                items.forEach(item => {
                    const option = document.createElement("option");
                    option.value = item.name || item;
                    option.textContent = item.name || item;
                    selectElement.appendChild(option);
                });
            };

            const countryList = Object.keys(portsData);

            // پر کردن کشورها
            populateDropdown(countrySelect, countryList, "Select Departure Country");
            populateDropdown(destinationCountrySelect, countryList, "Select Destination Country");

            // مدیریت تغییر کشور مبدا
            countrySelect.addEventListener("change", () => {
                const selectedCountry = countrySelect.value;
                const ports = portsData[selectedCountry] || [];
                populateDropdown(portsSelect, ports.map(port => port.name), "Select Port");

                // به‌روزرسانی کشورهای مقصد
                populateDropdown(
                    destinationCountrySelect,
                    countryList.filter(country => country !== selectedCountry),
                    "Select Destination Country"
                );

                // پاک کردن پورت‌های مقصد
                destinationPortsSelect.innerHTML = `<option value="" disabled selected>Select Destination Port</option>`;
            });

            // مدیریت تغییر کشور مقصد
            destinationCountrySelect.addEventListener("change", () => {
                const selectedDestinationCountry = destinationCountrySelect.value;
                const destinationPorts = portsData[selectedDestinationCountry] || [];
                populateDropdown(destinationPortsSelect, destinationPorts.map(port => port.name), "Select Destination Port");
            });
        });
    })
    .catch(error => console.error("Error loading ports data:", error));

// ** مدیریت فرم ارسال OTP **
document.querySelectorAll(".rate-inquiry-form").forEach(form => {
    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch('/processRateRequest.php', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("OTP sent successfully!");
                    const step1 = this.closest("#step1");
                    step1.classList.add("hidden");
                    step1.nextElementSibling.classList.remove("hidden"); // نمایش مرحله دوم
                } else {
                    alert(data.message || "Error sending OTP. Please try again.");
                }
            })
            .catch(error => console.error("Error:", error));
    });
});

// ** مدیریت تأیید OTP **
document.getElementById("otp-verification-form").addEventListener("submit", function (e) {
    e.preventDefault();

    const otp = document.querySelector('input[name="verificationCode"]').value;

    fetch('/src/verify_otp.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ otp }),
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("OTP verified successfully. Email sent!");
                quoteModal.classList.add("hidden");
            } else {
                alert("Invalid OTP. Please try again.");
            }
        })
        .catch(error => console.error("Error verifying OTP:", error));
});

// ** مدیریت بازگشت به مرحله اول **
document.getElementById("back-to-step1").addEventListener("click", function () {
    document.getElementById("step2").classList.add("hidden");
    document.getElementById("step1").classList.remove("hidden");
});
