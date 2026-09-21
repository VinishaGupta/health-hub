/* =========================================================
   PURE HEALTH
   HEALTH INSIGHTS MODULE
========================================================= */

let isEditable = false;

let uploadedCertificates = [];

let vitalsHistory = [];

let selectedHandicapTypes = [];


/* =========================================================
   CURRENT DATE
========================================================= */

function setCurrentDate() {

    const el = document.getElementById("currentDate");

    if (!el) return;

    const today = new Date();

    const formatted =
        today.getFullYear() + "-" +
        String(today.getMonth() + 1).padStart(2, "0") + "-" +
        String(today.getDate()).padStart(2, "0");

    el.value = formatted;
}


/* =========================================================
   TOGGLE HEALTH EDIT
========================================================= */

function toggleHealthEdit() {

    isEditable = !isEditable;

    const fields = [
        "bloodGroup",
        "bloodCert",
        "heightInput",
        "weightInput",
        "systolicInput",
        "diastolicInput",
        "temperatureInput",
        "bloodSugarInput",
        "addVitalsBtn"
    ];

    fields.forEach(function (id) {

        const el = document.getElementById(id);

        if (el) {
            el.disabled = !isEditable;
        }

    });


    const saveFooter =
        document.getElementById("bloodGroupSaveFooter");

    if (saveFooter) {
        saveFooter.style.display =
            isEditable ? "block" : "none";
    }


    const editButton =
        document.getElementById("editHealthBtn");

    if (editButton) {

        editButton.innerHTML =
            isEditable
                ? `<i class="bi bi-x-circle"></i> Cancel`
                : `<i class="bi bi-pencil-square"></i> Edit Details`;

        editButton.classList.toggle(
            "active",
            isEditable
        );
    }


    const healthCard =
        document.getElementById("healthCard");

    if (healthCard) {

        healthCard.classList.toggle(
            "locked",
            !isEditable
        );
    }
}


/* =========================================================
   ADD VITALS
========================================================= */

function addVitals() {

    if (!isEditable) return;


    const systolic =
        document.getElementById("systolicInput").value;

    const diastolic =
        document.getElementById("diastolicInput").value;

    const height =
        document.getElementById("heightInput").value;

    const weight =
        document.getElementById("weightInput").value;

    const temperature =
        document.getElementById("temperatureInput").value;

    const bloodSugar =
        document.getElementById("bloodSugarInput").value;

    const date =
        document.getElementById("currentDate").value;


    if (
        !height ||
        !weight ||
        !systolic ||
        !diastolic
    ) {

        alert("Please fill all vitals.");

        return;
    }


    const bp =
        `${systolic}/${diastolic}`;


    const newEntry = {

        id: Date.now(),

        height: height,

        weight: weight,

        temperature: temperature,

        bloodSugar: bloodSugar,

        bp: bp,

        date: date,

        source: "OWN"
    };


    vitalsHistory.unshift(newEntry);


    saveVitalEntry(newEntry);


    renderTable();


    document.getElementById("heightInput").value = "";

    document.getElementById("weightInput").value = "";

    document.getElementById("systolicInput").value = "";

    document.getElementById("diastolicInput").value = "";

    document.getElementById("temperatureInput").value = "";

    document.getElementById("bloodSugarInput").value = "";


    setCurrentDate();
}


/* =========================================================
   DELETE VITAL
========================================================= */

function deleteVitals(id) {

    vitalsHistory =
        vitalsHistory.filter(
            item => item.id !== id
        );

    renderTable();
}


/* =========================================================
   RENDER VITALS TABLE
========================================================= */

function renderTable() {

    const tbody =
        document.getElementById("vitalsTableBody");

    if (!tbody) return;

    tbody.innerHTML = "";


    vitalsHistory.forEach(function (item) {

        const row =
            document.createElement("tr");


        row.innerHTML = `

            <td>${item.date || "-"}</td>

            <td>${item.weight ? item.weight + " kg" : "-"}</td>

            <td>${item.height ? item.height + " cm" : "-"}</td>

            <td>
                ${item.temperature
                    ? item.temperature + " °F"
                    : "-"
                }
            </td>

            <td>
                ${item.bp || "-"}
            </td>

            <td>
                ${item.bloodSugar
                    ? item.bloodSugar + " mg/dL"
                    : "-"
                }
            </td>

            <td>
                <span class="status-badge ${
                    item.source === "DR"
                        ? "dr-status"
                        : "own-status"
                }">
                    ${item.source || "OWN"}
                </span>
            </td>

            <td>

                <button
                    type="button"
                    class="delete-btn"
                    onclick="deleteVitals(${item.id})"
                >
                    Delete
                </button>

            </td>
        `;


        tbody.appendChild(row);

    });
}


