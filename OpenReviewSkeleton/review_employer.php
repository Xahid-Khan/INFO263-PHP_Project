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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

    <div class="container">
        <h1>Review Employer</h1>
        <form action="employer_review_form_submission.php" method="post">
            <br>
            <h4>Employment Details:</h4>
            <div class="row">
                <div class="col-md-8">
                    <label for="employer">Employer (temp)</label>
                    <input type="text" id="employer" name="employer" class="form-control" placeholder="e.g. Google" onchange="validateEmployer()">
                </div>
                <div class="col-md-4">
                    <label for="overallRating" id="overallRatingLabel">Overall Rating </label>
                    <select class="form-control" id="overallRating" name="overallRating" onchange="validateOverallRating()">
                        <option value="-1">Select...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <label for="jobTitle" id="jobTitleLabel">Job Title</label>
                    <input type="text" class="form-control" id="jobTitle" placeholder="e.g. Software Engineer" onchange="validateJobTitle()">
                </div>
                <div class="col-md-4">
                    <label for="employmentStatus" id="employmentStatusLabel">Employment Status</label>
                    <select class="form-control" id="employmentStatus" onchange="validateEmploymentStatus()">
                        <option value = "-1">Select...</option>
                        <option value="REGULAR">Regular</option>
                        <option value="PART_TIME">Part Time</option>
                        <option value="CONTRACT">Contract</option>
                        <option value="FREELANCE">Freelance</option>
                        <option value="INTERN">Intern</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label for="currentJob">Is this your current job?</label>
                    <select class="form-control" id="currentJob">
                        <option value = "-1">Select...</option>
                        <option value = "1">Yes</option>
                        <option value = "0">No</option> 
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="jobEndingYear">Job Ending Year</label>
                    <input type="text" class="form-control" placeholder="e.g. 2019"> <!-- need some type of validation here -->
                </div>
                <div class="col-md-4">
                    <label for="yearsEmployed">Years Employed</label>
                    <input type="text" class="form-control" placeholder="e.g. 4"> <!-- need some type of validation here -->
                </div>
            </div>
            <br>
            <br>
            <h4>Review:</h4>
            <div class="row">
                <div class="col-md-6">
                    <label for="summary">Summary</label>
                    <textarea class="form-control" id="summary" rows="3"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="advice">Advice</label>
                    <textarea class="form-control" id="advice" rows="3"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label for="pros">Pros</label>
                    <textarea class="form-control" id="pros" rows="3"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="cons">Cons</label>
                    <textarea class="form-control" id="cons" rows="3"></textarea>
                </div>
            </div>
            <br>
            <br>
            <h4>Quick Ratings:</h4>
            <div class="row">
                <div class="col-md-4">
                    <label for="businessOutlook">Business Outlook</label> <!--not required-->
                    <select class="form-control" id="businessOutlook">
                        <option value="0">Select</option>
                        <option>Positive</option>
                        <option>Neutral</option>
                        <option>Negative</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="recommendToFriend">Would you recommend this company to a friend?</label> <!--not required-->
                    <select class="form-control" id="recommendToFriend">
                        <option value="-1">Select</option>
                        <option value="POSITIVE">Yes</option>
                        <option value="NEGATIVE">No</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="ceoRating">CEO Rating</label> <!--not required-->
                    <select class="form-control" id="ceoRating">
                        <option value="0">Select</option>
                        <option>Approve</option>
                        <option>No opinion</option>
                        <option>Disapprove</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label for="careerOpportunities">Rating of Career Opportunities</label> <!--not required-->
                    <select class="form-control" id="careerOpportunities">
                        <option value="0">Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="compensation">Rating of Compensation and Benefits</label> <!--not required-->
                    <select class="form-control" id="compensation">
                        <option value="0">Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="culture">Rating of Culture and Values</label> <!--not required-->
                    <select class="form-control" id="culture">
                        <option value="0">Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label for="diversity">Rating of Diversity and Inclusion</label> <!--not required-->
                    <select class="form-control" id="diversity">
                        <option value="0">Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="seniorLeadership">Rating of Senior Leadership</label> <!--not required-->
                    <select class="form-control" id="seniorLeadership">
                        <option value="0">Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="workLifeBalance">Rating of Work-Life Balance</label> <!--not required-->
                    <select class="form-control" id="workLifeBalance">
                        <option value="0">Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit Review</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php
?>
    <script src="js/review.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

