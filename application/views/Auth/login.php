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
    padding: 5%;
    color: black
}

.log {
    color: #212529;
}

.design2 {
    font-size: 25px;
    margin-top: 8px;
    color: #212529;
}

.design3 {
    font-size: 15px;
    margin-top: 5px;
    width: 400px;
    height: 40px;
    padding: 5px;
    border-radius: 10px;
}

.link {
    height: 40px;
    width: 25%;
    font-size: 20px;
    margin-top: 25px;
    margin-bottom: 15px;
    border-radius: 5px;
    background-color: #ffc527;
    Color: white;
}


.link:hover {

    background-color: #ac8519;
}

.link2 {
    font-size: 17px;
    text-decoration: none;
    color: black;
}

.link2:hover {
    text-decoration: underline;
    outline: 20px;
    color: yellow;

}

.frm {
    border: 0.5px gray;
    border-radius: 5px;
    height: 400px;
    max-width: 430px;
    text-align: center;
    padding: 10px;
    margin: auto;
    box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
    margin-top: -80px;
    background-color: #00000036;
    box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
}

a: hover {
    color: green;
}
</style>



<link rel="stylesheet" href="login.css">
<div class="section-background">
    <form id="login-form">
        <h2 class="design1"><span class="log">Sigh In</span> Khoisan</h2>
        <div class="frm">
            <h2 class="design2">Sign In Page</h2>
            <input type="text" placeholder="Username or Email" class="design3" name="username" id="username"><br>
            <input type="password" placeholder="Password" class="design3" name="password" id="password" maxlength="8"
                required required><br>
            <button class="link">Sign In</button><br>
            <span style="color:white">New to our platform?</span><a href="<?php echo base_url("register") ?>"
                class="link2">Create an account</a> <br>
        </div>
    </form>
</div>
<!-- <script>
// JavaScript code to handle the login form submission via AJAX
$(document).ready(function() {
    $('#login-form').submit(function(e) {
        e.preventDefault();
        var username = $('#username').val();
        var password = $('#password').val();

        $.ajax({
            type: 'POST',
            url: base_url + 'loginvalue',
            data: {
                username: username,
                password: password
            },
            success: function(response) {
                if (response === 'success') {

                    toastr.clear();
                    Toast('Successfully login', "success", {
                        position: "top-center",
                        timeOut: "5000",
                    });
                    //     Redirect to a dashboard or another page
                    //     alert("Successfully");
                    //    base_url('record');

                } else {
                    alert("error");
                }
            }
        });
    });
});
</script> -->

<script>
    // JavaScript code to handle the login form submission via AJAX
    $(document).ready(function () {
        $('#login-form').submit(function (e) {
            e.preventDefault();
            var username = $('#username').val();
            var password = $('#password').val();

            $.ajax({
                type: 'POST',
                url: base_url + 'loginvalue',
                data: { username: username, password: password },
                success: function (response) {
                    if (response === 'success') {

                        toastr.clear();
                        Toast('Successfully login', "success", {
                            position: "top-right",
                            timeOut: "1000",
                        });

                        // base_url("register");

                        redirect('LoginController/adminpanel');
                        // Redirect to a dashboard or another page
                        // alert("Successfully");
                        // base_url('record');

                    } else {
                        toastr.error('Invalid username or password', 'Error');


                    }
                }
            });
        });
    });
</script>
