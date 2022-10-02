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

<h1>Review Employer</h1>


<!--    https://dcodemania.com/post/autocomplete-search-php-pdo-mysql-ajax-->
    <form action="search.php" method="POST">
        <input type="text" name="query" id="search" />
        <input type="submit" value="Search" />
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            // Send Search Text to the server
            $("#search").keyup(function () {
                let searchText = $(this).val();
                if (searchText != "") {
                    $.ajax({
                        url: "search.php",
                        method: "post",
                        data: {
                            query: searchText,
                        },
                        success: function (response) {
                            console.log(response)
                        },
                    });
                } else {
                    console("failed")
                }
            });
            // // Set searched text in input field on click of search button
            // $(document).on("click", "a", function () {
            //     $("#search").val($(this).text());
            //     $("#show-list").html("");
            // });
        });
    </script>

</body>
</html>

