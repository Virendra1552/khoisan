<<<<<<< HEAD
    <style>
        /* .design1 {
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: black;
        } */

        .design1,
        .design2 {
            font-size: 40px;
            text-align: center;
            color: #ffd710;
            padding:5%;
            color:black
=======
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
    body {
        color: #999;
        background: #f3f3f3;
        font-family: 'Roboto', sans-serif;
        /* background image */
        background-image: url("https://khoisan.io/images/khoisan-bg.jpg");
        background-image: cover;
        background-repeat: no-repeat;
        padding: 9%;
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

        .signup-form .form-group row {
            margin-bottom: 20px;
            
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

        margin-left: 150px;

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

        .signup-form form a:hover {
            text-decoration: underline;
>>>>>>> 9e7f482dd09bd41d852ddf1c25585a964248bf47
        }

        /* toester pop up */
        #snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: green;
  color: white;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  top:30px;
  /* bottom: 30px; */
  font-size: 17px;
  border-color:white 3px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

<<<<<<< HEAD
        .design3 {
            font-size: 15px;
            margin-top: 5px;
            width: 400px;
            height: 40px;
            padding: 5px;
            border-radius:10px;
        }

        .link {
            height: 40px;
            width: 25%;
            font-size: 20px;
            margin-top: 25px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
=======
@-webkit-keyframes fadein {
  from {top: 0; opacity: 0;} 
  to {top: 30px; opacity: 1;}
}

@keyframes fadein {
  from {top: 0; opacity: 0;}
  to {top: 30px; opacity: 1;}
}
>>>>>>> 9e7f482dd09bd41d852ddf1c25585a964248bf47

@-webkit-keyframes fadeout {
  from {top: 30px; opacity: 1;} 
  to {top: 0; opacity: 0;}
}

<<<<<<< HEAD
            color: #ffd710;
            background-color: #352F44;
        }

        .link2 {
            font-size: 17px;
            text-decoration: none;
            color:black;
        }

        .link2:hover {
            text-decoration: underline ;
            outline: 20px;
            color:yellow;

        }

        .frm {
            border: 0.5px  gray ;
            border-radius: 5px;
            height: 400px;
            max-width: 430px;
            text-align: center;
            padding: 10px;
            margin: auto;
            box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
            margin-top:-80px;
            background-color:#00000036;
             box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
        }

        a: hover{
            color:green;
        }
=======
@keyframes fadeout {
  from {top: 30px; opacity: 1;}
  to {top: 0; opacity: 0;}
}
>>>>>>> 9e7f482dd09bd41d852ddf1c25585a964248bf47
    </style>



<<<<<<< HEAD
    <div class="section-background">
        <form id="login-form">
            <h2 class="design1"><span class="log">Log In</span> Khoisan</h2>
            <div class="frm">
                <h2 class="design2">Login Page</h2>
                <input type="text" placeholder="Username or Email" class="design3" name="username" id="username"><br>
                <input type="password" placeholder="Password" class="design3" name="password" id="password" maxlength="8" required  required><br>
                <button class="link">Sign In</button><br>
                <span style="color:white">New to our platform?</span><a href="<?php echo base_url("register") ?>" class="link2">Create an account</a> <br>
=======
<div class="signup-form">
    <form method="post" class="form-horizontal" id="login-form">
        <div class="row">
            <div class="col-8 offset-4">
                <h2> Login</h2>
>>>>>>> 9e7f482dd09bd41d852ddf1c25585a964248bf47
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-4">Username</label>
            <div class="col-8">
                <input type="text" class="form-control" name="username" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-form-label col-4">Password</label>
            <div class="col-8">
                <input type="password" class="form-control" name="password" required="required">
            </div>
        </div>


            <button type="submit" class="btn btn-primary btn-lg" onclick="myFunction()" >Login</button>
            <div id="snackbar">Login successfully....</div>
            <div class="text-center">Already have an account? <a href="http://localhost/Khoisan/index.php/register">SighUP here</a></div>
    </div>
    
    </div>
    </form>
    </div>
    <script>
<<<<<<< HEAD
        // JavaScript code to handle the login form submission via AJAX
        $(document).ready(function () {
            $('#login-form').submit(function (e) {
                e.preventDefault();
                var username = $('#username').val();
                var password = $('#password').val();

                $.ajax({
                    type: 'POST',
                    url: base_url+'loginvalue',
                    data: { username: username, password: password },
                    success: function (response) {
                        if (response === 'success') {
                            
                  toastr.clear();
                 Toast('Successfully login', "success", {
                   position: "top-center",
                      timeOut: "5000",
        });
                            // Redirect to a dashboard or another page
                            // alert("Successfully");
                           // base_url('record');

                        } else {
                           alert("error");
                        }
                    }
                });
            });
        });

    </script>
=======
            function myFunction() {
             var x = document.getElementById("snackbar");
             x.className = "show";
             setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
>>>>>>> 9e7f482dd09bd41d852ddf1c25585a964248bf47
