<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservierungstool</title>
    <link rel="stylesheet" href="../CSS/reservierungen.css">
    <link rel="stylesheet" href="../CSS/main.css">
</head>

<body>
    <?php include './header.php'; ?>
    <main class="inhalte">
       
        <h1 id="res_header" tabindex="3"> RESERVIERUNGEN</h1>

        <!-- Teil: Online Reservierung-->
        <div class="res_box">
            <h2 class="res_h"> Online Reservierung </h2>

            <form name="mails" action="../php/res_action_page.php" method="POST">
                <div class="res_inputs">
                    <label id="Lname" for="name"> Vor- und Nachname</label> <input class="fields" id="name" name="name" type="text" required></div>
                <div class="res_inputs">
                    <label id="Lmail" for="email"> Email-Adresse</label> <input class="fields" id="email" name="email" type="email" required></div>
                <div class="res_inputs">
                    <label id="Ldate" for="date"> Datum </label> <input class="fields" id="date" name="date" type="date" value="2021-01-17" required> </div>
                <div class="res_inputs">
                    <label id="Ltime" for="datetime"> Uhrzeit </label> <input class="fields" id="datetime" name="datetime" type="time" value="20:00" required> </div>
                <div class="res_inputs">
                    <label id="Lnumber" for="number"> Personenanzahl</label> <input class="fields" id="number" name="number" type="number" min="1" max="20" value="2" required></div>
                <div class="res_inputs">
                    <label id="Lbaby" for="baby"> Kleinkinder </label><input class="fields" id="baby" name="baby" type="number" min="0" max="20" value="0" required> </div>
                <div class="res_inputs">
                    <button id="button" type="submit" value="send"> Reservierung abschicken</button>
                </div>

            </form>

            <script src="../Javascript/reservierungen.js"></script>


        </div>

        <!-- telefonisch -->
        <div class="res_box">
            <h2 class="res_h">Telefonisch</h2>
            <p> unter 0651-558971 </p>
        </div>

        <!-- Private Veranstaltungen -->
        <div class="res_box">
            <h2 class="res_h">Für private Veranstaltungen</h2>
            <p class="res_text">
                Gerne planen wir mit Ihnen zusammen ganz individuelle
                Geburtstagsfeiern, Abschiedsfeiern, Kommunionen, Hochzeiten, Babyparties,
                Junggesellen- bzw Junggesellinngenabschiede, oder andere besondere Events. <br>
                Kontaktieren Sie uns dafür bitte telefonisch.

            </p>
        </div> 

    </main>


   <?php include './footer.php';?>
</body>

</html>
