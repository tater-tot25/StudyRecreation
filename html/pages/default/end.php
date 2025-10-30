<div class="content">
    <div id="thankyou_div_1">
        <h2>Feedback</h2>
        <p>
            Do you have any comment about the study, for example concerning the clarity of the instructions or technical issues you might have experienced? (optional)
        </p>
        <div>
            <textarea class="form-control" id="general_comments" rows="4" cols="80"
                      placeholder="Feel free to leave it blank, if you don't have any comment :)"
                      style="width: 1100px;"></textarea><br>
            <input type="button" value="Submit and Get Paid" id="thankyou_btn" class="btn btn-success">
        </div>
    </div>

    <div id="thankyou_div_2" style="display: none;">
        <h2>Thank you!</h2>
        <p>You have completed the experiment. Thanks a lot!</p>

        <!-- Completion code will appear here -->
        <div id="completion_code_container" style="margin-bottom: 20px; display: none;">
            <p><strong>Your completion code:</strong></p>
            <h3 id="completion_code" style="font-family: monospace; font-size: 1.5em;"></h3>
            <p>Please copy and paste this code into Prolific.</p>
        </div>

        <p>
            Click
            <a id="prolific_link"
               href="https://app.prolific.co/submissions/complete?cc=CDR2RKQG"
               target="_BLANK"><strong>here</strong></a>
            to report your task completion to the Prolific system.
        </p>

        <p>Now you can close the tab. If you have any questions or general comments, do not hesitate to contact us:</p>

        <div align="justify" style="max-width: 100%; display: flex; margin-left: auto; margin-right: auto;">
            <div align="justify" style="max-width: 30%; display: block; margin-left: 0; margin-right: auto;">
                <p><strong>Tingying He</strong></p>
                <p>PhD Student</p>
                <p><a href="https://www.aviz.fr/Main/HomePage" target="_blank">AVIZ</a> Research Team</p>
                <p>Université Paris-Saclay</p>
                <p>
                    <a href="mailto:tingying.he@inria.fr?cc=petra.isenberg@inria.fr,tobias.isenberg@inria.fr&amp;subject=%5BTexture%20Design%5D%20Question%20about%20the%20experiment1">
                        tingying.he@inria.fr
                    </a>
                </p>
            </div>

            <div align="justify" style="max-width: 30%; display: block; margin-left: 0; margin-right: auto;">
                <p><strong>Petra Isenberg</strong></p>
                <p>Senior Research Scientist</p>
                <p><a href="https://www.aviz.fr/Main/HomePage" target="_blank">AVIZ</a> Research Team</p>
                <p>Inria Saclay Île-de-France</p>
                <p>
                    <a href="mailto:petra.isenberg@inria.fr?cc=tingying.he@inria.fr,tobias.isenberg@inria.fr&amp;subject=%5BTexture%20Design%5D%20Question%20about%20the%20experiment1">
                        petra.isenberg@inria.fr
                    </a>
                </p>
            </div>

            <div align="justify" style="max-width: 30%; display: block; margin-left: 0; margin-right: auto;">
                <p><strong><a href="https://tobias.isenberg.cc/" target="_blank">Tobias Isenberg</a></strong></p>
                <p>Senior Research Scientist</p>
                <p><a href="https://www.aviz.fr/Main/HomePage" target="_blank">AVIZ</a> Research Team</p>
                <p>Inria Saclay Île-de-France</p>
                <p>
                    <a href="mailto:tobias.isenberg@inria.fr?cc=tingying.he@inria.fr,petra.isenberg@inria.fr&amp;subject=%5BTexture%20Design%5D%20Question%20about%20the%20experiment1">
                        tobias.isenberg@inria.fr
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    let nextBtn = document.getElementById("btn_<?php echo $id;?>");
    if (nextBtn) nextBtn.style.display = 'none';
});

document.getElementById('thankyou_btn').onclick = function () {
    // Get comments
    measurements['optionalComments'] = '"' + $("#general_comments").val() + '"';

    // Send comments
    $.ajax({
        url: 'html/ajax/measurements.php',
        type: 'POST',
        data: JSON.stringify(measurements),
        contentType: 'application/json',
        async: false,
        success: function () {
            console.log('Comments saved');
        }
    });

    // Hide feedback form
    document.getElementById("thankyou_div_1").style.display = 'none';

    // Generate and log completion code
    $.ajax({
        url: 'html/ajax/save_code.php',
        type: 'POST',
        success: function (response) {
            const data = typeof response === "string" ? JSON.parse(response) : response;
            const code = data.code;

            $("#completion_code").text(code);
            $("#completion_code_container").show();
            document.getElementById("thankyou_div_2").style.display = 'block';
        },
        error: function () {
            $("#completion_code").text("Error generating code. Please contact the researchers.");
            $("#completion_code_container").show();
            document.getElementById("thankyou_div_2").style.display = 'block';
        }
    });

    // Trigger logging event
    $('body').trigger('finished');
};
</script>
