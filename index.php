<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/css/custome.css" type="text/css">
    <link rel="stylesheet" href="/css/styles.css" type="text/css">
    <link rel="stylesheet" href="/css/Header.css" type="text/css">
    <link rel="stylesheet" href="/css/Srvices-Section2.css" type="text/css">
    <link rel="stylesheet" href="/css/Color.css" type="text/css">
    <link rel="stylesheet" href="/css/Fonts.css" type="text/css">
    <link rel="stylesheet" href="/css/Gallery.css" type="text/css">
    <link rel="stylesheet" href="/css/Blog.css" type="text/css">
    <link rel="stylesheet" href="/css/section2.css" type="text/css">
    <link rel="stylesheet" href="/css/service-section.css" type="text/css">
    <link rel="stylesheet" href="/css/Footer.css" type="text/css">
    <link rel="stylesheet" href="/css/faq.css" type="text/css">
    <link rel="stylesheet" href="/css/rate-inquiry.css" type="text/css">
    <link rel="stylesheet" href="/css/AboutUs.css" type="text/css">
    <link rel="stylesheet" href="/css/quoteModal.css" type="text/css">


    <!-- english Fonts-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Roboto:wght@400;500&family=Lora:wght@400;700&family=Inter:wght@400;500&display=swap">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- <link href="path/to/vazir-font.css" rel="stylesheet"> -->


    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>roshandarya</title>


</head>

