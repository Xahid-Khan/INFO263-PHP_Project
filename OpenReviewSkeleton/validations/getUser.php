<?php

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

function getUserFromDB ()
{
    try {
        $pdo = openConnection();
        $userId = (int)$_SESSION['userId'];
        echo $userId . '<br/>';
        $data = $pdo->query("SELECT * FROM user WHERE user.user_id = '$userId'")->fetch();
        echo "IN THE DATA\n" . '<br/>';
        echo "$data";
        return $data;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    return null;
}
