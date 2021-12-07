<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getr&auml;nke</title>
    <link rel="stylesheet" href="../CSS/styleSpeisekarte.css">   
    <link rel="stylesheet" href="../CSS/main.css">
</head>

<body>
    <?php include './header.php'; ?>

    <main class="inhalte Rahmen">

                <table id="Getraenketabelle">
                    <caption>
                        Getr&auml;nke
                    </caption>
                    <colgroup id="getraenkespaltengruppe">
                        <col id="nummer">
                        <col id="gericht">
                        <col id="inhalt">
                        <col class="preis">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Nr.</th>
                            <th>
                                Getr&auml;nk
                                <input type="text" id="sucheGericht0" class="cl_sucheGericht" placeholder="Getr&auml;nk Suche..." tabindex="3">
                            </th>
                            <th>Inhalt</th>
                            <th>Preis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Cola</td>
                            <td>0,33L</td>
                            <td>2,00&#8364;</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Cola Light</td>
                            <td>0,33L</td>
                            <td>2,00&#8364;</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Fanta</td>
                            <td>0,33L</td>
                            <td>2,00&#8364;</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Sprite</td>
                            <td>0,33L</td>
                            <td>2,00&#8364;</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Mineralwasser</td>
                            <td>0,33L</td>
                            <td>2,00&#8364;</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Stubbi</td>
                            <td>0,33L</td>
                            <td>2,00&#8364;</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Wein</td>
                            <td>0,20L</td>
                            <td>3,00&#8364;</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Kaffee</td>
                            <td>0,20L</td>
                            <td>2,00&#8364;</td>
                        </tr>
                    </tbody>
                </table>
   

        <script src="../Javascript/Speisekarte.js"></script>
    </main>
    
    <?php include './footer.php'; ?>
</body>

</html>
