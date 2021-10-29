<?php
require "controllers/LoginController.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/views/css/style.css">
    <title>Login</title>
</head>
<body class="vh-100 body-container">
    <div id="login-container" 
        class="container-fluid h-custom my-container d-flex flex-column align-items-center">
        <header class="text-center">
            <section class="logo">
                <img src="/assets/twitter-logo.svg" alt="logo_twitter">
            </section>
        </header>
        <main id="main-form" class="text-center">
            <form id="form-div" action="login" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="username" class="form-control" id="username" name="username">
                    <?php if ($username_err != "") { ?>
                        <div class="help-block">
                            <p><?php echo $username_err; ?></p>
                        </div>
                    <?php } ?>
                </div>
                <div class="form-group width-limit">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <?php if ($password_err != "") { ?>
                        <div class="help-block">
                            <p><?php echo $password_err; ?></p>
                        </div>
                    <?php } ?>
                </div>
                <button type="submit" class="btn btn-dark mt-4">LOGIN</button>
            </form>
        </main>
    </div>
</body>
</html>