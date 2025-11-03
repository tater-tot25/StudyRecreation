
    <div class="row">
        <div class="col">
            <div class="content">
                <p>Please do not reload, close, or use the Back button during this task.</p>
                <h2>Commitment Question</h2>
                <div>
                    <p>We care about the quality of our data. In order for us to get the most accurate measures of your knowledge and opinions, it is important that you thoughtfully provide your best answers to each question in this study.</p>
                    <p><b>Will you provide your best answers to each question in this study?</b></p>
                    <div>
                        <div>
                            <input type="radio"
                                   id="commitment_question_provide"
                                   name="participant_commitment_question"
                                   class="commitment_question_choice"
                                   value="provide"
                                   onclick = "getCommitmentQuestionValue(this)">
                            <label for="commitment_question_provide">I will provide my best answers</label>
                        </div>
                        
                        <div>
                            <input type="radio"
                                   id="commitment_question_notprovide"
                                   name="participant_commitment_question"
                                   class="commitment_question_choice"
                                   value="notprovide"
                                   onclick = "getCommitmentQuestionValue(this)">
                            <label for="commitment_question_notprovide">I will not provide my best answers</label>
                        </div>

                         <div>
                            <input type="radio"
                                   id="commitment_question_nopromise"
                                   name="participant_commitment_question"
                                   class="commitment_question_choice"
                                   value="nopromise"
                                   onclick = "getCommitmentQuestionValue(this)">
                            <label for="commitment_question_nopromise">I cannot promise either way</label>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

<script type="text/javascript">

    let commitment_question_answer = -1
    let commitment_question_answered = false

    $('.commitment_question_choice').on('input', function() {
        commitment_question_answer = $(this).val();
    });

</script>

<script type="text/javascript">

    function getCommitmentQuestionValue(theRadio){
        let value  = theRadio.value;
        console.log('commitment question value:'+value)
        
        commitment_question_answered = true;
        commitment_question_answer = value;
        
        console.log("commitment_quesion_answered: "+ commitment_question_answered);
        console.log("commitment_question_answer: "+ commitment_question_answer);

        if (commitment_question_answered) $("#btn_<?php echo $id;?>").prop('disabled', false);
    }

    $('body').on('show', function(e, type){
        if (type === '<?php echo $id;?>'){
            console.log("showing page " + type);

            let id = <?php echo json_encode($id); ?>;
            let page_number = <?php echo json_encode($page_number); ?>;
            setProgressBar(page_number, id, page_total_number)
        }
    });

    $('body').on('next', function(e, type){
        if (type === '<?php echo $id;?>'){
            measurements['commitment_q'] = commitment_question_answer;
        }
    });
</script>