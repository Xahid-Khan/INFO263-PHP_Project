<?php

if (isset($_POST["user-email"], $_POST["password"])) {
    attemptLogin(htmlentities($_POST['user-email']), htmlentities($_POST['password']));
} else {
    $error = "Please fill all the required fields";
    header("Location:login.php?message=$error");
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

function attemptLogin($email, $password): bool {
    $pdo = openConnection();

    $data = $pdo->query("SELECT * FROM user WHERE email LIKE '$email'");
    echo $data->rowCount();
    return true;
}