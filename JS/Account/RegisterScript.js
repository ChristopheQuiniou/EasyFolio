
let button = document.getElementById("btn");

let errorToast = document.getElementById("errorToast");
let errorToastButton = document.getElementById("errorToastButton");

let nameInput = document.getElementById("name");
let hintName = document.getElementById("hintName");

let surnameInput = document.getElementById("surname");
let hintSurname = document.getElementById("hintSurname");

let birthdateInput = document.getElementById("birthdate");
let hintBirthdate = document.getElementById("hintBirthdate");

let addressInput = document.getElementById("address");
let hintAddress = document.getElementById("hintAddress");

let phoneNumberInput = document.getElementById("phoneNumber");
let hintPhoneNumber = document.getElementById("hintPhoneNumber");

let emailInput = document.getElementById("email");
let hintEmail = document.getElementById("hintEmail");

let passwordInput = document.getElementById("password");
let hintPassword = document.getElementById("hintPassword");

let password2Input = document.getElementById("password2");
let hintPassword2 = document.getElementById("hintPassword2");


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
        showErrorMessage(hintName,nameInput);
    } else {
        hideErrorMessage(hintName,nameInput);
    }


    if ( !isValidSurname(surname) ){
        showErrorMessage(hintSurname,surnameInput);
    } else {
        hideErrorMessage(hintSurname,surnameInput);
    }


    if ( !isValidBirthdate(birthdate) ){
        showErrorMessage(hintBirthdate,birthdateInput);
    } else {
        hideErrorMessage(hintBirthdate,birthdateInput);
    }

    if ( !isValidAddress(address) ){
        showErrorMessage(hintAddress,addressInput);
    } else {
        hideErrorMessage(hintAddress,addressInput);
    }

    if ( !isValidPhoneNumber(phoneNumber) ){
        showErrorMessage(hintPhoneNumber,phoneNumberInput);
    } else {
        hideErrorMessage(hintPhoneNumber,phoneNumberInput);
    }

    if ( !isValidEmail(email) ){
        showErrorMessage(hintEmail,emailInput);
    } else {
        hideErrorMessage(hintEmail,emailInput);
    }

    if ( !isValidPassword(password) ){
        showErrorMessage(hintPassword,passwordInput);
    } else {
        hideErrorMessage(hintPassword,passwordInput);
    }


    if ( !isValidPassword(password2) ){
        showErrorMessage(hintPassword2,password2Input);
    } else {
        hideErrorMessage(hintPassword2,password2Input);
    }


    //If all ok
    if ( isValidName(name) &&
         isValidSurname(surname) &&
         isValidBirthdate(birthdate) &&
         isValidAddress(address) &&
         isValidPhoneNumber(phoneNumber) &&
         isValidEmail(email) &&
         isValidPassword(password) &&
         passwordsMatch(password,password2) ){

        let xhttp = new XMLHttpRequest();
        xhttp.open("GET",`?controller=Account&action=Register&param1=${name}&param2=${surname}&param3=${birthdate}&param4=${address}&param5=${phoneNumber}&param6=${email}&param7=${password}`, true);
        xhttp.onreadystatechange = () => {

            if ( xhttp.readyState == 4 && xhttp.status == 200 ){
                //console.log(xhttp.responseText);
                let response = xhttp.responseText;
                if (response == "GOOD"){
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
        showErrorMessage(hintName,nameInput);
    } else {
        hideErrorMessage(hintName,nameInput);
    }

}

surnameInput.onchange = () => {

    let surname = surnameInput.value;
    if ( !isValidSurname(surname) ){
        showErrorMessage(hintSurname,surnameInput);
    } else {
        hideErrorMessage(hintSurname,surnameInput);
    }

}

birthdateInput.onchange = () => {

    let birthdate = birthdateInput.value;
    if ( !isValidBirthdate(birthdate) ){
        showErrorMessage(hintBirthdate,birthdateInput);
    } else {
        hideErrorMessage(hintBirthdate,birthdateInput);
    }
}

addressInput.onchange = () => {

    let address = addressInput.value;
    if ( !isValidAddress(address) ){
        showErrorMessage(hintAddress,addressInput);
    } else {
        hideErrorMessage(hintAddress,addressInput);
    }

}

phoneNumberInput.onchange = () => {

    let phoneNumber = phoneNumberInput.value;
    if ( !isValidPhoneNumber(phoneNumber) ){
        showErrorMessage(hintPhoneNumber,phoneNumberInput);
    } else {
        hideErrorMessage(hintPhoneNumber,phoneNumberInput);
    }

}


emailInput.onchange = () => {

    let email = emailInput.value;
    if ( !isValidEmail(email) ){
        showErrorMessage(hintEmail,emailInput);
    } else {
        hideErrorMessage(hintEmail,emailInput);
    }


}

passwordInput.onchange = () => {

    let password = passwordInput.value;
    if (!isValidPassword(password)) {
        showErrorMessage(hintPassword, passwordInput);
    } else {
        hideErrorMessage(hintPassword, passwordInput);
    }

}

password2Input.onchange = () => {

    let password = passwordInput.value;
    let password2 = password2Input.value;

    if (!passwordsMatch(password,password2)) {
        showErrorMessage(hintPassword2, password2Input);
    } else {
        hideErrorMessage(hintPassword2, password2Input);
    }

}
