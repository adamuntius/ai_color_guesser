<?php

require_once('../mysqli_connect.php');

$query = "SELECT month_answer, animal_answer, instrument_answer, color, entry_date FROM colorentries";

$response = @mysqli_query($dbc, $query);


if($response) {

    echo '<table align="left"
    cellspacing="5" cellpadding="8">

    <tr><td align="left"><b>Month Answer</b></td>
    <td align="left"><b>Animal Answer</b></td>
    <td align="left"><b>Instrument Answer</b></td>
    <td align="left"><b>Color</b></td>
    <td align="left"><b>Entry Date</b></td></tr>';

    while($row = mysqli_fetch_array($response)) {

        echo '<tr><td align="left">' .
        $row[month_answer] . '</td><td align="left">' .
        $row[animal_answer] . '</td><td align="left">' .
        $row[instrument_answer] . '</td><td align="left">' .
        $row[color] . '</td><td align="left">' .
        $row[entry_date] . '</td><td align="left">';

        echo '</tr>';

    }

    echo '</table>';

} else {

    echo "Couln't issue database query";

    echo mysqli_error($dbc);

}

mysqli_close($dbc);

?>
