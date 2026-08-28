function showInstructions(language) {

    // Hide all instruction sections
    document
        .querySelectorAll('.instruction-content')
        .forEach(section => {

            section.classList.remove('active');

        });


    // Reset all buttons
    document
        .querySelectorAll('.lang-btn')
        .forEach(button => {

            button.classList.remove('active-tab');

            button.classList.add(
                'bg-white',
                'text-sky-500'
            );

        });


    // Show selected language
    const selectedSection =
        document.getElementById(language);

    if (selectedSection) {

        selectedSection.classList.add('active');

    }


    // Highlight selected button
    const selectedButton =
        document.getElementById(language + 'Btn');

    if (selectedButton) {

        selectedButton.classList.add('active-tab');

        selectedButton.classList.remove(
            'bg-white',
            'text-sky-500'
        );

    }

}