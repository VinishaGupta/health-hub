/* ==========================================================
                HEALTH INSURANCE
                MOCK DATA VERSION
========================================================== */


/* ==========================================================
                    VARIABLES
========================================================== */

let insuranceCompanies = [];

let selectedInsurance = [];

let insuranceSelectionPage = null;

let insuranceDirectoryPage = null;


/* ==========================================================
                    INITIALIZE
========================================================== */

function initializeInsurance(){

    console.log("Insurance Section Loaded");

    insuranceSelectionPage =
        document.getElementById(
            "insuranceSelectionPage"
        );

    insuranceDirectoryPage =
        document.getElementById(
            "insuranceDirectory"
        );


    /* ------------------------------------------
            LOAD MOCK DATA
    ------------------------------------------ */

    if(
        typeof mockInsuranceCompanies !==
        "undefined"
    ){

        insuranceCompanies =
            mockInsuranceCompanies.map(
                company => ({

                    id: Number(company.id),

                    name: company.name || "",

                    website: company.website || ""

                })
            );

    }


    /* ------------------------------------------
            CREATE INSURANCE CARDS
    ------------------------------------------ */

    createInsuranceCards(
        insuranceCompanies
    );


    /* ------------------------------------------
            SEARCH
    ------------------------------------------ */

    searchInsurance();


    /* ------------------------------------------
            BUTTONS
    ------------------------------------------ */

    insuranceButtons();


    /* ------------------------------------------
            DIRECTORY
    ------------------------------------------ */

    initializeInsuranceDirectory();

}


/* ==========================================================
                    CREATE CARDS
========================================================== */

function createInsuranceCards(data){

    const list =
        document.getElementById(
            "insuranceList"
        );


    if(!list){

        console.error(
            "insuranceList not found."
        );

        return;

    }


    list.innerHTML = "";


    /* ------------------------------------------
            NO RESULTS
    ------------------------------------------ */

    if(data.length === 0){

        list.innerHTML = `

            <div class="insurance-no-result">

                No insurance company found.

            </div>

        `;

        updateInsuranceCount();

        return;

    }


    /* ------------------------------------------
            CREATE EACH CARD
    ------------------------------------------ */

    data.forEach(company => {

        const checked =
            selectedInsurance.includes(
                company.id
            )
            ? "checked"
            : "";


        const first =
            company.name
                .charAt(0)
                .toUpperCase();


        list.innerHTML += `

            <div class="insurance-item">

                <input
                    type="checkbox"
                    id="insurance${company.id}"
                    value="${company.id}"
                    ${checked}
                >


                <label
                    class="insurance-card"
                    for="insurance${company.id}"
                >


                    <div class="insurance-left">


                        <div class="insurance-badge">

                            ${first}

                        </div>


                        <div class="insurance-company-info">

                            <h4>

                                ${company.name}

                            </h4>

                            <p>

                                Health Insurance Company

                            </p>

                        </div>


                    </div>


                    <div class="insurance-check">

                        <i class="fa-solid fa-check"></i>

                    </div>


                </label>


            </div>

        `;

    });


    attachInsuranceEvents();

    updateInsuranceCount();

}


/* ==========================================================
                    CHECKBOX EVENTS
========================================================== */

function attachInsuranceEvents(){

    document
        .querySelectorAll(
            "#insuranceList input"
        )
        .forEach(box => {

            box.addEventListener(
                "change",
                updateInsuranceCount
            );

        });

}


/* ==========================================================
                    UPDATE COUNT
========================================================== */

function updateInsuranceCount(){

    const checked =
        document.querySelectorAll(
            "#insuranceList input:checked"
        );


    const count =
        document.getElementById(
            "insuranceSelectedCount"
        );


    if(count){

        count.innerText =
            checked.length;

    }

}


/* ==========================================================
                    SEARCH
========================================================== */

function searchInsurance(){

    const searchInput =
        document.getElementById(
            "insuranceSearch"
        );


    if(!searchInput){

        return;

    }


    searchInput.addEventListener(
        "input",
        function(){

            const value =
                this.value
                    .toLowerCase()
                    .trim();


            const filtered =
                insuranceCompanies.filter(
                    company =>

                        company.name
                            .toLowerCase()
                            .includes(value)

                );


            createInsuranceCards(
                filtered
            );

        }
    );

}


