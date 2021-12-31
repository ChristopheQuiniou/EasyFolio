//CONST VALUE
const ERROR_CODE = "ERROR";
const SUCCESS_CODE = "SUCCESS";
const INVALID_PARAM_CODE = "INVALID_PARAM";


//CONST FONCTION
const isValidName = ( name ) => {
    if ( name.length <= 2)
        return false;

    return true;
}

const isValidSurname = ( surname ) => {
    return isValidName(surname);
}

const isValidBirthdate = ( birthdate ) => {
    if ( birthdate.length != 10 )
        return false;
    return true;
}

const isValidAddress = ( address ) => {
    if ( address.length <= 5 )
        return false;
    return true;
}

const isValidPhoneNumber = ( phoneNumber ) => {
    if ( phoneNumber.length < 10 )
        return false;
    return true;
}


const isValidEmail = ( email ) => {

    if ( email.length < 6 )
        return false;

    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    if(!reg.test(email))
        return false;

    return true;
}

const isValidPassword = ( password ) => {

    if ( password == null || password == "" )
        return false;

    if ( password.length < 9 )
        return false;

    return true;

}

const passwordsMatch = (password, password2) => {
    return ( password === password2 ) ? true : false ;
}






const showMessage = (hint,input,message,error = true) => {

    hint.innerText = message;
    hint.classList.remove("invisible");
    if ( error ) {
        input.classList.remove("is-success");
        input.classList.add("is-error");
    } else {
        input.classList.remove("is-error");
        input.classList.add("is-success");
    }
}

const hideMessage = (hint,input) => {
    hint.classList.add("invisible");
    input.classList.remove("is-error");
    input.classList.remove("is-success");
    hint.innerText = "";
}


const showErrorToast = (toast) => {
    toast.classList.remove("invisible");
}

const hideErrorToast = (toast) => {
    toast.classList.add("invisible");
}