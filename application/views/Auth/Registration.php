
<style>
    @media screen and (max-width: 768px) {

        body {
            font-size: 14px;

        }

        form {
            font-size: 100%;
            height: 70%;
            width: 50%;
        }
    }

    /* Reset some default styles for better consistency */
   
    /* Create a light background color and black text */
    body {
        background-color: orange;
        /* bg orange */
        color: white;
        font-family: Arial, sans-serif;

    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        /* height: 100vh; */

    }

    form {
        background-color: #00000036;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        width:500px;
        padding-top: 50px;
        
    }

    h1 {
        text-align: center;
    }

    .input-container {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
    }

    label {
        color:#ffc527;
        margin-bottom: 5px;
        font-size: 20px;
    }

    .hh5:hover {
        color: white;
    }

    input {
        padding: 10px;
        border: none;
        border-radius: 5px;
    }

    button {
        height: 40px;
            width: 25%;
            font-size: 20px;
            margin-top: 25px;
            margin-bottom: 15px;
            border-radius: 5px;
    }

    button:hover {
      
        color:#ffd710;
            background-color: #352F44;  
    }

    /* Add CSS for invalid input fields */
    .invalid {
        border: 2px solid red;
    }

    .error-message {
        color: red;
        font-size: 14px;
    }
    /* .container-fluid
    {
        margin-top: 50px;
    } */
    .link2 {
            font-size: 17px;
            text-decoration: none;
            color:ffc527;
        }

        .link2:hover {
            text-decoration: underline ;
            outline: 20px;
            color:yellow;

        }
     .small
        {
            color:#ffc527;
        }
</style>

    <div class="container-fluid  section-background">
        <form id="signup-form" class="m-auto">
            <h1 style="color:black">Sign Up</h1>
            <div class="input-container">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username"  id="username" pattern="[a-zA-Z]*" class="form-control"  maxlength="50" minlength="3" required  >
                <?php echo form_error('username'); ?>
            </div>

            <div class="input-container">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"  class="form-control"  id="email" required>
                <?php echo form_error('emailID'); ?>
            </div>

            <div class="input-container">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" id="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required maxlength="8" required minlength="8" required>
                <small class="small">Please Use at least 8 characters(uppercase and lowercase)symbol</small>

                <?php echo form_error('password'); ?>
            </div>

            <div class="input-container">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm_password"  class="form-control"  maxlength="8" required minlength="8"required>
                <?php echo form_error('confirm-password'); ?>
            </div>

            <div class="input-container">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" class="form-control" pattern="[6789][0-9]{9}" required
                        maxlength="10" required minlength="10" title="Please enter valid phone number" required>
                <?php echo form_error('phone'); ?>
            </div>
            <center>
                <button type="submit" id="SendBroadcastMails">Sign Up</button>
            </center>
            <div>
            <center><span style="color:ffc527"> already have account? 
                                            </span><a href="<?php echo base_url("login") ?>" class="link2">Create an account</a> <br>            </div>  </center>

            <!-- <a href="<?php echo site_url('storevalue') ?>" style="text-decoration: none;"></a> -->
            <br>

        </form>
    </div>
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
                        // alert('Success');
                        window.location.href = "http://localhost/khoisan.io/login";
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