/* ==========================================================
                    RESET
========================================================== */

function resetInsurance(){

    selectedInsurance = [];


    document
        .querySelectorAll(
            "#insuranceList input"
        )
        .forEach(box => {

            box.checked = false;

        });


    updateInsuranceCount();


    /* Clear search */

    const search =
        document.getElementById(
            "insuranceSearch"
        );


    if(search){

        search.value = "";

    }


    createInsuranceCards(
        insuranceCompanies
    );

}


/* ==========================================================
                    SAVE
========================================================== */

function saveInsurance(){

    selectedInsurance = [];


    document
        .querySelectorAll(
            "#insuranceList input:checked"
        )
        .forEach(box => {

            selectedInsurance.push(
                Number(box.value)
            );

        });


    console.log(
        "Selected Insurance IDs:",
        selectedInsurance
    );


    console.log(
        "Selected Insurance Companies:",
        insuranceCompanies.filter(
            company =>
                selectedInsurance.includes(
                    company.id
                )
        )
    );


    showSuccessModal([

        "Health Insurance Companies saved successfully.",

        selectedInsurance.length +
        " insurance companies selected.",

        "The selected companies will be available in the User Module."

    ]);

}


/* ==========================================================
                    BUTTONS
========================================================== */

function insuranceButtons(){

    const resetButton =
        document.querySelector(
            ".insurance-reset"
        );


    const saveButton =
        document.querySelector(
            ".insurance-save"
        );


    if(resetButton){

        resetButton.addEventListener(
            "click",
            resetInsurance
        );

    }


    if(saveButton){

        saveButton.addEventListener(
            "click",
            saveInsurance
        );

    }

}


/* ==========================================================
                INSURANCE DIRECTORY
========================================================== */

function initializeInsuranceDirectory(){

    const openButton =
        document.getElementById(
            "viewInsuranceCompanies"
        );


    const backButton =
        document.getElementById(
            "backToInsurance"
        );


    if(openButton){

        openButton.addEventListener(
            "click",
            openInsuranceDirectory
        );

    }


    if(backButton){

        backButton.addEventListener(
            "click",
            closeInsuranceDirectory
        );

    }

}


/* ==========================================================
            OPEN INSURANCE DIRECTORY
========================================================== */

function openInsuranceDirectory(){

    if(
        !insuranceSelectionPage ||
        !insuranceDirectoryPage
    ){

        return;

    }


    insuranceSelectionPage.style.display =
        "none";


    insuranceDirectoryPage.style.display =
        "block";


    createInsuranceCompanyTable();

}


/* ==========================================================
            CLOSE INSURANCE DIRECTORY
========================================================== */

function closeInsuranceDirectory(){

    if(
        !insuranceSelectionPage ||
        !insuranceDirectoryPage
    ){

        return;

    }


    insuranceDirectoryPage.style.display =
        "none";


    insuranceSelectionPage.style.display =
        "block";

}


/* ==========================================================
            CREATE DIRECTORY TABLE
========================================================== */

function createInsuranceCompanyTable(){

    const tbody =
        document.getElementById(
            "insuranceCompanyTableBody"
        );


    if(!tbody){

        console.error(
            "insuranceCompanyTableBody not found."
        );

        return;

    }


    tbody.innerHTML = "";


    insuranceCompanies.forEach(
        (company, index) => {

            tbody.innerHTML += `

                <tr>

                    <td>

                        ${index + 1}

                    </td>


                    <td>

                        ${company.name}

                    </td>


                    <td>

                        <button
                            type="button"
                            class="primary-btn visit-insurance-btn"
                            data-link="${company.website}"
                        >

                            <i class="fa-solid fa-globe"></i>

                            Visit Website

                        </button>

                    </td>

                </tr>

            `;

        }
    );

}


/* ==========================================================
                VISIT WEBSITE
========================================================== */

document.addEventListener(
    "click",
    function(event){

        const button =
            event.target.closest(
                ".visit-insurance-btn"
            );


        if(!button){

            return;

        }


        const website =
            button.dataset.link;


        if(
            website &&
            website !== "#"
        ){

            window.open(
                website,
                "_blank"
            );

        }

    }
);