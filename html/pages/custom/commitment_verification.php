
    <div class="row">
        <div class="col">
            <div class="content">
                <h2>Commitment Verification</h2>
                <div>
                    <p><b>Did you answer all questions in the study according to the provided instructions?</b></p>
                    <p>Please answer honestly. Your answer has NO consequences for you or the extra credit you will receive if taking this study for extra credit.</p>
                    <div>
                        <div>
                            <input type="radio"
                                   id="commitment_verification_all"
                                   name="participant_commitment_verification"
                                   class="commitment_verification_choice"
                                   value="all"
                                   onclick = "getCommitmentVerificationValue(this)">
                            <label for="commitment_verification_all">I answered all questions according to the provided instructions</label>
                        </div>
                        
                        <div>
                             <input type="radio"
                                   id="commitment_verification_sometimes"
                                   name="participant_commitment_verification"
                                   class="commitment_verification_choice"
                                   value="sometimes"
                                   onclick = "getCommitmentVerificationValue(this)">
                            <label for="commitment_verifcation_sometimes">I sometimes chose random answer options because I was not motivated to answer the questions or did not know how to answer</label>
                        </div>

                         <div>
                             <input type="radio"
                                   id="commitment_verification_often"
                                   name="participant_commitment_verification"
                                   class="commitment_verification_choice"
                                   value="often"
                                   onclick = "getCommitmentVerificationValue(this)">
                            <label for="commitment_verification_often">I often chose random answer options because I wanted to finish as quickly as possible</label>
                        </div>

                    </div>

                </div>

                <p> </p>

                <div>
                    <p><b>Did you complete the study without distractions?</b></p>
                    <p>Please answer honestly. Your answer has NO consequences for you or the extra credit you will receive if taking this study for extra credit.</p>
                    <div>
                        <div>
                            <input type="radio"
                                   id="distraction_attention"
                                   name="participant_distraction"
                                   class="distraction_choice"
                                   value="attention"
                                   onclick = "getDistractionValue(this)">
                            <label for="distraction_attention">I completed the study with full attention</label>
                        </div>
                        
                        <div>
                             <input type="radio"
                                   id="distraction_sometimes"
                                   name="participant_distraction"
                                   class="distraction_choice"
                                   value="sometimes"
                                   onclick = "getDistractionValue(this)">
                            <label for="distraction_sometimes">I was sometimes distracted (by people, noises, etc.)</label>
                        </div>

                         <div>
                             <input type="radio"
                                   id="distraction_often"
                                   name="participant_distraction"
                                   class="distraction_choice"
                                   value="often"
                                   onclick = "getDistractionValue(this)">
                            <label for="distraction_often">I was often distracted (by people, noises, etc.)</label>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

<script type="text/javascript">

    let commitment_verification_answer = -1
    let commitment_verification_answered = false

    let distraction_answer = -1
    let distraction_answered = false

    $('.commitment_verification_choice').on('input', function() {
        commitment_verification_answer = $(this).val();
    });

    $('.distraction_choice').on('input', function() {
        distraction_answer = $(this).val();
    });

</script>

<script type="text/javascript">

    function getCommitmentVerificationValue(theRadio){
        let value  = theRadio.value;
        console.log('commitment verification value:'+value)
        
        commitment_verification_answered = true;
        commitment_verification_answer = value;
        
        console.log("commitment_verification_answered: "+ commitment_verification_answered);
        console.log("commitment_verification_answer: "+ commitment_verification_answer);

       // if (commitment_verification_answered) $("#btn_<?php echo $id;?>").prop('disabled', false);
    }

    function getDistractionValue(theRadio){
        let value  = theRadio.value;
        console.log('distraction value:'+value)
        
        distraction_answered = true;
        distraction_answer = value;
        
        console.log("distraction_answered: "+ distraction_answered);
        console.log("distraction_answer: "+ distraction_answer);

       if (distraction_answered) $("#btn_<?php echo $id;?>").prop('disabled', false);
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
            measurements['commitment_ver'] = commitment_verification_answer;
            measurements['distraction'] = distraction_answer;
        }
    });
</script>