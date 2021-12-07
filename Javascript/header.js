// JavaSkript fuer den Header
/* Inhalt:  -Funktion der Suchleiste um Seiten zu suchen
            -Mobile Ansicht:
                -Menuebutton
                -Responsive Design:
                    -Verhalten des Menues am Breakpoint
                    -Verhalten des Menues nach dem neu Laden der Seite                
                -Funktionen zum oeffnen und schliessen des Menues  
                -Dropdown der Speisekarte               
            -Navigationsleiste immer an oberer Bildschirmkante (class sticky)
            - Barrierefreiheit Komfort der Tab-Taste:
                -Verhalten des Menues beim druecken der Tab-Taste 
            
*/


// -----------------------------------Funktion der Suchleiste um Seiten zu suchen-----------------------------------
// startet Suche bei Knopfdruck auf Lupe
document.getElementById("SuchButton").addEventListener('click', sucheSeite);
// verhindert submission vom form-Tag
document.getElementById("SuchButton").addEventListener('click', function (event) { event.preventDefault() });

function sucheSeite() {
    var suchLeiste = document.getElementById("Suchleiste");
    var suchWort = suchLeiste.value.toUpperCase();
    switch (suchWort) {
        case "HOME":
            window.location.href = "../HTML/index.php";
            break;
        case "ÜBER UNS":
            window.location.href = "../HTML/about.php";
            break;
        case "SPEISEKARTE":
            window.location.href = "../HTML/Speisekarte_Pizza.php";
            break;
        case "GETRÄNKE":
            window.location.href = "../HTML/Speisekarte_Getränke.php";
            break;
        case "PIZZA":
            window.location.href = "../HTML/Speisekarte_Pizza.php";
            break;
        case "PASTA":
            window.location.href = "../HTML/Speisekarte_Pasta.php";
            break;
        case "CORONA INFOS":
            window.location.href = "../HTML/CoronaPage.php";
            break;
        case "CORONA":
            window.location.href = "../HTML/CoronaPage.php";
            break;
        case "KONTAKTE":
            window.location.href = "../HTML/kontakt.php";
            break;
        case "RESERVIERUNGEN":
            window.location.href = "../HTML/reservierungen.php";
            break;
        case "GÄSTEBUCH":
            window.location.href = "../HTML/Gästebuch.php";
            break;
        case "BILDERGALERIE":
            window.location.href = "../HTML/Galerie.php";
            break;
        case "EVENTS":
            window.location.href = "../HTML/events.php";
            break;
        case "IMPRESSUM":
            window.location.href = "../HTML/impressum.php";
            break;
        default:
            alert("Ihre gesuchte Seite konnte leider nicht gefunden werden. \nIhr Suchwort: " + suchLeiste.value)
    }
}


// --------------------------------------------------Mobile Ansicht--------------------------------------------------

// ------------------------------------------MenueButton------------------------------------------

// erkennt, ob auf den Menuebutton geclickt wurde
document.getElementById("MenueButton").addEventListener('click', MenueButtonFkt);
// verhindert submission vom form-Tag
document.getElementById("MenueButton").addEventListener('click', function (event) { event.preventDefault() });

// entscheidet, ob die Navbar auf- oder zugeklappt wird
function MenueButtonFkt() {
    // die Elemente der Navigationsliste in Variable speichern
    var listElem = document.getElementsByClassName("navListElem");

    // pruefen, ob die Liste aktuell angezeigt wird oder nicht
    if (listElem[1].style.display == 'block' || listElem[1].style.display == '') {
        // zuklappen
        MenueSchliessen(listElem);
    }
    else {
        // aufklappen
        MenueOeffnen(listElem);
    }
}


// ---------------------------------------Responsive Design---------------------------------------

// erkennt Veraenderung der Groesse des Fensters
window.addEventListener('resize', ResponsiveMenue);

// erkennt ob die Seite neu geladen wurde
window.addEventListener('load', ResponsiveMenue);

// Sorgt dafuer, dass sich das Menue benutzerfreundlich verhaellt (aehnlich wie ein reset)
//  - (resize) im Mobile-Modus geschlossen und im Desktop-Modus geoeffnet
//  - (load) beim Neuladen im Mobile-Modus wird es geschlossem
function ResponsiveMenue() {
    // Die Navigationsliste in Variable speichern
    var listElem = document.getElementsByClassName("navListElem");

    // Prüft, ob @media (min-width: 1450px) erfüllt ist (vgl in header.css)
    // das Menue wird aufgeklappt bei ueber 1450px und zugeklappt bei unter 1450px
    if (window.matchMedia("(min-width: 1450px)").matches) {
        MenueOeffnen(listElem);
        
    }
    else {
        MenueSchliessen(listElem);
    }
}


// ------------------------Funktionen zum oeffnen und schliessen des Menues------------------------

