

if(document.getElementById("sucheGericht0") != null){
    document.getElementById("sucheGericht0").addEventListener('keyup',getGerichtSuche);
}
if(document.getElementById("sucheGericht1") != null){
    document.getElementById("sucheGericht1").addEventListener('keyup',getGerichtSuche);
}



function getGerichtSuche() {
            
    var input, filter, table, tr, td, i, suchWort;

    // Suchleiste mit der Nummer tableNumber auswerten            
    input = document.getElementById(this.id);
    suchWort = input.value.toUpperCase();            

    var tableNumber = this.id.slice(12, 13);
    // Tabellen auswerten
    table = document.getElementsByTagName("table");
    // Zeilen von Tabelle mit Nummer tableNumber          
    tr = table[tableNumber].getElementsByTagName("tr");            

    // Durch die Zeilen iterieren
    for (i = 0; i < tr.length; i++) {
        // Spaltenwert abgreifen
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
        // Inhalt der Splate abgreifen
        txtValue = td.textContent || td.innerText;
        // Vergleich mit Suchwort
        if (txtValue.toUpperCase().indexOf(suchWort) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
        }
    }
}