/* =========================================================
   SAVE HEALTH DATA
========================================================= */

function saveHealthData() {

    const bloodGroupElement =
        document.getElementById("bloodGroup");


    const data = {

        bloodGroup:
            bloodGroupElement
                ? bloodGroupElement.value
                : "",

        vitalsHistory:
            vitalsHistory
    };


    submitHealth(data)

        .then(function (resp) {

            if (resp && resp.success) {

                alert("Health data saved");

            } else {

                alert("Failed to save health data");

            }

        })

        .catch(function () {

            alert("Failed to save health data");

        });


    isEditable = false;


    const fields = [
        "bloodGroup",
        "bloodCert",
        "heightInput",
        "weightInput",
        "systolicInput",
        "diastolicInput",
        "temperatureInput",
        "bloodSugarInput",
        "addVitalsBtn"
    ];


    fields.forEach(function (id) {

        const el =
            document.getElementById(id);

        if (el) {
            el.disabled = true;
        }

    });


    const saveFooter =
        document.getElementById(
            "bloodGroupSaveFooter"
        );

    if (saveFooter) {
        saveFooter.style.display = "none";
    }


    const editButton =
        document.getElementById("editHealthBtn");

    if (editButton) {

        editButton.innerHTML =
            `<i class="bi bi-pencil-square"></i> Edit Details`;

        editButton.classList.remove("active");
    }


    const healthCard =
        document.getElementById("healthCard");

    if (healthCard) {
        healthCard.classList.add("locked");
    }
}


/* =========================================================
   SUBMIT HEALTH
========================================================= */

async function submitHealth(data) {

    const form = new FormData();


    form.append(
        "bloodGroup",
        data.bloodGroup || ""
    );


    form.append(
        "vitalsHistory",
        JSON.stringify(
            data.vitalsHistory || []
        )
    );


    const fileEl =
        document.getElementById("bloodCert");


    if (
        fileEl &&
        fileEl.files &&
        fileEl.files.length
    ) {

        form.append(
            "bloodCert",
            fileEl.files[0]
        );
    }


    const apiUrl =
        window.profileApiUrl
            ? window.profileApiUrl(
                "../../api/profile/save_health.php"
            )
            : "../../api/profile/save_health.php";


    const res =
        await fetch(
            apiUrl,
            {
                method: "POST",
                body: form,
                credentials: "same-origin"
            }
        );


    return res.json();
}


/* =========================================================
   LOAD HEALTH
========================================================= */

async function loadHealth() {

    try {

        const apiUrl =
            window.profileApiUrl
                ? window.profileApiUrl(
                    "../../api/profile/get_health.php"
                )
                : "../../api/profile/get_health.php";


        const res =
            await fetch(
                apiUrl,
                {
                    credentials: "same-origin"
                }
            );


        const json =
            await res.json();


        if (
            !json.success ||
            !json.data
        ) {
            return;
        }


        const d =
            json.data;


        const bloodGroup =
            document.getElementById(
                "bloodGroup"
            );


        if (
            bloodGroup &&
            d.blood_group
        ) {

            bloodGroup.value =
                d.blood_group;
        }


        if (
            Array.isArray(
                d.vitalsHistory
            ) &&
            d.vitalsHistory.length
        ) {

            vitalsHistory =
                d.vitalsHistory.map(
                    function (v, idx) {

                        return {

                            id:
                                Date.now() + idx,

                            height:
                                v.height,

                            weight:
                                v.weight,

                            temperature:
                                v.temperature,

                            bloodSugar:
                                v.bloodSugar,

                            bp:
                                v.bp,

                            date:
                                v.date,

                            source:
                                v.source || "DR"
                        };
                    }
                );


            renderTable();
        }

    } catch (err) {

        console.warn(
            "Failed to load health data",
            err
        );
    }
}


/* =========================================================
   HEALTH SECTION CONTROLLER
========================================================= */

