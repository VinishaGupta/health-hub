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

/* ==========================================================
                SUCCESS MODAL
========================================================== */

function showSuccessModal(messages){

    /* Remove existing modal if already present */

    const existingModal =
        document.getElementById("insuranceSuccessModal");

    if(existingModal){

        existingModal.remove();

    }


    /* Make sure messages are always an array */

    if(!Array.isArray(messages)){

        messages = [messages];

    }


    /* Create modal */

    const modal =
        document.createElement("div");

    modal.id =
        "insuranceSuccessModal";


    modal.innerHTML = `

        <div class="insurance-success-overlay">

            <div class="insurance-success-modal">

                <button
                    type="button"
                    class="insurance-success-close"
                    aria-label="Close"
                >

                    &times;

                </button>


                <div class="insurance-success-icon">

                    <i class="fa-solid fa-check"></i>

                </div>


                <h2>

                    Saved Successfully

                </h2>


                <div class="insurance-success-message">

                    ${messages.map(message => `

                        <p>${message}</p>

                    `).join("")}

                </div>


                <button
                    type="button"
                    class="insurance-success-ok"
                >

                    OK

                </button>

            </div>

        </div>

    `;


    document.body.appendChild(modal);


    /* ======================================================
                        CLOSE MODAL
    ====================================================== */

    const closeModal = () => {

        modal.remove();

    };


    const closeButton =
        modal.querySelector(
            ".insurance-success-close"
        );


    const okButton =
        modal.querySelector(
            ".insurance-success-ok"
        );


    closeButton.addEventListener(
        "click",
        closeModal
    );


    okButton.addEventListener(
        "click",
        closeModal
    );


    /* Close when clicking outside */

    modal
        .querySelector(
            ".insurance-success-overlay"
        )
        .addEventListener(
            "click",
            function(event){

                if(
                    event.target === this
                ){

                    closeModal();

                }

            }
        );


    /* ======================================================
                        MODAL CSS
    ====================================================== */

    if(
        !document.getElementById(
            "insuranceSuccessModalStyles"
        )
    ){

        const style =
            document.createElement("style");

        style.id =
            "insuranceSuccessModalStyles";


        style.textContent = `

            .insurance-success-overlay {

                position: fixed;

                inset: 0;

                background: rgba(0, 0, 0, 0.65);

                display: flex;

                align-items: center;

                justify-content: center;

                z-index: 99999;

                padding: 20px;

            }


            .insurance-success-modal {

                position: relative;

                width: 100%;

                max-width: 450px;

                background: #ffffff;

                border-radius: 18px;

                padding: 35px 30px;

                text-align: center;

                box-shadow:
                    0 20px 60px
                    rgba(0, 0, 0, 0.25);

                animation:
                    insuranceModalIn
                    0.25s ease;

            }


            .insurance-success-close {

                position: absolute;

                top: 12px;

                right: 15px;

                border: none;

                background: transparent;

                font-size: 28px;

                color: #777;

                cursor: pointer;

                line-height: 1;

            }


            .insurance-success-close:hover {

                color: #222;

            }


            .insurance-success-icon {

                width: 65px;

                height: 65px;

                margin: 0 auto 18px;

                border-radius: 50%;

                background: #16a34a;

                color: #ffffff;

                display: flex;

                align-items: center;

                justify-content: center;

                font-size: 28px;

            }


            .insurance-success-modal h2 {

                margin: 0 0 18px;

                color: #111827;

                font-size: 24px;

                font-weight: 700;

            }


            .insurance-success-message p {

                margin: 8px 0;

                color: #4b5563;

                font-size: 15px;

                line-height: 1.5;

            }


            .insurance-success-ok {

                margin-top: 22px;

                padding: 11px 30px;

                border: none;

                border-radius: 8px;

                background: #0b4da2;

                color: #ffffff;

                font-size: 15px;

                font-weight: 600;

                cursor: pointer;

            }


            .insurance-success-ok:hover {

                opacity: 0.9;

            }


            @keyframes insuranceModalIn {

                from {

                    opacity: 0;

                    transform: scale(0.92);

                }

                to {

                    opacity: 1;

                    transform: scale(1);

                }

            }


            @media (max-width: 480px) {

                .insurance-success-modal {

                    padding: 30px 20px;

                }

                .insurance-success-modal h2 {

                    font-size: 21px;

                }

            }

        `;


        document.head.appendChild(style);

    }

}