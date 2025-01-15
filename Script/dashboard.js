// ********************************
// ** Gestion des places hangard **
// ********************************

// Définir les variables
const scrollContentElementHangard1 = document.getElementById('numberPlaceHangard1');
const FormElementHangard1 = document.getElementById('place_hangard_1');
const scrollContentElementHangard2 = document.getElementById('numberPlaceHangard2');
const FormElementHangard2 = document.getElementById('place_hangard_2');

// Définir en int les variables
let Hangard1 = parseInt(scrollContentElementHangard1.innerText);
let Hangard2 = parseInt(scrollContentElementHangard2.innerText);

function scrollContentHangard1(direction) {
    Hangard1 += direction;
    updateScrollContentHangard1();
}

function updateScrollContentHangard1() {
    if (Hangard1 < 0) {
        Hangard1 = 0;
    }
    else if (Hangard1 > 100) {
        Hangard1 = 100;
    }
    
    scrollContentElementHangard1.innerText = Hangard1;
    FormElementHangard1.value = Hangard1;
}

function scrollContentHangard2(direction) {
    Hangard2 += direction;
    updateScrollContentHangard2();
}

function updateScrollContentHangard2() {
    if (Hangard2 < 0) {
        Hangard2 = 0;
    }
    else if (Hangard2 > 100) {
        Hangard2 = 100;
    }
    
    scrollContentElementHangard2.innerText = Hangard2;
    FormElementHangard2.value = Hangard2;
}