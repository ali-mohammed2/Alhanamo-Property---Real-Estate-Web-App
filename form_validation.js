$(function() {
    $("#signup_form").submit(function() {
        // Getting the Values of All inputs Start
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var username = $("#username").val();
        var phone = $("#phone").val();
        var email = $("#email").val();
        var pass = $("#pass").val();
        var cpass = $("#cpass").val();
        // Getting the Values of All inputs End

        if (fname == "") { // Checking if firstname is empty. If empty an alert message will pop up saying that this is required.
            $("#fname_err").html("First Name is Required!")
            $("#fname_err").show();
            var elmnt = document.getElementById("fname_err");
            elmnt.scrollIntoView();
            return false;
        } else {
            var name_regex = /^[a-zA-Z ]+$/;
            if (!fname.match(name_regex)) { // Checking if firstname matches the given criteria. If it doesn't match the criteria then a error message pops up with the requirements.
                $("#fname_err").html("Only letters and spaces are allowed in First Name!")
                $("#fname_err").show();
                var elmnt = document.getElementById("fname_err");
                elmnt.scrollIntoView();
                return false;
            } else {
                //if user's First Name matches the regular expression(regex) requirement then the alert message should be hidden.
                $("#fname_err").html("")
                $("#fname_err").hide();
            }
        }
        if (lname == "") { // Checking if lastname is empty. If empty an alert message will pop up saying that this is required.
            $("#lname_err").html("Last Name is Required!")
            $("#lname_err").show();
            var elmnt = document.getElementById("lname_err");
            elmnt.scrollIntoView();
            return false;
        } else {
            var name_regex = /^[a-zA-Z ]+$/;
            if (!lname.match(name_regex)) { // Checking if last name matches the given criteria. If it doesn't match the criteria then a error message pops up with the requirements.
                $("#lname_err").html("Only letters and spaces are allowed in Last Name!")
                $("#lname_err").show();
                var elmnt = document.getElementById("lname_err");
                elmnt.scrollIntoView();
                return false;
            } else {
                //if user's Last Name matches the regular expression(regex) requirement then the alert message should be hidden.
                $("#lname_err").html("")
                $("#lname_err").hide();
            }
        }
        if (username == "") { // Checking if username is empty. If empty an alert message will pop up saying that this is required.
            $("#username_err").html("Username is Required!")
            $("#username_err").show();
            var elmnt = document.getElementById("username_err");
            elmnt.scrollIntoView();
            return false;
        } else {
            var uname_regex = /^[A-Za-z0-9]+$/;
            if (!username.match(uname_regex)) { // Checking if username matches the given criteria. If it doesn't match the criteria then a error message pops up with the requirements.
                $("#username_err").html("Only letters and numbers are allowed in Username!")
                $("#username_err").show();
                var elmnt = document.getElementById("username_err");
                elmnt.scrollIntoView();
                return false;
            } else {
                //if user's Username matches the regular expression(regex) requirement then the alert message should be hidden.
                $("#username_err").html("")
                $("#username_err").hide();
            }
        }
        if (email == "") { // Checking if email is empty. If empty an alert message will pop up saying that this is required.
            $("#email_err").html("Email is Required!")
            $("#email_err").show();
            var elmnt = document.getElementById("email_err");
            elmnt.scrollIntoView();
            return false;
        } else {

            var email_regex = /^\b[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b$/;
            if (!email.match(email_regex)) { // Checking if email  matches the given criteria. If it doesn't match the criteria then a error message pops up with the requirements.
                $("#email_err").html("Invalid Email!")
                $("#email_err").show();
                var elmnt = document.getElementById("email_err");
                elmnt.scrollIntoView();
                return false;
            } else {
                //if user's Email matches the regular expression(regex) requirement then the alert message should be hidden.
                $("#email_err").html("")
                $("#email_err").hide();
            }
        }

        if (phone == "") { // Checking if phone is empty. If empty an alert message will pop up saying that this is required.
            $("#phone_err").html("Phone is Required!")
            $("#phone_err").show();
            var elmnt = document.getElementById("phone_err");
            elmnt.scrollIntoView();
            return false;
        } else {

            if (phone.length < 11) { // Checking if phone length is equal to 11 digits. If it doesn't match the criteria then a error message pops up with the requirements.
                $("#phone_err").html("Phone Number should be 11 numbers long!")
                $("#phone_err").show();
                var elmnt = document.getElementById("phone_err");
                elmnt.scrollIntoView();
                return false;
            } else {
                //if user's Phone Number matches the regular expression(regex) requirement then the alert message should be hidden.
                $("#phone_err").html("")
                $("#phone_err").hide();
            }
        }

        if (pass == "") { // Checking if password is empty. If empty an alert message will pop up saying that this is required.
            $("#pass_err").html("Password is Required!")
            $("#pass_err").show();
            var elmnt = document.getElementById("pass_err");
            elmnt.scrollIntoView();
            return false;
        } else {


            var pass_regex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[.,!@#\$%\^&\*])(?=.{8,})");
            if (!pass.match(pass_regex)) { // Checking if password contain 1 uppercase, 1 lowercase, 1 digit, 1 specialcase and 8 digits long. If it doesn't match the criteria then a error message pops up with the requirements.
                $("#pass_err").html("Password should contain atleast an Uppercase letter, a lower case letter, a special character, a number and 8 characters length!")
                $("#pass_err").show();
                var elmnt = document.getElementById("pass_err");
                elmnt.scrollIntoView();
                return false;
            } else {
                //if user's Password matches the regular expression(regex) requirement then the alert message should be hidden.
                $("#pass_err").html("")
                $("#pass_err").hide();
            }
        }

        if (cpass == "") { // Checking if confirm password is empty. If empty an alert message will pop up saying that this is required.
            $("#cpass_err").html("Confirm Password is Required!")
            $("#cpass_err").show();
            var elmnt = document.getElementById("cpass_err");
            elmnt.scrollIntoView();
            return false;
        } else {
            if (pass != cpass) { // Checking if both passwords match. If it doesn't match the criteria then a error message pops up with the requirements.
                $("#cpass_err").html("Passwords Mismatched!")
                $("#cpass_err").show();
                var elmnt = document.getElementById("cpass_err");
                elmnt.scrollIntoView();
                return false;
            } else {
                //if user's Confirm password is the same as the Password then the alert message should be hidden.
                $("#cpass_err").html("")
                $("#cpass_err").hide();
            }
        }
    });

    $("#login_form").submit(function() {
        var username = $("#l_username").val();
        var pass = $("#l_pass").val();
        if (username == "") { //checking if username is empty. If empty an alert message will pop up saying that this is required.
            $("#l_username_err").html("Username is Required!")
            $("#l_username_err").show();
            var elmnt = document.getElementById("l_username_err");
            elmnt.scrollIntoView();
            return false;
        } else {
            var uname_regex = /^[A-Za-z0-9]+$/;
            if (!username.match(uname_regex)) { //checking if username meets the requirements. If it doesn't match the criteria then a error message pops up with the requirements.
                $("#l_username_err").html("Only letters and numbers are allowed in Username!")
                $("#l_username_err").show();
                var elmnt = document.getElementById("l_username_err");
                elmnt.scrollIntoView();
                return false;
            } else {
                //if user's Login Username matches the regular expression(regex) requirement then the alert message should be hidden.
                $("#l_username_err").html("")
                $("#l_username_err").hide();
            }
        }
        if (pass == "") { //checking if password is empty. If empty an alert message will pop up saying that this is required.
            $("#l_pass_err").html("Password is Required!")
            $("#l_pass_err").show();
            var elmnt = document.getElementById("l_pass_err");
            elmnt.scrollIntoView();
            return false;
        } else {
            //if user's Login Password is left empty then the alert message should be hidden.
            $("#l_pass_err").html("")
            $("#l_pass_err").hide();
        }
    });
});