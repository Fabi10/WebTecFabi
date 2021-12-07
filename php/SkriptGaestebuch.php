

<?php



if (!empty($_POST['input_name']) && !empty($_POST['input_betreff']) && !empty($_POST['input_nachricht'])) {


  $filename = "comments.html";
  //Datai öffnen a = nur schreiben, beginn am Dataiende. Existiert die Datei nicht, wird sie erzeugt. 
  $file = fopen($filename, "a") or die("Fehler beim Öffnen");
  fclose($file);

  //bisherigen Inhalt der Datai Lesen
  $file_contents = file_get_contents($filename);
  //aktuelles Datum und aktuelle Zeit formatieren
  $timestamp = time();
  $todayDate = date("j.n.Y", $timestamp);
  $todayTime = date("G:i:s", $timestamp);
  $file = fopen($filename, "w") or die("Fehler beim Schreiben");


  $writeName = test_input2($_POST['input_name']);
  $writeBetreff = test_input2($_POST['input_betreff']);
  $writeNachricht = test_input2($_POST['input_nachricht']);


  //Datai schreiben
  fwrite($file, "\n<article class=\"kommentar\">");
  fwrite($file, "<h4>Am $todayDate um $todayTime Uhr schickte <strong> $writeName </strong> diese Nachricht </h4>");
  fwrite($file, "<h5>Betreff:</h5><p>$writeBetreff</p><h5>Nachricht:</h5><p>$writeNachricht</p></article>");

  fwrite($file, "<hr class=\"KommentarTrennung\">");

  //alte Einträge zurückschreiben
  fwrite($file, $file_contents);
  fclose($file);
  print "<p id=\"VielenDank\">Vielen Dank für Ihren Beitrag.<br>
Er wurde zum Gästebuch hinzugef&uuml;gt.</p><hr>";
}
  //Anzeigen der Einträge
  include("comments.html");
 /* else {
  include("comments.html");
} */
function test_input2($data)
{
  $data = trim($data); //Unnötige Zeichen(zuätzliches Leerzeichen, Tabulator, Zeilenumbruch) entfernen.
  $data = stripslashes($data); // Backsklashes(\) entfernen
  $data = htmlspecialchars($data); // Um injection zu verhinden.
  return $data;
}
?>


