<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Standort und Öffnungszeiten</title>
    <link rel="stylesheet" href="../CSS/kontakt.css">
    <link rel="stylesheet" href="../CSS/main.css">

    <!-- Leaflet CSS-Datei einbinden -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

    <!-- Leaflet JS-Datei einbinden -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>



</head>

<body>
    <?php include './header.php'; ?>
    <main id="body_contact" class="inhalte">

        <h1 class="headerh1" tabindex="3"> UNSERE ÖFFNUNGSZEITEN: </h1>
        <div class="con_text" tabindex="3">
            <p> Montag: 11:00 - 23:00 <br>
                Dienstag: 11:00 - 23:00 <br>
                Mittwoch: 11:00 - 23:00 <br>
                Donnerstag: 11:00 - 23:00 <br>
                Freitag: 11:00 - 00:00 <br>
                Samstag: 11:00 - 00:00 <br>
                Sonntag: 12:00 - 23:00 <br>
                <br>
            </p>
        </div>


        <div class="con_text" tabindex="3">
            <h2 id="sheader2"> Anschrift:</h2>
            <p>
                City Pizza <br>
                Kornmarkt 5 <br>
                54290 Trier <br>
                Tel.: 0651-558971
            </p>
        </div>


        <div id="map" tabindex="3"></div>
        <script src="../Javascript/kontakt.js"></script> 

        <h1 class="headerh1" tabindex="3"> BESTELLUNGEN</h1>
    

        <p class="con_textb"> Wir nehmen ihre Bestellung gerne
            telefonisch entgegen unter 0651-558971. Natürlich können Sie
            ebenfalls vor Ort bestellen und ihr Lieblingsessen
            selbst mit nach Hause nehmen. </p>

    </main>

    <?php include './footer.php'; ?>
</body>

</html>
