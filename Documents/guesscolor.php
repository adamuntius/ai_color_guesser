<?php

require_once('../mysqli_connect.php');

$allowablecolors = array("white", "yellow", "blue", "red", "green", "black", "brown", "azure", "ivory", "teal", "silver", "purple", "gray", "orange", "maroon", "coral", "fuchsia", "crimson", "pink", "magenta", "cyan", "gold");

$allowablemonths = array("january", "february", "march", "april", "may", "june", "july", "august", "september", "october", "november", "december");

$allowableinstruments = array("piano", "guitar", "violin", "drums", "saxophone", "flute", "cello", "clarinet", "trumpet", "harp", "drum", "xylophone", "bass", "oboe", "accordion", "saxophone", "tuba", "cymbal", "cymbals", "marimba", "french horn", "banjo", "bassoon", "ukulele", "viola");

$allowableanimals = array("aardvark",
    "alpaca",
    "ant",
    "anteater",
    "antelope",
    "ape",
    "armadillo",
    "donkey",
    "baboon",
    "badger",
    "barracuda",
    "bat",
    "bear",
    "beaver",
    "bee",
    "bison",
    "boar",
    "buffalo",
    "butterfly",
    "camel",
    "capybara",
    "caribou",
    "cassowary",
    "cat",
    "caterpillar",
    "cattle",
    "chamois",
    "cheetah",
    "chicken",
    "chimpanzee",
    "chinchilla",
    "chough",
    "clam",
    "cobra",
    "cockroach",
    "cod",
    "cormorant",
    "coyote",
    "crab",
    "crane",
    "crocodile",
    "crow",
    "curlew",
    "deer",
    "dinosaur",
    "dog",
    "dogfish",
    "dolphin",
    "dotterel",
    "dove",
    "dragonfly",
    "dragon",
    "duck",
    "dugong",
    "dunlin",
    "eagle",
    "echidna",
    "eel",
    "eland",
    "elephant",
    "elk",
    "emu",
    "falcon",
    "ferret",
    "finch",
    "fish",
    "flamingo",
    "fly",
    "fox",
    "frog",
    "gaur",
    "gazelle",
    "gerbil",
    "giraffe",
    "gnat",
    "gnu",
    "goat",
    "goldfinch",
    "goldfish",
    "goose",
    "gorilla",
    "goshawk",
    "grasshopper",
    "grouse",
    "guanaco",
    "gull",
    "hamster",
    "hare",
    "hawk",
    "hedgehog",
    "heron",
    "herring",
    "hippopotamus",
    "hornet",
    "horse",
    "human",
    "hummingbird",
    "hyena",
    "ibex",
    "ibis",
    "jackal",
    "jaguar",
    "jay",
    "jellyfish",
    "kangaroo",
    "kingfisher",
    "koala",
    "kookabura",
    "kouprey",
    "kudu",
    "lapwing",
    "lark",
    "lemur",
    "leopard",
    "lion",
    "llama",
    "lobster",
    "locust",
    "loris",
    "louse",
    "lyrebird",
    "magpie",
    "mallard",
    "manatee",
    "mandrill",
    "mantis",
    "marten",
    "meerkat",
    "mink",
    "mole",
    "mongoose",
    "monkey",
    "moose",
    "mosquito",
    "mouse",
    "mule",
    "narwhal",
    "newt",
    "nightingale",
    "octopus",
    "okapi",
    "opossum",
    "oryx",
    "ostrich",
    "otter",
    "owl",
    "oyster",
    "panther",
    "parrot",
    "partridge",
    "peafowl",
    "pelican",
    "penguin",
    "pheasant",
    "pig",
    "pigeon",
    "pony",
    "porcupine",
    "porpoise",
    "quail",
    "quelea",
    "quetzal",
    "rabbit",
    "raccoon",
    "rail",
    "ram",
    "rat",
    "raven",
    "red deer",
    "red panda",
    "reindeer",
    "rhinoceros",
    "rook",
    "salamander",
    "salmon",
    "sand dollar",
    "sandpiper",
    "sardine",
    "scorpion",
    "seahorse",
    "seal",
    "shark",
    "sheep",
    "shrew",
    "skunk",
    "snail",
    "snake",
    "sparrow",
    "spider",
    "spoonbill",
    "squid",
    "squirrel",
    "starling",
    "stingray",
    "sting ray",
    "stinkbug",
    "stork",
    "swallow",
    "swan",
    "tapir",
    "tarsier",
    "termite",
    "tiger",
    "toad",
    "trout",
    "turkey",
    "turtle",
    "viper",
    "vulture",
    "wallaby",
    "walrus",
    "wasp",
    "weasel",
    "whale",
    "wildcat",
    "wolf",
    "wolverine",
    "wombat",
    "woodcock",
    "woodpecker",
    "worm",
    "wren",
    "yak",
    "zebra");