function openHealthSection(type) {

    const menu =
        document.getElementById(
            "healthMenuSection"
        );

    const basic =
        document.getElementById(
            "basicHealthSection"
        );

    const handicap =
        document.getElementById(
            "handicapSection"
        );


    if (!menu || !basic || !handicap) {
        return;
    }


    menu.style.display = "none";

    basic.style.display = "none";

    handicap.style.display = "none";


    if (type === "basic") {

        basic.style.display = "block";

        setCurrentDate();

        renderTable();
    }


    if (type === "handicap") {

        handicap.style.display = "block";

        renderHandicapTags();

        renderCertificateFields();

        renderHandicapTable();
    }
}


/* =========================================================
   BACK BUTTON
========================================================= */

function goBackHealthMenu() {

    const menu =
        document.getElementById(
            "healthMenuSection"
        );

    const basic =
        document.getElementById(
            "basicHealthSection"
        );

    const handicap =
        document.getElementById(
            "handicapSection"
        );


    if (!menu || !basic || !handicap) {
        return;
    }


    basic.style.display = "none";

    handicap.style.display = "none";

    menu.style.display = "grid";
}


/* =========================================================
   ADD HANDICAP TYPE
========================================================= */

function addHandicapType() {

    const select =
        document.getElementById(
            "handicapTypeSelect"
        );


    if (!select) return;


    const value =
        select.value;


    if (!value) return;


    if (
        selectedHandicapTypes.includes(
            value
        )
    ) {

        select.value = "";

        return;
    }


    selectedHandicapTypes.push(value);


    renderHandicapTags();

    renderCertificateFields();


    select.value = "";
}


/* =========================================================
   REMOVE HANDICAP TYPE
========================================================= */

function removeHandicapType(type) {

    selectedHandicapTypes =
        selectedHandicapTypes.filter(
            function (t) {
                return t !== type;
            }
        );


    renderHandicapTags();

    renderCertificateFields();
}


/* =========================================================
   RENDER HANDICAP TAGS
========================================================= */

function renderHandicapTags() {

    const container =
        document.getElementById(
            "selectedHandicapTags"
        );


    if (!container) return;


    container.innerHTML = "";


    selectedHandicapTypes.forEach(
        function (type) {

            const tag =
                document.createElement(
                    "div"
                );


            tag.style.cssText = `
                background:#2563eb;
                color:white;
                padding:5px 10px;
                border-radius:20px;
                display:flex;
                align-items:center;
                gap:6px;
                font-size:13px;
            `;


            const typeSpan =
                document.createElement(
                    "span"
                );

            typeSpan.textContent =
                type;


            const removeSpan =
                document.createElement(
                    "span"
                );

            removeSpan.textContent =
                "✕";

            removeSpan.style.cursor =
                "pointer";


            removeSpan.addEventListener(
                "click",
                function () {
                    removeHandicapType(type);
                }
            );


            tag.appendChild(typeSpan);

            tag.appendChild(removeSpan);

            container.appendChild(tag);
        }
    );
}


/* =========================================================
   CERTIFICATE SECTION
========================================================= */

function toggleCertificateSection() {

    renderCertificateFields();
}


/* =========================================================
   RENDER CERTIFICATE FIELDS
========================================================= */

function renderCertificateFields() {

    const stateBox =
        document.getElementById(
            "stateCertSection"
        );

    const centralBox =
        document.getElementById(
            "centralCertSection"
        );


    if (!stateBox || !centralBox) {
        return;
    }


    stateBox.innerHTML = "";

    centralBox.innerHTML = "";


    const stateCheck =
        document.getElementById(
            "stateGovCheck"
        );


    const centralCheck =
        document.getElementById(
            "centralGovCheck"
        );


    const stateChecked =
        stateCheck
            ? stateCheck.checked
            : false;


    const centralChecked =
        centralCheck
            ? centralCheck.checked
            : false;


    selectedHandicapTypes.forEach(
        function (type) {

            if (stateChecked) {

                const wrapper =
                    document.createElement(
                        "div"
                    );

                wrapper.className =
                    "field-group";


                wrapper.innerHTML = `
                    <label class="field-label">
                        State Certificate - ${escapeHtml(type)}
                    </label>

                    <input
                        type="file"
                        class="form-control"
                        accept="image/*,.pdf"
                    >
                `;


                stateBox.appendChild(
                    wrapper
                );
            }


            if (centralChecked) {

                const wrapper =
                    document.createElement(
                        "div"
                    );

                wrapper.className =
                    "field-group";


                wrapper.innerHTML = `
                    <label class="field-label">
                        Central Certificate - ${escapeHtml(type)}
                    </label>

                    <input
                        type="file"
                        class="form-control"
                        accept="image/*,.pdf"
                    >
                `;


                centralBox.appendChild(
                    wrapper
                );
            }

        }
    );
}


