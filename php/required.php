<?php 

$errName = $errBetreff = $errNachricht = "";
/* $writeName = $writeBetreff = $writeNachricht = "";

@$writeName = $_POST['input_name'];
@$writeBetreff =  $_POST['input_betreff'];
@$writeNachricht = $_POST['input_nachricht']; */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["input_name"])) {
    $errName = "Es fehlt der Name.";
  }/*  else {
    $writeName = test_input($_POST["input_name"]);
  } */
  
  
  if (empty($_POST["input_betreff"])) {
    $errBetreff = "Es fehlt der Betreff.";
  }/*  else {
    $writeBetreff = test_input($_POST["input_betreff"]);
  } */
  
  
  if (empty($_POST["input_nachricht"])) {
    $errNachricht = "Es fehlt die Nachricht.";
  }/*  else {
    $writeNachricht = test_input($_POST["input_nachricht"]);
  } */
}

function test_input($data)
{
  $data = trim($data); //Unnötige Zeichen(zuätzliches Leerzeichen, Tabulator, Zeilenumbruch) entfernen.
  $data = stripslashes($data); // Backsklashes(\) entfernen
  $data = htmlspecialchars($data); // Um injection zu verhinden.
  return $data;
}


?>