if (isset($_POST['submit'])) {

    $data_missing = array();

    if(empty($_POST['month_answer'])){

        $data_missing[] = 'Month Answer';

    } else {

        $m_answer = trim($_POST['month_answer']);
        $m_answer = strtolower($m_answer);
        if (!in_array($m_answer, $allowablemonths)) {
            exit("Invalid month entered.");
        }

    }

    if(empty($_POST['instrument_answer'])){

        $data_missing[] = 'instrument Answer';

    } else {

        $a_answer = trim($_POST['animal_answer']);
        $a_answer = strtolower($a_answer);
        if (!in_array($a_answer, $allowableanimals)) {
            exit("Invalid animal entered.");
        }

    }

    if(empty($_POST['instrument_answer'])){

        $data_missing[] = 'Instrument Answer';

    } else {

        $i_answer = trim($_POST['instrument_answer']);
        $i_answer = strtolower($i_answer);
        if (!in_array($i_answer, $allowableinstruments)) {
            exit("Invalid instrument entered.");
        }

    }

    // if(empty($_POST['color'])){
    //
    //     $data_missing[] = 'Color';
    //
    // } else {
    //
    //     $c = trim($_POST['color']);
    //
    // }

    if(empty($data_missing)) {

        require_once('../mysqli_connect.php');

        // $query = "INSERT INTO colorentries (month_answer, animal_answer, instrument_answer, color, entry_date, entry_id) VALUES (?, ?, ?, ?, NOW(), NULL)";
        $query_num_thismonth = "SELECT COUNT(month_answer) FROM colorentries WHERE month_answer = '{$m_answer}'";
        $query_num_thisanimal = "SELECT COUNT(animal_answer) FROM colorentries WHERE animal_answer = '{$a_answer}'";
        $query_num_thisinstrument = "SELECT COUNT(instrument_answer) FROM colorentries WHERE instrument_answer = '{$i_answer}'";
        $query_total = "SELECT COUNT(entry_id) AS NumOfEntries FROM colorentries";

        $sum_thismonth = $dbc->query($query_num_thismonth);
        $monthnum = mysqli_fetch_row($sum_thismonth);
        $sum_thisanimal = $dbc->query($query_num_thisanimal);
        $animalnum = mysqli_fetch_row($sum_thisanimal);
        $sum_thisinstrument = $dbc->query($query_num_thisinstrument);
        $instrumentnum = mysqli_fetch_row($sum_thisinstrument);
        $sum_total = $dbc->query($query_total);
        $totalnum = mysqli_fetch_row($sum_total);
        // echo($monthnum[0]);
        // echo($animalnum[0]);
        // echo($instrumentnum[0]);
        // echo($totalnum[0]);

    } else {
            echo 'You need to enter all data: <br />';

            foreach($data_missing as $missing) {
                echo "$missing<br />";
            }
    }

}
$m_answer = $_POST['month_answer'];
$a_answer = $_POST['animal_answer'];
$i_answer = $_POST['instrument_answer'];

