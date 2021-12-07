
// Prüfen, ob alle Felder ausgefüllt wurden un ob eine gültige Email Adresse eingegeben wurde 
var button = document.getElementById("button");

button.addEventListener("click", event => {
    if (document.mails.name.value == "" || document.mails.email.value == "") {
        alert("Fehler! Sie müssen alle Felder ausfüllen!");
        return false;
    }else if (document.mails.email.value.indexOf('@') == -1) {
        alert("Fehler: Bitte geben Sie eine gültige E-Mail Adresse ein!");
        return false;
    }else {
        alert("Vielen Dank, ihre Reservierungsanfrage wird nun versendet. Sie erhalten in Kürze eine Rückmeldung per Email!");
    }
});
