function loginValidation() {
    var emailRegex = /[a-z0-9._]+@[a-z]+[\.a-z]+/;
    var passRegex = /(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&+=])(?=\S+$).{8,20}/;


    var email = document.getElementById("login-email").value;
    var pass = document.getElementById("login-password").value;

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
    else {
        document.getElementById("errorpass").innerHTML = "";
        document.getElementById("loginForm").submit;
    }
}

// function login() {
//     document.querySelector("#login-area").style.display="block";
//     loginValidation();
// }