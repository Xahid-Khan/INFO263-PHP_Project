<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employer Rankings</title>
    <meta charset="UTF-8">
    <meta name="title" content="Employer Rankings">
    <meta name="description"
          content="A user can use this site to find the ranking of a employer or a company">
    <meta name="keywords" content="company review, company rating, company ranking, company feedback">
    <link rel="icon" href="img/search-heart.svg" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--Navigation bar-->
    <?php include "fragments/navbar.php" ?><br>
<h1>Employer Ratings</h1>
<?php
try {
    $open_review_s_db = new PDO("sqlite:open_review_s_sqlite.db");
    $open_review_s_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
}

try {
    $res = $open_review_s_db->query("SELECT company_name, overall_rating FROM reviewedEmployer_S");
    while($row = $res->fetch(PDO::FETCH_ASSOC)) {
        echo $row['company_name'] . " | " . $row['overall_rating'];
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
?>


</body>
</html>

