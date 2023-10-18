<div class="section-background pd-1">
    <form id="login-form">
        <h2 class="design1"><span class="log"></span></h2>
        <div class="frm">
            <h2 class="design2">SignIn</h2>
            <input type="text" placeholder="Username or Email" class="design3" name="username" id="username">
            <input type="password" placeholder="Password" class="design3 mt-3" name="password" id="password"
                maxlength="8" required required>
            <button class="btn btn-theme mt-3">Sign In</button>
            <div class="mt-2">
                <span style="color:white">New to our platform?</span><a href="<?php echo base_url("register") ?>"
                    class="link2">Create an account</a> <br>

            </div>

        </div>
    </form>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 

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
                        window.location.href = base_url+"userpannel";
                        // base_url("register");
                    //    redirect(adminpanel);


                    } else {
                        toastr.error('Invalid username or password', 'Error');
                    }
                }
            });
        });
    });
</script>