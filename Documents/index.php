<html>
    <head>
        <title>AI Color Guesser</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <div class="header">AI Color Guesser</div>
        <div class="form-grid">
            <div id="thinkofcolor">Please think of a <span id="color-text">color</span> then fill in the following fields!</div>
            <div class="form-panel">
                <form action="/guesscolor.php" method="post">
                    <div class="inputs-grid">
                        <div class="label-container">
                            <label for="month_answer">Think of and enter a month of the year:</label>
                        </div>
                        <div class="input-container">
                            <input type="text" id="month_answer" name="month_answer" autocomplete="off"><br>
                        </div>
                        <div class="label-container">
                            <label for="animal_answer">Think of and enter an animal:</label>
                        </div>
                        <div class="input-container">
                            <input type="text" id="animal_answer" name="animal_answer" autocomplete="off"><br>
                        </div>
                        <div class="label-container">
                            <label for="instrument_answer">Think of and enter a musical instrument:</label>
                        </div>
                        <div class="input-container">
                            <input type="text" id="instrument_answer" name="instrument_answer" autocomplete="off"><br>
                        </div>
                    </div>
                    <input type="submit" name="submit" value="Guess My Color!">
                </form>
            </div>
        </div>
        <div class="footer">
            <div class="ownership">
                <!-- <div class="ownership-text">Owned by Adam McIntosh</div> -->
            </div>
        </div>
    </body>
</html>