function getGuess(string $month, string $animal, string $instrument, mysqli $conn) {
    //first array for colors
    //second array matches with percentages
    $colors = array();
    $counts = array();
    $percentages = array();
    $colorforcurrentmonth = array();
    $colorforcurrentanimal = array();
    $colorforcurrentinstrument = array();

    $distinctcolorsquery = "SELECT DISTINCT color FROM colorentries";
    $colorsresult = $conn->query($distinctcolorsquery);
    while ($row = $colorsresult->fetch_row()) {
        array_push($colors, $row[0]);
    }
    //colors is now an array of string color names :)
    foreach($colors as $col) {
        $current_col_query = "SELECT COUNT(color) FROM colorentries WHERE COLOR = '{$col}'";
        $current_result = $conn->query($current_col_query);
        while ($row = $current_result->fetch_row()) {
            array_push($counts, $row[0]);
            // echo($row[0]);
        }
    }
    //counts is now an array of integer color counts :)

    $query_totalsum = "SELECT COUNT(entry_id) FROM colorentries";
    $total_result = $conn->query($query_totalsum);
    $count = 0;
    while ($row = $total_result->fetch_row()) {
        $count = $row[0];
    }
    // echo('<br>');
    // echo($count);
    //$count now holds an integer count of the total number of entries

    $colorpercent = array();
    $i = 0;
    foreach($counts as $numcolor) {
        array_push($colorpercent, ($numcolor/$count)*100);
    }

    //colorpercent now holds the base percentage of each color


    //query that returns the percentage of the time that each color has the user's month
    //multiply each base percentage by this percentage
    //number of times this color has this month as the response
    foreach($colors as $col) {
        $query_colortomonth = "SELECT COUNT(color) FROM colorentries WHERE color = '{$col}' AND month_answer = '{$month}'";
        $query_count_this_month_total = "SELECT COUNT(entry_id) FROM colorentries WHERE month_answer = '{$month}'";
        $colortomonth_result = $conn->query($query_colortomonth);
        $colortothismonth_count = 0;
        while ($row = $colortomonth_result->fetch_row()) {
            //colortothismonth_count now holds the number of times that the user's month input is related to the current color in the array
            $colortothismonth_count = $row[0];
        }
        $countthismonth_result = $conn->query($query_count_this_month_total);
        $thismonth_count = 0;
        while ($row = $countthismonth_result->fetch_row()) {
            //thismonth_count now holds the total number of times an entry has this month
            $thismonth_count = $row[0];
        }
        if ($thismonth_count == 0) {
            $percent = 0;
        } else {
            $percent = ($colortothismonth_count / $thismonth_count * 100);
        }
        //colorforcurrentmonth now contains the percent of each color for that month
        array_push($colorforcurrentmonth, $percent);
    }


    //query that returns the percentage of the time that each color has the user's animal
    //multiply the cumulative percentages by this percentage
    foreach($colors as $col) {
        $query_colortoanimal = "SELECT COUNT(color) FROM colorentries WHERE color = '{$col}' AND animal_answer = '{$animal}'";
        $query_count_this_animal_total = "SELECT COUNT(entry_id) FROM colorentries WHERE animal_answer = '{$animal}'";
        $colortoanimal_result = $conn->query($query_colortoanimal);
        $colortothisanimal_count = 0;
        while ($row = $colortoanimal_result->fetch_row()) {
            //colortothismonth_count now holds the number of times that the user's month input is related to the current color in the array
            $colortothisanimal_count = $row[0];
        }
        $countthisanimal_result = $conn->query($query_count_this_animal_total);
        $thisanimal_count = 0;
        while ($row = $countthisanimal_result->fetch_row()) {
            //thismonth_count now holds the total number of times an entry has this month
            $thisanimal_count = $row[0];
        }
        if ($thisanimal_count == 0) {
            $percent = 0;
        } else {
            $percent = ($colortothisanimal_count / $thisanimal_count * 100);
        }
        array_push($colorforcurrentanimal, $percent);
        //colorforcurrentanimal now contains the percent of each color for that animal
    }

    //query that returns the percentage of the time that each color has the user's instrument
    //multiply the cumulative percentages by this percentage
    foreach($colors as $col) {
        $query_colortoinstrument = "SELECT COUNT(color) FROM colorentries WHERE color = '{$col}' AND instrument_answer = '{$instrument}'";
        $query_count_this_instrument_total = "SELECT COUNT(entry_id) FROM colorentries WHERE instrument_answer = '{$instrument}'";
        $colortoinstrument_result = $conn->query($query_colortoinstrument);
        $colortothisinstrument_count = 0;
        while ($row = $colortoinstrument_result->fetch_row()) {
            //colortothismonth_count now holds the number of times that the user's month input is related to the current color in the array
            $colortothisinstrument_count = $row[0];
        }
        $countthisinstrument_result = $conn->query($query_count_this_instrument_total);
        $thisinstrument_count = 0;
        while ($row = $countthisinstrument_result->fetch_row()) {
            //thismonth_count now holds the total number of times an entry has this month
            $thisinstrument_count = $row[0];
        }
        if ($thisinstrument_count == 0) {
            $percent = 0;
        } else {
            $percent = ($colortothisinstrument_count / $thisinstrument_count * 100);
        }
        array_push($colorforcurrentinstrument, $percent);
        //colorforcurrentinstrument now contains the percent of each color for that instrument
    }
    //final percentages
    $finalcolorpercentages = array();
    for ($x = 0; $x < count($colors); $x++) {
        $multiplier1 = $colorforcurrentmonth[$x]/$colorpercent[$x]; //red should be at 3.50
        $multiplier2 = $colorforcurrentanimal[$x]/$colorpercent[$x]; //red should be at 2.33
        $multiplier3 = $colorforcurrentinstrument[$x]/$colorpercent[$x]; //red should be at 1.167
        $average_multiple = ($multiplier1 + $multiplier2 + $multiplier3)/3;
        array_push($finalcolorpercentages, $colorpercent[$x] * $average_multiple);
    }
    //finalcolorpercentages now holds a confidence percent for each color

    //find the color with the highest value in the array
    $guess = "purple";
    $confidence = 0.00;
    for($x = 0; $x < count($finalcolorpercentages); $x++) {
        if ($finalcolorpercentages[$x] > $confidence) {
            //set the highest confidence value
            $confidence = $finalcolorpercentages[$x];
            $guess = $colors[$x];
        }
    }
    $confidence = round($confidence, 2);
    return array($confidence, $guess);
}

