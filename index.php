<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <title>Blood Bank</title>
</head>

<body>
    <main>
        <h1>Blood Bank</h1>
        <h3>Give blood. Give life.</h3>
    </main>

    <section>
        <div class="login_form forms">
            <h3>Login</h3>
            <form method="POST" action="classes/login.php">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="lpassword" name="lpassword" type="password" class="form-control" placeholder="Password">
                </div>

                <div class="input-group">
                    <input type="submit" value="Login" name="login" class="btn btn-success" name="msg"
                        placeholder="Additional Info">

                </div>
            </form>
        </div>
        <div class="signup_form forms">
            <h3>Sign Up</h3>
            <form method="POST" action="classes/register.php" onSubmit="return Validate()">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" name="username" type="email" class="form-control" placeholder="Email">
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="cpassword" onKeyUp="Validate();" name="cpassword" type="password" class="form-control"
                        placeholder="Confirm Password">
                </div>

                <div class="input-group">
                    <span class="error" id="perror"></span>
                </div>

                <div class="input-group">
                    <input type="submit" value="Sign Up" name="submit" class="btn btn-success">
                </div>
            </form>
        </div>

    </section>
    <div class="cover">
    </div>

    <?php
    include "components/footer.php";
    ?>

    <script>
        function Validate() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("cpassword").value;
            if (password != confirmPassword) {
                document.getElementById('perror').innerHTML = "Password Do not Match.";
                return false;
            }
            else {
                document.getElementById('perror').innerHTML = "";
                return true;
            }
        }
    </script>