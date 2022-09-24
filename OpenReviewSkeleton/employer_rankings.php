<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employer Rankings</title>
    <link rel="icon" href="img/search-heart.svg" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/bower_components/bootstrap-horizon/bootstrap-horizon.css">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" type="text/css" href="css/employer_rankings_style.css">
</head>
<body>
    <!--Navigation bar-->
    <?php include "fragments/navbar.php" ?><br>
    <h1 class="text-center">Employer Ratings</h1> <br>
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
    <!--    https://codepen.io/Temmio/pen/gKGEYV-->
    <div class="container-fluid">
        <div class="scrolling-wrapper row flex-row flex-nowrap mt-4 pb-4 pt-2">

            <div class="col-3">
                <div class="card card-block card-1"></div>
            </div>
            <div class="col-3">
                <div class="card card-block card-2"></div>
            </div>
            <div class="col-3">
                <div class="card card-block card-3"></div>
            </div>
            <div class="col-3">
                <div class="card card-block card-4"></div>
            </div>
            <div class="col-3">
                <div class="card card-block card-5"></div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>
    .scrolling-wrapper{
        overflow-x: auto;
    }

    h1{
        font-weight: 700;
        font-size: 3.4em;
    }

    .card-block{
        height:  30vh;
        background-color: #96C7D5;
        border: none;
        background-position: center;
        background-size: cover;
        transition: all 0.2s ease-in-out !important;
        border-radius: 24px;

    }
    .card-block:hover{
     transform: translateY(-5px);
     box-shadow: none;
     opacity: 0.9;
    }
</style>
