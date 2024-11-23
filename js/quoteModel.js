// نمایش و مخفی‌سازی مودال
const quoteModal = document.getElementById("quoteModal");
const step1 = document.getElementById("quoteModal").firstElementChild;
let div = document.createElement("div");
quoteModal.appendChild(div);
div.style.position = "absolute";
div.style.width = "100%";
div.style.height = "100%";
div.style.zIndex = "999";
div.style.backgroundColor = "rgba(0,0,0,var(--tw-bg-opacity))";
step1.style.zIndex = "9999";
div.id = "darkside";

if (quoteModal) {
    const quoteLinks = document.querySelectorAll(".request-quote-link");
    quoteLinks.forEach(link => {
        link.addEventListener("click", (event) => {
            event.preventDefault();
            quoteModal.classList.remove("hidden");
            document.getElementsByTagName("body")[0].style.overflow = "hidden"
        });
    });

    document.getElementById("closeModal").addEventListener("click", () => {
        document.getElementsByTagName("body")[0].style.overflow = ""
        quoteModal.classList.add("hidden");
    });
    document.getElementById("darkside").addEventListener("click", () => {
        document.getElementsByTagName("body")[0].style.overflow = ""
        quoteModal.classList.add("hidden");
    });
}

window.addEventListener("click", (event) => {
    if (event.target === quoteModal) {
        quoteModal.classList.add("hidden");
    }
});

// نمایش یا مخفی‌سازی فیلد ISO Tank
document.getElementById("containerType").addEventListener("change", function () {
    const isoTankDropdown = document.getElementById("isoTankOptions");
    if (this.value === "ISO") {
        isoTankDropdown.classList.remove("hidden");
    } else {
        isoTankDropdown.classList.add("hidden");
    }
});

// فرم ارسال OTP
document.getElementById("rate-inquiry-form").addEventListener("submit", function (e) {
    e.preventDefault(); // جلوگیری از رفتار پیش‌فرض فرم

    const formData = new FormData(this);

    fetch('/processRateRequest.php', {
        method: 'POST',
        body: formData,
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                alert('OTP sent successfully!');
                document.getElementById("step1").classList.add("hidden");
                document.getElementById("step2").classList.remove("hidden");
                document.getElementById("phone-display").textContent = `Verification sent to: ${formData.get("phoneNumber")}`;
            } else {
                alert(data.message || 'Error sending OTP. Please try again.');
            }
        })
        .catch((error) => console.error('Error:', error));
});


// تایید OTP
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
                alert('OTP verified successfully. Email sent!');
                quoteModal.classList.add("hidden");
            } else {
                alert('Invalid OTP. Please try again.');
            }
        })
        .catch(error => console.error('Error verifying OTP:', error));
});

// بازگشت به مرحله اول
document.getElementById("back-to-step1").addEventListener("click", function () {
    document.getElementById("step2").classList.add("hidden");
    document.getElementById("step1").classList.remove("hidden");
});

// مدیریت Dropdown کشورها و پورت‌ها
function updateDropdown(selectElement, items, placeholder = "Select an option") {
    selectElement.innerHTML = `<option value="" disabled selected>${placeholder}</option>`;
    items.forEach(item => {
        const option = document.createElement("option");
        option.value = item.abbr || item.name;
        option.textContent = `${item.name} (${item.abbr || ""})`;
        selectElement.appendChild(option);
    });
}

fetch('/js/assist/ports.json')
    .then(response => response.json())
    .then(portsData => {
        const countrySelect = document.getElementById("countrySelect");
        const portsSelect = document.getElementById("portsSelect");
        const destinationCountrySelect = document.getElementById("destinationCountry");
        const destinationPortsSelect = document.getElementById("destinationPortsSelect");

        // Populate Dropdown Function
        const populateDropdown = (selectElement, items, placeholder) => {
            selectElement.innerHTML = `<option value="" disabled selected>${placeholder}</option>`;
            items.forEach(item => {
                const option = document.createElement("option");
                option.value = item.name || item;
                option.textContent = item.name || item;
                selectElement.appendChild(option);
            });
        };

        // Add countries to Departure and Destination dropdowns
        const countryList = Object.keys(portsData);
        populateDropdown(countrySelect, countryList, "Select Departure Country");
        populateDropdown(destinationCountrySelect, countryList, "Select Destination Country");

        // Handle Departure Country Change
        countrySelect.addEventListener("change", () => {
            const selectedCountry = countrySelect.value;
            const ports = portsData[selectedCountry] || [];
            populateDropdown(portsSelect, ports.map(port => port.name), "Select Port");

            // Update Destination Dropdown to disable/remove selected Departure Country
            populateDropdown(
                destinationCountrySelect,
                countryList.filter(country => country !== selectedCountry),
                "Select Destination Country"
            );

            // Clear destination ports when departure country changes
            destinationPortsSelect.innerHTML = `<option value="" disabled selected>Select Destination Port</option>`;
        });

        // Handle Destination Country Change
        destinationCountrySelect.addEventListener("change", () => {
            const selectedDestinationCountry = destinationCountrySelect.value;
            const destinationPorts = portsData[selectedDestinationCountry] || [];
            populateDropdown(destinationPortsSelect, destinationPorts.map(port => port.name), "Select Destination Port");
        });
    })
    .catch(error => console.error('Error loading ports data:', error));



document.getElementById("otp-verification-form").addEventListener("submit", function (e) {
    e.preventDefault();

    const otp = document.querySelector('input[name="verificationCode"]').value;

    fetch('/processRateRequest.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({ verificationCode: otp }),
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('OTP verified successfully. Email sent!');
                document.getElementById("quoteModal").classList.add("hidden");
            } else {
                alert(data.message || 'Invalid OTP. Please try again.');
            }
        })
        .catch(error => console.error('Error verifying OTP:', error));
});
document.getElementById("back-to-step1").addEventListener("click", function () {
    document.getElementById("step2").classList.add("hidden");
    document.getElementById("step1").classList.remove("hidden");
});

const containerTypeDropdown = document.getElementById("containerType");
const dimensionsFields = document.getElementById("dimensionsFields");
const gaugeOptions = document.getElementById("gaugeOptions");

// مدیریت تغییرات نوع کانتینر
containerTypeDropdown.addEventListener("change", () => {
    const selectedType = containerTypeDropdown.value;

    // برای Open Top و Flat Rack فیلدها را نمایش دهید
    if (selectedType === "OpenTop" || selectedType === "FlatRack") {
        dimensionsFields.classList.remove("hidden");
        gaugeOptions.classList.remove("hidden");
    } else {
        dimensionsFields.classList.add("hidden");
        gaugeOptions.classList.add("hidden");
    }
});

// document.getElementById('menu-toggle').addEventListener("click", function () {
//     document.getElementById("mobile-menu").classList.toggle("show");
// })