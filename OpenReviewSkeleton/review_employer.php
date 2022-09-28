<!DOCTYPE html>
<html lang="en">
<head>
    <title>Review Employer</title>
    <meta charset="UTF-8">
    <meta name="title" content="Review Employer">
    <meta name="description"
          content="A user can use this site to review or rank a company and provide a feedback">
    <meta name="keywords" content="company review, company rating, company ranking, company feedback">

    <script>

        function get_search_recommendation(event)
        {

            var string = event.textContext;
            
            document.getElementsByName("search_box")[0].value = string;

            document.getElementById("search_result").innerHTML = "";

        }
        
        function search_autocomplete(query)
        {

            if (query.length > 2) {

                var form_data = new FormData();
                form_data.append('query', query);

                var ajax_request = new XMLHttpRequest();

                ajax_request.open("POST", "search_employers.php");
                ajax_request.send(form_data);

                ajax_request.onreadystatechange = function() 
                {

                    // if server finished processing 
                    if (ajax_request.readState == 4 && ajax_request.status == 200)
                    {

                        var responce = JSON.parse(ajax_request.responceText);

                        var html = '<div class="list-group">';

                        if (responce.length > 0) {

                            for (var c = 0; c < responce.length; c++) {

                                html += '<a href="#" class="list-group-item list-group-item-action onclick="get_search_recommendation(this)">' + responce[c].post_title + '</a>';

                            }

                        } else {

                            html += '<a href="#" class="list-group-item list-group-item-action disabled">Not Found</a>';

                        }

                        
                        html += '</div>';

                        document.getElementById('search_result').innerHTML = html;

                    }                    

                };

            } else {

                document.getElementById("search_result").innerHTML = "";

            }

        }

    </script>

    <link rel="icon" href="img/search-heart.svg" />
</head>
<body>
    <!--Navigation bar-->
    <?php include "fragments/navbar.php" ?><br>
    <?php include "search_employers.php" ?>

<h1>Review Employer</h1>

<div class="container">
        <h2 class="text-center mt-4 mb-4">Search Employers</h2>
        <div class="row mt-5 mb-5">
            <div class="col col-sm-2">&nbsp;</div>
            <div class="col col-sm-8">
                <div class="dropdown">
                    <input type="text" name="search_box" class="form-control form-control-lg" placeholder="Type Here..." id="search_box" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onkeyup="javascript:search_autocomplete(this.value)" onfocus="javascript:get_search_recommendation(this.value)" />
                    <span id="search_result"></span>
                </div>
            </div>
        </div>      
    </div>

</body>
</html>

