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

    if ( email == null || email == "" )
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






const showErrorMessage = (hint,input) => {
    hint.classList.remove("invisible");
    input.classList.add("is-error");
}

const hideErrorMessage = (hint,input) => {
    hint.classList.add("invisible");
    input.classList.remove("is-error");
}