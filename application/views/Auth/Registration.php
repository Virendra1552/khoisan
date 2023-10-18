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


body {
    color: white;
    font-family: Arial, sans-serif;

}

.container {
    display: flex;
    justify-content: center;
    align-items: center;

}

form {
    background-color: #00000036;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    width: 500px;
    padding-top: 100px;


}

h1 {
    text-align: center;
}

.input-container {
    display: flex;
    flex-direction: column;
    margin-bottom: 10px;

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
    background-color: #ffc527;
    Color: white;
}

button:hover {

    background-color: #ac8519;
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
    color: ffc527;
}

.link2:hover {
    text-decoration: underline;
    outline: 20px;
    color: yellow;

}

.small {
    color: #ffc527;
    font-size: 15px;
}
</style>
<div class="container-fluid  section-background" style="padding:20px">
    <form id="signup-form" class="m-auto">
        <h1 style="color:black">Sign Up</h1><br /><br />
        
        
        <div>
        <div class="form-group">
                 <label>Image</label>
                   <input type="file" class="form-control" id="userfile" name="userfile">
                 </div>
               <input type="submit" class="btn btn-primary" value="Upload">
            
        </div><br>
        
        
        
        
        
        <div class="input-container">

            <input placeholder="Username" type="text" id="username" name="username" id="username" pattern="[a-zA-Z]*"
                class="form-control" maxlength="50" minlength="3" required>
            <?php echo form_error('username'); ?>
        </div>

        <div class="input-container">
            <input placeholder="Email" type="email" id="email" name="email" class="form-control" id="email" required>
            <?php echo form_error('emailID'); ?>
        </div>

        <div class="input-container">
            <input placeholder="Password" type="password" id="password" name="password" class="form-control"
                id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required maxlength="8" required
                minlength="8" required>
            <small class="small">Please Use at least 8 characters(uppercase and lowercase)symbol</small>

            <?php echo form_error('password'); ?>
        </div>

        <div class="input-container">
            <input placeholder="Confirm Password" type="password" id="confirm-password" name="confirm_password"
                class="form-control" maxlength="8" required minlength="8" required>
            <?php echo form_error('confirm-password'); ?>
        </div>

        <div class="input-container">
            <input placeholder="Phone Number" type="tel" id="phone" name="phone" class="form-control"
                pattern="[6789][0-9]{9}" required maxlength="10" required minlength="10"
                title="Please enter valid phone number" required>
            <?php echo form_error('phone'); ?>
        </div>
        <center>
            <button type="submit" id="SendBroadcastMails">Sign Up</button>
        </center>
        <div>
            <center><span style="color:ffc527"> already have account?
                </span><a href=" http://localhost/khoisan.io/login" class="link2">Sign in</a> <br>
        </div>
        </center>

        <!-- <a href="<?php echo site_url('storevalue') ?>" style="text-decoration: none;"></a> -->
        <br>

    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">
base_url = '<?php echo base_url(); ?>';
$(document).ready(function() {
    $('#signup-form').submit(function(event) {
        event.preventDefault();

        $.ajax({
             url: '<?php echo base_url('storevalue'); ?>',
            data: $('#signup-form').serialize(),
            type: 'post',
            async: false,
            dataType: 'json',
            success: function(response) {
                // alert('Success');
                window.location.href = "http://localhost/khoisan.io/login";
            },
            error: function() {
                alert('Error');
            }
        });
    });
});
</script>
<script>
function checkname(str) {
    return /\d/.test(str);
}
</script>
<script>
function validateform() {
    var name = document.forms["signup-form"]["username"].value;

    if (name == "") {
        displayErrorMessage("name-error", "Name is required.");
        return false;
    }
    if (name == (name)) {
        displayErrorMessage("name-error", "Only alphabets Allowed.");
        return false;
    }
}



</script>
<!-- <script>
function validatePassword() {
    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
        confirm_password.setCustomValidity('');
    }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <!-- Bootstrap JS links -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  
</script>