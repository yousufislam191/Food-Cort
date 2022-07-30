function registrationValidation() {
    var nameRegex = /[a-zA-Z. ]/;
    var emailRegex = /[a-z0-9._]+@[a-z]+[\.a-z]+/;
    var passRegex = /(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&+=])(?=\S+$).{8,20}/;

    var name = document.getElementById("registration-name").value;
    var email = document.getElementById("registration-email").value;
    var pass = document.getElementById("registration-password").value;

    if (!name.match(nameRegex)) {
        document.getElementById("errorname").innerHTML = "Invalid Name";
        return false;
    }
    else {
        document.getElementById("errorname").innerHTML = "";
    }

    if (!email.match(emailRegex)) {
        document.getElementById("erroremail").innerHTML = "Email is Invalid";
        return false;
    }
    else {
        document.getElementById("erroremail").innerHTML = "";
    }

    if (pass.length == 0) {
        document.getElementById("errorpass").innerHTML = "invalid password..";
        return false;
    }
    else if (pass.length < 8) {
        document.getElementById("errorpass").innerHTML = "Password must be 8 character..";
        return false;
    }
    else if (!pass.match(passRegex)) {
        document.getElementById("errorpass").innerHTML = "Password is not strong..";
        return false;
    }
    else {
        document.getElementById("errorpass").innerHTML = "";
        document.getElementById("registrationForm").submit;
    }
}