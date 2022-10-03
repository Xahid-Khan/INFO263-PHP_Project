<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="icon" href="img/search-heart.svg"/>
    <link rel="stylesheet" href="css/register_user.css">
</head>
<body>
<!--Navigation bar-->
<?php include "fragments/navbar.php" ?><br>

<!--Login Form -->
<div class="login-body">
    <div class="registration-card">
        <div style="width: 100%">
            <div class="card-block-login" style="display: grid; justify-content: center; text-align-last: center;">
                <h1>Welcome to RATER</h1>
                <p>Where you can rate any employer and leave reviews</p>
                <form style="text-align-last: left; height: 80%" onsubmit="return validateLoginForm()"
                      action="login_validation.php" method="post">
                    <table class="registration-table">
                        <tr class="registration-row">
                            <td style="margin: 20px; width: 50vh">
                                <input id="user-email" class="form-control form-control-lg" type="email"
                                       placeholder="Enter email" name="user-email">
                            </td>
                        </tr>
                        <tr class="registration-row">
                            <td style="margin: 20px; width: 50vh">
                                <input id="password" class="form-control form-control-lg" type="password"
                                       placeholder="Enter password" name="password">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h5 id="error-message" class="form-error">
                                    <?php
                                    if (!empty($_GET['message'])) {
                                        $error = $_GET['message'];
                                        echo $error;
                                    }
                                    ?>
                                </h5>
                            </td>
                        </tr>
                    </table>
                    <div style="float: right; width: 50vh">
                        <button type="submit" class="btn btn-primary"
                                style="width: 50vh; text-align-last: center; cursor: pointer">
                            Login
                        </button>
                    </div>
                </form>
                <br/>
                <br/>
                <div>
                    <div style="float: left;padding-left: 5vh;">
                        <span>If you do not have an account, to register&nbsp;</span>
                    </div>
                    <div style="float: left;">
                        <a class="click-here-link" href="register_user.php"> click here </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script src="js/login_user.js"></script>
</html>