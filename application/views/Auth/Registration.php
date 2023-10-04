<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Bootstrap Sign up Form Horizontal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body 
        {
            color: #999;
            background: #f3f3f3;
            font-family: 'Roboto', sans-serif;
            /* padding: 3%; */
            /* background image */
            background-image: url("https://khoisan.io/images/khoisan-bg.jpg");
            background-image: cover;
            background-repeat: no-repeat;
            
        }

        .form-control {
            border-color: #eee;
            min-height: 41px;
            box-shadow: none !important;
        }

        .form-control:focus {
            border-color: #5cd3b4;
        }

        .form-control,
        .btn {
            border-radius: 3px;
        }

        .signup-form {
            width: 500px;
            margin: 0 auto;
            padding: 30px 0;
        }

        .signup-form h2 {
            color: #333;
            margin: 0 0 30px 0;
            display: inline-block;
            padding: 0 30px 10px 0;
            border-bottom: 3px solid #5cd3b4;
        }

        .signup-form form {
            color: black;
            border-radius: 3px;
            margin-bottom: 15px;
            background: #fff;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .signup-form .form-group row {
            margin-bottom: 20px;
        }

        .signup-form label {
            font-weight: normal;
            font-size: 14px;
            line-height: 2;
        }

        .signup-form input[type="checkbox"] {
            position: relative;
            top: 1px;
        }

        .signup-form .btn {
            font-size: 16px;
            font-weight: bold;
            background: #5cd3b4;
            border: none;
            margin-top: 20px;
            min-width: 140px;
        }

        .signup-form .btn:hover,
        .signup-form .btn:focus {
            background: #41cba9;
            outline: none !important;
        }

        .signup-form a {
            color: #5cd3b4;
            text-decoration: underline;
        }

        .signup-form a:hover {
            text-decoration: none;
        }

        .signup-form form a {
            color: #5cd3b4;
            text-decoration: none;
        }

        .signup-form form a:hover {
            text-decoration: underline;
        }

        /* upload image css */
        .picture-container {
            position: relative;
            cursor: pointer;
            text-align: center;
            height: 150px;
            width: 150px;
            margin-left: 120px;
        }

        .picture {
            width: 106px;
            height: 106px;
            background-color: #999999;
            border: 4px solid #CCCCCC;
            color: #FFFFFF;
            border-radius: 50%;
            margin: 0px auto;
            overflow: hidden;
            transition: all 0.2s;
            -webkit-transition: all 0.2s;
        }

        .picture:hover {
            border-color: #2ca8ff;
        }

        .content.ct-wizard-green .picture:hover {
            border-color: #05ae0e;
        }

        .content.ct-wizard-blue .picture:hover {
            border-color: #3472f7;
        }

        .content.ct-wizard-orange .picture:hover {
            border-color: #ff9500;
        }

        .content.ct-wizard-red .picture:hover {
            border-color: #ff3b30;
        }

        .picture input[type="file"] {
            cursor: pointer;
            display: block;
            height: 100%;
            left: 0;
            opacity: 0 !important;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .picture-src {
            width: 100%;

        }
    </style>

    <div class="signup-form">
        <form  method="post" class="form-horizontal" id ="signup-form">
            <div class="row">
                <div class="col-8 offset-4">
                    <h2>Sign Up</h2>
                </div>
            </div>
            <div class="container">
                <div class="picture-container">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no"
                            class="picture-src" id="wizardPicturePreview" title="">
                        <input type="file" id="wizard-picture" class="">
                    </div>
                    <p class="">Upload user Image</p>

                </div>
            </div>





            <div class="form-group row">
                <label class="col-form-label col-4">Username</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="username" id="username" pattern="[a-zA-Z]*" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4">Email Address</label>
                <div class="col-8">
                    <input type="email" class="form-control" name="email" id="email" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4">Password</label>
                <div class="col-8">
                    <input type="password" class="form-control" id="password" name="password"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required maxlength="8" required minlength="8"
                        required>
                        <small>Please Use at least 8 characters(uppercase and lowercase) &amp; symbol</small>
                </div>
                
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4">Confirm Password</label>
                <div class="col-8">
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required
                        maxlength="8" required minlength="8" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4">Mobile</label>
                <div class="col-8">
                    <input type="text" class="form-control" id="phone" name="phone" pattern="[6789][0-9]{9}" required
                        maxlength="10" required minlength="10" title="Please enter valid phone number" required>
                </div>
            </div>

            <div class="form-group row">
                <input class="form-control" type="file" id="formFile">
            </div>

            <div class="form-group row">
                <div class="col-8 offset-4">
                    <p><label class="form-check-label"><input type="checkbox" required="required"> I accept the <a
                                href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>.</label></p>
                    <button type="submit" class="btn btn-primary btn-lg" id="SendBroadcastMails">Sign Up</button>
                </div>
            </div>

            <!-- <div class="text-center">Already have an account? <a href="file:///E:/new/pratik2.html">Login here</a></div> -->

        </form>
        <script>
            function checkname(str) { return /\d/.test(str); }
            function validateform() {
                var name = document.forms["signup-form"]["username"].value;

                if (name == "") {
                    displayErrorMessage("name-error", "Name is required.");
                    return false;
                } if (name == (name)) {
                    displayErrorMessage("name-error", "Only alphabets Allowed.");
                    return false;
                }
            }



            var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

            function validatePassword() {
                if (password.value != confirm_password.value) {
                    confirm_password.setCustomValidity("Passwords Don't Match");
                } else {
                    confirm_password.setCustomValidity('');
                }
            }

            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;




        </script>

    </div>