function MenueOeffnen(listElem) {
    // Menue aufklappen      
    for (var i = 1; i < listElem.length; i++) {
        listElem[i].style.display = '';
    }
}


function MenueSchliessen(listElem) {
    // Menue zuklappen
    for (var i = 1; i < listElem.length; i++) {
        listElem[i].style.display = 'none';
    }
    // den Speisekarten Dropdown zuklappen
    // Dropdown der Speisekarte in Variable Speichern
    var dropElem = document.getElementById("dropdown-content");
    //zuklappen
    dropElem.style.display = '';
}


// ------------------------------------Dropdown der Speisekarte------------------------------------

document.getElementById("SpeisekarteBtn").addEventListener('click', MenueSpeisekarteDropdown);

// Beim drücken auf "Speisekarte" wird der Dropdown geoeffnet und bleibt offen
function MenueSpeisekarteDropdown() {
    // Dropdown der Speisekarte in Variable Speichern
    var dropElem = document.getElementById("dropdown-content");
    // pruefen, ob der Dropdown angezeigt wird oder nicht  
    if (dropElem.style.display == 'none' || dropElem.style.display == '') {
        //aufklappen
        dropElem.style.display = 'block';
    }
    else {
        //zuklappen
        dropElem.style.display = '';
        //Fokus entfernen vom Button
        document.getElementById("SpeisekarteBtn").blur();
    }

}


// -------------------------Navigationsleiste immer an oberer Bildschirmkante (class sticky)-------------------------  

// die Navbar in Variable speichern
var navbar = document.getElementById("navbar");

// den Abstand der Navbar zur oberen Kante des Bildschirmes auslesen (= hoehe der Ueberschrift)  
var hoeheNavbar = navbar.offsetTop;
/* bei Veraenderung der Bildschirmbreite, kann sich die Hoehe
   der Ueberschrift aendern => hoeheNavbar muss aktualisiert werden*/
window.addEventListener('resize', akthoeheUeberschrift);

function akthoeheUeberschrift() {
    // hoehe der Navbar wieder auslesen
    var headline = document.getElementById("headline");
    hoeheNavbar = headline.offsetHeight;
}

// erkennt ob der Nutzer die Seite scrollt 
window.addEventListener('scroll', stickyNavbar);

// der main Tag mit allen Hauptinhalten der Seite
var inhalte = document.getElementsByClassName('inhalte');

// gibt und nimmt die Klasse "sticky" dem nav-Tag,
// wenn dieser die obere Kante des Bildschirmes erreicht bzw. verlaesst
// gibt und nimmt den Hauptinhalten der Seite paddingTop zum ausgleich
function stickyNavbar() {
    // Wenn die Seite tief genug gescrollt ist    
    if (window.pageYOffset >= hoeheNavbar) {
        navbar.classList.add("sticky")
        // Gleichmaeßiger Uebergang der Inhalte
        inhalte[0].style.marginTop = "107px";
    } else {
        navbar.classList.remove("sticky");
        // Gleichmaeßiger Uebergang der Inhalte
        inhalte[0].style.marginTop = "50px";
    }
}

// --------------------------------------Barrierefreiheit: Komfort der Tab-Taste:-------------------------------------------------

//-Verhalten des Menues beim druecken der Tab-Taste 
// Tasten druck erkennen
window.addEventListener("keyup", TabInHeader);

function TabInHeader() {
    // Teste, ob Tab oder eine andere falsche Taste gedrückt wurde
    if (event.keyCode != 9) { // Tab = 9
        //abbruch
        return false;
    }

    // aktuelles Element im Fokus abgreifen
    var elem = document.activeElement;
    elem = getParent(elem);

    /* Testen in welchem Segment des Headers sich das aktuelle Element befindet
    und dementsprechen "hoch klettern" bis <li>-Tag */

    // Speisekartendropdown oder  Menuebutton
    if (elem == document.getElementById("dropdown-content") || elem == document.getElementById("MenueButton")) {
        elem = getParent(elem);
    }
    // Suchleiste
    if (elem == document.getElementById("SuchElementRand")) {
        elem = getParent(elem);
        elem = getParent(elem);
    }

    /* einige Links und der Speisekartenbutton haben direkt ein <li>-Tag als Elternelement
        diese muessen also nicht durch ein if geprueft werden*/

    // von <li>-Tag bis <header>-Tag "hoch klettern"
    elem = getParent(elem);
    elem = getParent(elem);
    elem = getParent(elem);

    // pruefen ob es wirklich der <header>-Tag ist oder nicht
    var head = document.getElementById("HauptHeader");
    if (elem != head) {
        ResponsiveMenue();
        var dropElem = document.getElementById("dropdown-content");
        dropElem.style.display = '';
    }
}

// vermeidet zugriff auf Null, falls .parentNode zu oft aufgerufen werden sollte
function getParent(node) {
    if (node.parentNode != null) {
        return node.parentNode;
    }
    else {
        return node;
    }
}




