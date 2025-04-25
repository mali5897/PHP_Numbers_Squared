<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Form</title>
    <?php
        $DisplayForm = TRUE;
        $Number = "";
        if (isset($_POST['Submit'])) {
            $Number = $_POST['Number'];
            if (is_numeric($Number)) {
                $DisplayForm = FALSE;
            } else {
                echo "<p>You need to enter a numeric value.</p>\n";
                $DisplayForm = TRUE;
            }
        }
        if ($DisplayForm) {
        ?>
        <form name="NumberForm" action="numbersForm.php" method="post">
        <p>Enter a number: <input type="text" name="Number" value="<?php echo $Number; ?>" /></p>
        <p><input type="reset" value="Clear Form" />&nbsp; &nbsp;<input type="submit" name="Submit" value="Send Form" /></p>
        </form>
        <?php
        } else{
            echo "<p>Thank you for entering a number.</p>\n";
            echo "<p>Your number, $Number, squared is " . ($Number*$Number) . ".</p>\n";
            echo "<p><a href=\"numbersForm.php\">Try again?</a></p>\n";
        }
    ?>
</head>
<body>
    
</body>
</html>