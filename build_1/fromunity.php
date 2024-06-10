<?php
    // store the variables posted here from unity script
    $var1 = $_POST["subj_ID"];
    $var2 = $_POST["points"];
    $var3 = $_POST["x"];
    $var4 = $_POST["y"];
    $var5 = $_POST["time"];

	if($var1 != "") {
    // send messages back to unity console to check and see what got here
    echo ("Message received!");
    echo ("Subject ID: " . $var1 . "\n");
    echo ("Points: " . $var2 . "\n");
    echo ("X: " . $var3 . "\n");
    echo ("Y: " . $var4 . "\n");
    echo ("Time: " . $var5 . "\n");

    // open the file in append mode, the first call will create the file, and subsequent calls will open then append new lines
    $file = fopen("data/new-file.txt", "a");

    // write in the data in a csv style format, comma delimited, row ends in new line
    fwrite($file, $var1 . "," . $var2 . "," . $var3 . "," . $var4 . "," . $var5 . "\n");

    // close the file
    fclose($file);

    } else {
    echo ("Message delivery failed...");
    }

?>