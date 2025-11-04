
    <div class="row">
        <div class="col">
            <div class="content">
                <p>Please do not reload, close, or use the Back button during this task.</p>
                <div>
                    <p>
                        <b>1. What is your highest academic degree?</b>
                    </p>
                    <div>
                        <div>
                            <input type="radio"
                                   id="education_bachelor"
                                   name="participant_education"
                                   class="education_choice"
                                   value="bachelor"
                                   onclick = "getEducationValue(this)">
                            <label for="education_bachelor">Bachelor's (or equivalent)</label>
                        </div>

                        <div>
                            <input type="radio"
                                   id="education_master"
                                   name="participant_education"
                                   class="education_choice"
                                   value="master"
                                   onclick = "getEducationValue(this)">
                            <label for="education_master">Master's (or equivalent)</label>
                        </div>

                        <div>
                            <input type="radio"
                                   id="education_phd"
                                   name="participant_education"
                                   class="education_choice"
                                   value="phd"
                                   onclick = "getEducationValue(this)">
                            <label for="education_phd">PhD (or equivalent)</label>
                        </div>

                        <div>
                            <input type="radio"
                                   id="education_none"
                                   name="participant_education"
                                   class="education_choice"
                                   value="none"
                                   onclick = "getEducationValue(this)">
                            <label for="education_none">Prefer not to answer</label>
                        </div>

                        <div>
                            <input type="radio"
                                   id="education_other"
                                   name="participant_education"
                                   class="education_choice"
                                   value="other"
                                   onclick = "getEducationValue(this)">
                            <label for="education_other">Other:</label>
                        </div>


                    </div>

                    <div id="participant_education_textarea" style="display: none">
                        <textarea name="participant_education"
                                  id="participant_education"
                                  class="education form-control"
                                  oninput="getEducationTextarea(this)"
                                  placeholder="Please enter your highest education level here."
                                  style="width:300px; text-align: center;" required autofocus=""></textarea>
                    </div>
                </div>
                <p> </p>
                <div>
                    <p>
                        <b>2. What is your gender?</b>
                    </p>
                    <div>
                        <div>
                            <input type="radio"
                                   id="gender_male"
                                   name="participant_gender"
                                   class="gender_choice"
                                   value="male"
                                   onclick = "getGenderValue(this)">
                            <label for="gender_male">Male</label>
                        </div>

                        <div>
                             <input type="radio"
                                   id="gender_female"
                                   name="participant_gender"
                                   class="gender_choice"
                                   value="female"
                                   onclick = "getGenderValue(this)">
                            <label for="gender_female">Female</label>
                        </div>

                        <div>
                             <input type="radio"
                                   id="gender_none"
                                   name="participant_gender"
                                   class="gender_choice"
                                   value="none"
                                   onclick = "getGenderValue(this)">
                            <label for="gender_none">Prefer not to answer</label>
                        </div>

                        <div>
                             <input type="radio"
                                   id="gender_other"
                                   name="participant_gender"
                                   class="gender_choice"
                                   value="other"
                                   onclick = "getGenderValue(this)">
                            <label for="gender_other">Other:</label>
                        </div>
                    </div>

                    <div id="participant_gender_textarea" style="display: none">
                        <textarea name="participant_gender"
                                  id="participant_gender"
                                  class="gender form-control"
                                  oninput="getGenderTextarea(this)"
                                  placeholder="Please enter your gender here."
                                  style="width:300px; text-align: center;" required autofocus=""></textarea>
                    </div>
                </div>
                <p> </p>
                <div>
                    <p>
                        <b>3. What is your ethnicity?</b>
                    </p>
                    <div>
                        <div>
                            <input type="radio"
                                   id="ethnicity_white"
                                   name="participant_ethnicity"
                                   class="ethnicity_choice"
                                   value="white"
                                   onclick = "getEthnicityValue(this)">
                            <label for="ethnicity_white">White/Caucasian</label>
                        </div>

                        <div>
                            <input type="radio"
                                   id="ethnicity_hispanic"
                                   name="participant_ethnicity"
                                   class="ethnicity_choice"
                                   value="hispanic"
                                   onclick = "getEthnicityValue(this)">
                            <label for="ethnicity_hispanic">Hispanic/Latino</label>
                        </div>

                       <div>
                            <input type="radio"
                                   id="ethnicity_black"
                                   name="participant_ethnicity"
                                   class="ethnicity_choice"
                                   value="black"
                                   onclick = "getEthnicityValue(this)">
                            <label for="ethnicity_black">Black/African American</label>
                        </div>

                        <div>
                            <input type="radio"
                                   id="ethnicity_native"
                                   name="participant_ethnicity"
                                   class="ethnicity_choice"
                                   value="native"
                                   onclick = "getEthnicityValue(this)">
                            <label for="ethnicity_native">Native American/American Indian</label>
                        </div>

                        <div>
                            <input type="radio"
                                   id="ethnicity_asian"
                                   name="participant_ethnicity"
                                   class="ethnicity_choice"
                                   value="asian"
                                   onclick = "getEthnicityValue(this)">
                            <label for="ethnicity_asian">Asian/Pacific Islander</label>
                        </div>

                        <div>
                            <input type="radio"
                                   id="ethnicity_none"
                                   name="participant_ethnicity"
                                   class="ethnicity_choice"
                                   value="none"
                                   onclick = "getEthnicityValue(this)">
                            <label for="ethnicity_none">Prefer not to answer</label>
                        </div>

                        <div>
                            <input type="radio"
                                   id="ethnicity_other"
                                   name="participant_ethnicity"
                                   class="ethnicity_choice"
                                   value="other"
                                   onclick = "getEthnicityValue(this)">
                            <label for="ethnicity_other">Other:</label>
                        </div>

                    </div>

                    <div id="participant_ethnicity_textarea" style="display: none">
                        <textarea name="participant_ethnicity"
                                  id="participant_ethnicity"
                                  class="ethnicity form-control"
                                  oninput="getEthnicityTextarea(this)"
                                  placeholder="Please enter your ethnicity here."
                                  style="width:300px; text-align: center;" required autofocus=""></textarea>
                    </div>
                </div>
                <p> </p>
                <div>
                    <p>
                        <b>4. What is your age?</b>
                    </p>
                    <div>
                        <div>
                            <input type="radio"
                                   id="age_under18"
                                   name="participant_age"
                                   class="age_choice"
                                   value="under18"
                                   onclick = "getAgeValue(this)">
                            <label for="age_under18">Under 18</label>
                        </div>

                        <div>
                            <input type="radio"
                                   id="age_18to24"
                                   name="participant_age"
                                   class="age_choice"
                                   value="18to24"
                                   onclick = "getAgeValue(this)">
                            <label for="age_18to24">18-24 years old</label>
                        </div>

                       <div>
                            <input type="radio"
                                   id="age_25to34"
                                   name="participant_age"
                                   class="age_choice"
                                   value="25to34"
                                   onclick = "getAgeValue(this)">
                            <label for="age_25to34">25-34 years old</label>
                        </div>

                        <div>
                            <input type="radio"
                                   id="age_35above"
                                   name="participant_age"
                                   class="age_choice"
                                   value="35above"
                                   onclick = "getAgeValue(this)">
                            <label for="age_35above">35 or above</label>
                        </div>

                    </div>

                </div>
                <p> </p>
                <div>
                    <p>
                        <b>5. How would you rate your English fluency?</b>
                    </p>
                    <div>
                        <div>
                            <input type="radio"
                                   id="fluency_native"
                                   name="participant_fluency"
                                   class="fluency_choice"
                                   value="native"
                                   onclick = "getFluencyValue(this)">
                            <label for="fluency_native">Native or near-native fluency</label>
                        </div>

                        <div>
                            <input type="radio"
                                   id="fluency_fluent"
                                   name="participant_fluency"
                                   class="fluency_choice"
                                   value="fluent"
                                   onclick = "getFluencyValue(this)">
                            <label for="fluency_fluent">Fluent</label>
                        </div>

                       <div>
                            <input type="radio"
                                   id="fluency_intermediate"
                                   name="participant_fluency"
                                   class="fluency_choice"
                                   value="intermediate"
                                   onclick = "getFluencyValue(this)">
                            <label for="fluency_intermediate">Intermediate</label>
                        </div>

                        <div>
                            <input type="radio"
                                   id="fluency_basic"
                                   name="participant_fluency"
                                   class="fluency_choice"
                                   value="basic"
                                   onclick = "getFluencyValue(this)">
                            <label for="fluency_basic">Basic</label>
                        </div>

                        <div>
                            <input type="radio"
                                   id="fluency_beginner"
                                   name="participant_fluency"
                                   class="fluency_choice"
                                   value="beginner"
                                   onclick = "getFluencyValue(this)">
                            <label for="fluency_beginner">Beginner</label>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>

