<?php

// ==========================================================
// MOCK DATA
// ==========================================================
// Temporary data only.
// Later these variables will come from the database.


// ==========================================================
// ENGLISH
// ==========================================================

$instructionEnglish = '
    <h3>Cardiology Instructions</h3>

    <ul>
        <li>Patients should reach 15 minutes before appointment.</li>
        <li>Carry previous medical reports.</li>
        <li>Bring your hospital card and government ID proof.</li>
        <li>Follow the doctor\'s instructions carefully.</li>
    </ul>

    <h3>Parking Instructions</h3>

    <ul>
        <li>Free parking is available.</li>
        <li>Parking is in front of the building.</li>
    </ul>
';


// ==========================================================
// HINDI
// ==========================================================

$instructionHindi = '
    <h3>हृदय रोग विभाग</h3>

    <ul>
        <li>मरीज समय से पहले आएँ।</li>
        <li>पुरानी मेडिकल रिपोर्ट साथ लाएँ।</li>
        <li>अपना अस्पताल कार्ड और पहचान पत्र साथ लाएँ।</li>
        <li>डॉक्टर के निर्देशों का सावधानीपूर्वक पालन करें।</li>
    </ul>

    <h3>पार्किंग निर्देश</h3>

    <ul>
        <li>निःशुल्क पार्किंग उपलब्ध है।</li>
        <li>पार्किंग भवन के सामने उपलब्ध है।</li>
    </ul>
';


// ==========================================================
// REGIONAL
// ==========================================================

$instructionRegional = '
    <h3>
        हृदयरोग विभाग /
        ಹೃದಯ ವಿಭಾಗ /
        হৃদরোগ বিভাগ
    </h3>

    <ul>
        <li>
            रुग्णांनी वेळेआधी यावे /
            ರೋಗಿಗಳು ಸಮಯಕ್ಕಿಂತ ಮುಂಚಿತವಾಗಿ ಬರಬೇಕು /
            রোগীরা নির্ধারিত সময়ের ১৫ মিনিট আগে আসুন।
        </li>

        <li>
            जुने रिपोर्ट सोबत आणा /
            ಹಳೆಯ ವರದಿಗಳನ್ನು ತರಿರಿ /
            পুরোনো রিপোর্ট সঙ্গে আনুন।
        </li>
    </ul>

    <h3>
        पार्किंग सूचना /
        ಪಾರ್ಕಿಂಗ್ ಸೂಚನೆ /
        পার্কিং নির্দেশনা
    </h3>

    <ul>
        <li>
            मोफत पार्किंग उपलब्ध आहे /
            ಉಚಿತ ಪಾರ್ಕಿಂಗ್ ಲಭ್ಯವಿದೆ /
            বিনামূল্যে পার্কিং উপলব্ধ।
        </li>
    </ul>
';

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Hospital Instructions</title>


    <!-- ==========================================================
                            TAILWIND
    ========================================================== -->

    <script src="https://cdn.tailwindcss.com"></script>


    <!-- ==========================================================
                            GOOGLE FONT
    ========================================================== -->

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >


    <!-- ==========================================================
                            CUSTOM CSS
    ========================================================== -->

    <link
        rel="stylesheet"
        href="../css/instructions.css"
    >


    <!-- ==========================================================
                        RESPONSIVE BUTTON CSS
    ========================================================== -->

    <style>

        /* ==========================================================
                        LANGUAGE NAVIGATION
        ========================================================== */

        .language-navigation {

            display: flex;

            flex-wrap: nowrap;

            justify-content: center;

            align-items: center;

            gap: 16px;

            width: 100%;

        }


        /* ==========================================================
                        LANGUAGE BUTTON
        ========================================================== */

        .lang-btn {

            flex: 1;

            min-width: 0;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;

        }


        /* ==========================================================
                            MOBILE
        ========================================================== */

        @media (max-width: 600px) {

            .language-navigation {

                gap: 8px;

            }


            .lang-btn {

                flex: 1;

                min-width: 0;

                padding-left: 6px !important;

                padding-right: 6px !important;

                padding-top: 12px !important;

                padding-bottom: 12px !important;

                font-size: 15px !important;

                white-space: nowrap;

                overflow: hidden;

                text-overflow: ellipsis;

            }


            /*
            Responsive page heading
            */

            .page-title {

                font-size: 2rem !important;

                line-height: 1.2;

            }


            /*
            Responsive description
            */

            .page-description {

                font-size: 1rem !important;

                line-height: 1.5;

            }


            /*
            Responsive instruction card
            */

            .instructions-card {

                padding: 22px !important;

            }


            /*
            Responsive instruction heading
            */

            .instruction-title {

                font-size: 1.5rem !important;

            }


            /*
            Responsive instruction content
            */

            .instruction-data {

                font-size: 1rem !important;

                line-height: 1.6;

            }

        }


        /* ==========================================================
                        VERY SMALL MOBILE
        ========================================================== */

        @media (max-width: 360px) {

            .language-navigation {

                gap: 5px;

            }


            .lang-btn {

                padding-left: 3px !important;

                padding-right: 3px !important;

                padding-top: 10px !important;

                padding-bottom: 10px !important;

                font-size: 12px !important;

                border-radius: 12px !important;

            }


            .instructions-card {

                padding: 18px !important;

            }

        }

    </style>

