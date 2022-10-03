<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="js/register_user.js"></script>
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
                <form style="text-align-last: left;" action="login.php" method="get">
                    <table class="registration-table">
                        <tr class="registration-row">
                            <td style="margin: 20px; width: 50vh">
                                <input id="user-email" class="form-control form-control-lg" type="email"
                                       placeholder="Enter email" name="user-email">
                            </td>
                        </tr>
                        <tr class="registration-row">
                            <td style="margin: 20px; width: 50vh">
                                <input id="password" class="form-control form-control-lg" type="text"
                                       placeholder="Enter password" name="password">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="error-message" class="form-error"></span>
                            </td>
                        </tr>
                    </table>
                    <div style="float: right; width: 50vh">
                        <button type="submit" class="btn btn-primary" style="width: 50vh; text-align-last: center"
                        >REGISTER
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


<?php
try {
    $open_review_s_db = new PDO("sqlite:open_review_s_sqlite.db");
    $open_review_s_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    if (isset($_POST['email']) && isset($_POST['password'])) {
        if (login_user(htmlentities($_POST["username"]), $_POST["password"])) {
            //TODO
        } else {

        }
    }

    if (authenticate(htmlentities($_POST["username"]), $_POST["password"])) {
        //TODO
    }

} catch (PDOException $e) {
    die($e->getMessage());
}

?>

</body>

</html>