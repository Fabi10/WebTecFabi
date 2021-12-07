<?php
    //MailToDisk aktivieren -> in php.ini Datei -> sendmail-Path setzen 

    //Daten aus dem Formular auslesen und in Variablen speichern
    $name =     test_input($_POST["name"]);
    $mailFrom = test_input($_POST["email"]);
    $date =     test_input($_POST["date"]);
    $time =     test_input($_POST["datetime"]);
    $persons =  test_input($_POST["number"]);
    $kids =     test_input($_POST["baby"]);

 function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $message = "Reservierungsanfrage von " .$name . " für den " .$date . ". Uhrzeit: " .$time . " Uhr.  Für " .$persons . " Personen und " .$kids . " Kleinkind(er)";
    $listener = "city-pizza2020@web.de";
    $topic = "Reservierung";
    $txt = "Von:" .$mailFrom;
    $info = "Sie habe eine Email von ".$name . " erhalten.";

    //Email versenden
    mail($listener, $topic, $message, $txt);

    //Auf HTML website bleiben
    header("Location: ../HTML/reservierungen.php");
    ?>



