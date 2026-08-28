<?php

/*
|--------------------------------------------------------------------------
| HOSPITAL ADVICE - USER MODULE
|--------------------------------------------------------------------------
| MOCK DATA ONLY
| Regional language is decided by Hospital Admin.
|--------------------------------------------------------------------------
*/


/* ==========================================================
   MOCK REGIONAL LANGUAGE
========================================================== */

// This will eventually come from the database.
// Example: Marathi, Kannada, Bengali, Gujarati, Tamil, etc.

$regionalLanguageName = "मराठी";


/* ==========================================================
   ENGLISH ADVICE
========================================================== */

$adviceEnglish = [

    [
        'heading' => 'General Hospital Advice',
        'items' => [
            'Please arrive at least 15 minutes before your appointment time.',
            'Carry your hospital card and government ID proof.',
            'Bring all previous medical reports and prescriptions.',
            'Follow the doctor\'s instructions carefully.'
        ]
    ],

    [
        'heading' => 'During Your Visit',
        'items' => [
            'Keep your mobile phone on silent mode inside consultation rooms.',
            'Maintain cleanliness inside the hospital premises.',
            'Follow the instructions provided by hospital staff.',
            'In case of emergency, contact the nearest hospital staff member immediately.'
        ]
    ],

    [
        'heading' => 'Important Health Advice',
        'items' => [
            'Take medicines on time as prescribed by your doctor.',
            'Do not stop medication without consulting your doctor.',
            'Drink enough water and maintain a healthy diet.'
        ]
    ]

];


/* ==========================================================
   HINDI ADVICE
========================================================== */

$adviceHindi = [

    [
        'heading' => 'सामान्य अस्पताल सलाह',
        'items' => [
            'कृपया अपनी नियुक्ति से कम से कम 15 मिनट पहले अस्पताल पहुँचें।',
            'अपना अस्पताल कार्ड और पहचान पत्र साथ लाएँ।',
            'अपनी सभी पुरानी रिपोर्ट और दवाइयों की पर्चियाँ साथ रखें।',
            'डॉक्टर के निर्देशों का सावधानीपूर्वक पालन करें।'
        ]
    ],

    [
        'heading' => 'अस्पताल में आपकी यात्रा के दौरान',
        'items' => [
            'परामर्श कक्ष में मोबाइल फोन को साइलेंट मोड पर रखें।',
            'अस्पताल परिसर में स्वच्छता बनाए रखें।',
            'अस्पताल के कर्मचारियों द्वारा दिए गए निर्देशों का पालन करें।',
            'आपात स्थिति में तुरंत अस्पताल के कर्मचारियों से संपर्क करें।'
        ]
    ]

];


/* ==========================================================
   REGIONAL ADVICE
   MOCK: MARATHI
========================================================== */

$adviceRegional = [

    [
        'heading' => 'सामान्य रुग्णालय सूचना',
        'items' => [
            'कृपया आपल्या भेटीच्या वेळेच्या किमान 15 मिनिटे आधी रुग्णालयात पोहोचा.',
            'आपले रुग्णालय कार्ड आणि ओळखपत्र सोबत आणा.',
            'मागील सर्व वैद्यकीय अहवाल आणि प्रिस्क्रिप्शन सोबत आणा.',
            'डॉक्टरांच्या सूचनांचे काळजीपूर्वक पालन करा.'
        ]
    ],

    [
        'heading' => 'महत्त्वाच्या आरोग्य सूचना',
        'items' => [
            'डॉक्टरांनी सांगितलेली औषधे वेळेवर घ्या.',
            'डॉक्टरांचा सल्ला घेतल्याशिवाय औषधे बंद करू नका.',
            'पुरेसे पाणी प्या आणि निरोगी आहार घ्या.',
            'आपत्कालीन परिस्थितीत त्वरित रुग्णालयातील कर्मचाऱ्यांशी संपर्क साधा.'
        ]
    ]

];

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Hospital Advice</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

<link rel="stylesheet" href="../css/advice.css">

</head>


<body>


<div class="advice-page">


    <!-- ==================================================
                    PAGE HEADING
    =================================================== -->

    <div class="page-heading">

        <h1>
            Hospital Advice
        </h1>

        <p>
            Please read the following advice carefully
            before your visit.
        </p>

    </div>


    <!-- ==================================================
                    LANGUAGE TABS
    =================================================== -->

    <div class="language-tabs">


        <!-- ENGLISH -->

        <button
            id="englishBtn"
            class="language-btn active"
            onclick="showAdvice('english')"
        >
            English
        </button>


        <!-- HINDI -->

        <button
            id="hindiBtn"
            class="language-btn"
            onclick="showAdvice('hindi')"
        >
            हिंदी
        </button>


        <!-- REGIONAL -->

        <button
            id="regionalBtn"
            class="language-btn"
            onclick="showAdvice('regional')"
        >

            <?= htmlspecialchars($regionalLanguageName) ?>

        </button>


    </div>


    <!-- ==================================================
                    ADVICE CARD
    =================================================== -->

    <div class="advice-card">


        <!-- ==================================================
                        ENGLISH
        =================================================== -->

        <div
            id="english"
            class="advice-content active"
        >

            <h2 class="english-title">
                English Advice
            </h2>


            <?php foreach ($adviceEnglish as $section): ?>

                <div class="advice-section">

                    <h3>
                        <?= htmlspecialchars($section['heading']) ?>
                    </h3>

                    <ul>

                        <?php foreach ($section['items'] as $item): ?>

                            <li>
                                <?= htmlspecialchars($item) ?>
                            </li>

                        <?php endforeach; ?>

                    </ul>

                </div>

            <?php endforeach; ?>

        </div>


        <!-- ==================================================
                        HINDI
        =================================================== -->

        <div
            id="hindi"
            class="advice-content"
        >

            <h2 class="hindi-title">
                हिंदी सलाह
            </h2>


            <?php foreach ($adviceHindi as $section): ?>

                <div class="advice-section">

                    <h3>
                        <?= htmlspecialchars($section['heading']) ?>
                    </h3>

                    <ul>

                        <?php foreach ($section['items'] as $item): ?>

                            <li>
                                <?= htmlspecialchars($item) ?>
                            </li>

                        <?php endforeach; ?>

                    </ul>

                </div>

            <?php endforeach; ?>

        </div>


        <!-- ==================================================
                    REGIONAL LANGUAGE
        =================================================== -->

        <div
            id="regional"
            class="advice-content"
        >

            <h2 class="regional-title">

                <?= htmlspecialchars($regionalLanguageName) ?>

                Advice

            </h2>


            <?php foreach ($adviceRegional as $section): ?>

                <div class="advice-section">

                    <h3>
                        <?= htmlspecialchars($section['heading']) ?>
                    </h3>

                    <ul>

                        <?php foreach ($section['items'] as $item): ?>

                            <li>
                                <?= htmlspecialchars($item) ?>
                            </li>

                        <?php endforeach; ?>

                    </ul>

                </div>

            <?php endforeach; ?>

        </div>


    </div>

</div>


<script src="../js/advice.js"></script>
</body>

</html>