<div class="content">
    <div id="thankyou_div_1">
        <p>Please do not reload, close, or use the Back button during this task.</p>
        <h2>Feedback</h2>
        <p>
            Do you have any comments about the study, for example concerning the clarity of the instructions or technical issues you might have experienced? (optional)
        </p>
        <div>
            <textarea class="form-control" id="general_comments" rows="4" cols="80"
                      placeholder="Feel free to leave it blank if you don't have any comments."
                      style="width: 1100px;"></textarea><br>
            <input type="button" value="Submit" id="thankyou_btn" class="btn btn-success">
        </div>
    </div>

    <div id="thankyou_div_2" style="display: none;">
        <h2>Thank you!</h2>
        <p>You have completed the experiment. Thanks a lot!</p>

        <!-- Completion code will appear here -->
        <div id="completion_code_container" style="margin-bottom: 20px; display: none;">
            <p><strong>Your completion code:</strong></p>
            <h3 id="completion_code" style="font-family: monospace; font-size: 1.5em;"></h3>
            <p>Please copy and paste this code for proof of completion.</p>
        </div>

        <p>You can now close the tab.</p>

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