/* =========================================================
   SAVE HANDICAP DATA
========================================================= */

function saveHandicapData() {

    const data = {

        is_handicapped: true,

        types:
            selectedHandicapTypes || [],

        certificates: {

            state: {},

            central: {}
        }
    };


    const stateInputs =
        document.querySelectorAll(
            "#stateCertSection input[type='file']"
        );


    const centralInputs =
        document.querySelectorAll(
            "#centralCertSection input[type='file']"
        );


    /* =====================================================
       STATE FILES
    ===================================================== */

    stateInputs.forEach(
        function (input, index) {

            if (!input.files.length) {
                return;
            }


            const label =
                input.closest(".field-group")
                    ?.querySelector("label")
                    ?.innerText ||
                `type_${index}`;


            const handicapType =
                label.replace(
                    "State Certificate - ",
                    ""
                );


            data.certificates.state[
                handicapType
            ] = input.files[0];


            const existingIndex =
                uploadedCertificates.findIndex(
                    function (item) {

                        return (
                            item.handicapType ===
                                handicapType &&
                            item.type ===
                                "State Govt"
                        );
                    }
                );


            const newData = {

                handicapType:
                    handicapType,

                type:
                    "State Govt",

                image:
                    URL.createObjectURL(
                        input.files[0]
                    )
            };


            if (existingIndex !== -1) {

                uploadedCertificates[
                    existingIndex
                ] = newData;

            } else {

                uploadedCertificates.push(
                    newData
                );
            }
        }
    );


    /* =====================================================
       CENTRAL FILES
    ===================================================== */

    centralInputs.forEach(
        function (input, index) {

            if (!input.files.length) {
                return;
            }


            const label =
                input.closest(".field-group")
                    ?.querySelector("label")
                    ?.innerText ||
                `type_${index}`;


            const handicapType =
                label.replace(
                    "Central Certificate - ",
                    ""
                );


            data.certificates.central[
                handicapType
            ] = input.files[0];


            const existingIndex =
                uploadedCertificates.findIndex(
                    function (item) {

                        return (
                            item.handicapType ===
                                handicapType &&
                            item.type ===
                                "Central Govt"
                        );
                    }
                );


            const newData = {

                handicapType:
                    handicapType,

                type:
                    "Central Govt",

                image:
                    URL.createObjectURL(
                        input.files[0]
                    )
            };


            if (existingIndex !== -1) {

                uploadedCertificates[
                    existingIndex
                ] = newData;

            } else {

                uploadedCertificates.push(
                    newData
                );
            }
        }
    );


    /* =====================================================
       FORM DATA
    ===================================================== */

    const form =
        new FormData();


    form.append(
        "is_handicapped",
        data.is_handicapped
    );


    form.append(
        "types",
        JSON.stringify(
            data.types
        )
    );


    form.append(
        "state_certificates",
        JSON.stringify(
            Object.keys(
                data.certificates.state
            )
        )
    );


    form.append(
        "central_certificates",
        JSON.stringify(
            Object.keys(
                data.certificates.central
            )
        )
    );


    Object.keys(
        data.certificates.state
    ).forEach(
        function (key) {

            form.append(
                "state_" + key,
                data.certificates.state[key]
            );
        }
    );


    Object.keys(
        data.certificates.central
    ).forEach(
        function (key) {

            form.append(
                "central_" + key,
                data.certificates.central[key]
            );
        }
    );


    /*
    ========================================================
    BACKEND API
    ========================================================

    fetch("../../api/profile/save_handicap.php", {
        method: "POST",
        body: form,
        credentials: "same-origin"
    })
    .then(res => res.json())
    .then(resp => {
        if (resp.success) {
            renderHandicapTable();
            alert("Handicap details saved successfully");
        } else {
            alert("Failed to save handicap details");
        }
    })
    .catch(err => {
        console.error(err);
        alert("Server error while saving handicap data");
    });

    ========================================================
    */


    renderHandicapTable();


    alert(
        "Handicap details saved successfully"
    );
}


