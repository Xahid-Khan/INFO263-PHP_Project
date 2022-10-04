<!DOCTYPE html>
<html lang="en">
<head>
    <title>Review Employer</title>
    <meta charset="UTF-8">
    <meta name="title" content="Review Employer">
    <meta name="description"
          content="A user can use this site to review or rank a company and provide a feedback">
    <meta name="keywords" content="company review, company rating, company ranking, company feedback">

    <link rel="icon" href="img/search-heart.svg" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--Navigation bar-->
    <?php include "fragments/navbar.php" ?><br>
    <?php
    if (!(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'])) {
        header('Location: login.php?message=Please login to review an employer');
        exit;
    }
    ?>
<h1>Review Employer</h1>


</body>
</html>

