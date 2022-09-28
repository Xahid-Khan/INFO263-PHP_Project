<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Review Employer</title>
    <link rel="icon" href="img/search-heart.svg" />
</head>
<body>
    <!--Navigation bar-->
    <?php include "fragments/navbar.php" ?><br>

<h1>Review Employer</h1>
    employer - drop down menu?

    summary - text box
    advice - text box
    pros - text box
    conx - text box

    employment status - enum
    is current job - bool

    job title - text
    length of employement - text

    RATINGS:

    business outlook - enum
    reccomend to friend - enum
    ceo - enum

    career opportunities - int
    compensation - int
    d&i - int
    


    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </form>

    <?php

?>
</body>
</html>

