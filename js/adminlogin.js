function adminloginValidation() {
    var emailRegex = /[a-z0-9._]+@gmail\.com/;
    var passRegex = /(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&+=])(?=\S+$).{8,20}/;


    var email = document.getElementById("adminlogin-email").value;
    var pass = document.getElementById("adminlogin-password").value;

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
        document.getElementById("errorpass").innerHTML = "invalid password..";
        return false;
    }
    else {
        document.getElementById("errorpass").innerHTML = "";
        document.getElementById("adminloginForm").submit;
    }
}