</head>


<body>


<div class="max-w-6xl mx-auto px-6 py-12">


    <!-- ==================================================
                    PAGE HEADING
    ================================================== -->

    <div class="text-center mb-10">

        <h1
            class="text-5xl font-bold text-blue-700 page-title"
        >

            Hospital Instructions

        </h1>


        <p
            class="text-gray-500 text-xl mt-3 page-description"
        >

            Please read the following instructions carefully
            before your visit.

        </p>

    </div>



    <!-- ==================================================
                    LANGUAGE NAVIGATION
    ================================================== -->

    <div class="language-navigation mb-10">


        <!-- ==================================================
                            ENGLISH
        ================================================== -->

        <button
            id="englishBtn"
            onclick="showInstructions('english')"
            class="lang-btn active-tab px-8 py-3 rounded-2xl border-2 border-sky-500 font-bold text-lg transition-all"
        >

            English

        </button>



        <!-- ==================================================
                            HINDI
        ================================================== -->

        <button
            id="hindiBtn"
            onclick="showInstructions('hindi')"
            class="lang-btn bg-white text-sky-500 px-8 py-3 rounded-2xl border-2 border-sky-500 font-bold text-lg transition-all hover:bg-sky-500 hover:text-white"
        >

            हिंदी

        </button>



        <!-- ==================================================
                        REGIONAL LANGUAGE
        ================================================== -->

        <button
            id="regionalBtn"
            onclick="showInstructions('regional')"
            class="lang-btn bg-white text-sky-500 px-8 py-3 rounded-2xl border-2 border-sky-500 font-bold text-lg transition-all hover:bg-sky-500 hover:text-white"
        >

            Regional Language

        </button>


    </div>



    <!-- ==================================================
                    INSTRUCTIONS CARD
    ================================================== -->

    <div
        class="bg-white rounded-3xl shadow-lg p-10 instructions-card"
    >


        <!-- ==================================================
                        ENGLISH
        ================================================== -->

        <div
            id="english"
            class="instruction-content active"
        >

            <h2
                class="text-3xl font-bold text-sky-500 mb-8 instruction-title"
            >

                English Instructions

            </h2>


            <div
                class="instruction-data text-lg text-gray-700"
            >

                <?= $instructionEnglish ?>

            </div>

        </div>



        <!-- ==================================================
                        HINDI
        ================================================== -->

        <div
            id="hindi"
            class="instruction-content"
        >

            <h2
                class="text-3xl font-bold text-green-600 mb-8 instruction-title"
            >

                हिंदी निर्देश

            </h2>


            <div
                class="instruction-data text-lg text-gray-700"
            >

                <?= $instructionHindi ?>

            </div>

        </div>



        <!-- ==================================================
                    REGIONAL LANGUAGE
        ================================================== -->

        <div
            id="regional"
            class="instruction-content"
        >

            <h2
                class="text-3xl font-bold text-purple-600 mb-8 instruction-title"
            >

                Regional Language

            </h2>


            <div
                class="instruction-data text-lg text-gray-700"
            >

                <?= $instructionRegional ?>

            </div>

        </div>


    </div>

</div>



<!-- ==========================================================
                    JAVASCRIPT
========================================================== -->

<script src="../js/instructions.js"></script>


</body>

</html>