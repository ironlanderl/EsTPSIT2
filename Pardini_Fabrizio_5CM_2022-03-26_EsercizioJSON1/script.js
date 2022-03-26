//Pardini_Fabrizio_5CM_2022-03-26_EsercizioJSON1
var PREZZI = {
    "banana" : 1.50,
    "pomodoro" : 2.50
};

var FRUTTI = {};

function calcolaPrezzi(prodotto, quantita){
    return PREZZI[prodotto] * quantita;
}

function forzaCalcolo(){
    document.getElementById("costob").value = calcolaPrezzi("banana", Number(document.getElementById("quantitab").value));
    document.getElementById("costop").value = calcolaPrezzi("pomodoro", Number(document.getElementById("quantitap").value));
    return true;
}

// Handler prezzo banane
document.getElementById("quantitab").addEventListener("change", function() {
    document.getElementById("costob").value = calcolaPrezzi("banana", Number(document.getElementById("quantitab").value));
})

// Handler prezzo pomodori
document.getElementById("quantitap").addEventListener("change", function() {
    document.getElementById("costop").value = calcolaPrezzi("pomodoro", Number(document.getElementById("quantitap").value));
})