
let button = document.getElementById("btn");
let emailInput = document.getElementById("email");
let hintEmail = document.getElementById("hintEmail");
let passwordInput = document.getElementById("password");
let hintPassword = document.getElementById("hintPassword");


button.onclick = () => {

    let email = emailInput.value;
    let password = passwordInput.value;

    if ( !isValidEmail(email) ){
        //Display error
        showErrorMessage(hintEmail,emailInput);
    } else {
        hideErrorMessage(hintEmail,emailInput);
    }


    if ( !isValidPassword(password) ){
        showErrorMessage(hintPassword,passwordInput);
    } else {
        hideErrorMessage(hintPassword,passwordInput);
    }



    if ( isValidPassword(password) && isValidEmail(email) ){
        let xhttp = new XMLHttpRequest();
        xhttp.open("GET",`?controller=Account&action=Login&param1=${email}&param2=${password}`, true);
        xhttp.onreadystatechange = () => {

            if ( xhttp.readyState == 4 && xhttp.status == 200 ){
                console.log(xhttp.responseText);
            }
        }
        xhttp.send();

    }


}