<script type="text/javascript">
    /* Variables to record education*/
    let education_answer = -1
    let education_answered = false//check whether education question is answered

    let gender_answer = -1
    let gender_answered = false

    let ethnicity_answer = -1
    let ethnicity_answered = false
    
    let age_answer = -1
    let age_answered = false

    let fluency_answer = -1
    let fluency_answered = false

    // Check if the gender question be answered
    $('.education_choice').on('input', function() {
        // education_answered = true;
        education_answer = $(this).val();
    });

     $('.gender_choice').on('input', function() {
        gender_answer = $(this).val();
    });

    $('.ethnicity_choice').on('input', function() {
        ethnicity_answer = $(this).val();
    });

    $('.age_choice').on('input', function() {
        age_answer = $(this).val();
    });

    $('.fluency_choice').on('input', function() {
        fluency_answer = $(this).val();
    });

</script>

<script type="text/javascript">

    /* Functions to check age and gender*/

    function getEducationValue(theRadio){
        let value  = theRadio.value;
        console.log('education value:'+value)

        if(value == "other"){
            document.getElementById("participant_education_textarea").style.display = "block";
            education_answer = $("#participant_education_textarea").val();
        }else{
            document.getElementById("participant_education_textarea").style.display = "none";
            education_answered = true;
            education_answer = value;
        }
        //if (education_answered) $("#btn_<?php echo $id;?>").prop('disabled', false);
        console.log("education_answered: "+ education_answered);
        console.log("education_answer: "+ education_answer);
    }

    function getEducationTextarea(theText){
        if(theText.value){
            education_answered = true;
        }else{
            education_answered = false;
        }

        education_answer = theText.value;
        //if (education_answered) $("#btn_<?php echo $id;?>").prop('disabled', false);

    }

    function getGenderValue(theRadio){
        let value  = theRadio.value;
        console.log('gender value:'+value)

        if(value == "other"){
            document.getElementById("participant_gender_textarea").style.display = "block";
            gender_answer = $("#participant_gender_textarea").val();
        }else{
            document.getElementById("participant_gender_textarea").style.display = "none";
            gender_answered = true;
            gender_answer = value;
        }
        console.log("gender_answered: "+ gender_answered);
        console.log("gender_answer: "+ gender_answer);
    }

    function getGenderTextarea(theText){
        if(theText.value){
            gender_answered = true;
        }else{
            gender_answered = false;
        }
        gender_answer = theText.value;
    }

    function getEthnicityValue(theRadio){
        let value  = theRadio.value;
        console.log('ethnicity value:'+value)

        if(value == "other"){
            document.getElementById("participant_ethnicity_textarea").style.display = "block";
            ethnicity_answer = $("#participant_ethnicity_textarea").val();
        }else{
            document.getElementById("participant_ethnicity_textarea").style.display = "none";
            ethnicity_answered = true;
            ethnicity_answer = value;
        }
        console.log("ethnicity_answered: "+ ethnicity_answered);
        console.log("ethnicity_answer: "+ ethnicity_answer);
    }

    function getEthnicityTextarea(theText){
        if(theText.value){
            ethnicity_answered = true;
        }else{
            ethnicity_answered = false;
        }
        ethnicity_answer = theText.value;
    }

    function getAgeValue(theRadio){
        let value  = theRadio.value;
        console.log('age value:'+value)

        age_answered = true;
        age_answer = value;
        
        console.log("age_answered: "+ age_answered);
        console.log("age_answer: "+ age_answer);
    }

    function getFluencyValue(theRadio){
        let value  = theRadio.value;
        console.log('fluency value:'+value)
        
        fluency_answered = true;
        fluency_answer = value;
        
        console.log("fluency_answered: "+ fluency_answered);
        console.log("fluency_answer: "+ fluency_answer);

        if (fluency_answered) $("#btn_<?php echo $id;?>").prop('disabled', false);
    }


    $('body').on('show', function(e, type){
        // console.log("show");
        if (type === '<?php echo $id;?>'){
            console.log("showing page " + type);

            let id = <?php echo json_encode($id); ?>;
            let page_number = <?php echo json_encode($page_number); ?>;
            setProgressBar(page_number, id, page_total_number)
        }
    });

    $('body').on('next', function(e, type){
        // console.log("next");
        if (type === '<?php echo $id;?>'){
            measurements['education'] = education_answer;
            measurements['gender'] = gender_answer;
            measurements['ethnicity'] = ethnicity_answer;
            measurements['age'] = age_answer;
            measurements['fluency'] = fluency_answer;
            //console.log("logging education_answer: "+ measurements['education']);
        }
    });
</script>