<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <script src="js/register_user.js"></script>
    <link rel="icon" href="img/search-heart.svg" />
    <link rel="stylesheet" href="css/register_user.css">
</head>
<body>
<!--Navigation bar-->
<?php include "fragments/navbar.php" ?><br>
<div class="registration-body">
    <div class="registration-card">
        <div style="width: 100%">
            <div class="card-block" style="display: grid; justify-content: center; text-align-last: center;">
                <h1>Welcome to RATER</h1>
                <p>Where you can rate any employer and leave reviews</p>
                <h1>Registration Form</h1>
                <form style="text-align-last: left; height: 400px">
                    <table class="registration-table">
                        <tr class="registration-row">
                            <td style="margin: 20px; width: 50vh">
                                <input class="form-control form-control-lg" type="text" placeholder="First Name">
                            </td>
                        </tr>
                        <tr class="registration-row">
                            <td style="margin: 20px; width: 50vh">
                                <input class="form-control form-control-lg" type="text" placeholder="Last Name">
                            </td>
                        </tr>
                        <tr class="registration-row">
                            <td style="margin: 20px; width: 50vh">
                                <input class="form-control form-control-lg" type="email" placeholder="Enter Email">
                            </td>
                        </tr>
                        <tr class="registration-row">
                            <td style="margin: 20px; width: 50vh">
                                <input class="form-control form-control-lg" type="password" placeholder="Enter Password">
                            </td>
                        </tr>
                        <tr class="registration-row">
                            <td style="margin: 20px; width: 50vh">
                                <input class="form-control form-control-lg" type="password" placeholder="Re-enter Password">
                            </td>
                        </tr>
                    </table>
                    <div style="float: right; width: 50vh">
                        <button type="submit" class="btn btn-primary" style="width: 50vh; text-align-last: center"
                        >REGISTER</button>
                    </div>
                </form>
                <div>
                    <p class="login-link">
                        If you've already registered, click here to login.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>