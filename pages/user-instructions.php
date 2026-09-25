<?php
/*
|--------------------------------------------------------------------------
| HEALTH HUB - USER INSTRUCTIONS POPUP
|--------------------------------------------------------------------------
| This file contains ONLY the popup structure.
|
| Actual information will come from the external repository/API.
| No instruction, date, promise text, or other content is hard-coded here.
|--------------------------------------------------------------------------
*/
?>

<div
    id="userInstructionsOverlay"
    class="user-instructions-overlay"
    role="dialog"
    aria-modal="true"
    aria-labelledby="userInstructionsTitle"
>

    <div class="user-instructions-window">

        <!-- ======================================================
                            LAST UPDATE
        ======================================================= -->

        <div
            id="userInstructionsDate"
            class="user-instructions-date"
        ></div>


        <!-- ======================================================
                            TITLE
        ======================================================= -->

        <h2
            id="userInstructionsTitle"
            class="user-instructions-title"
        ></h2>


        <!-- ======================================================
                        INSTRUCTIONS LIST
        ======================================================= -->

        <ul
            id="userInstructionsList"
            class="user-instructions-list"
        ></ul>


        <!-- ======================================================
                            BOTTOM
        ======================================================= -->

        <div class="user-instructions-bottom">

            <!-- PROMISE TEXT -->

            <div
                id="userInstructionsPromise"
                class="user-instructions-promise"
            ></div>


            <!-- CONTINUE BUTTON -->

            <button
                type="button"
                id="userInstructionsContinue"
                class="user-instructions-continue"
            >

                <span
                    id="userInstructionsContinueText"
                ></span>

                <span
                    class="user-instructions-arrow"
                    aria-hidden="true"
                >
                    ➜
                </span>

            </button>

        </div>

    </div>

</div>