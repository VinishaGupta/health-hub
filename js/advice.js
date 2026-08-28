/* ==========================================================
                HOSPITAL ADVICE
                LANGUAGE SWITCHING
========================================================== */

function showAdvice(language) {

    // Hide all sections
    document
        .querySelectorAll(".advice-content")
        .forEach(function(section) {

            section.classList.remove("active");

        });


    // Reset all buttons
    document
        .querySelectorAll(".language-btn")
        .forEach(function(button) {

            button.classList.remove("active");

        });


    // Show selected section
    const selectedSection =
        document.getElementById(language);

    if (selectedSection) {

        selectedSection.classList.add("active");

    }


    // Activate selected button
    const selectedButton =
        document.getElementById(language + "Btn");

    if (selectedButton) {

        selectedButton.classList.add("active");

    }

}