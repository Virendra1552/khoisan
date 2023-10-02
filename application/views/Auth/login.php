    <style>
        .design1 {
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: black;
        }

        .design1,
        .design2 {
            font-size: 40px;
            text-align: center;
            color: #ffd710;
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
            width: 100%;
            height: 30px;
            padding: 5px;
        }

        .link {
            height: 40px;
            width: 100%;
            font-size: 20px;
            margin-top: 25px;
            margin-bottom: 15px;
        }

        .link:hover {

            color: #ffd710;
            background-color: #352F44;
        }

        .link2 {
            font-size: 17px;
            text-decoration: none;
            color: #000;
        }

        .link2:hover {
            text-decoration: underline ;
            outline: 20px;

        }

        .frm {
            border: 0.5px grey;
            border-radius: 5px;
            height: auto;
            max-width: 300px;
            text-align: center;
            padding: 20px;
            margin: auto;
            box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
        }

        a: hover{
            color:#000 ;
        }
    </style>
  



    <div class="section-background">
        <form id="login-form">
            <h2 class="design1"><span class="log">Log In</span> Khoisan</h2>
            <div class="frm">
                <h2 class="design2">Login Page</h2>
                <input type="text" placeholder="Username or Email" class="design3" name="username" id="username"><br>
                <input type="password" placeholder="Password" class="design3" name="password" id="password"><br>
                <button class="link">Sign In</button><br>
                <a href="<?php echo base_url("register") ?>" class="link2">Sign Up for Khoisan</a> <br>
            </div>
        </form>
    </div>
    <script>
        // JavaScript code to handle the login form submission via AJAX
        $(document).ready(function () {
            $('#login-form').submit(function (e) {
                e.preventDefault();
                var username = $('#username').val();
                var password = $('#password').val();

                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('loginvalue'); ?>',
                    data: { username: username, password: password },
                    success: function (response) {
                        if (response === 'success') {
                            // Redirect to a dashboard or another page
                            alert("Successfully");
                           // base_url('record');

                        } else {
                           alert("error");
                        }
                    }
                });
            });
        });

    </script>
