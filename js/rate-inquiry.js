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


const countrySelect = document.getElementById("mainCountrySelect");
const portsSelect = document.getElementById("mainPortsSelect");

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

const containerTypeDropdown = document.getElementById("maincontainerType");
const isoTankDropdown = document.getElementById("mainisoTankOptions");

// Show or hide ISO Tank options based on selection
containerTypeDropdown.addEventListener("change", () => {
    if (containerTypeDropdown.value === "ISO") {
        isoTankDropdown.classList.remove("hidden");
    } else {
        isoTankDropdown.classList.add("hidden");
    }
});

// Function to populate dropdown
function populateDropdown(countrySelectId, portsSelectId) {
    const countrySelect = document.getElementById(countrySelectId);
    const portsSelect = document.getElementById(portsSelectId);

    // Populate country dropdown
    Object.keys(portsData).forEach((country) => {
        const option = document.createElement("option");
        option.value = country;
        option.textContent = country;
        countrySelect.appendChild(option);
    });

    // Update ports dropdown
    countrySelect.addEventListener("change", () => {
        const selectedCountry = countrySelect.value;
        const ports = portsData[selectedCountry] || [];

        portsSelect.innerHTML = `<option value="" disabled selected>Select Port</option>`;
        ports.forEach((port) => {
            const option = document.createElement("option");
            option.value = port.abbr;
            option.textContent = `${port.name} (${port.abbr})`;
            portsSelect.appendChild(option);
        });

        portsSelect.classList.remove("hidden");
    });
}

// Initialize dropdowns for both sections
populateDropdown("mainCountrySelect", "mainPortsSelect");
populateDropdown("destinationCountry", "destinationPortsSelect");