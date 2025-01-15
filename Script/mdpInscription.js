//vérifiction mot de passe identique Inscription
var singUp_Password = document.getElementById("singUp_Password");
var singUp_confirmPassword = document.getElementById("singUp_confirmPassword");

function validatePasswordInscription() {
    if (singUp_Password.value != singUp_confirmPassword.value) {
        singUp_confirmPassword.setCustomValidity("Les mots de passe ne correspondent pas");
    } else {
        singUp_confirmPassword.setCustomValidity('');
    }
}

singUp_Password.onkeyup = validatePasswordInscription;
singUp_confirmPassword.onkeyup = validatePasswordInscription;
