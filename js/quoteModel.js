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
const portsData = {
    China: [
        { name: "Qingdao", abbr: "QD" },
        { name: "Tianjin", abbr: "TJ" },
        { name: "Ningbo", abbr: "NB" },
        { name: "Shanghai", abbr: "SH" },
        { name: "Xiamen", abbr: "XM" },
        { name: "Guangzhou", abbr: "GZ" }
    ],
    India: [
        { name: "Mundra", abbr: "MU" },
        { name: "Hazira", abbr: "HZ" },
        { name: "Nhava Sheva", abbr: "NS" },
        { name: "Icd Jaipur", abbr: "IJ" },
        { name: "Tuticorin", abbr: "TC" },
        { name: "Chennai", abbr: "CH" }
    ],
    Russia: [
        { name: "Novorossiysk", abbr: "NR" },
        { name: "Saint Petersburg", abbr: "SP" }
    ],
    Kuwait: [{ name: "Showaikh", abbr: "SW" }],
    Sudan: [{ name: "Sudan", abbr: "SD" }],
    Iraq: [{ name: "Um Qasr", abbr: "UQ" }],
    Jordan: [{ name: "Aqabah", abbr: "AQ" }],
    Qatar: [{ name: "Hamad", abbr: "HD" }],
    SaudiArabia: [
        { name: "Jeddah", abbr: "JD" },
        { name: "Dammam", abbr: "DM" }
    ],
    Egypt: [{ name: "Sokhna", abbr: "SK" }],
    Pakistan: [
        { name: "Karachi", abbr: "KR" },
        { name: "Lahore", abbr: "LH" }
    ],
    Thailand: [{ name: "Bangkok", abbr: "BK" }],
    UAE: [
        { name: "Jebel Ali", abbr: "JA" },
        { name: "Abu Dhabi", abbr: "AD" },
        { name: "Sharjah", abbr: "SHJ" }
    ],
    Bangladesh: [{ name: "Chittagong", abbr: "CTG" }],
    Kenya: [{ name: "Mombasa", abbr: "MB" }]
};


const countrySelect = document.getElementById("countrySelect");
const portsSelect = document.getElementById("portsSelect");

// Populate Country Dropdown
Object.keys(portsData).forEach((country) => {
    const option = document.createElement("option");
    option.value = country;
    option.textContent = country;
    countrySelect.appendChild(option);
});

// Update Ports Dropdown
countrySelect.addEventListener("change", () => {
    const selectedCountry = countrySelect.value;
    const ports = portsData[selectedCountry] || [];

    // Clear previous ports
    portsSelect.innerHTML = `<option value="" disabled selected>Select a Port</option>`;

    // Populate with new ports
    ports.forEach((port) => {
        const option = document.createElement("option");
        option.value = port.abbr;
        option.textContent = `${port.name} (${port.abbr})`;
        portsSelect.appendChild(option);
    });
});

const containerTypeDropdown = document.getElementById("containerType");
const isoTankDropdown = document.getElementById("isoTankOptions");

// Show or hide ISO Tank options based on selection
containerTypeDropdown.addEventListener("change", () => {
    if (containerTypeDropdown.value === "ISO") {
        isoTankDropdown.classList.remove("hidden");
    } else {
        isoTankDropdown.classList.add("hidden");
    }
});


const destinationCountrySelect = document.getElementById("destinationCountry");
const destinationPortsSelect = document.getElementById("destinationPortsSelect");

// Populate Destination Country Dropdown
Object.keys(portsData).forEach((country) => {
    const option = document.createElement("option");
    option.value = country;
    option.textContent = country;
    destinationCountrySelect.appendChild(option);
});

// Update Destination Ports Dropdown
destinationCountrySelect.addEventListener("change", () => {
    const selectedCountry = destinationCountrySelect.value;
    const ports = portsData[selectedCountry] || [];

    // Clear previous ports
    destinationPortsSelect.innerHTML = `<option value="" disabled selected>Select Destination Port</option>`;

    // Populate with new ports
    ports.forEach((port) => {
        const option = document.createElement("option");
        option.value = port.abbr;
        option.textContent = `${port.name} (${port.abbr})`;
        destinationPortsSelect.appendChild(option);
    });
});
