<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile Page</title>
    <link rel="icon" href="img/search-heart.svg"/>
    <link rel="stylesheet" href="css/register_user.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--Navigation bar-->
<?php include "fragments/navbar.php" ?><br>

<!--Registration Form -->
<div class="registration-body">
    <div class="registration-card">
        <?php
        try {
            $pdo = new PDO("sqlite:validations/open_review_s_sqlite.db");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $userId = (int)$_SESSION['userId'];
            $data = $pdo->query("SELECT * FROM user WHERE user.user_id = '$userId'")->fetch();
            $pdo = null;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }

        if ($_FILES) {
            $target_dir = "img/users/";
            $name = explode(".", $_FILES['user_image']['name']);
            $extension=end($name);
            $newName = $data['email'] .".". $extension;

            $pdo = new PDO("sqlite:validations/open_review_s_sqlite.db");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->query("UPDATE user SET image = '$newName' WHERE user.user_id = '$userId'")->fetch();
            $pdo = null;
            move_uploaded_file($_FILES['user_image']['tmp_name'], $target_dir . $newName);
            $_SESSION['image'] = $newName;
        }
        ?>

        <div style="width: 100%; display: flex; justify-content: center;">
            <div class="card-block" style="display: block; justify-content: center; text-align-last: center; height: fit-content;">
                <div>
                    <h1>Profile Page</h1>
                </div>
                <form style="text-align-last: left; height: fit-content; margin-bottom: 50px;"
                      action="profile.php" method="post" enctype="multipart/form-data">
                    <table class="registration-table">
                        <tr class="registration-row">
                            <td style="margin: 20px; width: 50vh; display: flex; justify-content: center">
                                <img src="img/users/<?php echo $_SESSION['image']?>"
                                     width="300" height="300" style="border-radius: 15px; margin-right: 10px; cursor: pointer" id="user-profile-image"
                                />
                            </td>
                        </tr>
                        <tr>
                            <td style="margin: -5px 0 10px 0;display: flex; justify-content: center">
                                <label class="btn btn-primary">
                                    <input id="user-image" name="user_image" type="file"
                                           accept="image/*" style="color: white"/>
                                </label>
                            </td>
                        </tr>
                        <tr class="registration-row">
                            <td style="margin: 20px; width: 50vh">
                                <input id="first-name" class="form-control form-control-lg" type="text" maxlength="20"
                                       minlength="1" name="firstName" required disabled value="<?php echo $data['first_name'] ?>"
                                       onchange="validateFirstName()">
                            </td>
                        </tr>
                        <tr class="registration-row">
                            <td style="margin: 20px; width: 50vh">
                                <input id="last-name" class="form-control form-control-lg" type="text" maxlength="20"
                                       minlength="1" name="lastName" required disabled value="<?php echo $data['last_name'] ?>"
                                       onchange="validateLastName()">
                            </td>
                        </tr>
                        <tr class="registration-row">
                            <td style="margin: 20px; width: 50vh">
                                <input id="user-email" class="form-control form-control-lg" type="email" maxlength="20"
                                       minlength="1" name="email" required disabled value="<?php echo $data['email'] ?>"
                                       onchange="validateEmail()">
                            </td>
                        </tr>
                    </table>
                    <div style="width: 100%; padding: 60px 0 0px 0; display: flex; justify-content: center;">
                        <button id="edit-button" type="button" class="btn btn-primary" style="width: 100%;
                        text-align-last: center" onclick="editFields()"
                        >Edit
                        </button>
                    </div>
                    <div style="width: 100%; padding: 20px 0 20px 0; display: flex; justify-content: center;">
                        <button id="update-button" type="submit" class="btn btn-primary" style="width: 100%; text-align-last: center"
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
<script src="js/profile.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<script>
</script>


</html>