//vérifiction mot de passe identique Modification
var Modification_Mdp = document.getElementById("Modification_Mdp");
var Modification_Mdp_Confirmation = document.getElementById("Modification_Mdp_Confirmation");

function validatePasswordModification() {
    if (Modification_Mdp.value != Modification_Mdp_Confirmation.value) {
        Modification_Mdp_Confirmation.setCustomValidity("Les mots de passe ne correspondent pas");
    } else {
        Modification_Mdp_Confirmation.setCustomValidity('');
    }
}

Modification_Mdp.onkeyup = validatePasswordModification;
Modification_Mdp_Confirmation.onkeyup = validatePasswordModification;