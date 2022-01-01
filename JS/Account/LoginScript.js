
let button = document.getElementById("btn");

let errorToast = document.getElementById("errorToast");
let errorToastButton = document.getElementById("errorToastButton");

let emailInput = document.getElementById("email");
let hintEmail = document.getElementById("hintEmail");
let hintEmailErrorMessage = "Cette adresse mail est invalide.";

let passwordInput = document.getElementById("password");
let hintPassword = document.getElementById("hintPassword");
let hintPasswordErrorMessage = "Ce mot de passe est invalide.";

errorToastButton.onclick = () => {
    hideErrorToast(errorToast);
}

button.onclick = () => {

    let email = emailInput.value;
    let password = passwordInput.value;

    if ( !isValidEmail(email) ){
        //Display error
        showMessage(hintEmail,emailInput,hintEmailErrorMessage);
    } else {
        hideMessage(hintEmail,emailInput);
    }


    if ( !isValidPassword(password) ){
        showMessage(hintPassword,passwordInput,hintPasswordErrorMessage);
    } else {
        hideMessage(hintPassword,passwordInput);
    }



    if ( isValidPassword(password) && isValidEmail(email) ){
        let xhttp = new XMLHttpRequest();
        xhttp.open("GET",`?controller=Account&action=Login&param1=${email}&param2=${password}`, true);
        xhttp.onreadystatechange = () => {

            if ( xhttp.readyState === 4 && xhttp.status === 200 ){
                let response = xhttp.responseText;

                if ( response === SUCCESS_CODE ) {
                    window.location.href = "?controller=Account&action=Account";
                } else {
                    showErrorToast(errorToast);
                }

            }
        }
        xhttp.send();

    }


}




emailInput.onchange = () => {

    let email = emailInput.value;

    if ( !isValidEmail(email) ){
        //Display error
        showMessage(hintEmail,emailInput,hintEmailErrorMessage);
    } else {
        hideMessage(hintEmail,emailInput);
    }

}


passwordInput.onchange = () => {

    let password = passwordInput.value;

    if (!isValidPassword(password)) {
        showMessage(hintPassword, passwordInput, hintPasswordErrorMessage);
    } else {
        hideMessage(hintPassword, passwordInput);
    }
}