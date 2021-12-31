
let button = document.getElementById("btn");

let errorToast = document.getElementById("errorToast");
let errorToastButton = document.getElementById("errorToastButton");

let nameInput = document.getElementById("name");
let hintName = document.getElementById("hintName");
let hintNameErrorMessage = "Ce nom est invalide.";

let surnameInput = document.getElementById("surname");
let hintSurname = document.getElementById("hintSurname");
let hintSurnameErrorMessage = "Ce prénom est invalide.";

let birthdateInput = document.getElementById("birthdate");
let hintBirthdate = document.getElementById("hintBirthdate");
let hintBirthdateErrorMessage = "Cette date de naissance est invalide.";

let addressInput = document.getElementById("address");
let hintAddress = document.getElementById("hintAddress");
let hintAddressErrorMessage = "Cette adresse est invalide.";

let phoneNumberInput = document.getElementById("phoneNumber");
let hintPhoneNumber = document.getElementById("hintPhoneNumber");
let hintPhoneNumberErrorMessage = "Ce numéro de téléphone est invalide.";


let emailInput = document.getElementById("email");
let hintEmail = document.getElementById("hintEmail");
let hintEmailErrorMessage = "Cette adresse mail est invalide.";
let hintEmailSuccessMessage = "Cette adresse mail est disponible";


let passwordInput = document.getElementById("password");
let hintPassword = document.getElementById("hintPassword");
let hintPasswordErrorMessage = "Ce mot de passe est invalide.";


let password2Input = document.getElementById("password2");
let hintPassword2 = document.getElementById("hintPassword2");
let hintPassword2ErrorMessage = "Ce mot de passe ne correspond pas au premier.";

errorToastButton.onclick = () => {
    hideErrorToast(errorToast);
}

button.onclick = () => {

    let name = nameInput.value;
    let surname = surnameInput.value;
    let birthdate = birthdateInput.value;
    let address = addressInput.value;
    let phoneNumber = phoneNumberInput.value;
    let email = emailInput.value;
    let password = passwordInput.value;
    let password2 = password2Input.value;



    if ( !isValidName(name) ){
        showMessage(hintName,nameInput,hintNameErrorMessage);
    } else {
        hideMessage(hintName,nameInput);
    }


    if ( !isValidSurname(surname) ){
        showMessage(hintSurname,surnameInput,hintSurnameErrorMessage);
    } else {
        hideMessage(hintSurname,surnameInput);
    }


    if ( !isValidBirthdate(birthdate) ){
        showMessage(hintBirthdate,birthdateInput,hintBirthdateErrorMessage);
    } else {
        hideMessage(hintBirthdate,birthdateInput);
    }

    if ( !isValidAddress(address) ){
        showMessage(hintAddress,addressInput,hintAddressErrorMessage);
    } else {
        hideMessage(hintAddress,addressInput);
    }

    if ( !isValidPhoneNumber(phoneNumber) ){
        showMessage(hintPhoneNumber,phoneNumberInput,hintPhoneNumberErrorMessage);
    } else {
        hideMessage(hintPhoneNumber,phoneNumberInput);
    }

    if ( !isValidEmail(email) ){
        showMessage(hintEmail,emailInput,hintEmailErrorMessage);
    } else {
        hideMessage(hintEmail,emailInput);
    }

    if ( !isValidPassword(password) ){
        showMessage(hintPassword,passwordInput,hintPasswordErrorMessage);
    } else {
        hideMessage(hintPassword,passwordInput);
    }


    if ( !isValidPassword(password2) ){
        showMessage(hintPassword2,password2Input,hintPassword2ErrorMessage);
    } else {
        hideMessage(hintPassword2,password2Input);
    }


    //If all ok
    if (
        isValidName(name) &&
        isValidSurname(surname) &&
        isValidBirthdate(birthdate) &&
        isValidAddress(address) &&
        isValidPhoneNumber(phoneNumber) &&
        isValidEmail(email) &&
        isValidPassword(password) &&
        passwordsMatch(password,password2)
    ){

        let xhttp = new XMLHttpRequest();
        xhttp.open("GET",`?controller=Account&action=Register&param1=${name}&param2=${surname}&param3=${birthdate}&param4=${address}&param5=${phoneNumber}&param6=${email}&param7=${password}`, true);
        xhttp.onreadystatechange = () => {

            if ( xhttp.readyState === 4 && xhttp.status === 200 ){
                //console.log(xhttp.responseText);
                let response = xhttp.responseText;
                if (response === SUCCESS_CODE){
                    window.location.href = "?controller=Account&action=Account"
                } else {
                    showErrorToast(errorToast);
                }

            }
        }
        xhttp.send();


    }



}

nameInput.onchange = () => {

    let name = nameInput.value;
    if ( !isValidName(name) ){
        showMessage(hintName,nameInput,hintNameErrorMessage);
    } else {
        hideMessage(hintName,nameInput);
    }

}

surnameInput.onchange = () => {

    let surname = surnameInput.value;
    if ( !isValidSurname(surname) ){
        showMessage(hintSurname,surnameInput,hintSurnameErrorMessage);
    } else {
        hideMessage(hintSurname,surnameInput);
    }

}

birthdateInput.onchange = () => {

    let birthdate = birthdateInput.value;
    if ( !isValidBirthdate(birthdate) ){
        showMessage(hintBirthdate,birthdateInput,hintBirthdateErrorMessage);
    } else {
        hideMessage(hintBirthdate,birthdateInput);
    }
}

addressInput.onchange = () => {

    let address = addressInput.value;
    if ( !isValidAddress(address) ){
        showMessage(hintAddress,addressInput,hintAddressErrorMessage);
    } else {
        hideMessage(hintAddress,addressInput);
    }

}

phoneNumberInput.onchange = () => {

    let phoneNumber = phoneNumberInput.value;
    if ( !isValidPhoneNumber(phoneNumber) ){
        showMessage(hintPhoneNumber,phoneNumberInput,hintPhoneNumberErrorMessage);
    } else {
        hideMessage(hintPhoneNumber,phoneNumberInput);
    }

}


emailInput.onchange = () => {

    let email = emailInput.value;
    if ( !isValidEmail(email) ){
        showMessage(hintEmail,emailInput,hintEmailErrorMessage);
    } else {

        //Make a request to ask database if this email is already used
        let xhttp = new XMLHttpRequest();
        xhttp.open("GET",`?controller=Account&action=IsEmailUsed&param1=${email}`, true);
        xhttp.onreadystatechange = () => {

            if ( xhttp.readyState === 4 && xhttp.status === 200 ){
                //console.log(xhttp.responseText);
                let response = xhttp.responseText;
                if (response === SUCCESS_CODE){
                    showMessage(hintEmail,emailInput,hintEmailSuccessMessage,false);
                } else {
                    showMessage(hintEmail,emailInput,hintEmailErrorMessage);
                }

            }
        }
        xhttp.send();


    }


}

passwordInput.onchange = () => {

    let password = passwordInput.value;
    if (!isValidPassword(password)) {
        showMessage(hintPassword, passwordInput,hintPasswordErrorMessage);
    } else {
        hideMessage(hintPassword, passwordInput);
    }

}

password2Input.onchange = () => {

    let password = passwordInput.value;
    let password2 = password2Input.value;

    if (!passwordsMatch(password,password2)) {
        showMessage(hintPassword2, password2Input,hintPassword2ErrorMessage);
    } else {
        hideMessage(hintPassword2, password2Input);
    }

}