$guessreturn = getGuess($m_answer, $a_answer, $i_answer, $dbc);
// echo ("<br>{$guessreturn}");
echo"

    <style>
    </style>
    <link rel='stylesheet' type='text/css' href='styles.css'>
    <div class='header'>AI Color Guesser</div>

    <div class='form-grid'>
        <div id='thinkofcolor'>Please think of a color then fill in the following fields!</div>
        <div class='form-panel'>
            <form action='/guessverification.php' method='post'>
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
                <div style='font-size: 32px; font-weight: bold; text-align: center; margin: 10px;'>
                    The AI is {$guessreturn[0]}% sure your color is {$guessreturn[1]}.
                    Was the AI correct?
                <input type='hidden' name='color' value='{$guessreturn[1]}'>
                </div>
                <div>
                    <input type='submit' id='yes' name='yes' value='Yes'>
                    <input type='submit' id='no' name='no' value='No'>
                </div>
            </form>
        </div>
    </div>
    <div class='footer'>
        <div class='ownership'>
            <div class='ownership-text'>Owned by Adam McIntosh</div>
        </div>
    </div>";

// $query = "SELECT month_answer, animal_answer, instrument_answer, color, entry_date FROM colorentries";
//
// $response = @mysqli_query($dbc, $query);
//
// if($response) {
//
//     echo '<table align="left"
//     cellspacing="5" cellpadding="8">
//
//     <tr><td align="left"><b>Month Answer</b></td>
//     <td align="left"><b>Animal Answer</b></td>
//     <td align="left"><b>Instrument Answer</b></td>
//     <td align="left"><b>Color</b></td>
//     <td align="left"><b>Entry Date</b></td></tr>';
//
//     while($row = mysqli_fetch_array($response)) {
//
//         echo '<tr><td align="left">' .
//         $row['month_answer'] . '</td><td align="left">' .
//         $row['animal_answer'] . '</td><td align="left">' .
//         $row['instrument_answer'] . '</td><td align="left">' .
//         $row['color'] . '</td><td align="left">' .
//         $row['entry_date'] . '</td><td align="left">';
//
//         echo '</tr>';
//
//     }
//
//     echo '</table>';
//
// } else {
//
//     echo "Couln't issue database query";
//
//     echo mysqli_error($dbc);
//
// }

// $stmt = mysqli_prepare($dbc, $query);
// $stmt = $dbc->prepare($query);
// mysqli_stmt_bind_param($stmt, "ssss", $m_answer, $a_answer, $i_answer, $c);
// $stmt->bind_param('ssss', $m_answer, $a_answer, $i_answer, $c);
// $stmt->execute();

// $affected_rows = mysqli_stmt_affected_rows($stmt);
//
// if($affected_rows == 1) {
//
//     echo 'Color entered';
//
//     mysqli_stmt_close($stmt);
//
//     mysqli_close($dbc);
//
// } else {
//     echo 'Error Occured <br />';
//     echo mysqli_error();
//     mysqli_stmt_close($stmt);
//     mysqli_close($dbc);
// }

mysqli_close($dbc);

?>
