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
            padding: 5%;
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
    </style>

    <div class="signup-form">
        <form  method="post" class="form-horizontal" id ="signup-form">
            <div class="row">
                <div class="col-8 offset-4">
                    <h2>Sign Up</h2>
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

            <!-- <div class="form-group row">
                <input class="form-control" type="file" id="formFile">
            </div> -->

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
        
        <script type="text/javascript">
            base_url = '<?php echo base_url(); ?>';
            $(document).ready(function () {
                $('#signup-form').submit(function (event) {
                    event.preventDefault();

                    $.ajax({
                        url: '<?php echo base_url('storevalue'); ?>',
                        data: $('#signup-form').serialize(),
                        type: 'post',
                        async: false,
                        dataType: 'json',
                        success: function (response) {
                            // alert('Success');s
                            window.location.href = "http://localhost/Khoisan/login";
                        },
                        error: function () {
                            alert('Error');
                        }
                    });
                });
            });


            // $(document).ready(function () {
            //     $("#SendBroadcastMails").on("click", function (event) {
            //         e.preventDefault();
            //         var formData = new FormData($('#signup-form')[0]);
            //         $.ajax({
            //             url: base_url + "storevalue",
            //             type: "POST",
            //             data: formData,
            //             dataType: "JSON",
            //             cache: false,
            //             contentType: false,
            //             processData: false,
            //             success: function (response) {
            //                 alert('Success');
            //             },
            //             error: function (response) {
            //                 alert('Error');
            //             },
            //         });
            //     });
            // });

        </script>

    </div>