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
    <form>
        <br>
        <h4>Employment Details:</h4>
        <!-- employment status, is_current_job, job_title, length_of_employment

        /employer
        /employment status - enum
        is current job?
        job title
        length of employment in years???
        -->

        <label for="employer">Employer (temp)</label>
        <textarea class="form-control" id="employer" rows="1"></textarea>

        <label for="employmentStatus">Employment Status</label> <!--not required-->
        <select class="form-control" id="employmentStatus">
            <option>Regular</option>
            <option>Part Time</option>
            <option>Contract</option>
            <option>Freelance</option>
            <option>Intern</option>
        </select>

        <label for="currentJob">Is this your current job?</label> <!--not required-->
        <select class="form-control" id="currentJob">
            <option>Yes</option>
            <option>No</option>
        </select>

        <label for="jobTitle">Job Title</label>
        <textarea class="form-control" id="jobTitle" rows="1"></textarea>

        <br>

        <h4>Review:</h4>
        <!-- summary, advice, pros, con -->
        <div class="form-group">
            <label for="summary">Summary</label>
            <textarea class="form-control" id="summary" rows="2"></textarea>
            <label for="advice">Advice</label>
            <textarea class="form-control" id="advice" rows="2"></textarea>
            <label for="pros">Pros</label>
            <textarea class="form-control" id="pros" rows="2"></textarea>
            <label for="cons">Cons</label>
            <textarea class="form-control" id="cons" rows="2"></textarea>
        </div>

        <br>

        <h4>Quick Ratings:</h4>
        <!-- business outlook - enum
            recommend to friend - enum
            ceo - enum

            career opportunities - int
            compensation - int
            d&i - int -->

        <label for="businessOutlook">Business Outlook</label> <!--not required-->
        <select class="form-control" id="businessOutlook">
            <option>Positive</option>
            <option>Neutral</option>
            <option>Negative</option>
        </select>

        <label for="recommendToFriend">Would you recommend this company to a friend?</label> <!--not required-->
        <select class="form-control" id="recommendToFriend">
            <option>Yes</option>
            <option>No</option>
        </select>

        <label for="ceoRating">CEO Rating</label> <!--not required-->
        <select class="form-control" id="ceoRating">
            <option>Approve</option>
            <option>No opinion</option>
            <option>Disapprove</option>
        </select>

        <label for="overallRating">Overall Rating</label> <!--not required-->
        <select class="form-control" id="overallRating">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>

        <label for="careerOpportunities">Rating of Career Opportunities</label> <!--not required-->
        <select class="form-control" id="careerOpportunities">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>

        <label for="compensation">Rating of Compensation and Benefits</label> <!--not required-->
        <select class="form-control" id="compensation">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>

        <label for="culture">Rating of Culture and Values</label> <!--not required-->
        <select class="form-control" id="culture">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>

        <label for="diversity">Rating of Diversity and Inclusion</label> <!--not required-->
        <select class="form-control" id="diversity">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>

        <label for="seniorLeadership">Rating of Senior Leadership</label> <!--not required-->
        <select class="form-control" id="seniorLeadership">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>

        <label for="workLifeBalance">Rating of Work-Life Balance</label> <!--not required-->
        <select class="form-control" id="workLifeBalance">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>


    </form>

    <?php

?>
</body>
</html>


