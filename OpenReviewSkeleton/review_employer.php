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
</head>
<body>
    <!--Navigation bar-->
    <?php include "fragments/navbar.php" ?><br>
    <?php include "search_employers.php" ?>

<h1>Review Employer</h1>

<form method="post">
    <label>Search</label>
    <input type="text" name="search">
    <input type="submit" name="submit_search">
    
</form>

</body>
</html>

