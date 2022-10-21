<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile Page</title>
    <link rel="icon" href="img/search-heart.svg"/>
    <link rel="stylesheet" href="css/register_user.css">
    <link rel="stylesheet" href="css/style.css">
    <?php include_once "validations/getUser.php"; ?>
</head>
<body>
<!--Navigation bar-->
<?php include "fragments/navbar.php" ?><br>

<!--Registration Form -->
<div class="registration-body">
    <div class="registration-card">
        <?php
        $user = getUserFromDB();
        echo $user;
        ?>

        <div style="width: 100%; display: flex; justify-content: center;">
            <div class="card-block" style="display: grid; justify-content: center; text-align-last: center;">
                <div>
                    <h1>Profile Page</h1>
                </div>
                <form style="text-align-last: left; height: 400px; margin-bottom: 50px;"
                      onsubmit="return validateForm()" action="validations/registration.php" method="post">
                    <table class="registration-table">
                        <tr class="registration-row">
                            <td style="margin: 20px; width: 50vh">
                                <input id="first-name" class="form-control form-control-lg" type="text" maxlength="20"
                                       minlength="1" placeholder="First Name*" name="firstName" required
                                       onchange="validateFirstName()">
                            </td>
                        </tr>
                        <tr class="registration-row">
                            <td style="margin: 20px; width: 50vh">
                                <input id="last-name" class="form-control form-control-lg" type="text" maxlength="20"
                                       minlength="1" placeholder="Last Name*" name="lastName" required
                                       onchange="validateLastName()">
                            </td>
                        </tr>
                        <tr class="registration-row">
                            <td style="margin: 20px; width: 50vh">
                                <input id="user-email" class="form-control form-control-lg" type="email" maxlength="20"
                                       minlength="1" placeholder="Enter Email*" name="email" required
                                       onchange="validateEmail()">
                            </td>
                        </tr>
                        <tr class="registration-row">
                            <td style="margin: 20px; width: 50vh">
                                <input id="user-password" class="form-control form-control-lg" type="password" maxlength="20"
                                       minlength="1" placeholder="Enter Password*" name="password" required
                                       onchange="validatePassword()">
                            </td>
                        </tr>
                        <tr class="registration-row">
                            <td style="margin: 20px; width: 50vh">
                                <input id="match-password" class="form-control form-control-lg" type="password"  maxlength="20"
                                       minlength="1" placeholder="Re-enter Password*" name="matchPassword" required
                                       onchange="validateMatchPassword()">
                            </td>
                        </tr>
                    </table>
                    <div style="float: right; width: 100%; padding: 12px 0 0 0;">
                        <button id="registration-button" type="submit" class="btn btn-primary" style="width: 50vh; text-align-last: center"
                        >Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "fragments/footer.php" ?>
</body>
<script src="js/register_user.js"></script>

</html>