/* =========================================================
   SAVE BLOOD GROUP
========================================================= */

async function saveBloodGroupData() {

    const form =
        new FormData();


    const bloodGroup =
        document.getElementById(
            "bloodGroup"
        );


    const bloodCert =
        document.getElementById(
            "bloodCert"
        );


    form.append(
        "bloodGroup",
        bloodGroup
            ? bloodGroup.value
            : ""
    );


    if (
        bloodCert &&
        bloodCert.files.length
    ) {

        form.append(
            "bloodCert",
            bloodCert.files[0]
        );
    }


    try {

        const response =
            await fetch(
                "../../api/profile/save_blood_group.php",
                {
                    method: "POST",
                    body: form,
                    credentials: "same-origin"
                }
            );


        const result =
            await response.json();


        if (result.success) {

            alert(
                "Blood Group saved"
            );

        } else {

            alert(
                "Failed to save"
            );
        }

    } catch (err) {

        console.error(err);

        alert(
            "Server error"
        );
    }
}


/* =========================================================
   SAVE VITAL ENTRY
========================================================= */

async function saveVitalEntry(vital) {

    try {

        const response =
            await fetch(
                "../../api/profile/save_vital.php",
                {
                    method: "POST",

                    headers: {
                        "Content-Type":
                            "application/json"
                    },

                    credentials:
                        "same-origin",

                    body:
                        JSON.stringify(vital)
                }
            );


        const result =
            await response.json();


        if (!result.success) {

            console.error(
                "Vital save failed"
            );
        }

    } catch (err) {

        console.error(
            "Vital save error",
            err
        );
    }
}


/* =========================================================
   HANDICAP TABLE
========================================================= */

function renderHandicapTable() {

    const tbody =
        document.getElementById(
            "handicapCertificateTableBody"
        );


    if (!tbody) return;


    tbody.innerHTML = "";


    uploadedCertificates.forEach(
        function (item, index) {

            const row =
                document.createElement(
                    "tr"
                );


            row.innerHTML = `

                <td>
                    ${index + 1}
                </td>

                <td>
                    ${escapeHtml(
                        item.handicapType
                    )}
                </td>

                <td>
                    ${escapeHtml(
                        item.type
                    )}
                </td>

                <td>

                    <button
                        type="button"
                        class="custom-view-btn"
                    >
                        View
                    </button>

                </td>
            `;


            const viewButton =
                row.querySelector(
                    ".custom-view-btn"
                );


            if (viewButton) {

                viewButton.addEventListener(
                    "click",
                    function () {

                        viewCertificate(
                            item.image
                        );
                    }
                );
            }


            tbody.appendChild(row);
        }
    );
}


/* =========================================================
   VIEW CERTIFICATE
========================================================= */

function viewCertificate(imageUrl) {

    const image =
        document.getElementById(
            "certificatePreviewImage"
        );


    const modal =
        document.getElementById(
            "certificatePreviewModal"
        );


    if (!image || !modal) {
        return;
    }


    image.src =
        imageUrl;


    modal.style.display =
        "flex";
}


/* =========================================================
   CLOSE CERTIFICATE MODAL
========================================================= */

function closeCertificateModal() {

    const modal =
        document.getElementById(
            "certificatePreviewModal"
        );


    if (modal) {

        modal.style.display =
            "none";
    }
}


/* =========================================================
   ESCAPE HTML
========================================================= */

function escapeHtml(value) {

    return String(value)
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
}


/* =========================================================
   INITIALIZATION
========================================================= */

window.addEventListener(
    "DOMContentLoaded",
    function () {

        const menu =
            document.getElementById(
                "healthMenuSection"
            );

        const basic =
            document.getElementById(
                "basicHealthSection"
            );

        const handicap =
            document.getElementById(
                "handicapSection"
            );


        if (menu) {
            menu.style.display = "grid";
        }


        if (basic) {
            basic.style.display = "none";
        }


        if (handicap) {
            handicap.style.display = "none";
        }


        setCurrentDate();

        renderTable();

        renderHandicapTags();

        renderCertificateFields();

        renderHandicapTable();


        /*
        Load existing health data
        when backend API is ready.

        loadHealth();
        */
    }
);