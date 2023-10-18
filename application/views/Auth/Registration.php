<style>
    /* form {
        font-size: 100%;
       
        width: 50%;
    } */


    body {
        background-color: orange;
        /* bg orange */
        color: white;
        font-family: Arial, sans-serif;
        font-size: 14px;
        background-size: cover;
        background-position: center;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        /* height: 100vh; */

    }

    .mainblock {

        padding-bottom: 50px;


    }

    form {
        background-color: #00000036;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        width: 500px;
        height: 100%;


    }

    h1 {
        text-align: center;
        color: black;
        padding-bottom: 5%;
        font-size: 40px;
        margin-top: 10px;


    }

    h1:hover {

        color: #ffc527;
        transition: 0.5s;
    }

    .input-container {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
    }

    label {
        color: #ffc527;
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

        color: #ffd710;
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


    .link2 {
        font-size: 17px;
        text-decoration: none;
        color: #ffc527;

    }

    .link2:hover {
        text-decoration: underline;
        outline: 20px;
        color: yellow;

    }

    .small {
        color: white;
        font-size: 17px;
    }

    .design {
        font-size: 15px;
        width: 460px;
        height: 40px;
        border-radius: 10px;
    }

    /* / upload image css / */
    .picture-container {
        position: relative;
        cursor: pointer;
        text-align: center;
        height: 150px;
        width: 150px;
        margin-left: 12px;
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



<div class="container-fluid  section-background mainblock">
    <form id="signup-form" class="mx-auto" enctype="multipart/form-data">
        <h1>SignUp</h1>
        <div class="container">
            <div class="picture-container">
                <div class="picture">
                    <input type="file" id="file_img" name="file_img" class="">
                </div>
                <p class="link2">Upload user Image</p>

            </div>





        </div>



        <div class="input-container">
            <!-- <label for="username">Username:</label> -->
            <input type="text" id="username" name="username" id="username" class="form-control design" maxlength="50"
                minlength="3" placeholder="Username" required>
            <?php echo form_error('username'); ?>
        </div>

        <div class="input-container">
            <!-- <label for="email">Email:</label> -->
            <input type="email" id="email" name="email" placeholder="Email" class="form-control mt-1 design" id="email"
                required>
            <?php echo form_error('emailID'); ?>
        </div>

        <div class="input-container">
            <!-- <label for="password">Password:</label> -->
            <input type="password" id="password" placeholder="Password" name="password" class="form-control mt-1 design"
                id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required maxlength="8" required
                minlength="8" required>
            <small class="small">Please Use at least 8 characters(uppercase and lowercase)symbol</small>


        </div>

        <div class="input-container">
            <!-- <label for="confirm-password">Confirm Password:</label> -->
            <input type="password" id="confirm-password" placeholder="Confirm Password" name="confirm_password"
                class="form-control mt-1 design" maxlength="8" required minlength="8" required>

        </div>


        <div class="input-container">
            <!-- <label for="phone">Phone Number:</label> -->
            <input type="tel" id="phone" placeholder="Phone Number" name="phone" class="form-control mt-2 design"
                required maxlength="15" required minlength="5" title="Please enter valid phone number" required>
            <?php echo form_error('phone'); ?>
        </div>
        <center>
            <button type="submit" class="btn btn-theme mt-2" id="SendBroadcastMails">Sign Up</button>
        </center>
        <div>
            <center><span style="color:#ffc527"> already have account?
                </span><a href="<?php echo base_url("login") ?>" class="link2">SignIn page</a> <br>
        </div>
        </center>
    </form>
</div>

<!-- image ajax code  -->
<script type="text/javascript">
    $(document).ready(function){
        url: '<?php echo base_url(); ?>',
    }



</script>

<!-- login script through ajax  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
    integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

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


                    alert('Success');

                    window.location.href = base_url + "login";


                },
                error: function () {
                    alert('Error');
                }
            });
        });
    });

    // Another code of ajax 
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





<!-- username validation -->
<script>
    function checkname(str) { return /\d/.test(str); }
    function validateform() {
        var name = document.forms["signup-form"]["username"].value;

        if (name == "") {
            displayErrorMessage("name-error", "Name is required.");
            return false;
        }
    }  
</script>

<!-- password validation -->
<script>
    var password = document.getElementById("password");
    var confirm_password = document.getElementById("confirm-password");
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




<!-- phone number script  -->
<script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
</script>


</div>