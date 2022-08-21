<?php
    $allowablecolors = array("white", "yellow", "blue", "red", "green", "black", "brown", "azure", "ivory", "teal", "silver", "purple", "gray", "orange", "maroon", "coral", "fuchsia", "crimson", "pink", "magenta", "cyan", "gold");
    //submit to the database
    $finalmessage = "Thank you for playing and helping the AI learn! Go to projectajm.com to play again.";
    if (isset($_POST)) {

        $data_missing = array();
        // foreach($_POST as $element) {
        //     echo($element);
        // }
        if(empty($_POST['color'])) {

            $data_missing[] = 'Color';
        }

        else {

            $color = trim($_POST['color']);
            $color = strtolower($color);
            if (!in_array($color, $allowablecolors)) {
                exit("Invalid color.");
            }

        }

        if(empty($_POST['month_answer'])){

            $data_missing[] = 'Month Answer';

        } else {

            $m_answer = trim($_POST['month_answer']);
            $m_answer = strtolower($m_answer);

        }

        if(empty($_POST['animal_answer'])){

            $data_missing[] = 'Animal Answer';

        } else {

            $a_answer = trim($_POST['animal_answer']);
            $a_answer = strtolower($a_answer);

        }

        if(empty($_POST['instrument_answer'])){

            $data_missing[] = 'Instrument Answer';

        } else {

            $i_answer = trim($_POST['instrument_answer']);
            $i_answer = strtolower($i_answer);

        }

        if(empty($data_missing)) {

            require_once('../mysqli_connect.php');

            $query = "INSERT INTO colorentries (month_answer, animal_answer, instrument_answer, color, entry_date, entry_id) VALUES (?, ?, ?, ?, NOW(), NULL)";

            // $stmt = mysqli_prepare($dbc, $query);
            $stmt = $dbc->prepare($query);

            // mysqli_stmt_bind_param($stmt, "ssss", $m_answer, $a_answer, $i_answer, $c);
            $stmt->bind_param('ssss', $m_answer, $a_answer, $i_answer, $color);

            $stmt->execute();

            $affected_rows = mysqli_stmt_affected_rows($stmt);

            if($affected_rows == 1) {

                $finalmessage = "Entry Successful. Thank you for playing and helping the AI learn! Go to projectajm.com to play again.";

                mysqli_stmt_close($stmt);

                mysqli_close($dbc);

            } else {
                $finalmessage = 'Error Occured <br />';
                echo mysqli_error();
                mysqli_stmt_close($stmt);
                mysqli_close($dbc);
            }

        } else {
            $finalmessage = 'You need to enter all data: <br />';
            foreach($data_missing as $missing) {
                echo "$missing<br />";
            }
        }

    } else {
        $finalmessage = "Oops. There was an error.";
    }
    echo "
    <div>
    $finalmessage
    <a href='/'>Play again!</a>
    </div>
    ";
 ?>
