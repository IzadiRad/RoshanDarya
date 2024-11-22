const ratenewPortsDataText = `CHINA
Shanghai
Ningbo
Shenzhen
Guangzhou
Qingdao
Tianjin
Xiamen
Hong Kong
Dalian

INDIA
Mundra
Mumbai
Nhava Sheva
Chennai
Hazira

U.A.E
Jebel Ali
Abdu Dhabi
Sharjah

QATAR
Hamad
Doha

PAKISTAN
Gwadar
Karachi
Qasim

Turkmenistan
Turkmenbashi

Turkey
Mersin International Port (Mediterranean)
Izmir
Istanbul
Trabzon
Iskenderun

Armenia
Poti and Batumi Ports (Georgia)
Azerbaijan
Baku

Kazakhstan
Aktau 
Kuryk

KUWAIT
Showaikh
Shuaiba

RUSSIA
Novorossiysk
Saint Petersburg

IRAQ
Um Ghasr

Oman
Sohar
Salalah

Saudi Arabia
Jaddah
Dammam

Egypt
Sokhna
Port Said

Singapore
Singapore

South Korea
Busan

Japan
Keihin 
Tokyo

The Netherlands
Rotterdam

Malaysia
Port Klang
Tanjung Pelepas

Germany
Hamburg
Bremerhaven
Wilhelmshaven

Thailand
Laem Chabang

Indonesia
Jakarta

Spain
Valencia
Algeciras
Barcelona

Brazil
Santos
Paranaguá


Vietnam
Cai Mep
Hai Phong
Ho Chi Minh City
Canada
Vancouver

U.K
Felixstowe
London Gateway
Southampton

Asia
Port of Shanghai (China) – The world’s busiest port by container volume.
Port of Singapore (Singapore) – A major transshipment hub in Southeast Asia.
Port of Shenzhen (China) – Handles significant container traffic for manufacturing exports.
Port of Ningbo-Zhoushan (China) – Known for bulk cargo.
Port of Hong Kong (China) – A historically significant trade hub.
Port of Busan (South Korea) – Key to trade in Northeast Asia.
Port of Yokohama (Japan) – A major Japanese port.
Port of Tanjung Priok (Indonesia) – The busiest port in Indonesia.
Port of Colombo (Sri Lanka) – Key hub for Indian Ocean trade.
Port of Jawaharlal Nehru (India) – India’s largest container port.
Europe
Port of Rotterdam (Netherlands) – Europe’s largest port.
Port of Antwerp (Belgium) – Known for cargo and container handling.
Port of Hamburg (Germany) – A major logistics hub.
Port of Felixstowe (UK) – The UK’s largest container port.
Port of Piraeus (Greece) – Gateway to Europe from Asia via the Mediterranean.
Port of Algeciras (Spain) – A strategic Mediterranean hub.
Port of Marseille (France) – A key Mediterranean trade port.
Port of Genoa (Italy) – One of Italy’s busiest ports.
North America
Port of Los Angeles (USA) – The busiest container port in the USA.
Port of Long Beach (USA) – Known for its role in Pacific trade.
Port of New York and New Jersey (USA) – The largest port on the East Coast of the USA.
Port of Savannah (USA) – Key for containerized agricultural exports.
Port of Vancouver (Canada) – Canada’s largest port.
Port of Houston (USA) – A significant oil and gas export hub.
Port of Miami (USA) – Known as the "Cruise Capital of the World."
South America
Port of Santos (Brazil) – The largest port in Latin America.
Port of Buenos Aires (Argentina) – Key for Argentina's exports.
Port of Callao (Peru) – Major gateway for Peruvian trade.
Port of Cartagena (Colombia) – A growing Caribbean hub.
Africa
Port of Durban (South Africa) – The busiest port in Africa.
Port of Mombasa (Kenya) – Key for East African trade.
Port of Lagos (Nigeria) – Nigeria’s largest port.
Port of Tanger Med (Morocco) – A major transshipment hub in North Africa.
Port of Djibouti (Djibouti) – Strategic for Red Sea trade routes.
Australia and Oceania
Port of Sydney (Australia) – Significant for container and cruise traffic.
Port of Melbourne (Australia) – The largest container port in Australia.
Port of Auckland (New Zealand) – Key for New Zealand’s exports.
Middle East
Port of Jebel Ali (UAE) – One of the largest ports in the Middle East.
Port of Dammam (Saudi Arabia) – A major Saudi Arabian trade hub.
Port of Salalah (Oman) – Important for Indian Ocean shipping routes.
Port of Doha (Qatar) – Expanding rapidly for regional trade.

Black Sea Ports
Port of Novorossiysk (Russia)
Port of Poti (Georgia)
Port of Batumi (Georgia)
Port of Mariupol (Ukraine)
Port of Chornomorsk (Ukraine)
Port of Odessa (Ukraine)
Port of Aktau (Kazakhstan)
Port of Turkmenbashi (Turkmenistan)

Port of Baku (Azerbaijan)
Port of Astrakhan (Russia)
Port of Makhachkala (Russia)
Port of Saint Petersburg (Russia)
Port of Kaliningrad (Russia)
Port of Ventspils (Latvia)
Port of Riga (Latvia)
Port of Kherson (Ukraine)
Port of Volgograd (Russia)
Port of Samara (Russia)
`

function updatePortsData(oldData, newDataText) {
    const newDataLines = newDataText.split("\n").filter(line => line.trim() !== "");
    let currentCountry = null;

    newDataLines.forEach(line => {
        if (line.match(/^[A-Z\s\.]+$/)) {
            // شناسایی کشور
            currentCountry = line.trim();
            if (!oldData[currentCountry]) {
                oldData[currentCountry] = [];
            }
        } else if (currentCountry) {
            // اضافه کردن بندر
            const portName = line.trim();
            const existingPort = oldData[currentCountry].find(port => port.name === portName);
            if (!existingPort) {
                oldData[currentCountry].push({ name: portName, abbr: generateAbbreviation(portName) });
            }
        }
    });

    return oldData;
}


function generateAbbreviation(name) {
    return name.split(" ").map(word => word[0].toUpperCase()).join("");
}

// به‌روزرسانی داده‌ها
updatePortsData(portsData, ratenewPortsDataText);


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
document.getElementById('rate-inquiry-form').onsubmit = function (e) {
    e.preventDefault(); // جلوگیری از ارسال پیش‌فرض فرم

    const formData = new FormData(this);

    fetch('../processRateRequest.php', {
        method: 'POST',
        body: formData,
    })
        .then(response => response.text())
        .then(data => {
            console.log(data); // پیام بازگشتی از PHP
            alert('فرآیند ارسال تکمیل شد!');
        })
        .catch(error => {
            console.error('خطا در ارسال فرم:', error);
        });
};