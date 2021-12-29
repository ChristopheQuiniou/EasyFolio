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
        hintEmail.classList.remove("invisible");
        emailInput.classList.add("is-error");
    } else {
        hintEmail.classList.add("invisible");
        emailInput.classList.remove("is-error");
    }


    if ( !isValidPassword(password) ){
        hintPassword.classList.remove("invisible");
        passwordInput.classList.add("is-error");
    } else {
        hintPassword.classList.add("invisible");
        passwordInput.classList.remove("is-error");
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

function isValidEmail( email ){

    if ( email == null || email == "" )
        return false;

    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    if(!reg.test(email))
        return false;

    return true;
}

function isValidPassword( password ){

    if ( password == null || password == "" )
        return false;

    if ( password.length < 9 )
        return false;

    return true;

}

