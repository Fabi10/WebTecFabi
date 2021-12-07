

<!-- Falls user kein JavaSkript hat -->
<noscript>
    <p id="keinJS">Warnung: Diese Seite ben&ouml;tigt JavaSkript, um vollst&auml;ndig zu funktionieren.</p>
</noscript>


<header id="HauptHeader">
    <!--Ueberschrift der Seite-->
    <h1 id="headline"> City Pizza - Restaurant und Lieferservice</h1>
    
    <!--Navigationsleiste als Liste-->
    <nav id="navbar">    
        <ul id="navbarListe">
            <!--Menuebutton und Suchleiste-->
            <li id="firstElem" class="navListElem">                
                <form id="MenueButton">
                    <input  type="image" src="../image/Menuebutton.png" alt="MenueButton" tabindex="1">
                </form>
                <form id ="SuchElement">
                    <div id="SuchElementRand">
                        <input type="text" id="Suchleiste" placeholder="Suche..." tabindex="2">                          
                        <input type="image" id="SuchButton" src="../image/Menuelupe.jpeg" alt="Button mit Bild von Lupe" tabindex="2">
                    </div>
                </form>
            </li>
            
            <li class="navListElem"><a href="./index.php" tabindex="1">Home</a></li>
            <li class="navListElem"><a href="./about.php" tabindex="1">&Uuml;ber uns</a></li> 
            <!--Seiten der Speisekarte als Dropdown-->
            <li class="dropdownAkt navListElem">
                
                <button id="SpeisekarteBtn" class="dropbtn" tabindex="1">Speisekarte</button>
                <div id="dropdown-content">
                    <a href="./Speisekarte_Getränke.php" tabindex="1"> Getr&auml;nke </a>
                    <a href="./Speisekarte_Pizza.php" tabindex="1"> Pizza</a>
                    <a href="./Speisekarte_Pasta.php" tabindex="1"> Pasta</a> 
                </div>
                
            </li> 
            <li class="navListElem"><a href="./CoronaPage.php" tabindex="1">Corona Infos</a></li>
            <li class="navListElem"><a href="./kontakt.php" tabindex="1">Kontakt</a></li>
            <li class="navListElem"><a href="./reservierungen.php" tabindex="1">Reservierungen</a></li>
            <li class="navListElem"><a href="./Gästebuch.php" tabindex="1">G&auml;stebuch</a></li>
            <li class="navListElem"><a href="./Galerie.php" tabindex="1">Bildergalerie</a></li>
            <li class="navListElem"><a href="./events.php" tabindex="1">Events</a></li>        
        </ul>
    </nav>
</header>


<!-- JS muss am Ende stehen, da sonst die IDs und Tags der HTML-Elemente noch nicht existieren,
was zu Fehlern mit den Eventlistenern fuehrt -->
<script src="../Javascript/header.js"></script>