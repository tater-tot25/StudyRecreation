<?php
// Which trial is this under this condition? If $trial_number = 0, this is the first trial under this condition (e.g., bar geo fewer condition)
$trial_number = $page_number - $first_page_number;
?>
<div id="row">
    <p>Please do not reload, close, or use the Back button during this task.</p>
    <div class="task-description" id="graph_box" style="height: 500px">

        <img style="width:500px" src="html/img/<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>.svg">


    </div>

    <hr>

    <div class="ratings cml_field">
        <p>To what extent do you agree or disagree with the following statement: This visualization is ___.</p>
        <div class="cml_row">

            <table>
                <thead>
                <tr>
                    <th></th>
                    <th class="likert">Strongly disagree</th>

                    <th class="likert">Disagree</th>

                    <th class="likert">Slightly disagree</th>

                    <th class="likert">Neutral</th>

                    <th class="likert">Slightly agree</th>

                    <th class="likert">Agree</th>

                    <th class="likert">Strongly agree</th>
                </tr>
                </thead>
                <tbody>

                <tr class="likert-row">
                    <td class="likert center-align" id="beauvis0_<?php echo $id;?>"></td>

                    <td class="likert"><input name="beauvis0" type="radio" value="1" class="beauvis0">
                    </td>

                    <td class="likert"><input name="beauvis0" type="radio" value="2" class="beauvis0">
                    </td>

                    <td class="likert"><input name="beauvis0" type="radio" value="3" class="beauvis0">
                    </td>

                    <td class="likert"><input name="beauvis0" type="radio" value="4" class="beauvis0">
                    </td>

                    <td class="likert"><input name="beauvis0" type="radio" value="5" class="beauvis0">
                    </td>

                    <td class="likert"><input name="beauvis0" type="radio" value="6" class="beauvis0">
                    </td>

                    <td class="likert"><input name="beauvis0" type="radio" value="7" class="beauvis0">
                    </td>
                </tr>
                <tr class="likert-row">
                    <td class="likert center-align" id="beauvis1_<?php echo $id;?>"></td>

                    <td class="likert"><input name="beauvis1" type="radio" value="1" class="beauvis1">
                    </td>

                    <td class="likert"><input name="beauvis1" type="radio" value="2" class="beauvis1">
                    </td>

                    <td class="likert"><input name="beauvis1" type="radio" value="3" class="beauvis1">
                    </td>

                    <td class="likert"><input name="beauvis1" type="radio" value="4" class="beauvis1">
                    </td>

                    <td class="likert"><input name="beauvis1" type="radio" value="5" class="beauvis1">
                    </td>

                    <td class="likert"><input name="beauvis1" type="radio" value="6" class="beauvis1">
                    </td>

                    <td class="likert"><input name="beauvis1" type="radio" value="7" class="beauvis1">
                    </td>
                </tr>
                <tr class="likert-row">
                    <td class="likert center-align" id="beauvis2_<?php echo $id;?>"></td>

                    <td class="likert"><input name="beauvis2" type="radio" value="1" class="beauvis2">
                    </td>

                    <td class="likert"><input name="beauvis2" type="radio" value="2" class="beauvis2">
                    </td>

                    <td class="likert"><input name="beauvis2" type="radio" value="3" class="beauvis2">
                    </td>

                    <td class="likert"><input name="beauvis2" type="radio" value="4" class="beauvis2">
                    </td>

                    <td class="likert"><input name="beauvis2" type="radio" value="5" class="beauvis2">
                    </td>

                    <td class="likert"><input name="beauvis2" type="radio" value="6" class="beauvis2">
                    </td>

                    <td class="likert"><input name="beauvis2" type="radio" value="7" class="beauvis2">
                    </td>
                </tr>
                <tr class="likert-row">
                    <td class="likert center-align" id="beauvis3_<?php echo $id;?>"></td>

                    <td class="likert"><input name="beauvis3" type="radio" value="1" class="beauvis3">
                    </td>

                    <td class="likert"><input name="beauvis3" type="radio" value="2" class="beauvis3">
                    </td>

                    <td class="likert"><input name="beauvis3" type="radio" value="3" class="beauvis3">
                    </td>

                    <td class="likert"><input name="beauvis3" type="radio" value="4" class="beauvis3">
                    </td>

                    <td class="likert"><input name="beauvis3" type="radio" value="5" class="beauvis3">
                    </td>

                    <td class="likert"><input name="beauvis3" type="radio" value="6" class="beauvis3">
                    </td>

                    <td class="likert"><input name="beauvis3" type="radio" value="7" class="beauvis3">
                    </td>
                </tr>
                <tr class="likert-row">
                    <td class="likert center-align" id="beauvis4_<?php echo $id;?>"></td>

                    <td class="likert"><input name="beauvis4" type="radio" value="1" class="beauvis4">
                    </td>

                    <td class="likert"><input name="beauvis4" type="radio" value="2" class="beauvis4">
                    </td>

                    <td class="likert"><input name="beauvis4" type="radio" value="3" class="beauvis4">
                    </td>

                    <td class="likert"><input name="beauvis4" type="radio" value="4" class="beauvis4">
                    </td>

                    <td class="likert"><input name="beauvis4" type="radio" value="5" class="beauvis4">
                    </td>

                    <td class="likert"><input name="beauvis4" type="radio" value="6" class="beauvis4">
                    </td>

                    <td class="likert"><input name="beauvis4" type="radio" value="7" class="beauvis4">
                    </td>
                </tr>
                <!-- <tr class="likert-row">
                    <td class="likert center-align">readable</td>

                    <td class="likert"><input name="readable" type="radio" value="1" class="readable">
                    </td>

                    <td class="likert"><input name="readable" type="radio" value="2" class="readable">
                    </td>

                    <td class="likert"><input name="readable" type="radio" value="3" class="readable">
                    </td>

                    <td class="likert"><input name="readable" type="radio" value="4" class="readable">
                    </td>

                    <td class="likert"><input name="readable" type="radio" value="5" class="readable">
                    </td>

                    <td class="likert"><input name="readable" type="radio" value="6" class="readable">
                    </td>

                    <td class="likert"><input name="readable" type="radio" value="7" class="readable">
                    </td>
                </tr> -->
                </tbody>
            </table>
        </div>
    </div>

    <hr>

    <div class="ratings cml_field">
        <div class="cml_row">
            <p>Please rate the extent to which you agree or disagree with each statement.</p>
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th class="likert">Strongly disagree</th>

                    <th class="likert">Disagree</th>

                    <th class="likert">Slightly disagree</th>

                    <th class="likert">Neutral</th>

                    <th class="likert">Slightly agree</th>

                    <th class="likert">Agree</th>

                    <th class="likert">Strongly agree</th>

                    <th class="likert">I don't know/Not applicable</th>
                </tr>
                </thead>
                <tbody>

                <tr class="likert-row">
                    <td class="likert center-align">It is <b>obvious</b> for me how to read this visualization</td>

                    <td class="likert"><input name="previs0" type="radio" value="1" class="previs0">
                    </td>

                    <td class="likert"><input name="previs0" type="radio" value="2" class="previs0">
                    </td>

                    <td class="likert"><input name="previs0" type="radio" value="3" class="previs0">
                    </td>

                    <td class="likert"><input name="previs0" type="radio" value="4" class="previs0">
                    </td>

                    <td class="likert"><input name="previs0" type="radio" value="5" class="previs0">
                    </td>

                    <td class="likert"><input name="previs0" type="radio" value="6" class="previs0">
                    </td>

                    <td class="likert"><input name="previs0" type="radio" value="7" class="previs0">
                    </td>

                    <td class="likert"><input name="previs0" type="radio" value="8" class="previs0">
                    </td>
                </tr>
                <tr class="likert-row">
                    <td class="likert center-align">I can easily understand <b>how the data is represented</b> in this visualization</td>

                    <td class="likert"><input name="previs1" type="radio" value="1" class="previs1">
                    </td>

                    <td class="likert"><input name="previs1" type="radio" value="2" class="previs1">
                    </td>

                    <td class="likert"><input name="previs1" type="radio" value="3" class="previs1">
                    </td>

                    <td class="likert"><input name="previs1" type="radio" value="4" class="previs1">
                    </td>

                    <td class="likert"><input name="previs1" type="radio" value="5" class="previs1">
                    </td>

                    <td class="likert"><input name="previs1" type="radio" value="6" class="previs1">
                    </td>

                    <td class="likert"><input name="previs1" type="radio" value="7" class="previs1">
                    </td>

                    <td class="likert"><input name="previs1" type="radio" value="8" class="previs1">
                    </td>
                </tr>
                <tr class="likert-row">
                    <td class="likert center-align">I can <b>easily understand</b> this visualization</td>

                    <td class="likert"><input name="previs2" type="radio" value="1" class="previs2">
                    </td>

                    <td class="likert"><input name="previs2" type="radio" value="2" class="previs2">
                    </td>

                    <td class="likert"><input name="previs2" type="radio" value="3" class="previs2">
                    </td>

                    <td class="likert"><input name="previs2" type="radio" value="4" class="previs2">
                    </td>

                    <td class="likert"><input name="previs2" type="radio" value="5" class="previs2">
                    </td>

                    <td class="likert"><input name="previs2" type="radio" value="6" class="previs2">
                    </td>

                    <td class="likert"><input name="previs2" type="radio" value="7" class="previs2">
                    </td>

                    <td class="likert"><input name="previs2" type="radio" value="8" class="previs2">
                    </td>
                </tr>
                <tr class="likert-row">
                    <td class="likert center-align">I <b>don't</b> find this visualization <b>messy</b></td>

                    <td class="likert"><input name="previs3" type="radio" value="1" class="previs3">
                    </td>

                    <td class="likert"><input name="previs3" type="radio" value="2" class="previs3">
                    </td>

                    <td class="likert"><input name="previs3" type="radio" value="3" class="previs3">
                    </td>

                    <td class="likert"><input name="previs3" type="radio" value="4" class="previs3">
                    </td>

                    <td class="likert"><input name="previs3" type="radio" value="5" class="previs3">
                    </td>

                    <td class="likert"><input name="previs3" type="radio" value="6" class="previs3">
                    </td>

                    <td class="likert"><input name="previs3" type="radio" value="7" class="previs3">
                    </td>

                     <td class="likert"><input name="previs3" type="radio" value="8" class="previs3">
                    </td>
                </tr>
                <tr class="likert-row">
                    <td class="likert center-align">I <b>don't</b> find this visualization <b>crowded</b></td>

                    <td class="likert"><input name="previs4" type="radio" value="1" class="previs4">
                    </td>

                    <td class="likert"><input name="previs4" type="radio" value="2" class="previs4">
                    </td>

                    <td class="likert"><input name="previs4" type="radio" value="3" class="previs4">
                    </td>

                    <td class="likert"><input name="previs4" type="radio" value="4" class="previs4">
                    </td>

                    <td class="likert"><input name="previs4" type="radio" value="5" class="previs4">
                    </td>

                    <td class="likert"><input name="previs4" type="radio" value="6" class="previs4">
                    </td>

                    <td class="likert"><input name="previs4" type="radio" value="7" class="previs4">
                    </td>

                     <td class="likert"><input name="previs4" type="radio" value="8" class="previs4">
                    </td>
                </tr>
                <tr class="likert-row">
                    <td class="likert center-align">I <b>don't</b> find <b>distracting parts</b> in this visualization</td>

                    <td class="likert"><input name="previs5" type="radio" value="1" class="previs5">
                    </td>

                    <td class="likert"><input name="previs5" type="radio" value="2" class="previs5">
                    </td>

                    <td class="likert"><input name="previs5" type="radio" value="3" class="previs5">
                    </td>

                    <td class="likert"><input name="previs5" type="radio" value="4" class="previs5">
                    </td>

                    <td class="likert"><input name="previs5" type="radio" value="5" class="previs5">
                    </td>

                    <td class="likert"><input name="previs5" type="radio" value="6" class="previs5">
                    </td>

                    <td class="likert"><input name="previs5" type="radio" value="7" class="previs5">
                    </td>

                    <td class="likert"><input name="previs5" type="radio" value="8" class="previs5">
                    </td>
                </tr>
                <tr class="likert-row">
                    <td class="likert center-align">I find data features (for example, a minimum, or an outlier, or a trend) <b>visible</b> in this visualization</td>

                    <td class="likert"><input name="previs6" type="radio" value="1" class="previs6">
                    </td>

                    <td class="likert"><input name="previs6" type="radio" value="2" class="previs6">
                    </td>

                    <td class="likert"><input name="previs6" type="radio" value="3" class="previs6">
                    </td>

                    <td class="likert"><input name="previs6" type="radio" value="4" class="previs6">
                    </td>

                    <td class="likert"><input name="previs6" type="radio" value="5" class="previs6">
                    </td>

                    <td class="likert"><input name="previs6" type="radio" value="6" class="previs6">
                    </td>

                    <td class="likert"><input name="previs6" type="radio" value="7" class="previs6">
                    </td>

                    <td class="likert"><input name="previs6" type="radio" value="8" class="previs6">
                    </td>
                </tr>
                <tr class="likert-row">
                    <td class="likert center-align">I can <b>clearly see</b> data features (for example, a minimum, or an outlier, or a trend) in this visualization</td>

                    <td class="likert"><input name="previs7" type="radio" value="1" class="previs7">
                    </td>

                    <td class="likert"><input name="previs7" type="radio" value="2" class="previs7">
                    </td>

                    <td class="likert"><input name="previs7" type="radio" value="3" class="previs7">
                    </td>

                    <td class="likert"><input name="previs7" type="radio" value="4" class="previs7">
                    </td>

                    <td class="likert"><input name="previs7" type="radio" value="5" class="previs7">
                    </td>

                    <td class="likert"><input name="previs7" type="radio" value="6" class="previs7">
                    </td>

                    <td class="likert"><input name="previs7" type="radio" value="7" class="previs7">
                    </td>

                    <td class="likert"><input name="previs7" type="radio" value="8" class="previs7">
                    </td>
                </tr>
                <tr class="likert-row">
                    <td class="likert center-align">I can easily <b>find specific elements</b> in this visualization</td>

                    <td class="likert"><input name="previs8" type="radio" value="1" class="previs8">
                    </td>

                    <td class="likert"><input name="previs8" type="radio" value="2" class="previs8">
                    </td>

                    <td class="likert"><input name="previs8" type="radio" value="3" class="previs8">
                    </td>

                    <td class="likert"><input name="previs8" type="radio" value="4" class="previs8">
                    </td>

                    <td class="likert"><input name="previs8" type="radio" value="5" class="previs8">
                    </td>

                    <td class="likert"><input name="previs8" type="radio" value="6" class="previs8">
                    </td>

                    <td class="likert"><input name="previs8" type="radio" value="7" class="previs8">
                    </td>

                    <td class="likert"><input name="previs8" type="radio" value="8" class="previs8">
                    </td>
                </tr>
                <tr class="likert-row">
                    <td class="likert center-align">I can easily <b>identify relevant information</b> in this visualization</td>

                    <td class="likert"><input name="previs9" type="radio" value="1" class="previs9">
                    </td>

                    <td class="likert"><input name="previs9" type="radio" value="2" class="previs9">
                    </td>

                    <td class="likert"><input name="previs9" type="radio" value="3" class="previs9">
                    </td>

                    <td class="likert"><input name="previs9" type="radio" value="4" class="previs9">
                    </td>

                    <td class="likert"><input name="previs9" type="radio" value="5" class="previs9">
                    </td>

                    <td class="likert"><input name="previs9" type="radio" value="6" class="previs9">
                    </td>

                    <td class="likert"><input name="previs9" type="radio" value="7" class="previs9">
                    </td>

                    <td class="likert"><input name="previs9" type="radio" value="8" class="previs9">
                    </td>
                </tr>
                <tr class="likert-row">
                    <td class="likert center-align">I can easily <b>retrieve information</b> from this visualization</td>

                    <td class="likert"><input name="previs10" type="radio" value="1" class="previs10">
                    </td>

                    <td class="likert"><input name="previs10" type="radio" value="2" class="previs10">
                    </td>

                    <td class="likert"><input name="previs10" type="radio" value="3" class="previs10">
                    </td>

                    <td class="likert"><input name="previs10" type="radio" value="4" class="previs10">
                    </td>

                    <td class="likert"><input name="previs10" type="radio" value="5" class="previs10">
                    </td>

                    <td class="likert"><input name="previs10" type="radio" value="6" class="previs10">
                    </td>

                    <td class="likert"><input name="previs10" type="radio" value="7" class="previs10">
                    </td>

                    <td class="likert"><input name="previs10" type="radio" value="8" class="previs10">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr>

    <script type="text/javascript">
       // var readable_answer = -1; //we cannot use let here, because readability.php will repeat for 3 times
        var beauvis0_answer = -1;
        var beauvis1_answer = -1;
        var beauvis2_answer = -1;
        var beauvis3_answer = -1;
        var beauvis4_answer = -1;

        var previs0_answer = -1;
        var previs1_answer = -1;
        var previs2_answer = -1; 
        var previs3_answer = -1;
        var previs4_answer = -1;
        var previs5_answer = -1;
        var previs6_answer = -1;
        var previs7_answer = -1;
        var previs8_answer = -1;
        var previs9_answer = -1;
        var previs10_answer = -1;


        $('body').on('show', function(e, type){
            // console.log("show");
            if (type === '<?php echo $id;?>'){
                console.log("showing page " + type);
                //initialize answers
                //measurements['readable_bar_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['beauvis0_bar_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['beauvis1_bar_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['beauvis2_bar_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['beauvis3_bar_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['beauvis4_bar_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";

                measurements['previs0_bar_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs1_bar_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs2_bar_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs3_bar_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs4_bar_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs5_bar_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs6_bar_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs7_bar_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs8_bar_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs9_bar_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs10_bar_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";

                //measurements['readable_pie_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['beauvis0_pie_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['beauvis1_pie_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['beauvis2_pie_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['beauvis3_pie_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['beauvis4_pie_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";

                measurements['previs0_pie_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs1_pie_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs2_pie_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs3_pie_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs4_pie_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs5_pie_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs6_pie_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs7_pie_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs8_pie_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs9_pie_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";
                measurements['previs10_pie_<?php echo $textures_order_for_question1[$trial_number];?>'] = "";

                //shuffle BeauVis scale and write the randomized items to the scale

                let id = <?php echo json_encode($id); ?>;
                let page_number = <?php echo json_encode($page_number); ?>;
                setProgressBar(page_number, id, page_total_number)


                for (let i = beauvis.length - 1; i > 0; i--) {
                    const j = Math.floor(Math.random() * (i + 1));
                    [beauvis[i], beauvis[j]] = [beauvis[j], beauvis[i]];
                }
                for(let i = 0; i < beauvis.length; i++){
                    document.getElementById('beauvis'+i+'_<?php echo $id;?>').innerHTML = beauvis[i]
                }

                // make button active as soon as all questions are answered

                $('.previs0').on('input', function() {

                    previs0_answer = $(this).val();

                    if (isAnswered('beauvis0') &&
                        isAnswered('beauvis1') &&
                        isAnswered('beauvis2') &&
                        isAnswered('beauvis3') &&
                        isAnswered('beauvis4') &&
                        isAnswered('previs0')  &&
                        isAnswered('previs1')  &&
                        isAnswered('previs2')  &&
                        isAnswered('previs3')  &&
                        isAnswered('previs4')  &&
                        isAnswered('previs5')  &&
                        isAnswered('previs6')  &&
                        isAnswered('previs7')  &&
                        isAnswered('previs8')  &&
                        isAnswered('previs9')  &&
                        isAnswered('previs10')  ){
                        $("#btn_<?php echo $id;?>").prop('disabled', false);
                    }
                });

                $('.previs1').on('input', function() {

                    previs1_answer = $(this).val();

                    if (isAnswered('beauvis0') &&
                        isAnswered('beauvis1') &&
                        isAnswered('beauvis2') &&
                        isAnswered('beauvis3') &&
                        isAnswered('beauvis4') &&
                        isAnswered('previs0')  &&
                        isAnswered('previs1')  &&
                        isAnswered('previs2')  &&
                        isAnswered('previs3')  &&
                        isAnswered('previs4')  &&
                        isAnswered('previs5')  &&
                        isAnswered('previs6')  &&
                        isAnswered('previs7')  &&
                        isAnswered('previs8')  &&
                        isAnswered('previs9')  &&
                        isAnswered('previs10')  ){
                        $("#btn_<?php echo $id;?>").prop('disabled', false);
                    }
                });

                $('.previs2').on('input', function() {

                    previs2_answer = $(this).val();

                    if (isAnswered('beauvis0') &&
                        isAnswered('beauvis1') &&
                        isAnswered('beauvis2') &&
                        isAnswered('beauvis3') &&
                        isAnswered('beauvis4') &&
                        isAnswered('previs0')  &&
                        isAnswered('previs1')  &&
                        isAnswered('previs2')  &&
                        isAnswered('previs3')  &&
                        isAnswered('previs4')  &&
                        isAnswered('previs5')  &&
                        isAnswered('previs6')  &&
                        isAnswered('previs7')  &&
                        isAnswered('previs8')  &&
                        isAnswered('previs9')  &&
                        isAnswered('previs10')  ){
                        $("#btn_<?php echo $id;?>").prop('disabled', false);
                    }
                });

                $('.previs3').on('input', function() {

                    previs3_answer = $(this).val();

                    if (isAnswered('beauvis0') &&
                        isAnswered('beauvis1') &&
                        isAnswered('beauvis2') &&
                        isAnswered('beauvis3') &&
                        isAnswered('beauvis4') &&
                        isAnswered('previs0')  &&
                        isAnswered('previs1')  &&
                        isAnswered('previs2')  &&
                        isAnswered('previs3')  &&
                        isAnswered('previs4')  &&
                        isAnswered('previs5')  &&
                        isAnswered('previs6')  &&
                        isAnswered('previs7')  &&
                        isAnswered('previs8')  &&
                        isAnswered('previs9')  &&
                        isAnswered('previs10')  ){
                        $("#btn_<?php echo $id;?>").prop('disabled', false);
                    }
                });

                $('.previs4').on('input', function() {

                    previs4_answer = $(this).val();

                    if (isAnswered('beauvis0') &&
                        isAnswered('beauvis1') &&
                        isAnswered('beauvis2') &&
                        isAnswered('beauvis3') &&
                        isAnswered('beauvis4') &&
                        isAnswered('previs0')  &&
                        isAnswered('previs1')  &&
                        isAnswered('previs2')  &&
                        isAnswered('previs3')  &&
                        isAnswered('previs4')  &&
                        isAnswered('previs5')  &&
                        isAnswered('previs6')  &&
                        isAnswered('previs7')  &&
                        isAnswered('previs8')  &&
                        isAnswered('previs9')  &&
                        isAnswered('previs10')  ){
                        $("#btn_<?php echo $id;?>").prop('disabled', false);
                    }
                });

                $('.previs5').on('input', function() {

                    previs5_answer = $(this).val();

                    if (isAnswered('beauvis0') &&
                        isAnswered('beauvis1') &&
                        isAnswered('beauvis2') &&
                        isAnswered('beauvis3') &&
                        isAnswered('beauvis4') &&
                        isAnswered('previs0')  &&
                        isAnswered('previs1')  &&
                        isAnswered('previs2')  &&
                        isAnswered('previs3')  &&
                        isAnswered('previs4')  &&
                        isAnswered('previs5')  &&
                        isAnswered('previs6')  &&
                        isAnswered('previs7')  &&
                        isAnswered('previs8')  &&
                        isAnswered('previs9')  &&
                        isAnswered('previs10')  ){
                        $("#btn_<?php echo $id;?>").prop('disabled', false);
                    }
                });

                $('.previs6').on('input', function() {

                    previs6_answer = $(this).val();

                    if (isAnswered('beauvis0') &&
                        isAnswered('beauvis1') &&
                        isAnswered('beauvis2') &&
                        isAnswered('beauvis3') &&
                        isAnswered('beauvis4') &&
                        isAnswered('previs0')  &&
                        isAnswered('previs1')  &&
                        isAnswered('previs2')  &&
                        isAnswered('previs3')  &&
                        isAnswered('previs4')  &&
                        isAnswered('previs5')  &&
                        isAnswered('previs6')  &&
                        isAnswered('previs7')  &&
                        isAnswered('previs8')  &&
                        isAnswered('previs9')  &&
                        isAnswered('previs10')  ){
                        $("#btn_<?php echo $id;?>").prop('disabled', false);
                    }
                });

                $('.previs7').on('input', function() {

                    previs7_answer = $(this).val();

                    if (isAnswered('beauvis0') &&
                        isAnswered('beauvis1') &&
                        isAnswered('beauvis2') &&
                        isAnswered('beauvis3') &&
                        isAnswered('beauvis4') &&
                        isAnswered('previs0')  &&
                        isAnswered('previs1')  &&
                        isAnswered('previs2')  &&
                        isAnswered('previs3')  &&
                        isAnswered('previs4')  &&
                        isAnswered('previs5')  &&
                        isAnswered('previs6')  &&
                        isAnswered('previs7')  &&
                        isAnswered('previs8')  &&
                        isAnswered('previs9')  &&
                        isAnswered('previs10')  ){
                        $("#btn_<?php echo $id;?>").prop('disabled', false);
                    }
                });

                $('.previs8').on('input', function() {

                    previs8_answer = $(this).val();

                    if (isAnswered('beauvis0') &&
                        isAnswered('beauvis1') &&
                        isAnswered('beauvis2') &&
                        isAnswered('beauvis3') &&
                        isAnswered('beauvis4') &&
                        isAnswered('previs0')  &&
                        isAnswered('previs1')  &&
                        isAnswered('previs2')  &&
                        isAnswered('previs3')  &&
                        isAnswered('previs4')  &&
                        isAnswered('previs5')  &&
                        isAnswered('previs6')  &&
                        isAnswered('previs7')  &&
                        isAnswered('previs8')  &&
                        isAnswered('previs9')  &&
                        isAnswered('previs10')  ){
                        $("#btn_<?php echo $id;?>").prop('disabled', false);
                    }
                });

                $('.previs9').on('input', function() {

                    previs9_answer = $(this).val();

                    if (isAnswered('beauvis0') &&
                        isAnswered('beauvis1') &&
                        isAnswered('beauvis2') &&
                        isAnswered('beauvis3') &&
                        isAnswered('beauvis4') &&
                        isAnswered('previs0')  &&
                        isAnswered('previs1')  &&
                        isAnswered('previs2')  &&
                        isAnswered('previs3')  &&
                        isAnswered('previs4')  &&
                        isAnswered('previs5')  &&
                        isAnswered('previs6')  &&
                        isAnswered('previs7')  &&
                        isAnswered('previs8')  &&
                        isAnswered('previs9')  &&
                        isAnswered('previs10')  ){
                        $("#btn_<?php echo $id;?>").prop('disabled', false);
                    }
                });

                $('.previs10').on('input', function() {

                    previs10_answer = $(this).val();

                    if (isAnswered('beauvis0') &&
                        isAnswered('beauvis1') &&
                        isAnswered('beauvis2') &&
                        isAnswered('beauvis3') &&
                        isAnswered('beauvis4') &&
                        isAnswered('previs0')  &&
                        isAnswered('previs1')  &&
                        isAnswered('previs2')  &&
                        isAnswered('previs3')  &&
                        isAnswered('previs4')  &&
                        isAnswered('previs5')  &&
                        isAnswered('previs6')  &&
                        isAnswered('previs7')  &&
                        isAnswered('previs8')  &&
                        isAnswered('previs9')  &&
                        isAnswered('previs10')  ){
                        $("#btn_<?php echo $id;?>").prop('disabled', false);
                    }
                });

                $('.beauvis0').on('input', function() {

                    beauvis0_answer = $(this).val();

                    if (isAnswered('beauvis0') &&
                        isAnswered('beauvis1') &&
                        isAnswered('beauvis2') &&
                        isAnswered('beauvis3') &&
                        isAnswered('beauvis4') &&
                        isAnswered('previs0')  &&
                        isAnswered('previs1')  &&
                        isAnswered('previs2')  &&
                        isAnswered('previs3')  &&
                        isAnswered('previs4')  &&
                        isAnswered('previs5')  &&
                        isAnswered('previs6')  &&
                        isAnswered('previs7')  &&
                        isAnswered('previs8')  &&
                        isAnswered('previs9')  &&
                        isAnswered('previs10')  ){
                        $("#btn_<?php echo $id;?>").prop('disabled', false);
                    }
                });

                $('.beauvis1').on('input', function() {

                    beauvis1_answer = $(this).val();

                    if (isAnswered('beauvis0') &&
                        isAnswered('beauvis1') &&
                        isAnswered('beauvis2') &&
                        isAnswered('beauvis3') &&
                        isAnswered('beauvis4') &&
                        isAnswered('previs0')  &&
                        isAnswered('previs1')  &&
                        isAnswered('previs2')  &&
                        isAnswered('previs3')  &&
                        isAnswered('previs4')  &&
                        isAnswered('previs5')  &&
                        isAnswered('previs6')  &&
                        isAnswered('previs7')  &&
                        isAnswered('previs8')  &&
                        isAnswered('previs9')  &&
                        isAnswered('previs10') ){
                        $("#btn_<?php echo $id;?>").prop('disabled', false);
                    }
                });

                $('.beauvis2').on('input', function() {

                    beauvis2_answer = $(this).val();

                   if (isAnswered('beauvis0') &&
                        isAnswered('beauvis1') &&
                        isAnswered('beauvis2') &&
                        isAnswered('beauvis3') &&
                        isAnswered('beauvis4') &&
                        isAnswered('previs0')  &&
                        isAnswered('previs1')  &&
                        isAnswered('previs2')  &&
                        isAnswered('previs3')  &&
                        isAnswered('previs4')  &&
                        isAnswered('previs5')  &&
                        isAnswered('previs6')  &&
                        isAnswered('previs7')  &&
                        isAnswered('previs8')  &&
                        isAnswered('previs9')  &&
                        isAnswered('previs10') ){
                        $("#btn_<?php echo $id;?>").prop('disabled', false);
                    }
                });

                $('.beauvis3').on('input', function() {

                    beauvis3_answer = $(this).val();

                    if (isAnswered('beauvis0') &&
                        isAnswered('beauvis1') &&
                        isAnswered('beauvis2') &&
                        isAnswered('beauvis3') &&
                        isAnswered('beauvis4') &&
                        isAnswered('previs0')  &&
                        isAnswered('previs1')  &&
                        isAnswered('previs2')  &&
                        isAnswered('previs3')  &&
                        isAnswered('previs4')  &&
                        isAnswered('previs5')  &&
                        isAnswered('previs6')  &&
                        isAnswered('previs7')  &&
                        isAnswered('previs8')  &&
                        isAnswered('previs9')  &&
                        isAnswered('previs10') ){
                        $("#btn_<?php echo $id;?>").prop('disabled', false);
                    }
                });

                $('.beauvis4').on('input', function() {

                    beauvis4_answer = $(this).val();

                    if (isAnswered('beauvis0') &&
                        isAnswered('beauvis1') &&
                        isAnswered('beauvis2') &&
                        isAnswered('beauvis3') &&
                        isAnswered('beauvis4') &&
                        isAnswered('previs0')  &&
                        isAnswered('previs1')  &&
                        isAnswered('previs2')  &&
                        isAnswered('previs3')  &&
                        isAnswered('previs4')  &&
                        isAnswered('previs5')  &&
                        isAnswered('previs6')  &&
                        isAnswered('previs7')  &&
                        isAnswered('previs8')  &&
                        isAnswered('previs9')  &&
                        isAnswered('previs10')  ){
                        $("#btn_<?php echo $id;?>").prop('disabled', false);
                    }
                });

            }
        });


        $('body').on('next', function(e, type){
            if (type === '<?php echo $id;?>'){

               // measurements['readable_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>'] = readable_answer;
                measurements['beauvis0_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>'] = beauvis0_answer;
                measurements['beauvis1_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>'] = beauvis1_answer;
                measurements['beauvis2_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>'] = beauvis2_answer;
                measurements['beauvis3_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>'] = beauvis3_answer;
                measurements['beauvis4_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>'] = beauvis4_answer;

                measurements['previs0_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>'] = previs0_answer;
                measurements['previs1_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>'] = previs1_answer;
                measurements['previs2_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>'] = previs2_answer;
                measurements['previs3_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>'] = previs3_answer;
                measurements['previs4_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>'] = previs4_answer;
                measurements['previs5_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>'] = previs5_answer;
                measurements['previs6_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>'] = previs6_answer;
                measurements['previs7_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>'] = previs7_answer;
                measurements['previs8_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>'] = previs8_answer;
                measurements['previs9_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>'] = previs9_answer;
                measurements['previs10_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>'] = previs10_answer;

                //console.log("logging readable_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>: " + readable_answer);
                console.log("logging beauvis0_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>: " + beauvis0_answer);
                console.log("logging beauvis1_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>: " + beauvis1_answer);
                console.log("logging beauvis2_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>: " + beauvis2_answer);
                console.log("logging beauvis3_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>: " + beauvis3_answer);
                console.log("logging beauvis4_<?php echo $condition;?>_<?php echo $textures_order_for_question1[$trial_number];?>: " + beauvis4_answer);
            }
        });


    </script>

</div>