<body>
    <header class=" top-0 bg-white z-50 shadow-lg">
        <div class="hide" id="searchBar">
            <input type="search" name="searchBox" id="searchBox"
                placeholder="Type your search here.. Press [Esc] to exit">
        </div>
        <nav class="flex justify-center items-center space-x-8 mx-auto relative ">
            <!-- دکمه منوی همبرگری -->
            <div id="menu-toggle" class="block md:hidden focus:outline-none px-4 absolute left-0 relative z-10">
                <i class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 40 30"
                        class="hamburger-svg">
                        <rect width="40" height="4" rx="2" fill="var(--primary-light-blue)"></rect>
                        <rect y="13" width="40" height="4" rx="2" fill="var(--primary-light-blue)"></rect>
                        <rect y="26" width="40" height="4" rx="2" fill="var(--primary-light-blue)"></rect>
                    </svg>
                </i>
            </div>


            <div id="mobile-menu" class="hidden">
                <div id="overlay"> </div>
                <a href="/index.php" id="home-link-mob"><i class=""></i> Home</a>
                <hr />
                <a id="services-linkss" class="menu-item">
                    <i class="" id="services-link-mob"></i> Services
                    <span class="submenu-icon">&#9662;</span>
                </a>
                <div id="services-submenu" class="submenu hidden">
                    <a href="/Components/services/maritime-transport.html" id="maritime-link-mob"><i class=""></i>
                        Maritime Transport</a>
                    <a href="/Components/services/ground-transport.html" id="air-freight-link-mob"><i class=""></i> air
                        freight</a>
                    <a href="/Components/services/air-freight.html" id="ground-transport-link-mob"><i class=""></i>
                        Ground Transport</a>
                    <!-- <a href="/Components/services/maps.html" id="services-maps-link-mob"><i class=""></i> Services
                        Maps</a> -->
                </div>

                <hr />
                <a href="#" class="request-quote-link" data-target="#quoteModal1"><i class=""></i> Request a Quote</a>
                <div id="close-menu" class="close-btn">
                    <i class="contents">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"
                            class="x-icon text-blue-900 ">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </i>
                </div>
                <hr />
                <a href="#" id="eqc-linkss" class="menu-item">
                    <i class=""></i> EQC
                    <span class="submenu-icon">&#9662;</span>
                </a>
                <div id="eqc-submenu" class="submenu hidden">
                    <a href="/Components/eqc/Incoterms.html" id="incoterms-link-mob"><i class=""></i> Incoterms</a>
                    <a href="/Components/eqc/cargo.html" id="cargo-link-mob"><i class=""></i> Cargo</a>
                </div>
                <hr />
                <a href="/Components/AboutUs.html" id="about-us-link-mob"><i class=""></i> About Us</a>
                <hr />
                <a href="/Components/ContactUs.html" id="contact-us-link-mob"><i class=""></i> Contact Us</a>

            </div>

            <menu id="mainManu" class="flex items-center flex-row w-full justify-center m-0 test">
                <!-- منوی سمت چپ لوگو -->
                <nav id="menu" class="hidden md:flex space-x-4 mymenu whitespace-nowrap z-50">
                    <a href="/index.php" class="nav-link custome-size-menu custome-menu-item text-white"
                        id="home-link">Home</a>
                    <div class="relative">
                        <a href="/Components/Services.html" id="desktop-services"
                            class="nav-link custome-size-menu custome-menu-item text-white">
                            Services
                            <span class="submenu-icon">&#9662;</span>
                        </a>

                        <div id="services-dropdown" class="absolute hidden bg-white shadow-lg mt-2 w-48 substack">
                            <a href="/Components/services/maritime-transport.html"
                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200 text-white"
                                id="maritime-link">Maritime Transport</a>
                            <a href="/Components/services/ground-transport.html"
                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200 text-white"
                                id="ground-transport-link">Ground Transport</a>
                            <a href="/Components/services/air-freight.html"
                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200  text-white"
                                id="air-freight-link">air freight</a>
                            <!-- <a href="/Components/services/maps.html"
                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200 text-white"
                                id="services-maps-link">Services
                                Maps</a> -->
                        </div>
                    </div>

                    <a href="#" class="nav-link custome-size-menu custome-menu-item text-white request-quote-link"
                        data-target="#quoteModal2">Request a
                        Quote</a>

                </nav>

                <!-- لوگو وسط منو -->
                <a id="roshan-icon" class="relative flex justify-center items-center ml-6 left-0 right-0 top-0  "
                    href="/index.php">
                    <div id="logo-butt"
                        class="absolute w-72 h-28 rounded-full z-10 shadow-[0_8px_16px_rgba(0,0,255,0.5)] -top-3 mobwhite ">
                    </div>

                    <img src="Images/Icon/roshan-new-en.webp" alt="roshandarya" class="relative w-48 h-auto z-10 top-6">
                </a>



                <!-- منو سمت راست لوگو -->
                <nav class="hidden md:flex space-x-4 mymenu ml-3 whitespace-nowrap z-[100]">

                    <div class="relative z-10">
                        <a href="/Components/eqc.html" id="desktop-eqc"
                            class="nav-link custome-size-menu custome-menu-item z-100 text-white">
                            EQC
                            <span class="submenu-icon">&#9662;</span>
                        </a>
                        <div id="eqc-dropdown" class="absolute hidden bg-white shadow-lg mt-2 w-48 right-0 substack">
                            <a href="/Components/eqc/Incoterms.html"
                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200"
                                id="incoterms-link">Incoterms</a>
                            <a href="/Components/eqc/cargo.html" class="block px-4 py-2 text-gray-800 hover:bg-gray-200"
                                id="cargo-link">Cargo</a>
                        </div>
                    </div>
                    <a href="/Components/AboutUs.html" class="nav-link custome-size-menu custome-menu-item text-white"
                        id="about-us-link">About
                        Us</a>
                    <a href="/Components/ContactUs.html" class="nav-link custome-size-menu custome-menu-item text-white"
                        id="contact-us-link">Contact
                        Us</a>
                    <a href="/persian/index.php" class="nav-link custome-size-menu custome-menu-item language-toggle">
                        <img src="Images/iran-flag-icon.svg" alt="Iran Flag" id="flag-icon" class="w-6 h-6">
                    </a>
                    <i class="fa-solid fa-magnifying-glass" id="search"></i>
                </nav>
            </menu>
        </nav>
    </header>

    <section id="sec-0" class="hero-section relative">
        <div id="overlay" class="absolute inset-0 bg-black opacity-40"></div>
        <article id="custome-main-show" class="relative">
            <video autoplay muted loop id="myVideo" class="w-full h-[calc(100vh-70px)] object-cover">
                <source src="/Images/Video/hero.webm" type="video/mp4">
            </video>
        </article>
    </section>


    <section class="py-10-Section bg-transparent  sticky z-auto  shortService" id="sec-2">
        <div class="container mx-auto overflow-x-hidden">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">

                <!-- Item 1 -->
                <a class="bg-white p-6 shadow-lg rounded-lg transition duration-300 transform hover:scale-105 hover:bg-blue-600 group flex flex-col items-center secCard"
                    data-aos="fade-right overflow-x-hidden" href="/Components/services/logistics-solution.html">
                    <div class="text-center">
                        <div class="item-icon mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-12 h-12 fill-current text-gray-800 group-hover:text-white"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1_1_" x="0px" y="0px"
                                viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                <g>
                                    <rect x="15" y="5" width="8" height="2" />
                                    <rect x="25" y="5" width="2" height="2" />
                                    <rect x="11" y="5" width="2" height="2" />
                                    <rect x="16" y="57" width="6" height="2" />
                                    <path
                                        d="M60,45H46c-1.654,0-3,1.346-3,3v12c0,1.654,1.346,3,3,3h14c1.654,0,3-1.346,3-3V48C63,46.346,61.654,45,60,45z M51,47h4v2 h-4V47z M55,61h-4v-2h4V61z M61,60c0,0.552-0.448,1-1,1h-3v-4h-8v4h-3c-0.552,0-1-0.448-1-1V48c0-0.552,0.448-1,1-1h3v4h8v-4h3 c0.552,0,1,0.448,1,1V60z" />
                                    <path
                                        d="M48,27v1c0,1.654,1.346,3,3,3h1v3.445l-6.608,4.131l1.665,4.754l1.887-0.66l-1.136-3.246L53,36.18l5.192,3.244 l-1.136,3.246l1.887,0.66l1.665-4.754L54,34.445V31h1c1.654,0,3-1.346,3-3v-1.184c1.161-0.414,2-1.514,2-2.816v-2 c0-1.654-1.346-3-3-3H39v2h18c0.552,0,1,0.449,1,1v2c0,0.551-0.448,1-1,1H31v24H7V15h24v4H18c-2.757,0-5,2.243-5,5v13.101 C10.721,37.566,9,39.586,9,42v3h16v-3c0-2.414-1.721-4.434-4-4.899V27h8v-2h-8c-1.103,0-2,0.897-2,2v10h-4V24c0-1.654,1.346-3,3-3 h19V6c0-2.757-2.243-5-5-5H6C3.243,1,1,3.243,1,6v52c0,2.757,2.243,5,5,5h26c2.757,0,5-2.243,5-5V27H48z M23,42v1H11v-1 c0-1.654,1.346-3,3-3h6C21.654,39,23,40.346,23,42z M55,29h-4c-0.552,0-1-0.449-1-1v-1h6v1C56,28.551,55.552,29,55,29z M6,3h26 c1.654,0,3,1.346,3,3v3H3V6C3,4.346,4.346,3,6,3z M32,61H6c-1.654,0-3-1.346-3-3v-3h32v3C35,59.654,33.654,61,32,61z M35,53H3V11 h32v8h-2v-6H5v38h28V27h2V53z" />
                                </g>
                            </svg>
                        </div>
                        <div>
                            <div class="item-description group-hover:text-white">Sustainable</div>
                            <h3
                                class="text-xl font-semibold mb-2 text-[var(--primary-navy-blue)]-800 group-hover:text-white">
                                LOGISTICS SOLUTIONS</h3>
                        </div>

                    </div>
                </a>
                <!-- Item 2-->
                <a data-aos="fade-right" href="/Components/services/air-freight.html"
                    class="bg-white p-6 shadow-lg rounded-lg transition duration-300 transform hover:scale-105 hover:bg-blue-600 group secCard overflow-x-hidden">
                    <div class="text-center">
                        <div class="item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-12 h-12 fill-current text-gray-800 group-hover:text-white"
                                viewBox="0 0 479.964 479.964">

                                <g>
                                    <g>
                                        <path
                                            d="M269.656,96.62c-16.39-16.35-42.922-16.35-59.312,0c-3.069,3.178-2.981,8.243,0.197,11.312    c3.1,2.994,8.015,2.994,11.115,0c10.139-10.113,26.549-10.113,36.688,0c1.5,1.5,3.534,2.344,5.656,2.344    c4.418-0.001,7.999-3.583,7.998-8.002C271.998,100.154,271.155,98.12,269.656,96.62z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M240,318.276c-4.418,0-8,3.582-8,8v56c0,4.418,3.582,8,8,8s8-3.582,8-8v-56C248,321.858,244.418,318.276,240,318.276z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M144,214.276c-4.418,0-8,3.582-8,8v48c0,4.418,3.582,8,8,8s8-3.582,8-8v-48C152,217.858,148.418,214.276,144,214.276z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M104,230.276c-4.418,0-8,3.582-8,8v64c0,4.418,3.582,8,8,8s8-3.582,8-8v-64C112,233.858,108.418,230.276,104,230.276z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M104,326.276c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C112,329.858,108.418,326.276,104,326.276z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M336,214.276c-4.418,0-8,3.582-8,8v48c0,4.418,3.582,8,8,8s8-3.582,8-8v-48C344,217.858,340.418,214.276,336,214.276z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M336,294.276c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C344,297.858,340.418,294.276,336,294.276z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M376,230.276c-4.418,0-8,3.582-8,8v96c0,4.418,3.582,8,8,8s8-3.582,8-8v-96C384,233.858,380.418,230.276,376,230.276z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M474.104,214.556L408,196.532v-22.256c0-17.673-14.327-32-32-32c-17.673,0-32,14.327-32,32v4.8l-45.6-12.448l2.4-44.8    c0.36-6.734,0.28-13.484-0.24-20.208c-0.345-4.405-4.195-7.697-8.6-7.352s-7.697,4.195-7.352,8.6    c0.457,6.032,0.522,12.088,0.192,18.128l-12.728,235.776l-21.84,65.504h-20.464l-21.84-65.504L195.2,121.58    c-2.035-36.229,10.254-71.806,34.216-99.056c5.199-5.848,14.154-6.374,20.002-1.174c0.558,0.496,1.077,1.036,1.55,1.614    c14.367,16.45,24.629,36.072,29.944,57.256c1.105,4.278,5.468,6.85,9.746,5.746c4.234-1.093,6.806-5.384,5.774-9.634    c-6.005-23.826-17.594-45.882-33.808-64.344C256.918,5.462,248.669,1.72,240,1.724c-8.671-0.003-16.921,3.739-22.632,10.264    C190.663,42.381,176.97,82.05,179.24,122.444l2.4,44.184L136,179.076v-4.8c0-17.673-14.327-32-32-32s-32,14.327-32,32v22.256    L5.896,214.556c-3.482,0.949-5.897,4.111-5.896,7.72v48c0,4.418,3.582,8,8,8c0.229,0.012,0.459,0.012,0.688,0l56-4.872    c4.383-0.555,7.486-4.559,6.931-8.942c-0.524-4.138-4.14-7.179-8.307-6.986L48,258.764V219.66l134.512-36.688l3.448,63.8    l-10.648,0.928c-4.418,0.188-7.848,3.922-7.66,8.34c0.188,4.418,3.922,7.848,8.34,7.66c0.232,0.012,0.464,0.012,0.696,0    l10.136-0.88l4.904,90.656l-43.304,21.648c-2.71,1.354-4.422,4.123-4.424,7.152v24c0,4.418,3.582,8,8,8s8-3.582,8-8V387.22    l35.328-17.664l12.24,36.72H184c-4.418,0-8,3.582-8,8s3.582,8,8,8h28.896l3.512,10.528c1.089,3.268,4.147,5.473,7.592,5.472h32    c3.445,0.001,6.503-2.204,7.592-5.472l3.512-10.528H304c4.418,0,8-3.582,8-8s-3.582-8-8-8h-31.568l12.24-36.72L320,387.22v43.056    c0,4.418,3.582,8,8,8s8-3.582,8-8v-48c0.017-3.047-1.699-5.838-4.424-7.2l-43.304-21.6l4.904-90.712l10.136,0.88    c0.232,0.012,0.464,0.012,0.696,0c4.418,0.188,8.152-3.242,8.34-7.66c0.188-4.418-3.242-8.152-7.66-8.34l-10.648-0.928l3.448-63.8    L432,219.66v39.104l-15.312-1.288c-4.391-0.487-8.346,2.679-8.832,7.07c-0.487,4.391,2.679,8.346,7.07,8.833    c0.128,0.014,0.257,0.025,0.386,0.033l56,4.872c0.229,0.01,0.459,0.007,0.688-0.008c4.418,0,8-3.582,8-8v-48    C480.001,218.667,477.586,215.505,474.104,214.556z M32,260.156l-16,1.392v-33.16l16-4.368V260.156z M88,192.164v-17.888    c0-8.837,7.163-16,16-16s16,7.163,16,16v8c0.046,0.373,0.121,0.742,0.224,1.104L88,192.164z M392,192.164l-32.224-8.8    c0.102-0.356,0.177-0.72,0.224-1.088v-8c0-8.837,7.163-16,16-16s16,7.163,16,16V192.164z M464,261.548l-16-1.392V224.02l16,4.368    V261.548z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M328,454.276c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C336,457.858,332.418,454.276,328,454.276z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M152,430.276c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C160,433.858,156.418,430.276,152,430.276z">
                                        </path>
                                    </g>
                                </g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                            </svg>
                        </div>
                        <div>
                            <div class="item-description group-hover:text-white">Reliable</div>
                            <h3
                                class="text-xl font-semibold mb-2 text-[var(--primary-navy-blue)]-800 group-hover:text-white">
                                AIR FREIGHT
                                SERVICE</h3>
                        </div>

                    </div>
                </a>
                <!-- Item 3 -->
                <a data-aos="fade-left" href="/Components/services/maritime-transport.html"
                    class="bg-white p-6 shadow-lg rounded-lg transition duration-300 transform hover:scale-105 hover:bg-blue-600 group overflow-x-hidden secCard ">
                    <div class="text-center">
                        <div class="item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-12 h-12 fill-current text-gray-800 group-hover:text-white"
                                viewBox="0 0 479.964 479.964">

                                <g>
                                    <g>
                                        <path
                                            d="M465.455,418.344l-8-8c-3.178-3.07-8.242-2.982-11.312,0.196c-2.995,3.1-2.995,8.016,0,11.116l8,8    c3.178,3.07,8.242,2.982,11.312-0.196C468.45,426.36,468.45,421.444,465.455,418.344z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M437.455,390.344c-18.584-18.588-48.718-18.591-67.305-0.007c-0.002,0.002-0.005,0.005-0.007,0.007    c-12.505,11.937-32.183,11.937-44.688,0c-18.584-18.588-48.718-18.591-67.305-0.007c-0.002,0.002-0.005,0.005-0.007,0.007    c-12.505,11.937-32.183,11.937-44.688,0c-18.584-18.588-48.718-18.591-67.305-0.007c-0.002,0.002-0.005,0.005-0.007,0.007    c-12.505,11.937-32.183,11.937-44.688,0c-18.584-18.588-48.718-18.591-67.305-0.007c-0.002,0.002-0.005,0.005-0.007,0.007l-28,28    c-3.124,3.125-3.123,8.19,0.002,11.314c1.5,1.499,3.534,2.342,5.654,2.342c2.122,0,4.156-0.844,5.656-2.344l28-28    c12.505-11.937,32.183-11.937,44.688,0c18.584,18.588,48.718,18.591,67.305,0.007c0.002-0.002,0.005-0.004,0.007-0.007    c12.505-11.937,32.183-11.937,44.688,0c18.584,18.588,48.718,18.591,67.305,0.007c0.002-0.002,0.005-0.005,0.007-0.007    c12.505-11.937,32.183-11.937,44.688,0c18.584,18.588,48.718,18.591,67.305,0.007c0.002-0.002,0.005-0.005,0.007-0.007    c12.505-11.937,32.183-11.937,44.688,0c3.178,3.07,8.242,2.982,11.312-0.196C440.45,398.36,440.45,393.444,437.455,390.344z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M415.641,236.524c-1.287-0.643-2.629-1.169-4.01-1.572l-7.96-2.32c0-0.224,0.128-0.408,0.128-0.632V128    c0-13.255-10.745-24-24-24h-8c-4.418,0-8,3.582-8,8s3.582,8,8,8h8c4.418,0,8,3.582,8,8v100l-149.76-43.68    c-1.462-0.432-3.018-0.432-4.48,0L83.799,228V128c0-4.418,3.582-8,8-8h248c4.418,0,8-3.582,8-8s-3.582-8-8-8h-72V72h16    c13.255,0,24-10.745,24-24s-10.745-24-24-24h-24V8c0-4.418-3.582-8-8-8c-4.418,0-8,3.582-8,8v24c0,4.418,3.582,8,8,8h32    c4.418,0,8,3.582,8,8s-3.582,8-8,8h-96c-4.418,0-8-3.582-8-8s3.582-8,8-8h8c4.418,0,8-3.582,8-8s-3.582-8-8-8h-8    c-13.255,0-24,10.745-24,24s10.745,24,24,24h16v32h-112c-13.255,0-24,10.745-24,24v104c0,0.224,0.112,0.416,0.128,0.632    l-7.96,2.32c-12.726,3.708-20.036,17.03-16.328,29.755c0.404,1.385,0.931,2.73,1.576,4.021l55.424,110.848    c1.975,3.954,6.782,5.559,10.736,3.584c3.954-1.975,5.559-6.782,3.584-10.736L59.527,261.6c-1.978-3.951-0.379-8.757,3.571-10.735    c0.433-0.217,0.884-0.394,1.349-0.529l163.352-47.672V224c0,4.418,3.582,8,8,8s8-3.582,8-8v-21.336l64,18.672V272    c0,4.418,3.582,8,8,8s8-3.582,8-8v-46l83.36,24.312c4.241,1.239,6.674,5.682,5.435,9.923c-0.134,0.459-0.309,0.905-0.523,1.333    l-55.432,110.856c-1.975,3.954-0.37,8.761,3.584,10.736c3.954,1.975,8.761,0.37,10.736-3.584l55.424-110.856    C432.308,256.863,427.498,242.448,415.641,236.524z M219.799,72h32v32h-32V72z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M235.799,248c-4.418,0-8,3.582-8,8v120c0,4.418,3.582,8,8,8s8-3.582,8-8V256C243.799,251.582,240.217,248,235.799,248z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M219.799,0c-4.418,0-8,3.582-8,8v24c0,4.418,3.582,8,8,8s8-3.582,8-8V8C227.799,3.582,224.217,0,219.799,0z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M235.799,136c-4.418,0-8,3.582-8,8v16c0,4.418,3.582,8,8,8s8-3.582,8-8v-16C243.799,139.582,240.217,136,235.799,136z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M275.799,136c-4.418,0-8,3.582-8,8v32c0,4.418,3.582,8,8,8s8-3.582,8-8v-32C283.799,139.582,280.217,136,275.799,136z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M315.799,136c-4.418,0-8,3.582-8,8v40c0,4.418,3.582,8,8,8s8-3.582,8-8v-40C323.799,139.582,320.217,136,315.799,136z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M355.799,136c-4.418,0-8,3.582-8,8v48c0,4.418,3.582,8,8,8s8-3.582,8-8v-48C363.799,139.582,360.217,136,355.799,136z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M195.799,136c-4.418,0-8,3.582-8,8v32c0,4.418,3.582,8,8,8s8-3.582,8-8v-32C203.799,139.582,200.217,136,195.799,136z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M155.799,136c-4.418,0-8,3.582-8,8v40c0,4.418,3.582,8,8,8s8-3.582,8-8v-40C163.799,139.582,160.217,136,155.799,136z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M115.799,136c-4.418,0-8,3.582-8,8v48c0,4.418,3.582,8,8,8s8-3.582,8-8v-48C123.799,139.582,120.217,136,115.799,136z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M347.799,312c0-4.418-3.582-8-8-8s-8,3.582-8,8c0.142,5.856-2.926,11.321-8,14.248V304c0-4.418-3.582-8-8-8s-8,3.582-8,8    v22.272c-5.097-2.939-8.169-8.439-8-14.32c-0.013-4.418-3.606-7.989-8.024-7.976c-4.418,0.013-7.989,3.606-7.976,8.024    c-0.348,14.755,9.649,27.752,24,31.2v8.8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8.8C338.15,339.752,348.147,326.755,347.799,312z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M25.259,449.944c-3.1-2.994-8.016-2.994-11.116,0l-8,8c-3.124,3.125-3.123,8.19,0.002,11.314    c1.5,1.499,3.534,2.342,5.654,2.342c2.122,0,4.156-0.844,5.656-2.344l8-8C28.525,458.078,28.437,453.013,25.259,449.944z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M465.651,458.14c-0.064-0.066-0.129-0.132-0.196-0.196l-28-28c-18.584-18.588-48.718-18.591-67.305-0.007    c-0.002,0.002-0.005,0.005-0.007,0.007c-12.505,11.937-32.183,11.937-44.688,0c-18.584-18.588-48.718-18.591-67.305-0.007    c-0.002,0.002-0.005,0.005-0.007,0.007c-12.505,11.937-32.183,11.937-44.688,0c-18.584-18.588-48.718-18.591-67.305-0.007    c-0.002,0.002-0.005,0.004-0.007,0.007c-12.505,11.937-32.183,11.937-44.688,0c-18.584-18.588-48.718-18.591-67.305-0.007    c-0.002,0.002-0.005,0.004-0.007,0.007c-3.178,3.07-3.266,8.134-0.196,11.312c3.07,3.178,8.134,3.266,11.312,0.196    c0.067-0.064,0.132-0.13,0.196-0.196c12.505-11.937,32.183-11.937,44.688,0c18.59,18.581,48.722,18.581,67.312,0    c12.505-11.937,32.183-11.937,44.688,0c18.59,18.582,48.722,18.582,67.312,0c12.505-11.937,32.183-11.937,44.688,0    c18.59,18.582,48.722,18.582,67.312,0c12.505-11.937,32.183-11.937,44.688,0l28,28c3.07,3.178,8.134,3.266,11.312,0.196    C468.633,466.382,468.721,461.318,465.651,458.14z">
                                        </path>
                                    </g>
                                </g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                            </svg>
                        </div>
                        <div>
                            <div class="item-description group-hover:text-white">Innovative</div>
                            <h3
                                class="text-xl font-semibold mb-2 text-[var(--primary-navy-blue)]-800 group-hover:text-white">
                                NVOCC</h3>
                        </div>
                    </div>
                </a>
                <!-- Item 4 -->
                <a data-aos="fade-left" href="/Components/services/ground-transport.html"
                    class="bg-white p-6 shadow-lg rounded-lg transition duration-300 transform hover:scale-105 hover:bg-blue-600 group overflow-x-hidden secCard">
                    <div class="text-center">
                        <div class="item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-12 h-12 fill-current text-gray-800 group-hover:text-white"
                                viewBox="0 0 479.964 479.964">
                                <g>
                                    <g>
                                        <path
                                            d="M472,268.049h-17.056l-13.72-96H448c4.418,0,8-3.582,8-8v-32c0-4.418-3.582-8-8-8h-40.656    c-3.583-23.547-22.542-41.748-46.216-44.368L328,75.992V52.049c0-4.418-3.582-8-8-8h-8v-24c0-2.122-0.844-4.156-2.344-5.656l-8-8    c-3.178-3.07-8.242-2.982-11.312,0.196c-2.994,3.1-2.994,8.016,0,11.116L296,23.361v20.688h-8c-4.418,0-8,3.582-8,8v18.616    l-23.12-2.568c-4.391-0.486-8.345,2.68-8.831,7.071C248.016,75.46,248,75.754,248,76.049v224H40c-4.418,0-8,3.582-8,8v80    c0,4.418,3.582,8,8,8s8-3.582,8-8v-72h208c4.418,0,8-3.582,8-8v-168h16v16c0,13.255,10.745,24,24,24s24-10.745,24-24v-16h112v16    h-88c-4.418,0-8,3.582-8,8v24c0,4.418,3.582,8,8,8s8-3.582,8-8v-16h65.056l13.72,96H360v-48c0-4.418-3.582-8-8-8s-8,3.582-8,8v56    c0,4.418,3.582,8,8,8h72v40c0,4.418,3.582,8,8,8h32v56c0,13.255-10.745,24-24,24h-8.64c-3.992-27.517-27.555-47.947-55.36-48h-56    c-4.418,0-8,3.582-8,8s3.582,8,8,8h56c22.091,0,40,17.909,40,40c0,22.091-17.909,40-40,40c-22.091,0-40-17.909-40-40    c0-4.418-3.582-8-8-8H215.36c-3.992-27.517-27.555-47.947-55.36-48h-48c-4.418,0-8,3.582-8,8s3.582,8,8,8h48    c22.091,0,40,17.909,40,40c0,22.091-17.909,40-40,40s-40-17.909-40-40c0-4.418-3.582-8-8-8H16v-16c0-4.418-3.582-8-8-8    s-8,3.582-8,8v24c0,4.418,3.582,8,8,8h96.568c4.53,30.594,33.004,51.724,63.599,47.193c24.411-3.615,43.579-22.782,47.193-47.193    h105.208c4.53,30.594,33.004,51.724,63.599,47.193c24.411-3.615,43.579-22.782,47.193-47.193H440c22.08-0.026,39.974-17.92,40-40    v-112C480,271.63,476.418,268.049,472,268.049z M280,124.049h-16V84.984l16,1.784V124.049z M312,156.049c0,4.418-3.582,8-8,8    s-8-3.582-8-8v-96h16V156.049z M328,124.049V92.096l31.36,3.488c15.562,1.731,28.295,13.175,31.672,28.464H328z M464,316.049h-24    v-32h24V316.049z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M392,300.049h-8c-4.418,0-8,3.582-8,8s3.582,8,8,8h8c4.418,0,8-3.582,8-8S396.418,300.049,392,300.049z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M288,364.049h-8c-4.418,0-8,3.582-8,8s3.582,8,8,8h8c4.418,0,8-3.582,8-8S292.418,364.049,288,364.049z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M80,364.049h-8c-4.418,0-8,3.582-8,8s3.582,8,8,8h8c4.418,0,8-3.582,8-8S84.418,364.049,80,364.049z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M256,332.049H112c-4.418,0-8,3.582-8,8s3.582,8,8,8h144c4.418,0,8-3.582,8-8S260.418,332.049,256,332.049z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M376,396.049c-13.255,0-24,10.745-24,24s10.745,24,24,24s24-10.745,24-24S389.255,396.049,376,396.049z M376,428.049    c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S380.418,428.049,376,428.049z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M160,396.049c-13.255,0-24,10.745-24,24s10.745,24,24,24s24-10.745,24-24S173.255,396.049,160,396.049z M160,428.049    c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S164.418,428.049,160,428.049z">
                                        </path>
                                    </g>
                                </g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                            </svg>
                        </div>
                        <div>
                            <div class="item-description group-hover:text-white">Flexible</div>
                            <h3
                                class="text-xl font-semibold mb-2 text-[var(--primary-navy-blue)]-800 group-hover:text-white">
                                TRANSIT</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <section class="bg-white py-16  overflow-x-hidden AboutUs-Section" id="sec-3" data-aos="fade-up"
        data-aos-anchor-placement="top-center">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Left Section (Text) -->
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Left Section (Text) -->
                        <div>
                            <div class="mb-4 border-l-4 pl-4" style="border-color: #2563EB;">
                                <h3 class="text-2xl font-semibold uppercase mb-4 tracking-widest"
                                    style="font-family: var(--font-poppins);color: #2563EB;">About Us</h3>
                            </div>
                            <h2 class="text-primary-orange-gold text-3xl lg:text-4xl font-bold mb-6"
                                style="font-family: var(--font-poppins);">
                                Welcome to <span style="color: #2563EB;">Roshan Darya Pars</span>
                            </h2>
                            <p class="text-secondary-grayish-blue mb-4" style="font-family: var(--font-noto-sans);">
                                At Roshan Darya Pars, we are a leading provider of logistics and transportation
                                services, dedicated to ensuring that your cargo is handled with care and efficiency.
                            </p>
                            <p class="text-secondary-grayish-blue mb-4" style="font-family: var(--font-noto-sans);">
                                Specializing in ocean, land, and air transportation, we offer tailored solutions to meet
                                your unique needs, backed by a strong network and advanced technology.
                            </p>
                            <p class="text-secondary-grayish-blue mb-6" style="font-family: var(--font-noto-sans);">
                                Our mission: "Your cargo is safe in our hands." We aim to exceed your expectations with
                                reliable logistics services.
                            </p>
                            <div class="rounded-lg m-2 p-1 flex flex-row justify-between relative lastAbout">
                                <a href="/Components/AboutUs.html"
                                    class="explore inline-block mt-4 px-6 py-3  font-semibold rounded-lg hover:bg-secondary-sky-blue transition duration-300 bg-blue-500 hover:bg-blue-900 hover:text-white text-blue-200">More</a>
                            </div>
                        </div>
                        <!-- Right Section (Video and Images) -->
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Video -->
                            <div class="relative">
                                <!-- ویدیو جایگزین تصویر -->
                                <!-- <video class="rounded-lg shadow-lg object-contain w-full h-72 lg:h-80" autoplay muted loop> -->
                                <video class="rounded-lg shadow-lg w-full object-cover" style="aspect-ratio: 16 / 9;"
                                    autoplay muted loop>
                                    <source src="/Images/Video/AboutUs/Main/intro.webm" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                            </div>

                            <!-- Two Small Images -->
                            <div class="grid grid-cols-2 gap-4">
                                <img class="rounded-lg shadow-lg w-full object-cover"
                                    src="/Images/Image/AboutUs/Main/3.webp" alt="Image 1" data-aos="zoom-out">
                                <img class="rounded-lg shadow-lg w-full object-cover"
                                    src="/Images/Image/AboutUs/Main/98.webp" data-aos="zoom-out" alt="Image 2">
                            </div>

                        </div>
                    </div>
                </div>
    </section>
    <br />
    <br />
    <section class="flex flex-col md:flex-row container mx-auto max-w-screen-lg mt-10 p-4 service-section"
        loading="lazy" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
        </div>
        <!-- Sidebar - کشویی سمت چپ -->
        <div class="w-full md:w-1/4 bg-gray-200 p-4 flex flex-col h-full">
            <ul class="flex-grow space-y-4 h-full">
                <!-- Service 1 -->
                <li class="service-tab cursor-pointer h-full group" data-content="service1">
                    <div
                        class="flex items-center justify-center bg-white text-black py-3 px-4 h-full group-hover:bg-white transition-colors duration-300">
                        <div class="flex items-center">
                            <img src="\Images\Icon\logo.webp" alt="roshanDarya"
                                class="h-16 fill-current text-white group-hover:text-blue-500 transition-colors duration-300">
                        </div>
                    </div>
                </li>
                <!-- Service 2 -->

                <li class="service-tab cursor-pointer h-full group" data-content="service1">
                    <div
                        class="flex items-center justify-center bg-blue-500 text-white py-3 px-4 h-full group-hover:bg-white transition-colors duration-300">
                        <div class="flex items-center w-full flex justify-around">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 496 496"
                                style="enable-background:new 0 0 496 496;" xml:space="preserve"
                                class="w-12 h-12 fill-current text-white group-hover:text-blue-500 ">
                                <g>
                                    <g>
                                        <path
                                            d="M384.12,433.872c-6.088-20.272-22.8-35.216-43.624-39.008L288,385.328v-4.152c9.304-5.4,17.4-12.624,23.848-21.176H328 c13.232,0,24-10.768,24-24V216.984c0-22.328-14.624-41.8-35.832-48.136l-4-4C293.56,146.248,268.832,136,242.504,136 C188.184,136,144,180.192,144,234.504V296c0,15.424,10.968,28.328,25.512,31.336c4.488,22.992,18.856,42.448,38.488,53.84v4.152 l-52.496,9.544c-20.832,3.792-37.536,18.736-43.624,39.008L93.248,496h309.504L384.12,433.872z M336,336c0,4.408-3.584,8-8,8 h-6.728c2.32-5.288,4.08-10.864,5.216-16.664c3.424-0.712,6.576-2.072,9.512-3.784V336z M328,309.776v-27.552 c4.76,2.776,8,7.88,8,13.776S332.76,307,328,309.776z M168,309.768c-4.76-2.768-8-7.872-8-13.768s3.24-11,8-13.776V309.768z M168,256v9.136c-2.848,0.744-5.52,1.864-8,3.312v-33.944C160,189.008,197.016,152,242.504,152 c22.048,0,42.768,8.584,58.344,24.168l7.056,7.056l2.16,0.536C325.336,187.584,336,201.24,336,216.984v51.464 c-2.48-1.448-5.152-2.576-8-3.312V256h-25.376c-21.68,0-42.392-10.352-55.4-27.688l-6.352-8.496l-15.904,15.904 C211.888,248.8,194.496,256,176,256H168z M184,312v-40.368c19.752-1.832,38.088-10.4,52.28-24.608l3.112-3.112 c16.056,17.704,39.16,28.08,63.232,28.08H312v40c0,11.664-3.184,22.576-8.656,32H248v16h42.192c-11.28,9.928-26.024,16-42.192,16 C212.712,376,184,347.288,184,312z M224.68,388.512C232.064,390.768,239.888,392,248,392s15.936-1.232,23.32-3.488L248,406 L224.68,388.512z M235.824,416.864l-16.32,16.328l-10.6-31.768l5.096-0.928L235.824,416.864z M282,400.496l5.096,0.928 l-10.6,31.768l-16.32-16.328L282,400.496z M114.752,480l12.464-41.528c4.344-14.48,16.28-25.16,31.16-27.864l34.64-6.296 l19.496,58.496L248,427.312l35.504,35.496L303,404.312l34.64,6.296c14.872,2.704,26.816,13.384,31.16,27.856L381.248,480H114.752z " />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M168,0H24C10.768,0,0,10.768,0,24v96c0,13.232,10.768,24,24,24h37.336l77.312,57.992L130.368,144H168 c13.232,0,24-10.768,24-24V24C192,10.768,181.232,0,168,0z M176,120c0,4.408-3.584,8-8,8h-56.088l5.44,38.008L66.664,128H24 c-4.416,0-8-3.592-8-8V24c0-4.408,3.584-8,8-8h144c4.416,0,8,3.592,8,8V120z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="32" y="32" width="128" height="16" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="32" y="96" width="96" height="16" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M472,125.624c15.296-13.68,24-33.008,24-53.624c0-39.696-32.296-72-72-72c-39.704,0-72,32.304-72,72 c0,20.616,8.704,39.944,24,53.624V136h-16v16h16v32h96v-32h16v-16h-16V125.624z M456,168h-64v-16h64V168z M416,72 c0-4.408,3.584-8,8-8c4.416,0,8,3.592,8,8s-3.584,8-8,8C419.584,80,416,76.408,416,72z M458.992,115.68l-2.992,2.4V136h-24V94.528 c9.288-3.312,16-12.112,16-22.528c0-13.232-10.768-24-24-24s-24,10.768-24,24c0,10.416,6.712,19.216,16,22.528V136h-24v-17.92 l-2.992-2.4C375.656,104.968,368,89.04,368,72c0-30.88,25.128-56,56-56s56,25.12,56,56C480,89.04,472.344,104.968,458.992,115.68z " />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="32" y="64" width="128" height="16" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="144" y="96" width="16" height="16" />
                                    </g>
                                </g>
                            </svg>
                            <span
                                class="ml-4 text-white group-hover:text-blue-500 transition-colors duration-300 text-center">Tailored
                                Logistics Solutions</span>
                        </div>
                    </div>
                </li>

                <!-- Service 3 -->
                <li class="service-tab cursor-pointer h-full group" data-content="service2">
                    <div
                        class="flex items-center justify-center bg-blue-500 text-white py-3 px-4 h-full group-hover:bg-white transition-colors duration-300">
                        <div class="flex items-center w-full flex justify-around">
                            <svg version="1.1" id="Layer_1"
                                class="w-12 h-12 fill-current text-white group-hover:text-blue-500 "
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 108.97 122.88" style="enable-background:new 0 0 108.97 122.88"
                                xml:space="preserve">
                                <g>
                                    <path
                                        d="M91.36,103.58l11.21,12.23l-7.74,7.07l-10.81-11.9c-4.11,2.73-9.06,4.34-14.37,4.34c-7.16,0-13.64-2.9-18.32-7.58 c-4.7-4.7-7.58-11.18-7.58-18.32c0-7.16,2.9-13.64,7.58-18.32c4.7-4.7,11.18-7.58,18.32-7.58c7.16,0,13.64,2.9,18.32,7.58 c4.7,4.7,7.58,11.18,7.58,18.32c0,5.23-1.55,10.11-4.22,14.2L91.36,103.58L91.36,103.58z M105.23,8.54c0.6-0.12,1.22,0,1.73,0.31 c0.88,0.36,1.5,1.22,1.5,2.23l0.51,70.57c0.04,0.87-0.38,1.73-1.18,2.2l-3.05,1.82c-0.09-0.88-1.26-4.9-0.63-5.28l-0.47-65.32 l-23.7,14.94v0v25.3c-1.58-0.5-3.56-0.89-5.22-1.17V30.71l-31.54-4.07l-1.05,30.49l-11.2-7.63l-11.2,6.33l2.31-31.88L5.34,22.46 v66.13l28.03,3.04c0.11,1.65,0.33,3.51,0.65,5.09L2.31,93.2C1.02,93.13,0,92.07,0,90.76V18.99h0c-0.03-0.96,0.52-1.89,1.45-2.3 L38.98,0.2l0,0c0.39-0.17,0.84-0.24,1.29-0.19L105.23,8.54L105.23,8.54L105.23,8.54z M70.02,8.82L46.97,21.7l30.6,3.91l20.98-13.05 L70.02,8.82L70.02,8.82L70.02,8.82z M25.03,19.43L47.84,5.91l-7.52-0.99L11.3,17.68L25.03,19.43L25.03,19.43z M84.71,74.36 c-3.85-3.85-9.16-6.23-15.03-6.23c-5.88,0-11.19,2.38-15.03,6.23c-3.85,3.85-6.23,9.16-6.23,15.03c0,5.88,2.38,11.19,6.23,15.03 c3.85,3.85,9.16,6.23,15.03,6.23c5.88,0,11.19-2.38,15.03-6.23c3.85-3.85,6.23-9.16,6.23-15.03C90.94,83.51,88.55,78.2,84.71,74.36 L84.71,74.36z" />
                                </g>
                            </svg>
                            <span
                                class="ml-4 text-white group-hover:text-blue-500 transition-colors duration-300 text-center">Real-time
                                Cargo Tracking</span>
                        </div>
                    </div>
                </li>

                <!-- Service 4 -->
                <li class="service-tab cursor-pointer h-full group" data-content="service3">
                    <div
                        class="flex items-center justify-center bg-blue-500 text-white py-3 px-4 h-full group-hover:bg-white transition-colors duration-300">
                        <div class="flex items-center w-full flex justify-around">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                class="w-12 h-12 fill-current text-white group-hover:text-blue-500 "
                                viewBox="0 0 122.88 118.21">
                                <title>24 hours phone support</title>
                                <path
                                    d="M45.34,6.14a4,4,0,0,0,3.23,7.24,67.7,67.7,0,0,1,7.19-3.1c4.54-1.51,3-8.5-2-7.67a44.76,44.76,0,0,0-8.4,3.53Zm7.34,52.75V52.68L62,43.16a18.79,18.79,0,0,0,1.49-1.65,7.68,7.68,0,0,0,1-1.49,3.46,3.46,0,0,0,.34-1.5,2.67,2.67,0,0,0-.32-1.39,1.79,1.79,0,0,0-1-.78,5.09,5.09,0,0,0-1.71-.24H53.16V29.9c1.32-.3,2.79-.57,4.42-.83a37.53,37.53,0,0,1,5.66-.38,13.09,13.09,0,0,1,5.58,1,5.76,5.76,0,0,1,2.91,2.86,11.06,11.06,0,0,1,.86,4.63,11.53,11.53,0,0,1-.52,3.59,11.3,11.3,0,0,1-1.51,3,21.45,21.45,0,0,1-2.4,2.82L63,51.87H73.4v7Zm36,0V53.36H76.24l-1.37-3.43,8.67-21h8L84.19,46.75H88.7V42.31l1.49-3.87h6.33v8.31h2.42v5.4l-2.42,1.21v5.53ZM29.91,54.57A90.17,90.17,0,0,0,43.23,73.24,76,76,0,0,0,64.35,88.82a2.13,2.13,0,0,0,1.82.09,7.76,7.76,0,0,0,2.54-1.85A28.38,28.38,0,0,0,71,84.22c3.39-4.46,7.59-10,13.52-7.23l.36.19,19.77,11.37.2.13a8.94,8.94,0,0,1,3.71,7.7,20.84,20.84,0,0,1-2.89,9.8,20.15,20.15,0,0,1-9.52,8.41,43.45,43.45,0,0,1-11.73,3.19,39.68,39.68,0,0,1-17.92-1.5,79.12,79.12,0,0,1-18-8.7l-.45-.29c-2.94-1.82-6.1-3.78-9.19-6.09-11.38-8.57-22.94-21-30.47-34.57C2.08,55.19-1.37,42.84.52,31.08c1-6.45,3.81-12.32,8.63-16.2,4.2-3.39,9.87-5.24,17.21-4.59a2.46,2.46,0,0,1,2,1.27L41,33a6.7,6.7,0,0,1,1.07,7.17,14.09,14.09,0,0,1-4.85,5.44c-.69.59-1.5,1.17-2.35,1.79-2.83,2.05-6.06,4.43-4.95,7.24l0-.07Zm78.77,21.65A4,4,0,0,0,115,80.94a4.54,4.54,0,0,0,.52-.7,45.31,45.31,0,0,0,3.56-7.95,4,4,0,0,0-7.1-3.46,4.31,4.31,0,0,0-.4.84,38.33,38.33,0,0,1-2.91,6.55Zm6.15-21.07a4,4,0,0,0,7.77,1.49,4.24,4.24,0,0,0,.15-.79,50.62,50.62,0,0,0-.12-8.7,4,4,0,0,0-7.81-.58,4.42,4.42,0,0,0-.1,1.41,40.94,40.94,0,0,1,.11,7.17Zm-3.92-21.22a4,4,0,0,0,7.24-3.28,51.17,51.17,0,0,0-4.21-7.51,4,4,0,1,0-6.58,4.46,43.63,43.63,0,0,1,3.55,6.33ZM97.36,17.07c4.17,3.05,9-3,4.78-6.35a53.9,53.9,0,0,0-7.27-4.59C90.79,4,86.82,9.57,90.49,12.71a4.16,4.16,0,0,0,.71.47,45.31,45.31,0,0,1,6.16,3.89Zm-20-8.52A4,4,0,0,0,79.7,1a4.08,4.08,0,0,0-1-.31A57,57,0,0,0,70.11,0a4,4,0,1,0,0,8,49.17,49.17,0,0,1,7.27.6Z" />
                            </svg>
                            <span
                                class="ml-4 text-white group-hover:text-blue-500 transition-colors duration-300 text-center">Customer
                                Support</span>
                        </div>
                    </div>
                </li>

                <!-- Service 5 -->
                <li class="service-tab cursor-pointer h-full group" data-content="service4">
                    <div
                        class="flex items-center justify-around bg-blue-500 text-white py-3 px-4 h-full group-hover:bg-white transition-colors duration-300">
                        <div class="flex items-center w-full flex justify-around ">
                            <svg version="1.1" id="Layer_1"
                                class="w-12 h-12 fill-current text-white group-hover:text-blue-500 "
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 122.88 112.71" style="enable-background:new 0 0 122.88 112.71"
                                xml:space="preserve">
                                <g>
                                    <path
                                        d="M66.41,96.48h21.91c1.76-1.75,3.69-3.57,5.65-5.42c4.11-3.89,8.4-7.95,12.81-13.03c5.04-5.81,5.58-7.82,7.11-13.51 c0.29-1.07,0.61-2.27,1.03-3.76l2.62-9.21l0.03-0.1c1.4-4.1,1.51-6.81,0.93-8.37c-0.18-0.48-0.41-0.8-0.68-0.97 c-0.21-0.14-0.49-0.19-0.78-0.16c-0.68,0.07-1.45,0.5-2.15,1.27l-7.78,18.53c-0.07,0.17-0.17,0.33-0.28,0.47 c-0.46,0.83-1.08,1.64-1.88,2.41l-13.8,15.39c-0.75,0.84-2.04,0.91-2.87,0.16c-0.84-0.75-0.91-2.04-0.16-2.87l13.81-15.39 c0.06-0.07,0.12-0.14,0.19-0.2c1.43-1.36,1.88-2.83,1.63-3.9c-0.08-0.33-0.22-0.61-0.42-0.8c-0.19-0.17-0.44-0.29-0.75-0.32v0 c-1.23-0.13-3.05,0.78-5.25,3.39l0,0c-0.06,0.07-0.13,0.14-0.2,0.21l-5.35,4.72l-0.03,0.03c-5.79,5.48-8.28,6.78-12.82,9.15 c-0.95,0.5-1.99,1.04-3.28,1.74c-0.51,0.28-1.01,0.62-1.5,0.99c-0.52,0.4-1.02,0.81-1.49,1.21c-2.4,2.02-3.66,3.66-4.38,5.47 c-0.75,1.88-1.02,4.17-1.39,7.31c-0.15,1.27-0.26,2.52-0.35,3.77C66.47,95.3,66.44,95.9,66.41,96.48L66.41,96.48z M89.86,30.67 c-0.04,0.57-0.06,1.05-0.06,1.27c0,0.53-0.37,0.97-0.86,1.09l-1.45,0.44c-0.11,0.04-0.22,0.06-0.33,0.06h-0.24 c-0.51,0-0.96-0.35-1.07-0.83l-1.27-3.88v-0.02l-0.24-0.74l-2.15,3.88c-0.09,0.17-0.22,0.29-0.37,0.4l-1.12,0.72 c-0.52,0.33-1.2,0.17-1.53-0.35c-0.07-0.13-0.13-0.28-0.17-0.42l-1.1-6.14l-1.65-1.18l-3.88-0.7c0.13,0.2,0.28,0.42,0.4,0.62 c0.7,1.07,1.34,2.06,1.56,3.09c0.35,1.65-0.28,3.03-3.02,4.03c0.07,0.05,0.17,0.09,0.24,0.16c1.07,0.83,1.32,2.02-1.01,5.09 c-0.59,0.77-1.1,1.45-1.53,2.04c-0.33,0.46-0.64,0.92-0.94,1.34l0.53,3.82c0.07,0.51-0.06,1.01-0.39,1.51 c-0.24,0.37-0.61,0.7-1.1,1.01c-0.33,0.2-0.61,0.42-0.83,0.64c-0.09,0.09-0.16,0.17-0.24,0.26l0.24,1.08 c0.11,0.53-0.16,1.05-0.64,1.25l-0.4,0.18c-0.07,0.31-0.2,0.63-0.35,0.92c-0.24,0.48-0.57,0.96-0.99,1.42 c-0.46,0.5-0.96,0.86-1.49,1.12c-0.57,0.26-1.16,0.4-1.78,0.4h-1.95c-0.61,0-1.1-0.5-1.1-1.1c0-0.5-0.05-1.03-0.18-1.6 c-0.13-0.59-0.31-1.21-0.57-1.88c-0.29-0.75-0.52-1.43-0.66-2.04c-0.17-0.64-0.24-1.21-0.24-1.69c0-0.42,0.04-0.81,0.11-1.14 c0.09-0.4,0.22-0.74,0.42-1.03c0.02-0.04,0.04-0.11,0.07-0.26c0.04-0.22,0.05-0.51,0.05-0.88c0-0.29-0.05-0.59-0.15-0.9 c-0.11-0.35-0.28-0.72-0.5-1.12c-0.28-0.5-0.5-0.88-0.63-1.2c-0.2-0.42-0.31-0.77-0.31-1.03c0-1.8-0.63-2.21-1.49-2.21 c-0.52,0-1.1,0.07-1.71,0.17c-0.75,0.11-1.54,0.2-2.32,0.2c-0.59,0-1.16-0.26-1.71-0.79c-0.4-0.39-0.85-0.96-1.29-1.69 c-0.4-0.66-0.7-1.2-0.92-1.6c-0.28-0.55-0.42-0.97-0.42-1.27v-0.85c-0.04-3.07-0.06-5.98,2.91-8.13c1.23-1.75,2.34-2.89,3.66-3.6 c1.38-0.75,2.92-1.01,5.02-1.01c0.61,0,1.1,0.5,1.1,1.1v1.56l1.32,0.59l0.02-0.09c0.13-0.59,0.72-0.97,1.31-0.85 c0.4,0.09,0.79,0.2,1.12,0.31c0.37,0.13,0.68,0.28,0.94,0.46c0.15,0.09,0.39,0.17,0.7,0.22c0.33,0.06,0.7,0.07,1.01,0.02 c0.17-0.04,0.28-0.07,0.31-0.11v-0.04c0.04-0.17,0.05-0.33,0.07-0.5l-1.32,0.11c-0.48,0.04-0.9-0.22-1.08-0.63 c-0.44-0.92-1.34-1.38-2.5-1.97c-1.23-0.63-2.68-1.38-4.27-2.87c-5.3,1.88-6.99,2.13-7.41,0.96c-0.26-0.7,0.11-1.25,0.59-1.99 c0.44-0.68,1.05-1.64,1.05-2.54c0-0.48,0.31-0.88,0.74-1.05l4.45-2.04c-0.48-0.09-1.07-0.18-1.56-2.59 c-0.09-0.5,0.15-0.97,0.57-1.2c0.35-0.18,0.75-0.44,1.23-0.75c0.48-0.31,1.05-0.74,1.71-1.23l0.04-0.04 c-2.26,0.35-4.45,0.97-6.53,1.88c-1.75,0.75-3.37,1.64-4.87,2.63c-1.51,1.01-2.91,2.15-4.19,3.44c-1.29,1.29-2.43,2.68-3.44,4.19 c-1.01,1.51-1.89,3.13-2.63,4.87c0,0.02-0.02,0.04-0.02,0.06c-0.72,1.71-1.27,3.47-1.64,5.3C33.19,26.7,33,28.61,33,30.58 c0,1.97,0.18,3.88,0.55,5.72c0.02,0.09,0.04,0.2,0.06,0.29l5.13,2.45c0.39,0.18,0.61,0.55,0.63,0.96c0.06,1.47-0.33,2.56-0.74,3.66 c-0.29,0.83-0.61,1.67-0.64,2.67c0,0.11-0.02,0.2-0.06,0.29c0.99,1.47,2.11,2.83,3.38,4.08c1.29,1.29,2.68,2.43,4.19,3.44 c1.51,1.01,3.13,1.89,4.87,2.63c0.02,0,0.04,0.02,0.06,0.02c1.71,0.72,3.48,1.27,5.3,1.64c1.84,0.37,3.75,0.55,5.72,0.55 s3.88-0.18,5.72-0.55c1.86-0.37,3.64-0.92,5.35-1.65c1.75-0.75,3.37-1.64,4.87-2.63c1.51-1.01,2.9-2.15,4.19-3.44 c1.29-1.29,2.43-2.68,3.44-4.19c1.01-1.51,1.89-3.13,2.63-4.87c0-0.02,0.02-0.04,0.02-0.05c0.72-1.71,1.27-3.48,1.64-5.3 c0.37-1.84,0.55-3.73,0.55-5.7V30.67L89.86,30.67z M49.48,2.39C53.21,0.79,57.2,0,61.43,0c2.11,0,4.16,0.2,6.16,0.61 c1.97,0.39,3.88,0.99,5.74,1.77c0.02,0,0.04,0.02,0.06,0.02c1.86,0.79,3.59,1.75,5.22,2.83c1.64,1.08,3.14,2.34,4.52,3.71 c1.38,1.38,2.63,2.89,3.71,4.52c1.1,1.64,2.04,3.38,2.83,5.22c0.81,1.88,1.4,3.81,1.8,5.79c0.4,1.99,0.61,4.05,0.61,6.16 c0,2.11-0.2,4.16-0.61,6.16c-0.39,1.97-0.99,3.88-1.77,5.74c0,0.02-0.02,0.04-0.02,0.06c-0.79,1.86-1.75,3.59-2.83,5.22 c-1.08,1.64-2.34,3.14-3.71,4.52c-1.38,1.38-2.89,2.63-4.52,3.71c-1.64,1.1-3.38,2.04-5.22,2.83c-1.88,0.81-3.81,1.4-5.79,1.8 c-1.99,0.4-4.05,0.61-6.16,0.61c-2.11,0-4.16-0.2-6.16-0.61c-1.97-0.39-3.88-0.99-5.74-1.77c-0.02,0-0.04-0.02-0.06-0.02 c-1.86-0.79-3.59-1.75-5.22-2.83c-1.64-1.08-3.14-2.34-4.52-3.71c-1.38-1.38-2.63-2.89-3.71-4.52c-1.1-1.64-2.04-3.38-2.83-5.22 c-0.81-1.88-1.4-3.81-1.8-5.79c-0.4-1.99-0.61-4.05-0.61-6.16c0-2.11,0.2-4.16,0.61-6.16c0.39-1.97,0.99-3.88,1.77-5.74 c0-0.02,0.02-0.04,0.02-0.06c0.79-1.86,1.75-3.59,2.83-5.22c1.08-1.64,2.34-3.14,3.71-4.52c1.38-1.38,2.89-2.63,4.52-3.71 c1.64-1.1,3.38-2.04,5.22-2.83V2.39L49.48,2.39z M35.6,41.74c0.24,0.55,0.5,1.1,0.79,1.65c0.06-0.15,0.09-0.28,0.15-0.42 c0.26-0.72,0.52-1.42,0.59-2.19l-2.32-1.1C35.04,40.38,35.3,41.06,35.6,41.74L35.6,41.74z M74.04,5.35 c-1.03-0.52-2.1-0.97-3.2-1.36c-4.12,0.96-5.3,0.39-6.62-0.26c-0.66-0.31-1.38-0.66-2.96-0.66h-0.94c-0.09,0-0.29,0.07-0.61,0.24 c-0.4,0.22-0.92,0.55-1.53,1.03c-0.66,0.5-1.25,0.94-1.8,1.31c-0.31,0.22-0.61,0.4-0.88,0.57c0.53,0.13,0.94,0.46,1.21,2.92 c0.06,0.46-0.2,0.92-0.64,1.12l-4.19,1.91c-0.2,1.21-0.86,2.24-1.36,3c-0.02,0.02-0.02,0.04-0.04,0.04c0.53-0.31,1.8-1.4,4.85-2.48 c0.4-0.18,0.92-0.09,1.23,0.26c1.49,1.56,2.96,2.3,4.17,2.92c1.29,0.66,2.34,1.2,3.11,2.32l1.78-0.17c0.07-0.02,0.13-0.02,0.2-0.02 c0.61,0,1.1,0.5,1.1,1.1c0,0.35-0.02,0.7-0.05,1.07c-0.04,0.33-0.07,0.68-0.13,1.03v0.04c-0.05,0.29-0.17,0.57-0.31,0.81 c-0.39,0.61-1.03,0.96-1.75,1.1c-0.59,0.11-1.23,0.09-1.82,0c-0.57-0.09-1.12-0.29-1.51-0.55c-0.07-0.06-0.17-0.11-0.28-0.15 l-0.06,0.24c-0.02,0.07-0.04,0.15-0.07,0.22c-0.24,0.55-0.9,0.81-1.45,0.57l-3.16-1.38c-0.44-0.15-0.74-0.57-0.74-1.05v-1.16 c-1.16,0.07-2.08,0.29-2.87,0.72c-1.03,0.55-1.93,1.51-2.98,3.03c-0.07,0.13-0.18,0.24-0.31,0.33c-2.17,1.49-2.13,3.88-2.11,6.4 c0,0.52,0.02,0.72,0.02,0.86c0,0.06,0.06,0.04,0.18,0.26c0.18,0.37,0.46,0.85,0.83,1.47c0.33,0.55,0.64,0.96,0.92,1.21 c0.13,0.13,0.2,0.18,0.2,0.18c0.66,0,1.36-0.09,2.02-0.18c0.7-0.09,1.38-0.18,2-0.18c2.15,0,3.7,0.79,3.7,4.41 c0,0.07,0.04-0.04,0.09,0.09c0.13,0.26,0.31,0.61,0.55,1.05c0.29,0.53,0.53,1.05,0.7,1.56c0.17,0.53,0.26,1.05,0.26,1.54 c0,0.48-0.04,0.92-0.11,1.29c-0.07,0.46-0.22,0.81-0.42,1.1c-0.04,0.04-0.06,0.13-0.07,0.24c-0.04,0.18-0.06,0.4-0.06,0.68 c0,0.31,0.06,0.7,0.17,1.16c0.13,0.5,0.31,1.08,0.57,1.78c0.29,0.75,0.51,1.49,0.66,2.21c0.07,0.33,0.13,0.64,0.17,0.94h0.92 c0.31,0,0.61-0.05,0.86-0.18c0.28-0.13,0.55-0.33,0.81-0.61c0.28-0.29,0.5-0.61,0.64-0.92c0.13-0.28,0.22-0.53,0.24-0.79 c0.02-0.4,0.28-0.77,0.66-0.94l0.11-0.06l-0.15-0.7c-0.05-0.28-0.02-0.57,0.15-0.83c0.22-0.35,0.52-0.7,0.85-1.01 c0.33-0.31,0.7-0.61,1.12-0.88c0.24-0.17,0.4-0.29,0.5-0.42l-0.57-4.14c-0.06-0.28,0-0.57,0.17-0.83c0.31-0.5,0.74-1.08,1.21-1.77 c0.48-0.66,0.99-1.36,1.56-2.1c1.23-1.6,1.45-1.97,1.42-1.99c-0.07-0.05-0.26-0.13-0.46-0.22c-0.75-0.31-1.58-0.64-1.99-1.77 l-0.06-0.17c-0.13-0.59,0.26-1.18,0.86-1.31c3-0.63,3.75-1.29,3.59-2.04c-0.13-0.63-0.66-1.45-1.25-2.34 c-0.57-0.88-1.18-1.82-1.58-2.83c-0.09-0.2-0.13-0.44-0.09-0.66c0.11-0.61,0.68-1.01,1.29-0.9l6.34,1.14 c0.15,0.02,0.31,0.09,0.44,0.18l2.15,1.53c0.28,0.17,0.48,0.44,0.53,0.77l0.81,4.54l2.81-5.04c0.13-0.28,0.37-0.5,0.68-0.59 c0.59-0.18,1.21,0.15,1.4,0.72l1.01,3.18L87.65,31c0.04-0.61,0.09-1.4,0.2-2.19c0.11-0.81,0.26-1.62,0.44-2.22 c0.15-0.46,0.33-0.85,0.57-1.12c-0.17-1.05-0.39-2.1-0.68-3.11c-0.35-1.23-0.79-2.43-1.31-3.59c-0.53-1.18-1.12-2.3-1.8-3.37 c-0.68-1.08-1.4-2.1-2.19-3.05c-0.81-0.96-1.67-1.86-2.59-2.7c-0.92-0.83-1.91-1.6-2.96-2.34c-1.05-0.72-2.13-1.36-3.27-1.93 L74.04,5.35L74.04,5.35z M66.4,44.77v-0.04c0,0.02,0.02,0.07,0.02,0.06L66.4,44.77L66.4,44.77z M50.16,15.21 c0.04,0.11,0.13,0.11,0.31,0H50.16L50.16,15.21z M50.16,15.21L50.16,15.21L50.16,15.21L50.16,15.21z M56.47,96.48H34.55 c-1.76-1.75-3.69-3.57-5.65-5.42c-4.11-3.89-8.4-7.95-12.81-13.03c-5.04-5.81-5.58-7.82-7.11-13.51c-0.29-1.07-0.61-2.27-1.03-3.76 l-2.62-9.21l-0.03-0.1c-1.4-4.1-1.51-6.81-0.93-8.37c0.18-0.48,0.41-0.8,0.68-0.97c0.21-0.14,0.49-0.19,0.78-0.16 c0.68,0.07,1.45,0.5,2.15,1.27l7.78,18.53c0.07,0.17,0.17,0.33,0.28,0.47c0.46,0.83,1.08,1.64,1.88,2.41l13.8,15.39 c0.75,0.84,2.04,0.91,2.87,0.16c0.84-0.75,0.91-2.04,0.16-2.87L20.96,61.91c-0.06-0.07-0.12-0.14-0.19-0.2 c-1.43-1.36-1.88-2.83-1.63-3.9c0.08-0.33,0.22-0.61,0.42-0.8c0.19-0.17,0.44-0.29,0.75-0.32v0c1.23-0.13,3.05,0.78,5.25,3.39l0,0 c0.06,0.07,0.13,0.14,0.21,0.21l5.35,4.72l0.03,0.03c5.79,5.48,8.28,6.78,12.82,9.15c0.95,0.5,1.99,1.04,3.28,1.74 c0.51,0.28,1.01,0.62,1.5,0.99c0.52,0.4,1.02,0.81,1.49,1.21c2.4,2.02,3.66,3.66,4.38,5.47c0.75,1.88,1.02,4.17,1.39,7.31 c0.15,1.27,0.26,2.52,0.35,3.77C56.41,95.3,56.44,95.9,56.47,96.48L56.47,96.48z M29.45,97.18c-0.31,0.36-0.5,0.83-0.5,1.34v12.14 c0,1.13,0.92,2.04,2.04,2.04h27.58c1.13,0,2.04-0.92,2.04-2.04V98.41c0-1.3-0.08-2.7-0.17-4c-0.09-1.33-0.21-2.65-0.36-3.96 c-0.4-3.43-0.7-5.94-1.66-8.35c-0.99-2.47-2.58-4.6-5.53-7.09c-0.54-0.46-1.09-0.92-1.67-1.35c-0.61-0.46-1.27-0.9-2.01-1.31 c-1.2-0.65-2.32-1.24-3.34-1.78c-4.2-2.2-6.5-3.4-11.91-8.52c-0.04-0.04-0.09-0.08-0.13-0.11l-5.22-4.61 c-3.19-3.73-6.31-4.97-8.71-4.71l-0.01,0v0c-1.17,0.12-2.17,0.58-2.97,1.28l-5.27-12.56l-0.01,0c-0.08-0.18-0.18-0.35-0.31-0.51 c-1.46-1.75-3.31-2.77-5.08-2.95c-1.21-0.12-2.38,0.14-3.4,0.8c-0.97,0.63-1.77,1.61-2.27,2.96c-0.88,2.35-0.86,6,0.86,11.05 l2.6,9.15c0.38,1.32,0.71,2.59,1.02,3.71c1.7,6.35,2.3,8.6,7.97,15.12c4.49,5.17,8.88,9.33,13.1,13.31 C27.23,95.07,28.33,96.11,29.45,97.18L29.45,97.18z M33.35,100.57c0.27,0.06,0.55,0.06,0.83,0h22.34v8.06H33.03v-8.06H33.35 L33.35,100.57z M93.43,97.18c0.31,0.36,0.5,0.83,0.5,1.34v12.14c0,1.13-0.92,2.04-2.04,2.04H64.32c-1.13,0-2.04-0.92-2.04-2.04 V98.41c0-0.07,0-0.15,0.01-0.22c0.03-1.31,0.08-2.58,0.16-3.78c0.09-1.33,0.21-2.65,0.36-3.96c0.4-3.43,0.7-5.94,1.66-8.35 c0.99-2.47,2.58-4.6,5.53-7.09c0.54-0.46,1.09-0.92,1.67-1.35c0.61-0.46,1.27-0.9,2.01-1.31c1.2-0.65,2.32-1.24,3.34-1.78 c4.2-2.2,6.5-3.4,11.91-8.52c0.04-0.04,0.09-0.08,0.13-0.11l5.22-4.61c3.19-3.73,6.31-4.97,8.7-4.71l0.01,0v0 c1.17,0.12,2.17,0.58,2.97,1.28l5.27-12.56l0.01,0c0.08-0.18,0.18-0.35,0.31-0.51c1.46-1.75,3.31-2.77,5.08-2.95 c1.21-0.12,2.38,0.14,3.4,0.8c0.97,0.63,1.77,1.61,2.27,2.96c0.88,2.35,0.86,6-0.86,11.05l-2.6,9.15 c-0.38,1.32-0.71,2.59-1.02,3.71c-1.7,6.35-2.3,8.6-7.97,15.12c-4.49,5.17-8.88,9.33-13.1,13.31 C95.65,95.07,94.55,96.11,93.43,97.18L93.43,97.18z M89.53,100.57c-0.27,0.06-0.55,0.06-0.83,0H66.36v8.06h23.49v-8.06H89.53 L89.53,100.57z" />
                                </g>
                            </svg> <span
                                class="ml-4 text-white group-hover:text-blue-500 transition-colors duration-300 text-center">Eco
                                logistics</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Content - محتوای سمت راست -->
        <div class="w-full md:w-3/4 bg-white p-6 h-full">
            <!-- محتوای پیش‌فرض -->
            <div id="default-content" class="service-content flex flex-col gap-5">
                <div class="relative">
                    <!-- <video class="rounded-lg shadow-lg object-cover w-full h-72 lg:h-80" autoplay muted loop> -->
                    <!-- ویدیو جایگزین تصویر -->

                    <video class="rounded-lg shadow-lg w-full object-cover" style="aspect-ratio: 16 / 9;" autoplay muted
                        loop>
                        <source src="/Images/Video/190.webm" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <!-- <div class="absolute inset-0 flex justify-center items-center">
                        <a href="#"
                            class="absolute inset-0 flex items-center justify-center text-primary-light-gray hover:text-primary-light-blue">
                            <i class="fas fa-play-circle text-6xl">aaaa</i>
                        </a>
                    </div> -->
                </div>
                <h2 class="text-2xl font-bold mb-1 items-center text-center ">Why Choose Us</h2>
                <p class="mx-10 mb-5 justify">
                    At Roshan Darya Pars, we combine innovation, expertise, and dedication to deliver exceptional
                    logistics solutions. Our commitment is to streamline your operations, reduce costs, and ensure
                    timely delivery across the globe. Partner with us and experience a seamless journey tailored to your
                    unique needs.</p>
            </div>

            <!-- Service 1 content -->
            <div id="service1" class="service-content hidden text-center">
                <div class="relative overflow-hidden rounded-lg shadow-lg w-full">
                    <div class="aspect-w-16 aspect-h-9 lg:aspect-w-16 lg:aspect-h-17">
                        <img src="Images/Image/services/MainPage/1.webp" alt="">
                    </div>
                </div>
                <br />

                <h2 class="text-2xl font-bold mb-4">Tailored Logistics Solutions</h2>
                <p>We understand that every business is unique. Our tailored logistics solutions are designed to meet
                    your specific needs, ensuring optimal efficiency and cost-effectiveness. Whether you require
                    specialized handling or unique routing, we have you covered</p>

            </div>

            <!-- Service 2 content -->
            <div id="service2" class="service-content hidden">
                <div class="relative overflow-hidden rounded-lg shadow-lg w-full">
                    <div class="aspect-w-16 aspect-h-9 lg:aspect-w-16 lg:aspect-h-17">
                        <img src="Images/Image/services/MainPage/2.webp" alt="">
                    </div>
                </div>
                <br />
                <h2 class="text-2xl font-bold mb-4 text-center">Real-time Cargo Tracking</h2>
                <p>
                    Stay informed with our real-time tracking system. Monitor your shipments from departure to delivery
                    with
                    up-to-the-minute updates, ensuring transparency and peace of mind throughout the shipping process.
                </p>
            </div>
            <!-- Service 3 content -->
            <div id="service3" class="service-content hidden text-center">
                <div class="relative overflow-hidden rounded-lg shadow-lg w-full">
                    <div class="aspect-w-16 aspect-h-9 lg:aspect-w-16 lg:aspect-h-17">
                        <img src="Images/Image/services/MainPage/3.webp" alt="">
                    </div>
                </div>
                <br />

                <h2 class="text-2xl font-bold mb-4">Round-the-Clock Customer Support</h2>
                <p>Our dedicated customer support team is available 24/7 to assist you with any inquiries or issues.
                    Whether you need assistance with bookings or have questions about your shipments, we are here to
                    help anytime.
                </p>

            </div>

            <!-- Service 4 content -->
            <div id="service4" class="service-content hidden text-center">
                <div class="relative overflow-hidden rounded-lg shadow-lg w-full">
                    <div class="aspect-w-16 aspect-h-9 lg:aspect-w-16 lg:aspect-h-17">
                        <img src="Images/Image/services/MainPage/4.webp" alt="">
                    </div>
                </div>
                <br />

                <h2 class="text-2xl font-bold mb-4">Eco-Friendly Logistics Solutions</h2>
                <p>We are committed to sustainable practices in logistics. Our eco-friendly solutions aim to minimize
                    environmental impact through optimized routing and the use of green transportation methods.
                </p>

            </div>
        </div>
    </section>

    <br />
    <br />
    <section id="counter-section" class="py-10 bg-primary-light-gray">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-primary-navy-blue mb-6">Our Achievements</h2>
            <p class="text-lg mb-12">We are proud of our numbers!</p>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Counter Item 1 - Happy Clients -->
                <div class="counter-item bg-white rounded-lg shadow-md p-6">
                    <div class="mb-4">
                        <!-- SVG for Happy Clients -->
                        ><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.39 122.88"
                            xml:space="preserve" class="w-16 h-16 mx-auto text-primary-light-blue"
                            style="enable-background:new 0 0 122.88 119.62; fill:#00457c ;">
                            <style type="text/css">
                                .st0 {
                                    fill: #393939;
                                }

                                .st1 {
                                    fill-rule: evenodd;
                                    clip-rule: evenodd;
                                    fill: #35A872;
                                }
                            </style>
                            <g>
                                <path class="st0"
                                    d="M68.99,23.46c10.66,0,19.96,0.09,30.61,0.09c1.22,0,2.38,0.11,3.51,0.32c1.12,0.21,2.2,0.52,3.2,0.95 c1.01,0.43,1.99,0.96,2.94,1.6c0.93,0.63,1.82,1.37,2.66,2.2c0.84,0.84,1.58,1.73,2.2,2.66c0.64,0.94,1.18,1.93,1.6,2.94 c0.42,1.01,0.74,2.08,0.95,3.2c0.21,1.13,0.32,2.3,0.32,3.51v35.27c0,1.22-0.11,2.38-0.32,3.51c-0.21,1.13-0.53,2.2-0.95,3.2 c-0.43,1.02-0.96,2-1.6,2.94c-0.63,0.93-1.37,1.82-2.2,2.66l-0.01,0.01c-0.87,0.85-1.77,1.59-2.71,2.21 c-0.93,0.63-1.92,1.16-2.93,1.59c-1.01,0.42-2.07,0.74-3.19,0.95c-1.11,0.21-2.28,0.32-3.48,0.32H86.29c-0.42,0-0.83,0.1-1.21,0.28 c-0.35,0.18-0.67,0.43-0.91,0.76l-0.02,0.02c-1.05,1.39-2.15,2.74-3.31,4.05c-1.16,1.29-2.36,2.55-3.66,3.74 c-1.26,1.17-2.58,2.29-3.95,3.37c-1.37,1.08-2.79,2.09-4.24,3.05c-1.39,0.92-2.86,1.79-4.39,2.62c-1.51,0.82-3.06,1.58-4.63,2.28 c-0.18,0.08-0.37,0.07-0.54-0.03c-0.29-0.17-0.4-0.54-0.23-0.84c0.28-0.5,0.55-0.99,0.83-1.52c0.26-0.49,0.5-0.98,0.73-1.51l0,0 c0.45-1,0.88-2.02,1.28-3.08c0.42-1.06,0.81-2.12,1.19-3.22c0.36-1.02,0.69-2.08,1.01-3.15c0.32-1.07,0.62-2.15,0.91-3.23 c0.08-0.32,0.16-0.64,0.16-0.97c0-0.72-0.29-1.39-0.77-1.87l-0.03-0.03c-0.49-0.49-1.17-0.8-1.9-0.8H47.13 c-1.22,0-2.37-0.11-3.48-0.32c-1.1-0.21-2.15-0.53-3.15-0.94l-0.02-0.01c-0.99-0.39-1.96-0.92-2.88-1.54 c-0.95-0.64-1.88-1.41-2.76-2.27l-0.01-0.01c-0.84-0.84-1.58-1.72-2.21-2.66c-0.64-0.94-1.17-1.92-1.6-2.94 c-0.42-1.01-0.74-2.08-0.95-3.2c-0.21-1.13-0.32-2.3-0.32-3.51v-7.17c0-3.6-4.66-3.63-5.44-1.06v8.18c0,1.54,0.15,3.04,0.42,4.48 c0.28,1.47,0.7,2.89,1.26,4.27c0.54,1.33,1.24,2.62,2.07,3.85c0.84,1.23,1.81,2.4,2.92,3.51c1.1,1.11,2.28,2.08,3.51,2.92 c1.22,0.83,2.5,1.52,3.83,2.06l0.02,0.01c1.37,0.56,2.8,0.97,4.26,1.26c1.44,0.27,2.94,0.42,4.48,0.42h11.12 c0.07,0,0.15,0.01,0.21,0.03c0.32,0.11,0.5,0.45,0.4,0.77l-0.01,0.02c-0.21,0.68-0.43,1.36-0.67,2.09l-0.01,0.04 c-0.34,0.98-0.72,1.99-1.12,2.99c-0.38,0.94-0.77,1.88-1.18,2.77c-0.01,0.05-0.02,0.09-0.04,0.14c-0.4,0.91-0.86,1.8-1.39,2.69 c-0.53,0.89-1.12,1.75-1.76,2.61c-0.66,0.86-1.4,1.72-2.22,2.6l-0.03,0.04c-0.83,0.88-1.72,1.74-2.69,2.58 c-0.55,0.5-0.86,1.18-0.9,1.86c-0.04,0.68,0.19,1.38,0.68,1.94c0.35,0.39,0.78,0.65,1.25,0.79c0.47,0.14,0.97,0.16,1.45,0.02 c2.02-0.54,4.01-1.14,5.94-1.8c1.93-0.66,3.8-1.38,5.59-2.16c1.81-0.78,3.58-1.63,5.29-2.56c1.7-0.91,3.36-1.91,4.95-2.96l0,0 c1.59-1.03,3.12-2.13,4.61-3.3c1.49-1.17,2.92-2.39,4.29-3.67l0.03-0.03c1.16-1.09,2.28-2.24,3.37-3.43 c1.1-1.21,2.16-2.45,3.15-3.72c0.11-0.17,0.3-0.28,0.52-0.28h11.7c1.57,0,3.07-0.15,4.52-0.42c1.46-0.28,2.86-0.7,4.2-1.25 l0.02-0.01c1.35-0.57,2.64-1.27,3.87-2.1c1.23-0.83,2.39-1.78,3.5-2.89c1.11-1.11,2.08-2.29,2.92-3.51 c0.83-1.23,1.53-2.52,2.07-3.85c0.55-1.35,0.97-2.76,1.26-4.23c0.27-1.44,0.42-2.95,0.42-4.52V40.84c0-1.57-0.15-3.08-0.42-4.52 c-0.28-1.47-0.7-2.88-1.26-4.22c-0.55-1.33-1.25-2.63-2.07-3.85c-0.84-1.24-1.81-2.41-2.91-3.51c-1.11-1.11-2.28-2.08-3.51-2.92 c-1.22-0.83-2.5-1.52-3.83-2.06l-0.02-0.01c-1.38-0.55-2.8-0.97-4.27-1.25c-1.44-0.27-2.94-0.42-4.48-0.42 c-11.07,0-20.79-0.05-31.87-0.05C65.11,18.79,64.94,23.46,68.99,23.46L68.99,23.46L68.99,23.46z M53.22,77.8 c-1.41,0.02-2.56-1.11-2.58-2.52c-0.02-1.41,1.11-2.56,2.52-2.58l27.03-0.41l5.18-0.33c1.41-0.09,2.62,0.98,2.71,2.38 c0.09,1.41-0.98,2.62-2.38,2.71l-5.18,0.33C80.52,77.38,55.5,77.76,53.22,77.8L53.22,77.8L53.22,77.8z M61.32,61.78 c-1.41,0-2.56-1.15-2.56-2.56c0-1.41,1.15-2.56,2.56-2.56h36.51c1.41,0,2.56,1.15,2.56,2.56c0,1.41-1.15,2.56-2.56,2.56H61.32 L61.32,61.78L61.32,61.78z M72.68,46.5c-1.41,0-2.56-1.15-2.56-2.56c0-1.41,1.15-2.56,2.56-2.56h25.14c1.41,0,2.56,1.15,2.56,2.56 c0,1.41-1.15,2.56-2.56,2.56H72.68L72.68,46.5L72.68,46.5z" />
                                <path class="st1"
                                    d="M26.92,3.29c0.29-1.5,1.07-2.46,2.13-2.95c0.86-0.39,1.85-0.44,2.9-0.16c0.9,0.24,1.85,0.72,2.77,1.42 c2.47,1.87,4.78,5.42,5.07,9.84c0.09,1.36,0.06,2.81-0.06,4.36c-0.08,1.02-0.22,2.09-0.39,3.21h10.49L49.85,19 c1.71,0.06,3.35,0.48,4.75,1.21c1.21,0.63,2.22,1.49,2.92,2.57c0.72,1.11,1.12,2.42,1.06,3.92c-0.05,1.11-0.34,2.32-0.95,3.62 c0.35,1.45,0.51,3.01,0.28,4.38c-0.19,1.16-0.64,2.19-1.45,2.96c0.05,1.92-0.21,3.53-0.73,4.92c-0.53,1.43-1.32,2.62-2.35,3.67 c-0.09,0.92-0.24,1.8-0.47,2.62c-0.29,1.03-0.71,1.98-1.31,2.81l0,0c-1.79,2.52-3.22,2.47-5.48,2.37 c-0.31-0.01-0.66-0.03-1.18-0.03H24.43c-1.85,0-3.3-0.26-4.62-0.93c-1.32-0.66-2.43-1.66-3.63-3.16l-0.31-0.87V25.12l1.04-0.28 c2.65-0.71,4.73-2.98,6.35-5.68c1.66-2.79,2.83-6.05,3.63-8.68V3.55L26.92,3.29L26.92,3.29L26.92,3.29L26.92,3.29z M2.1,22.63h9.28 c1.16,0,2.1,0.95,2.1,2.1v27.96c0,1.16-0.95,2.1-2.1,2.1H2.1c-1.16,0-2.1-0.95-2.1-2.1V24.73C0,23.57,0.94,22.63,2.1,22.63 L2.1,22.63L2.1,22.63L2.1,22.63z" />
                            </g>
                        </svg>
                    </div>
                    <h3 class="text-6xl font-bold text-primary-light-blue mb-2" id="clientsCount">0</h3>
                    <p class="text-xl text-secondary-grayish-blue">Happy Clients</p>
                </div>

                <!-- Counter Item 2 - Completed Projects -->
                <div class="counter-item bg-white rounded-lg shadow-md p-6">
                    <div class="mb-4">
                        <!-- SVG for Completed Projects -->
                        <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
                            text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd"
                            clip-rule="evenodd" viewBox="0 0 419 511.68"
                            class="w-16 h-16 mx-auto text-primary-light-blue"
                            style="enable-background:new 0 0 122.88 119.62; fill:#00457c ;">
                            <path
                                d="M314.98 303.63c57.47 0 104.02 46.58 104.02 104.02 0 57.47-46.58 104.03-104.02 104.03-57.47 0-104.03-46.58-104.03-104.03 0-57.47 46.59-104.02 104.03-104.02zM93 39.4h46.13C141.83 17.18 159.77 0 181.52 0c21.62 0 39.45 16.95 42.34 38.94l46.76.46c2.61 0 4.7 2.1 4.7 4.71v51.85c0 2.6-2.09 4.7-4.7 4.7H93.05c-2.56 0-4.71-2.1-4.71-4.7V44.11C88.3 41.5 90.4 39.4 93 39.4zM41.72 59.28h23.94v24.38H41.72c-4.76 0-9.11 1.95-12.24 5.09-3.14 3.13-5.1 7.48-5.1 12.24v315.53c0 4.76 1.96 9.1 5.1 12.24 3.12 3.16 7.47 5.12 12.24 5.12h142.62c1.68 8.44 4.18 16.6 7.37 24.38H41.72c-11.4 0-21.85-4.72-29.44-12.3C4.72 438.44 0 428 0 416.52V100.99c0-11.48 4.7-21.92 12.25-29.47 7.55-7.55 18-12.24 29.47-12.24zm297.56 217.36V100.99c0-4.52-1.76-8.67-4.61-11.75l-.51-.48c-3.15-3.14-7.48-5.1-12.24-5.1h-23.91V59.28h23.91c11.48 0 21.92 4.71 29.46 12.26l.72.78c7.15 7.51 11.56 17.64 11.56 28.67V283.6c-7.8-3.06-15.95-5.41-24.38-6.96zm-206.75-8.06c-7.13 0-12.92-5.79-12.92-12.93 0-7.13 5.79-12.92 12.92-12.92h142.82c7.14 0 12.93 5.79 12.93 12.92 0 7.14-5.79 12.93-12.93 12.93H132.53zM89.5 241.22c7.98 0 14.43 6.46 14.43 14.44 0 7.98-6.45 14.44-14.43 14.44-7.98 0-14.44-6.46-14.44-14.44 0-7.98 6.46-14.44 14.44-14.44zm0 78.62c7.98 0 14.43 6.47 14.43 14.44s-6.45 14.44-14.43 14.44c-7.98 0-14.44-6.47-14.44-14.44s6.46-14.44 14.44-14.44zm43.04 27.36c-7.13 0-12.93-5.79-12.93-12.93 0-7.13 5.8-12.92 12.93-12.92h80.96a133.654 133.654 0 0 0-17.27 25.85h-63.69zM89.5 162.61c7.98 0 14.43 6.46 14.43 14.44 0 7.98-6.45 14.44-14.43 14.44-7.98 0-14.44-6.46-14.44-14.44 0-7.98 6.46-14.44 14.44-14.44zm43.03 27.36c-7.13 0-12.92-5.8-12.92-12.93s5.79-12.93 12.92-12.93h142.82c7.14 0 12.93 5.8 12.93 12.93s-5.79 12.93-12.93 12.93H132.53zm48.5-169.81c12.3 0 22.26 9.97 22.26 22.27 0 12.29-9.96 22.26-22.26 22.26s-22.27-9.97-22.27-22.26c0-12.3 9.97-22.27 22.27-22.27zm103.62 367.48 19.48 18.45 38.62-39.2c3.6-3.67 5.85-6.59 10.31-2.03l14.42 14.76c4.73 4.67 4.48 7.4.02 11.78l-55.16 54.19c-9.39 9.23-7.77 9.81-17.3.32l-34.68-34.48c-1.96-2.15-1.75-4.33.39-6.5l16.73-17.32c2.54-2.64 4.56-2.47 7.17.03z" />
                        </svg>
                    </div>
                    <h3 class="text-6xl font-bold text-primary-light-blue mb-2" id="projectsCount">0</h3>
                    <p class="text-xl text-secondary-grayish-blue">Completed Projects</p>
                </div>

                <!-- Counter Item 3 - Partner Companies -->
                <div class="counter-item bg-white rounded-lg shadow-md p-6">
                    <div class="mb-4">
                        <!-- SVG for Partner Companies -->
                        <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 115.49"
                            class="w-16 h-16 mx-auto text-primary-light-blue"
                            style="enable-background:new 0 0 122.88 119.62; fill:#00457c ;" xml:space="preserve">
                            <g>
                                <path
                                    d="M36,68.78c0,0.8-0.65,1.44-1.44,1.44c-0.8,0-1.44-0.65-1.44-1.44V33.51H2.88v71.08h4.99c0.8,0,1.44,0.65,1.44,1.44 c0,0.8-0.65,1.44-1.44,1.44H1.44c-0.8,0-1.44-0.65-1.44-1.44V32.74c0-0.58,0.24-1.11,0.62-1.5c0.38-0.38,0.91-0.62,1.5-0.62h31 V2.53c0-0.69,0.28-1.33,0.74-1.78V0.74C34.32,0.28,34.95,0,35.65,0H87c0.7,0,1.33,0.28,1.79,0.74l0.11,0.12 c0.39,0.45,0.64,1.03,0.64,1.67v28.09h31.22c0.58,0,1.11,0.24,1.49,0.62l0.01,0.01c0.38,0.38,0.62,0.91,0.62,1.49v73.29 c0,0.8-0.65,1.44-1.44,1.44h-9.14c-0.8,0-1.44-0.65-1.44-1.44c0-0.8,0.65-1.44,1.44-1.44H120V33.51H89.53v34.85 c0,0.8-0.65,1.44-1.44,1.44c-0.8,0-1.44-0.65-1.44-1.44V2.88H36V68.78L36,68.78z M97.15,68.54h15.9c0.13,0,0.24,0.08,0.24,0.17v4.7 c0,0.1-0.11,0.18-0.24,0.18h-15.9c-0.13,0-0.24-0.08-0.24-0.18v-4.7C96.91,68.62,97.02,68.54,97.15,68.54L97.15,68.54z M9.71,68.54 h15.9c0.13,0,0.24,0.08,0.24,0.17v4.7c0,0.1-0.11,0.18-0.24,0.18H9.71c-0.13,0-0.24-0.08-0.24-0.18v-4.7 C9.47,68.62,9.58,68.54,9.71,68.54L9.71,68.54z M42.46,8.47H80.2c0.63,0,1.15,0.52,1.15,1.15v12.31c0,0.63-0.52,1.15-1.15,1.15 H42.46c-0.63,0-1.15-0.52-1.15-1.15V9.62C41.3,8.99,41.82,8.47,42.46,8.47L42.46,8.47z M97.4,105.02c-1.05-2.11-2.38-3.9-3.94-5.58 c2.92,1.13,5.91,2.25,8.12,3.64c4.02,2.52,4.32,5.57,4.65,9.95H86.3c0-0.03,0-0.07,0-0.1l-0.37-3.13l1.43,1.24l7-6.09L97.4,105.02 L97.4,105.02L97.4,105.02z M26.08,100.08l2.53,7.44l1.27-4.42l-0.62-0.68c-0.28-0.41-0.34-0.77-0.19-1.08 c0.34-0.67,1.04-0.54,1.69-0.54c0.68,0,1.53-0.13,1.74,0.73c0.07,0.29-0.02,0.59-0.22,0.9l-0.62,0.68l1.27,4.42l2.29-7.44 c0.33,0.3,0.8,0.55,1.34,0.77c-0.19,0.4-0.36,0.81-0.51,1.25c-0.39,1.13-0.64,2.38-0.75,3.77l0.01,0c0,0.03,0,0.07-0.01,0.1 l-0.55,7.06H16.44c-1.1-0.08-1.66-0.65-1.75-1.63l0.38-3.9c0.11-1.39,0.5-2.48,1.13-3.32c0.42-0.55,0.94-0.96,1.51-1.28 C19.53,101.86,24.43,101.57,26.08,100.08L26.08,100.08L26.08,100.08z M24.84,89.53c-0.25,0.02-0.43,0.08-0.57,0.16 c-0.08,0.05-0.13,0.12-0.17,0.2c-0.04,0.09-0.06,0.21-0.06,0.34c0.01,0.41,0.23,0.96,0.66,1.59l0.01,0.01l1.41,2.25 c0.56,0.9,1.16,1.81,1.88,2.48c0.69,0.63,1.54,1.06,2.65,1.07c1.21,0,2.09-0.44,2.81-1.11c0.75-0.7,1.35-1.68,1.94-2.65l1.59-2.62 c0.32-0.73,0.42-1.17,0.32-1.38c-0.06-0.13-0.33-0.16-0.76-0.13c-0.28,0.06-0.56,0.01-0.87-0.15l0.79-2.38 c-2.91-0.04-4.91-0.54-7.26-2.05c-0.77-0.49-1.01-1.06-1.78-1.01c-0.59,0.11-1.08,0.38-1.47,0.8c-0.38,0.4-0.66,0.95-0.84,1.66 l0.47,2.86C25.34,89.62,25.09,89.63,24.84,89.53L24.84,89.53L24.84,89.53z M37.45,88.82c0.34,0.1,0.59,0.3,0.75,0.6 c0.24,0.49,0.15,1.21-0.3,2.23l0,0c-0.01,0.02-0.02,0.04-0.03,0.06l-1.61,2.65c-0.62,1.03-1.26,2.06-2.11,2.86 c-0.89,0.83-1.98,1.38-3.48,1.38c-1.4,0-2.45-0.54-3.31-1.33c-0.83-0.76-1.46-1.73-2.05-2.68l-1.41-2.25 c-0.53-0.79-0.8-1.51-0.82-2.1c-0.01-0.29,0.04-0.55,0.15-0.78c0.11-0.24,0.29-0.45,0.52-0.6c0.11-0.08,0.24-0.14,0.39-0.19 c-0.09-1.2-0.12-2.69-0.06-3.95c0.03-0.31,0.09-0.61,0.17-0.92c0.36-1.29,1.27-2.33,2.39-3.04c0.4-0.25,0.83-0.46,1.29-0.63 c2.72-0.98,6.32-0.45,8.25,1.64c0.79,0.85,1.28,1.98,1.38,3.47L37.45,88.82L37.45,88.82L37.45,88.82z M51.68,78.86 c-0.32,0.04-0.56,0.12-0.74,0.23c-0.12,0.08-0.2,0.18-0.25,0.29c-0.06,0.14-0.09,0.31-0.09,0.5c0.02,0.61,0.35,1.43,0.98,2.37 l0.01,0.02l0,0l2.11,3.36c0.84,1.34,1.72,2.7,2.81,3.7c1.04,0.95,2.29,1.59,3.95,1.59c1.8,0,3.12-0.66,4.18-1.66 c1.12-1.05,2.02-2.5,2.89-3.95l2.37-3.9c0.48-1.09,0.62-1.75,0.47-2.05c-0.1-0.2-0.51-0.25-1.21-0.18c-0.05,0-0.11,0-0.16,0 c-0.29,0-0.6-0.07-0.95-0.23l1.07-3.56c-4.35-0.05-7.32-0.81-10.84-3.06c-1.16-0.74-1.5-1.58-2.66-1.5 c-0.87,0.17-1.61,0.56-2.19,1.19c-0.56,0.6-0.98,1.42-1.26,2.48l0.75,4.31C52.49,79.01,52.07,79.03,51.68,78.86L51.68,78.86 L51.68,78.86z M53.64,94.59l3.78,11.11l1.9-6.59l-0.93-1.02c-0.42-0.61-0.51-1.15-0.28-1.61c0.5-1,1.55-0.81,2.52-0.81 c1.02,0,2.28-0.19,2.6,1.08c0.11,0.43-0.03,0.87-0.33,1.34l-0.93,1.02l1.9,6.59l3.42-11.11c2.47,2.22,8.82,2.67,11.54,4.18 c0.74,0.41,1.41,0.92,1.98,1.57c0.01-0.07,0.03-0.15,0.07-0.21c0.3-0.59,0.92-0.48,1.5-0.48c0.61,0,1.36-0.11,1.55,0.65 c0.06,0.25-0.02,0.52-0.19,0.8l-0.55,0.61l1.13,3.92l-1.45,1.15l0.48,6.29c-0.14,1.47-0.97,2.31-2.61,2.44H40.2 c-1.64-0.13-2.47-0.97-2.61-2.44l0.57-7.41c0.16-2.07,0.74-3.71,1.69-4.96c0.62-0.82,1.4-1.43,2.26-1.91 C44.82,97.26,51.17,96.81,53.64,94.59L53.64,94.59L53.64,94.59z M70.6,77.79c0.51,0.15,0.89,0.44,1.12,0.9 c0.36,0.73,0.22,1.8-0.45,3.33l0,0c-0.01,0.03-0.03,0.06-0.04,0.09l-2.41,3.96c-0.93,1.54-1.88,3.07-3.15,4.26 c-1.33,1.24-2.96,2.07-5.19,2.06c-2.09,0-3.66-0.8-4.95-1.98c-1.24-1.13-2.17-2.58-3.07-4l-2.11-3.36 c-0.79-1.17-1.19-2.25-1.22-3.14c-0.01-0.43,0.06-0.82,0.22-1.16c0.17-0.36,0.43-0.67,0.78-0.9c0.17-0.12,0.37-0.21,0.58-0.29 c-0.13-1.8-0.17-4.02-0.09-5.89c0.05-0.46,0.13-0.91,0.26-1.37c0.54-1.93,1.89-3.48,3.57-4.54c0.59-0.38,1.24-0.69,1.92-0.93 c4.05-1.47,9.43-0.67,12.31,2.45c1.17,1.27,1.91,2.95,2.07,5.17L70.6,77.79L70.6,77.79L70.6,77.79z M77.93,96.13l1.86-0.05 l1.55-0.04c-1.8-5.55-1.2-10.65,3.14-14.99c0.74,2.38,2.39,4.35,5.2,5.8c1.34,1,2.64,2.2,3.9,3.59c0.22-0.92-0.63-2.03-1.66-3.18 c0.95,0.47,1.83,1.13,2.45,2.4c0.72,1.47,0.71,2.71,0.47,4.31c-0.11,0.74-0.29,1.44-0.55,2.07h2.57c2.71-5.8,0.99-14.41-4.55-18.06 c-1.7-1.12-2.92-1.08-4.92-1.08c-2.28,0-3.45,0.07-5.41,1.37c-2.88,1.91-4.66,5.21-5.4,9.79C76.43,90.35,76.33,94.3,77.93,96.13 L77.93,96.13L77.93,96.13z M97.15,58.27h15.9c0.13,0,0.24,0.08,0.24,0.18v4.7c0,0.1-0.11,0.18-0.24,0.18h-15.9 c-0.13,0-0.24-0.08-0.24-0.18v-4.7C96.91,58.35,97.02,58.27,97.15,58.27L97.15,58.27z M97.15,47.99h15.9 c0.13,0,0.24,0.08,0.24,0.18v4.7c0,0.1-0.11,0.18-0.24,0.18h-15.9c-0.13,0-0.24-0.08-0.24-0.18v-4.7 C96.91,48.07,97.02,47.99,97.15,47.99L97.15,47.99z M9.71,58.27h15.9c0.13,0,0.24,0.08,0.24,0.18v4.7c0,0.1-0.11,0.18-0.24,0.18 H9.71c-0.13,0-0.24-0.08-0.24-0.18v-4.7C9.47,58.35,9.58,58.27,9.71,58.27L9.71,58.27z M9.71,47.99h15.9 c0.13,0,0.24,0.08,0.24,0.18v4.7c0,0.1-0.11,0.18-0.24,0.18H9.71c-0.13,0-0.24-0.08-0.24-0.18v-4.7 C9.47,48.07,9.58,47.99,9.71,47.99L9.71,47.99z M71.67,49.08h8.49c0.13,0,0.24,0.11,0.24,0.24v8.49c0,0.13-0.11,0.24-0.24,0.24 h-8.49c-0.13,0-0.24-0.11-0.24-0.24v-8.49C71.43,49.19,71.54,49.08,71.67,49.08L71.67,49.08z M57.08,49.08h8.49 c0.13,0,0.24,0.11,0.24,0.24v8.49c0,0.13-0.11,0.24-0.24,0.24h-8.49c-0.13,0-0.24-0.11-0.24-0.24v-8.49 C56.84,49.19,56.95,49.08,57.08,49.08L57.08,49.08z M42.49,49.08h8.49c0.13,0,0.24,0.11,0.24,0.24v8.49c0,0.13-0.11,0.24-0.24,0.24 h-8.49c-0.13,0-0.24-0.11-0.24-0.24v-8.49C42.25,49.19,42.36,49.08,42.49,49.08L42.49,49.08z M71.67,32.61h8.49 c0.13,0,0.24,0.11,0.24,0.24v8.49c0,0.13-0.11,0.24-0.24,0.24h-8.49c-0.13,0-0.24-0.11-0.24-0.24v-8.49 C71.43,32.71,71.54,32.61,71.67,32.61L71.67,32.61z M57.08,32.61h8.49c0.13,0,0.24,0.11,0.24,0.24v8.49c0,0.13-0.11,0.24-0.24,0.24 h-8.49c-0.13,0-0.24-0.11-0.24-0.24v-8.49C56.84,32.71,56.95,32.61,57.08,32.61L57.08,32.61z M42.49,32.61h8.49 c0.13,0,0.24,0.11,0.24,0.24v8.49c0,0.13-0.11,0.24-0.24,0.24h-8.49c-0.13,0-0.24-0.11-0.24-0.24v-8.49 C42.25,32.71,42.36,32.61,42.49,32.61L42.49,32.61z" />
                            </g>
                        </svg>
                    </div>
                    <h3 class="text-6xl font-bold text-primary-light-blue mb-2" id="companiesCount">45</h3>
                    <p class="text-xl text-secondary-grayish-blue">Partner Companies</p>
                </div>

                <!-- Counter Item 4 - Years of Experience -->
                <div class="counter-item bg-white rounded-lg shadow-md p-6">
                    <div class="mb-4">
                        <!-- SVG for Years of Experience -->
                        <svg version="1.1" id="Layer_5" class="w-16 h-16 mx-auto text-primary-light-blue"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                            y="0px" viewBox="0 0 122.88 119.62"
                            style="enable-background:new 0 0 122.88 119.62; fill:#00457c ;" xml:space="preserve">
                            <g>
                                <path
                                    d="M26.24,110.8l7.59-5.87l8.64,4.17l-3.23-9.02l6.64-6.92l-9.58,0.3l-4.54-8.45l-2.69,9.21l-9.45,1.7l7.93,5.4L26.24,110.8 L26.24,110.8L26.24,110.8L26.24,110.8L26.24,110.8z M61.44,119.62l3.63-8.88l9.56-0.71l-7.31-6.2l2.29-9.32l-8.16,5.05l-8.16-5.05 l2.29,9.32l-7.33,6.2l9.56,0.71L61.44,119.62L61.44,119.62L61.44,119.62L61.44,119.62L61.44,119.62z M33.17,52.47 c4.44-1.66,10.11-3.78,14.19-6.31c4.68,4.34,7.72,9.28,7.96,15.28H67.6c0.24-6,3.28-10.94,7.96-15.28 c4.08,2.53,9.75,4.64,14.19,6.31c13.08,4.89,6.69,13.82-0.94,21.34c-7,6.89-16.67,11.15-27.36,11.15S41.1,80.71,34.09,73.81 C26.57,66.4,20,57.39,33.17,52.47L33.17,52.47z M51.82,40.06c0.2-1.64-4.64-7.85-5.52-10.84c-1.9-3-2.57-7.8-0.5-10.98 c0.83-1.26,0.47-3.52,0.47-5.25c0-17.31,30.33-17.33,30.33,0c0,2.19-0.5,3.86,0.69,5.58c1.99,2.88,0.96,7.99-0.72,10.67 c-1.07,3.13-6.15,9.06-5.79,10.84C71.08,48.95,51.75,48.66,51.82,40.06L51.82,40.06L51.82,40.06L51.82,40.06z M122.88,84.55 l-5.87-7.58l4.17-8.64l-9.03,3.24l-6.92-6.64l0.3,9.58l-8.45,4.54l9.21,2.68l1.7,9.45l5.39-7.93L122.88,84.55L122.88,84.55 L122.88,84.55L122.88,84.55L122.88,84.55z M96.64,110.8l-1.29-9.51l7.93-5.4l-9.44-1.71l-2.68-9.21l-4.54,8.45l-9.59-0.3l6.64,6.92 l-3.26,9.04l8.64-4.17L96.64,110.8L96.64,110.8L96.64,110.8L96.64,110.8L96.64,110.8z M0,84.54l9.51-1.29l5.4,7.93l1.71-9.44 l9.21-2.68l-8.45-4.54l0.3-9.58l-6.93,6.64L1.7,68.33l4.17,8.64L0,84.54L0,84.54L0,84.54L0,84.54L0,84.54z" />
                            </g>
                        </svg>
                    </div>
                    <h3 class="text-6xl font-bold text-primary-light-blue mb-2" id="experienceCount">6</h3>
                    <p class="text-xl text-secondary-grayish-blue">Years of Experience</p>
                </div>
            </div>
        </div>
    </section>

    <br />
    <br />

    <div id="section04" class="gallery-Section">

        <section id="src-04" class="gallery " loading="lazy">

            <section class="gallery4 cid-upCxZ2xO3D left select-none" id="gallery-12-upCxZ2xO3D ">
                <div class="container-fluid gallery-wrapper gallery-scroll">
                    <div class="grid-container  horizontal-scroll cursor-grab">
                        <div class="grid-item left">
                            <img src="Images/Image/gallery/MainPage/AroundSlider/1.webp" alt="image1"
                                class="animate__animated w-full h-auto object-cover pointer-events-none">
                        </div>
                        <div class="grid-item right">
                            <img src="Images/Image/gallery/MainPage/AroundSlider/2.webp" alt="image2"
                                class="animate__animated w-full h-auto object-cover pointer-events-none">
                        </div>
                        <div class="grid-item left">
                            <img src="Images/Image/gallery/MainPage/AroundSlider/3.webp" alt="image3"
                                class="animate__animated w-full h-auto object-cover pointer-events-none">
                        </div>
                        <div class="grid-item right">
                            <img src="Images/Image/gallery/MainPage/AroundSlider/4.webp" alt="image4"
                                class="animate__animated w-full h-auto object-cover pointer-events-none">
                        </div>
                        <div class="grid-item left">
                            <img src="Images/Image/gallery/MainPage/AroundSlider/5.webp" alt="image5"
                                class="animate__animated w-full h-auto object-cover pointer-events-none">
                        </div>
                        <div class="grid-item right">
                            <img src="Images/Image/gallery/MainPage/AroundSlider/6.webp" alt="image6"
                                class="animate__animated w-full h-auto object-cover pointer-events-none">
                        </div>
                        <div class="grid-item left">
                            <img src="Images/Image/gallery/MainPage/AroundSlider/7.webp" alt="image7"
                                class="animate__animated w-full h-auto object-cover pointer-events-none">
                        </div>

                    </div>
                </div>
            </section>
            <br />
            <br />
            <br />

            <div class="grid-container0 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-6 gap-4 p-4 select-none">
                <div class="grid-item0 item1">
                    <img src="Images/Image/gallery/MainPage/1.webp" alt="Image 1"
                        class="w-full h-full object-cover aspect-square transition-transform duration-300 ease-in-out hover:scale-110">
                </div>
                <div class="grid-item0 item2">
                    <img src="Images/Image/gallery/MainPage/2.webp" loading="lazy" alt="Image 2"
                        class="w-full h-full object-cover aspect-square transition-transform duration-300 ease-in-out hover:scale-110">
                </div>
                <div class="grid-item0 item3">
                    <img src="Images/Image/gallery/MainPage/3.webp" loading="lazy" alt="Image 3"
                        class="w-full h-full object-cover aspect-square transition-transform duration-300 ease-in-out hover:scale-110">
                </div>
                <div class="grid-item0 item4">
                    <img src="Images/Image/gallery/MainPage/4.webp" loading="lazy" alt="Image 4"
                        class="w-full h-full object-cover aspect-square transition-transform duration-300 ease-in-out hover:scale-110">
                </div>
                <div class="grid-item0 item5">
                    <img src="Images/Image/gallery/MainPage/5.webp" loading="lazy" alt="Image 5"
                        class="w-full h-full object-cover aspect-square transition-transform duration-300 ease-in-out hover:scale-110">
                </div>
                <div class="grid-item0 item6">
                    <img src="Images/Image/gallery/MainPage/6.webp" loading="lazy" alt="Image 6"
                        class="w-full h-full object-cover aspect-square transition-transform duration-300 ease-in-out hover:scale-110">
                </div>
            </div>

        </section>
    </div>

    <br />
    <br />
    <br />


    <!-- Blog Section -->
    <section id="sec-05" class="bg-light-gray blog-section relative">
        <div class="bg-azure rounded-lg m-2 p-1 flex flex-row justify-between relative devtitle">
            <h4 class="text-white font-bold col-white">Blog</h4>
        </div>

        <!-- Blog Items Container -->
        <div class="overflow-x-hidden">
            <div id="blogScroll" class="blogScroll flex space-x-4 cursor-grab overflow-x-auto"
                style="user-select: none; scrollbar-width: none;">
                <!-- Blog Item Template -->
                <div
                    class="blog-item bg-light rounded overflow-hidden shadow-md transition-transform duration-300 hover:transform hover:-translate-y-1 w-64 flex-shrink-0">
                    <div class="blog-img h-64">
                        <img class="w-full h-auto pointer-events-none object-cover" loading="lazy"
                            src="./Images/Image/3.webp" alt="Blog Image 1">
                    </div>
                    <div class="p-4 h-60">
                        <h4 class="mb-3 text-primary">How to Build a Website</h4>
                        <p>Learn the fundamentals of building a modern website with this comprehensive guide.</p>
                        <button class="open-modal-btn text-uppercase text-primary" data-id="1">Read More</button>
                    </div>
                </div>
                <div
                    class="blog-item bg-light rounded overflow-hidden shadow-md transition-transform duration-300 hover:transform hover:-translate-y-1 w-64 flex-shrink-0">
                    <div class="blog-img h-64">
                        <img class="w-full h-auto pointer-events-none object-cover" loading="lazy"
                            src="./Images/Image/3.webp" alt="Blog Image 1">
                    </div>
                    <div class="p-4 h-60">
                        <h4 class="mb-3 text-primary">How to Build a Website</h4>
                        <p>Learn the fundamentals of building a modern website with this comprehensive guide.</p>
                        <button class="open-modal-btn text-uppercase text-primary" data-id="1">Read More</button>
                    </div>
                </div>
                <div
                    class="blog-item bg-light rounded overflow-hidden shadow-md transition-transform duration-300 hover:transform hover:-translate-y-1 w-64 flex-shrink-0">
                    <div class="blog-img h-64">
                        <img class="w-full h-auto pointer-events-none object-cover" loading="lazy"
                            src="./Images/Image/3.webp" alt="Blog Image 1">
                    </div>
                    <div class="p-4 h-60">
                        <h4 class="mb-3 text-primary">How to Build a Website</h4>
                        <p>Learn the fundamentals of building a modern website with this comprehensive guide.</p>
                        <button class="open-modal-btn text-uppercase text-primary" data-id="1">Read More</button>
                    </div>
                </div>
                <div
                    class="blog-item bg-light rounded overflow-hidden shadow-md transition-transform duration-300 hover:transform hover:-translate-y-1 w-64 flex-shrink-0">
                    <div class="blog-img h-64">
                        <img class="w-full h-auto pointer-events-none object-cover" loading="lazy"
                            src="./Images/Image/3.webp" alt="Blog Image 1">
                    </div>
                    <div class="p-4 h-60">
                        <h4 class="mb-3 text-primary">How to Build a Website</h4>
                        <p>Learn the fundamentals of building a modern website with this comprehensive guide.</p>
                        <button class="open-modal-btn text-uppercase text-primary" data-id="1">Read More</button>
                    </div>
                </div>
                <div
                    class="blog-item bg-light rounded overflow-hidden shadow-md transition-transform duration-300 hover:transform hover:-translate-y-1 w-64 flex-shrink-0">
                    <div class="blog-img h-64">
                        <img class="w-full h-auto pointer-events-none object-cover" loading="lazy"
                            src="./Images/Image/3.webp" alt="Blog Image 1">
                    </div>
                    <div class="p-4 h-60">
                        <h4 class="mb-3 text-primary">How to Build a Website</h4>
                        <p>Learn the fundamentals of building a modern website with this comprehensive guide.</p>
                        <button class="open-modal-btn text-uppercase text-primary" data-id="1">Read More</button>
                    </div>
                </div>
                <div
                    class="blog-item bg-light rounded overflow-hidden shadow-md transition-transform duration-300 hover:transform hover:-translate-y-1 w-64 flex-shrink-0">
                    <div class="blog-img h-64">
                        <img class="w-full h-auto pointer-events-none object-cover" loading="lazy"
                            src="./Images/Image/3.webp" alt="Blog Image 1">
                    </div>
                    <div class="p-4 h-60">
                        <h4 class="mb-3 text-primary">How to Build a Website</h4>
                        <p>Learn the fundamentals of building a modern website with this comprehensive guide.</p>
                        <button class="open-modal-btn text-uppercase text-primary" data-id="1">Read More</button>
                    </div>
                </div>
                <div
                    class="blog-item bg-light rounded overflow-hidden shadow-md transition-transform duration-300 hover:transform hover:-translate-y-1 w-64 flex-shrink-0">
                    <div class="blog-img h-64">
                        <img class="w-full h-auto pointer-events-none object-cover" loading="lazy"
                            src="./Images/Image/3.webp" alt="Blog Image 1">
                    </div>
                    <div class="p-4 h-60">
                        <h4 class="mb-3 text-primary">How to Build a Website</h4>
                        <p>Learn the fundamentals of building a modern website with this comprehensive guide.</p>
                        <button class="open-modal-btn text-uppercase text-primary" data-id="1">Read More</button>
                    </div>
                </div>
                <!-- Repeat Blog Items as Needed -->
            </div>
        </div>

        <div class="rounded-lg m-2 p-1 flex flex-row justify-between relative top-14 lastblog">
            <a href="/Components/blog.html" class="button explore text-white"
                style="-webkit-text-fill-color: white;">More</a>
        </div>
    </section>

    <!-- Modal Template -->
    <div id="blogModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6 relative">
            <button id="closeModal" class="absolute top-2 right-2 text-gray-500 hover:text-black">
                &times;
            </button>
            <img id="modalImage" class="w-full rounded-md mb-4" src="" alt="Blog Image">
            <h3 id="modalTitle" class="text-xl font-bold mb-2"></h3>
            <p id="modalDescription" class="text-gray-700 mb-4"></p>
            <div id="modalHashtags" class="flex flex-wrap gap-2"></div>
        </div>
    </div>


    <!-- Modal -->
    <div id="blogModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 w-11/12 md:w-1/2 lg:w-1/3 relative">
            <button id="closeModal" class="absolute top-4 right-4 text-gray-500 text-2xl">&times;</button>
            <img id="modalImage" class="w-full rounded-md mb-4" src="" alt="Blog Image">
            <div id="modalHashtags" class="mb-4 flex flex-wrap gap-2"></div>
            <h4 id="modalTitle" class="text-xl font-bold mb-2"></h4>
            <p id="modalDescription" class="text-gray-700"></p>
        </div>
    </div>

    <br />
    <br />
    <br />
    <br />
    <!-- <section id="rate-inquiry" class="py-6">
        <div class="container mx-auto px-4 flex flex-row flex-wrap gap-4 justify-center">
             Existing Fields 

            <select name="transportType" class="input-field w-full md:w-1/3 lg:w-1/5" required>
                <option value="" disabled selected>Select Transport Type</option>
                <option>Air Transport</option>
                <option>Ground Transport</option>
                <option>Sea Transport</option>
            </select>

            <select name="containerType" class="input-field w-full md:w-1/3 lg:w-1/5 containerType" required>
                <option value="" disabled selected>Select Container Type</option>
                <option value="20">20 ft - Standard Container</option>
                <option value="HQ">HQ - High Cube Container</option>
                <option value="RF">RF - Refrigerated Container</option>
                <option value="FR">FR - Flat Rack Container</option>
                <option value="ISO">ISO Tank - Liquid Transport</option>
                <option value="OP">OP - Open-Top Container</option>
            </select>

      
            <div class="hidden w-full flex flex-wrap gap-4 dimensionsFields">
                <input type="number" name="length" placeholder="Length (m)" min="0"
                    class="input-field w-full md:w-1/3 lg:w-1/5">
                <input type="number" name="width" placeholder="Width (m)" min="0"
                    class="input-field w-full md:w-1/3 lg:w-1/5">
                <input type="number" name="height" placeholder="Height (m)" min="0"
                    class="input-field w-full md:w-1/3 lg:w-1/5">
            </div>

         
            <div class="gaugeOptions" class="hidden w-full flex gap-4 justify-around flex-row text-gray-700">
                <label class="flex items-center gap-2">
                    <input type="radio" name="gaugeType" value="In-Gauge" class="form-radio">
                    <span>In-Gauge</span>
                </label>
                <label class="flex items-center gap-2">
                    <input type="radio" name="gaugeType" value="Out of Gauge" class="form-radio">
                    <span>Out of Gauge</span>
                </label>
            </div>


            <select name="isoTankType" class="isoTankOptions"
                class="input-field w-full md:w-1/3 lg:w-1/5 hidden isoTankOptions">
                <option value="" disabled selected>Select ISO Tank Type</option>
                <option value="T7">T7</option>
                <option value="T1">T1</option>
                <option value="T50">T50</option>
            </select>

            <input type="number" name="quantity" placeholder="Enter Quantity" min="1" class="input-field w-full"
                required>
            <select id="countrySelect" name="departureCountry" class="input-field w-full md:w-1/3 lg:w-1/5" required>
                <option value="" disabled selected>Select Departure Country</option>
            </select>
            <select id="portsSelect" name="departurePort" class="input-field w-full md:w-1/3 lg:w-1/5" required>
                <option value="" disabled selected>Select Departure Port</option>
            </select>
            <select id="destinationCountry" name="destinationCountry" class="input-field w-full md:w-1/3 lg:w-1/5"
                required>
                <option value="" disabled selected>Select Destination Country</option>
            </select>
            <select id="destinationPortsSelect" name="destinationPort" class="input-field w-full md:w-1/3 lg:w-1/5"
                required>
                <option value="" disabled selected>Select Destination Port</option>
            </select>
            <input type="email" name="email" placeholder="Email" class="input-field w-full md:w-1/3 lg:w-1/5" required>
            <input type="text" name="phoneNumber" placeholder="Phone Number"
                class="input-field w-full md:w-1/3 lg:w-1/5" required>

            <button id="rate-inquiry-form-sub" class="rate-button w-full md:w-1/3 lg:w-1/5" type="submit">Get
                Rate Quote</button>
        </div>
    </section> -->


    <br />
    <br />
    <br />
    <section id="faq-section" class="py-10 bg-primary-light-gray text-primary-navy-blue">
        <div class="container mx-auto px-4 text-center mb-8 ">
            <h2 class="text-4xl font-bold mb-4">Frequently Asked Questions</h2>
            <p class="text-lg mb-8">Find answers to the most common questions</p>
        </div>
        <div class="container mx-auto px-4">

            <!-- FAQ Item 1 -->
            <div class="faq-item border-b border-secondary-grayish-blue py-4">
                <button
                    class="w-full text-left flex justify-between items-center font-semibold text-xl p-3 bg-primary-turquoise rounded-md shadow-md hover:bg-primary-Blue-light transition-all duration-300"
                    onclick="toggleFAQ(this)">
                    <span>What types of cargo can you handle?</span>
                    <i class="fas fa-chevron-down text-secondary-dark-blue transition-transform duration-300"></i>
                </button>
                <div class="faq-answer hidden mt-2 text-secondary-grayish-blue p-3 bg-white rounded-md shadow-inner">
                    <p>We handle a variety of cargo types, including bulk, refrigerated, hazardous, and oversized
                        shipments.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item border-b border-secondary-grayish-blue py-4">
                <button
                    class="w-full text-left flex justify-between items-center font-semibold text-xl p-3 bg-primary-turquoise rounded-md shadow-md hover:bg-primary-Blue-light transition-all duration-300"
                    onclick="toggleFAQ(this)">
                    <span>Do you offer both domestic and international shipping?</span>
                    <i class="fas fa-chevron-down text-secondary-dark-blue transition-transform duration-300"></i>
                </button>
                <div class="faq-answer hidden mt-2 text-secondary-grayish-blue p-3 bg-white rounded-md shadow-inner">
                    <p>Yes, we provide both domestic and international shipping options based on your needs.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item border-b border-secondary-grayish-blue py-4">
                <button
                    class="w-full text-left flex justify-between items-center font-semibold text-xl p-3 bg-primary-turquoise rounded-md shadow-md hover:bg-primary-Blue-light transition-all duration-300"
                    onclick="toggleFAQ(this)">
                    <span>How do your logistics services ensure timely delivery?</span>
                    <i class="fas fa-chevron-down text-secondary-dark-blue transition-transform duration-300"></i>
                </button>
                <div class="faq-answer hidden mt-2 text-secondary-grayish-blue p-3 bg-white rounded-md shadow-inner">
                    <p>Our logistics network leverages cutting-edge technology and robust planning to ensure shipments
                        are delivered on schedule, with real-time tracking and dedicated support for every order.</p>
                </div>
            </div>


            <!-- FAQ Item 4 -->
            <div class="faq-item border-b border-secondary-grayish-blue py-4">
                <button
                    class="w-full text-left flex justify-between items-center font-semibold text-xl p-3 bg-primary-turquoise rounded-md shadow-md hover:bg-primary-Blue-light transition-all duration-300"
                    onclick="toggleFAQ(this)">
                    <span>What sustainability practices does your company follow?</span>
                    <i class="fas fa-chevron-down text-secondary-dark-blue transition-transform duration-300"></i>
                </button>
                <div class="faq-answer hidden mt-2 text-secondary-grayish-blue p-3 bg-white rounded-md shadow-inner">
                    <p>We focus on eco-friendly operations, including optimized routing to reduce emissions, sustainable
                        packaging, and collaboration with partners committed to green logistics.</p>
                </div>
            </div>


            <!-- FAQ Item 5 -->
            <div class="faq-item border-b border-secondary-grayish-blue py-4">
                <button
                    class="w-full text-left flex justify-between items-center font-semibold text-xl p-3 bg-primary-turquoise rounded-md shadow-md hover:bg-primary-Blue-light transition-all duration-300"
                    onclick="toggleFAQ(this)">
                    <span>How do you ensure the safety of my goods?</span>
                    <i class="fas fa-chevron-down text-secondary-dark-blue transition-transform duration-300"></i>
                </button>
                <div class="faq-answer hidden mt-2 text-secondary-grayish-blue p-3 bg-white rounded-md shadow-inner">
                    <p>We follow industry-standard safety measures and regulations to protect your goods during transit.
                    </p>
                </div>
            </div>

        </div>
    </section>



    <br id="sss" />
    <br />
    <br />
    <br />
    <br />
    <section id="contact-section" class="py-10 bg-white text-primary-navy-blue " name="#ContactUs">
        <div class="container mx-auto px-4 text-center mb-8">
            <h2 class="text-4xl font-bold mb-4">Share Your Thoughts</h2>
            <p class="text-lg">We'd love to hear from you!</p>
        </div>

        <div class="container mx-auto px-4">
            <form class="bg-light rounded-lg p-6 shadow-md">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label class="block text-lg font-semibold mb-2" for="name">Name</label>
                        <input class="w-full p-3 border border-secondary-grayish-blue rounded" type="text" id="name"
                            required placeholder="Your Name">
                    </div>

                    <div class="form-group">
                        <label class="block text-lg font-semibold mb-2" for="email">Email</label>
                        <input class="w-full p-3 border border-secondary-grayish-blue rounded" type="email" id="email"
                            required placeholder="Your Email">
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="block text-lg font-semibold mb-2" for="message">Message</label>
                    <textarea class="w-full p-3 border border-secondary-grayish-blue rounded" id="message" rows="5"
                        required placeholder="Your Message"></textarea>
                </div>

                <button type="submit"
                    class="mt-4 bg-primary-light-blue text-white py-3 px-6 rounded hover:bg-primary-turquoise transition-colors duration-300">
                    Send Message
                </button>
            </form>
        </div>
    </section>
    <br />
    <footer class="bg-primary-navy-blue text-white py-10">
        <section id="sec-6" class="bg-primary-navy-blue text-white py-10">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 pr-6 pl-6">

                <!-- About Company Section -->
                <div class="about">
                    <h1>About Company</h1>
                    <h2>
                        Roshandarya
                        <p>Global Shipping & Transport Solutions</p>
                    </h2>
                    <p>We specialize in providing comprehensive transportation and logistics solutions
                        worldwide,
                        committed
                        to excellence and customer satisfaction.</p>
                    <!-- Map Integration -->
                    <h2>Our Location</h2>
                    <iframe loading="lazy"
                        src="https://maps.google.com/maps?q=tehran%2C%20motahary%20st%2C%20%20roshan%20darya%20pars&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
                        title="tehran, motahary st,  roshan darya pars"
                        aria-label="tehran, motahary st,  roshan darya pars" data-origwidth="" data-origheight=""
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </div>

                <!-- Explor Links Section -->
                <div class="links">
                    <h1 class="text-xl font-bold mb-4">Explore Links</h1>
                    <a href="https://saoi.ir" target="_blank"
                        class="block text-secondary-grayish-blue hover:underline">Shipping
                        association of Iran </a>
                    <a href="https://www.pmo.ir/" target="_blank"
                        class="block text-secondary-grayish-blue hover:underline">ports &
                        Maritime Organization</a>
                    <a href="https://tarabaran.com" class="block text-secondary-grayish-blue hover:underline"
                        target="_blank">tarabaran</a>
                    <a href="/Components/Services.html" class="block text-secondary-grayish-blue hover:underline">Our
                        Services</a>
                    <a href="./Components/ContactUs.html"
                        class="block text-secondary-grayish-blue hover:underline">Contact Us</a>
                    <!-- <a href="#" class="block text-secondary-grayish-blue hover:underline">Site Map</a> -->
                </div>

                <!-- Latest Posts Section -->
                <div class="posts">
                    <h1 class="text-xl font-bold mb-4">Latest Posts</h1>
                    <a href="#" class="block mb-2 text-secondary-grayish-blue hover:underline">
                        <span class="font-semibold">20<br>AUG</span> Important Tips for Efficient Shipping
                    </a>
                    <a href="#" class="block mb-2 text-secondary-grayish-blue hover:underline">
                        <span class="font-semibold">15<br>AUG</span> How We Ensure Fast Deliveries
                    </a>
                    <a href="#" class="block mb-2 text-secondary-grayish-blue hover:underline">
                        <span class="font-semibold">10<br>AUG</span> The Future of Marine Transport
                    </a>
                    <a href="#" class="block mb-2 text-secondary-grayish-blue hover:underline">
                        <span class="font-semibold">05<br>AUG</span> Customer Success Stories
                    </a>
                    <a href="#" class="block mb-2 text-secondary-grayish-blue hover:underline">
                        <span class="font-semibold">01<br>AUG</span> Navigating New Trade Routes
                    </a>
                </div>

                <!-- Contact Us Section -->
                <div class="contact" style="display: flex; gap: 10px;flex-direction: column;">
                    <h1>Contact Us</h1>
                    <p>Unit 4, No.235 , After Sarafraz cross road St , Motahari Ave , Tehran , IRAN</p>
                    <p>Email: info@roshandarya.com</p>
                    <p>Phone:<br /> (+98) 21 860 47 322 <br />(+98) 21 860 47 425 <br />(+98) 21 861 22 178 </p>
                    <br />
                    <!-- Social Media Links with Specific Colors -->
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

                    <div class="social-icons text-center">
                        <div class="social-icons space-x-4">
                            <a href="https://facebook.com" target="_blank" rel="none" style="color: #4267B2; ">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </a>
                            <a href="https://twitter.com" target="_blank" rel="" style="color: #1DA1F2;">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                            <a href="https://instagram.com" target="_blank" rel="" style="color: #C13584;">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                            <a href="https://linkedin.com" target="_blank" rel="" style="color: #0A66C2;">
                                <i class="fab fa-linkedin-in fa-2x"></i>
                            </a>
                            <a href="https://t.me/roshandarya" target="_blank" rel="" style="color: #0088cc;">
                                <i class="fab fa-telegram-plane fa-2x"></i>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </footer>

    <section id="sec-7" style="background-color: black; color: aliceblue; height: auto;">
        <div class="container">
            <p>Copyright @2022 | <span><a href="https://codiman.ir">CodiMan</a></span></p>
        </div>
    </section>


    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/+989122460188" target="_blank" aria-label="Chat with us on WhatsApp"
        class="fixed bottom-5 right-5 bg-green-500 text-white text-3xl w-14 h-14 flex items-center justify-center rounded-full shadow-lg hover:scale-110 transition-transform duration-300">
        <i class="fab fa-whatsapp"></i>
    </a>


    <!-- quoteModal-->
    <div id="quoteModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-10 ">

        <div class="bg-white rounded-lg w-11/12 md:w-1/2 lg:w-1/3" style="width: auto;">
            <span id="closeModal" class="text-right text-2xl cursor-pointer ml-4">&times;</span>

            <!-- مرحله اول -->
            <section id="step1">
                <form id="rate-inquiry-form"
                    class="container mx-auto px-4 flex flex-row flex-wrap gap-4 justify-center">
                    <!-- انتخاب نوع حمل و نقل -->
                    <select name="transportType" class="input-field w-full md:w-1/3 lg:w-1/5" required>
                        <option value="" disabled selected>Select Transport Type</option>
                        <option>Sea Transport</option>
                        <option>Land Transport</option>
                        <option>Air Transport</option>
                    </select>
                    <!-- انتخاب نوع کانتینر -->
                    <!-- انتخاب نوع کانتینر -->
                    <select name="containerType" class="input-field w-full md:w-1/3 lg:w-1/5 containerType" required>
                        <option value="" disabled selected>Select Container Type</option>
                        <option value="20">20 ft - Standard Container</option>
                        <option value="HQ">40 ft (HQ) - High Cube Container</option>
                        <option value="RF">RF - Refrigerated Container</option>
                        <option value="FR">FR - Flat Rack Container</option>
                        <option value="ISO">ISO Tank - Liquid Transport</option>
                        <option value="OP">OT - Open-Top Container</option>
                    </select>

                    <!-- فیلدهای ابعاد -->
                    <div name="dimensionsFields" class="hidden w-full flex flex-wrap gap-4 dimensionsFields">
                        <input type="number" name="length" placeholder="Length (m)" min="0"
                            class="input-field w-full md:w-1/3 lg:w-1/5">
                        <input type="number" name="width" placeholder="Width (m)" min="0"
                            class="input-field w-full md:w-1/3 lg:w-1/5">
                        <input type="number" name="height" placeholder="Height (m)" min="0"
                            class="input-field w-full md:w-1/3 lg:w-1/5">
                    </div>

                    <!-- گزینه‌های In-Gauge و Out of Gauge -->
                    <div name="gaugeOptions"
                        class="hidden w-full flex gap-4 justify-around flex-row text-gray-700 gaugeOptions">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="gaugeType" value="In-Gauge" class="form-radio">
                            <span class="text-white font-bold">In-Gauge</span>
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="radio" name="gaugeType" value="Out of Gauge" class="form-radio">
                            <span class="text-white font-bold">Out of Gauge</span>
                        </label>
                    </div>


                    <select name="isoTankType"
                        class="input-field w-full md:w-1/3 lg:w-1/5 hidden isoTankOptions isoTankOptions">
                        <option value="" disabled selected>Select ISO Tank Type</option>
                        <option value="T7">T7</option>
                        <option value="T1">T11</option>
                        <option value="T50">T50</option>
                    </select>

                    <input type="number" name="quantity" placeholder="Enter Quantity" min="1" class="input-field w-full"
                        required>
                    <select id="countrySelect" name="departureCountry"
                        class="input-field w-full md:w-1/3 lg:w-1/5 countrySelect" required>
                        <option value="" disabled selected>Select Departure Country</option>
                    </select>
                    <select id="portsSelect" name="departurePort"
                        class="input-field w-full md:w-1/3 lg:w-1/5 portsSelect" required>
                        <option value="" disabled selected>Select Departure Port</option>
                    </select>
                    <select id="destinationCountry" name="destinationCountry"
                        class="input-field w-full md:w-1/3 lg:w-1/5 destinationCountry" required>
                        <option value="" disabled selected>Select Destination Country</option>
                    </select>
                    <select id="destinationPortsSelect" name="destinationPort"
                        class="input-field w-full md:w-1/3 lg:w-1/5 destinationPortsSelect" required>
                        <option value="" disabled selected>Select Destination Port</option>
                    </select>
                    <input type="email" name="email" placeholder="Email" class="input-field w-full md:w-1/3 lg:w-1/5"
                        required>
                    <input type="text" name="phoneNumber" placeholder="Phone Number"
                        class="input-field w-full md:w-1/3 lg:w-1/5" required>

                    <button id="rate-inquiry-form-sub"
                        class="rate-button w-full md:w-1/3 lg:w-1/5 rate-inquiry-form-sub" type="submit">Get
                        Rate Quote</button>
                </form>
            </section>

            <!-- مرحله دوم -->
            <section id="step2" class="py-6 hidden">
                <form id="otp-verification-form"
                    class="container mx-auto px-4 flex flex-wrap gap-4 justify-center otp-verification-form">
                    <p id="phone-display" class="w-full text-center text-gray-700 phone-display"></p>
                    <input type="text" name="verificationCode" placeholder="Enter OTP"
                        class="input-field w-full md:w-1/3 lg:w-1/5" required>
                    <button type="submit" class="rate-button w-full md:w-1/3 lg:w-1/5">Verify OTP</button>
                    <button type="button" id="back-to-step1"
                        class="text-blue-500 underline w-full text-center mt-4 back-to-step1">Back</button>
                </form>

            </section>
        </div>
    </div>





    <!-- <script src="js/sectionLoader.js"></script> -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="/js/custome-javascript.js"></script>
    <script src="/js/blog.js"></script>
    <script src="/js/Gallery.js"></script>
    <script src="/js/service-section.js"></script>
    <script src="/js/toggleFAQ.js"></script>
    <script src="/js/counters.js"></script>
    <script src="/js/toggleFAQ.js"></script>
    <script src="/js/quoteModel.js"></script>
    <!-- <script src="js/rate-inquiry.js"></script> -->
    <!-- <script src="persian/js/convertLangulage.js"></script> -->
    <script>
        AOS.init();
    </script>
</body>

</html>