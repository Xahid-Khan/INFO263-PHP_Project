<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="title" content="Company Review">
    <meta name="description"
          content="This site helps user to view employers and companies. User can also leave feedback and review employers">
    <meta name="keywords" content="company review, company rating, company ranking, company feedback">
    <script src="js/script.js"></script>
    <link rel="icon" href="img/search-heart.svg"/>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="page-container">
        <!--Navigation bar-->
        <?php include "fragments/navbar.php" ?>
        <div id="content-wrap">
            <img src="img/homepage-banner.png" class="center"/> <br>
            <h1 class="text-center">Welcome to Rater</h1> <br>
            <div class="card w-75 center">

                <div class="card-body">
                    <h5 class="card-title">
                        About Us
                    </h5>
                    Rater is a website for rating, reviewing and learning about employers.
                    Weather you have a job, looking for a job or even just curious about a company ,
                    this is a great website to look into which employer peaks your interest and learn
                    from former and current employees.
                </div>
            </div><br><br><br><br>
        </div>
        <?php include "fragments/footer.php" ?>
    </div>


</body>
</html>