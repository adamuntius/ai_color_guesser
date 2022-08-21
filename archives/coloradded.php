<html>
<head>
    <title>Add Color</title>
</head>
<body>
    <?php

    if (isset($_POST['submit'])) {

        $data_missing = array();

        if(empty($_POST['month_answer'])){

            $data_missing[] = 'Month Answer';

        } else {

            $m_answer = trim($_POST['month_answer']);

        }

        if(empty($_POST['animal_answer'])){

            $data_missing[] = 'Animal Answer';

        } else {

            $a_answer = trim($_POST['animal_answer']);

        }

        if(empty($_POST['instrument_answer'])){

            $data_missing[] = 'Instrument Answer';

        } else {

            $i_answer = trim($_POST['instrument_answer']);

        }

        if(empty($_POST['color'])){

            $data_missing[] = 'Color';

        } else {

            $c = trim($_POST['color']);

        }

        if(empty($data_missing)) {

            require_once('../mysqli_connect.php');

            $query = "INSERT INTO colorentries (month_answer, animal_answer, instrument_answer, color, entry_date, entry_id) VALUES (?, ?, ?, ?, NOW(), NULL)";

            // $stmt = mysqli_prepare($dbc, $query);
            $stmt = $dbc->prepare($query);

            // mysqli_stmt_bind_param($stmt, "ssss", $m_answer, $a_answer, $i_answer, $c);
            $stmt->bind_param('ssss', $m_answer, $a_answer, $i_answer, $c);

            $stmt->execute();

            $affected_rows = mysqli_stmt_affected_rows($stmt);

            if($affected_rows == 1) {

                echo 'Color entered';

                mysqli_stmt_close($stmt);

                mysqli_close($dbc);

            } else {
                echo 'Error Occured <br />';
                echo mysqli_error();
                mysqli_stmt_close($stmt);
                mysqli_close($dbc);
            }

        } else {
                echo 'You need to enter all data: <br />';

                foreach($data_missing as $mising) {
                    echo "$missing<br />";
                }
        }

    }

     ?>

     <form action="http://localhost/documents/coloradded.php" method="post">
             <b>Add a new color entry</b>

             <p> Month answer:
             <input type="text" name="month_answer" size="30" value=""</>
             </p>

             <p> Animal answer:
             <input type="text" name="animal_answer" size="30" value=""</>
             </p>

             <p> Instrument answer:
             <input type="text" name="instrument_answer" size="30" value=""</>
             </p>

             <p> Color:
             <input type="text" name="color" size="30" value=""</>
             </p>

             <p>
                 <input type="submit" name="submit" value="send">
             </p>

     </form>


</body>
</html>
