<?php


echo " HELLOOOOO....";
if (isset($_POST['firstName'], $_POST["lastName"], $_POST["email"],
    $_POST["password"], $_POST["matchPassword"])) {
//    header("location:http://index.php");
    registerUser(htmlentities($_POST['firstName']), htmlentities($_POST['lastName']),
        htmlentities($_POST['email']), htmlentities($_POST['password']),
        htmlentities($_POST['matchPassword']));
} else {
    $error = "Please fill all the required fields";
    echo $error;
}


/**
 * Create connection to the database
 *
 * @return PDO object which is the connection to the database
 */
function openConnection(): PDO
{
    try {
        $pdo = new PDO("sqlite:open_review_s_sqlite.db");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }
    return $pdo;
}

function registerUser ($firstName, $lastName, $email, $password, $re_password) {
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);

//    $pdo = openConnection();
//    $authState = new OAuthProvider();
//    $token = $authState -> generateToken(12);
    $token = "";
    $pdo = openConnection();

    $result = $pdo->query("INSERT INTO user (FIRST_NAME, LAST_NAME, EMAIL, PASSWROD, TOKEN) 
                                    VALUES ('$firstName', '$lastName', '$email', '$hashPassword', '')");


//    echo $result;

}