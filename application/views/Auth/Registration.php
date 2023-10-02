
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
    body,
    h1,
    form {
        margin: 0;
        padding: 0;
    }

    /* Create a light background color and black text */
    body {
        background-color: orange;
        /* bg orange */
        color: white;
        font-family: Arial, sans-serif;
    }

    /*.container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;


    }
*/
    form {
        background-color: gray;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        width: 20%;

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
        color: yellow;
        margin-bottom: 5px;
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
        background-color: yellow;
        color: black;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: black;
        color: yellow;
    }

    /* Add CSS for invalid input fields */
    .invalid {
        border: 2px solid red;
    }

    .error-message {
        color: red;
        font-size: 14px;
    }
</style>


<script>
    function checkname(str) { return /\d/.test(str); } 
    function validateform() {
        var name = document.forms["signup-form"]["username"].value; 

        if (name == "") { 
            displayErrorMessage("name-error", "Name is required."); 
            return false;
        } if (name ==(name)) { 
            displayErrorMessage("name-error", "Only alphabets Allowed."); 
            return false; 
        }}
    </script>
    <div class="container-fluid  section-background">
        <form id="signup-form" class="m-auto">
            <h1>Sign Up</h1>
            <div class="input-container">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <?php echo form_error('username'); ?>
            </div>
            <div class="input-container">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <?php echo form_error('emailID'); ?>
            </div>
            <div class="input-container">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <?php echo form_error('password'); ?>
            </div>
            <div class="input-container">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
                <?php echo form_error('confirm-password'); ?>
            </div>
            <div class="input-container">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
                <?php echo form_error('phone'); ?>
            </div>
            <center>
                <button type="submit" id="SendBroadcastMails">Sign Up</button>
            </center>
            <div>
                <a href="<?php echo base_url("login") ?>" class="mx-5">Sign In for Khoisan</a> <br>
            </div>

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
                        alert('Success');
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
