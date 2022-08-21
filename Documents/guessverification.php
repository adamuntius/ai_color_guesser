<?php
    $name = NULL;
    if (isset($_POST)) {
        foreach ($_POST as $key => $value) {
            $name = $key;
        }
        $m_answer = $_POST['month_answer'];
        $a_answer = $_POST['animal_answer'];
        $i_answer = $_POST['instrument_answer'];
        $color = $_POST['color'];

    }
    else {
        echo("Error, no yes/no submit");
    }
    if ($name == 'yes') {
        //submit to the database
        echo "
        <style>
        </style>
        <link rel='stylesheet' type='text/css' href='styles.css'>
        <div class='header'>AI Color Guesser</div>
        <div class='form-grid'>
            <div id='thinkofcolor'>Please think of a color then fill in the following fields!</div>
            <div class='form-panel'>
                <form action='/submittodb.php' method='post'>
                    <div class='inputs-grid'>
                        <div class='label-container'>
                            <label for='month_answer'>Think of and enter a month of the year:</label>
                        </div>
                        <div class='input-container'>
                            <input type='text' id='month_answer' name='month_answer' autocomplete='off' value='{$m_answer}' readonly><br>
                        </div>
                        <div class='label-container'>
                            <label for='animal_answer'>Think of and enter an animal:</label>
                        </div>
                        <div class='input-container'>
                            <input type='text' id='animal_answer' name='animal_answer' autocomplete='off' value='{$a_answer}' readonly><br>
                        </div>
                        <div class='label-container'>
                            <label for='instrument_answer'>Think of and enter a musical instrument:</label>
                        </div>
                        <div class='input-container'>
                            <input type='text' id='instrument_answer' name='instrument_answer' autocomplete='off' value='{$i_answer}' readonly><br>
                        </div>
                    </div>
                    <div style='font-size: 20px; color: green; text-align: center;'>
                    We are glad the AI guessed correctly :)
                    </div>
                    <input type='hidden' name='color' value='$color'>
                    <input type='hidden' name='month_answer' value='$m_answer'>
                    <input type='hidden' name='animal_answer' value='$a_answer'>
                    <input type='hidden' name='instrument_answer' value='$i_answer'>
                    <div>
                        <input type='submit' id='submit' value='Submit Data'>
                    </div>
                </form>
            </div>
        </div>
        <div class='footer'>
            <div class='ownership'>
                <div class='ownership-text'>Owned by Adam McIntosh</div>
            </div>
        </div>
        ";
    }
    elseif ($name == 'no') {
        echo "
        <style>
        </style>
        <link rel='stylesheet' type='text/css' href='styles.css'>
        <div class='header'>AI Color Guesser</div>

        <div class='form-grid'>
            <div id='thinkofcolor'>Please think of a color then fill in the following fields!</div>
            <div class='form-panel'>
                <form action='/submittodb.php' method='post'>
                    <div class='inputs-grid'>
                        <div class='label-container'>
                            <label for='month_answer'>Think of and enter a month of the year:</label>
                        </div>
                        <div class='input-container'>
                            <input type='text' id='month_answer' name='month_answer' autocomplete='off' value='{$m_answer}' readonly><br>
                        </div>
                        <div class='label-container'>
                            <label for='animal_answer'>Think of and enter an animal:</label>
                        </div>
                        <div class='input-container'>
                            <input type='text' id='animal_answer' name='animal_answer' autocomplete='off' value='{$a_answer}' readonly><br>
                        </div>
                        <div class='label-container'>
                            <label for='instrument_answer'>Think of and enter a musical instrument:</label>
                        </div>
                        <div class='input-container'>
                            <input type='text' id='instrument_answer' name='instrument_answer' autocomplete='off' value='{$i_answer}' readonly><br>
                        </div>
                    </div>
                    <input type='hidden' name='color' value='$color'>
                    <input type='hidden' name='month_answer' value='$m_answer'>
                    <input type='hidden' name='animal_answer' value='$a_answer'>
                    <input type='hidden' name='instrument_answer' value='$i_answer'>
                    <div style='margin-top: 40px;'>
                        <label id='mrclabel' for='myrealcolor'>What was your actual color?</label>
                        <input type='text' id='color' name='color' autocomplete='off'><br>
                        <input type='submit' id='submit' value='Submit'>
                    </div>
                </form>
            </div>
        </div>
        <div class='footer'>
            <div class='ownership'>
                <div class='ownership-text'>Owned by Adam McIntosh</div>
            </div>
        </div>
        ";
    }
 ?>
