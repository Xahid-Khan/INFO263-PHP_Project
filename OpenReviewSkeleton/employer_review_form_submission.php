<?php

class Review
{
    protected $employer;
    protected $overallRating;
    protected $jobTitle;
    protected $employmentStatus;
    protected $currentJob;
    protected $jobEndingYear;
    protected $yearsEmployed;

    protected $summary;
    protected $advice;
    protected $pros;
    protected $cons;

    protected $businessOutlook;
    protected $recommendToFriend;
    protected $ceoRating;
    protected $careerOpportunities;
    protected $compensation;
    protected $culture;
    protected $diversity;
    protected $seniorLeadership;
    protected $workLifeBalance;

    public function __construct($employer, $overallRating,
                                $jobTitle, $employmentStatus,
                                $currentJob, $jobEndingYear, $yearsEmployed,
                                $summary, $advice, $pros, $cons,
                                $businessOutlook, $recommendToFriend, $ceoRating,
                                $careerOpportunities, $compensation, $culture,
                                $diversity, $seniorLeadership, $workLifeBalance) {
        $this->employer = $employer;
        $this->overallRating = $overallRating;
        $this->jobTitle = $jobTitle;
        $this->employmentStatus = $employmentStatus;

        $this->currentJob = $currentJob;
        $this->jobEndingYear = $jobEndingYear;
        $this->yearsEmployed = $yearsEmployed;

        $this->summary = $summary;
        $this->advice = $advice;
        $this->pros = $pros;
        $this->cons = $cons;

        $this->businessOutlook = $businessOutlook;
        $this->recommendToFriend = $recommendToFriend;
        $this->ceoRating = $ceoRating;

        $this->careerOpportunities = $careerOpportunities;
        $this->compensation = $compensation;
        $this->culture = $culture;

        $this->diversity = $diversity;
        $this->seniorLeadership = $seniorLeadership;
        $this->workLifeBalance = $workLifeBalance;
    }
}

function insertReview($review){
    // connect to db?

    $review->employer;
}

if (isset($_POST['employer'])) {
    $employer = htmlspecialchars($_POST['employer']);
    $overallRating = $_POST['overallRating'];
    $jobTitle = $_POST['jobTitle'];
    $employmentStatus = $_POST['employmentStatus'];
    /* if ($employmentStatus == 0) {
        $employmentStatus = null;
    } is this needed???*/
    $currentJob = $_POST['currentJob'];
    $jobEndingYear = $_POST['jobEndingYear'];
    $yearsEmployed = $_POST['yearsEmployed'];

    $summary = $_POST['summary'];
    $advice = $_POST['advice'];
    $pros = $_POST['pros'];
    $cons = $_POST['cons'];

    $businessOutlook = $_POST['businessOutlook'];
    $recommendToFriend = $_POST['recommendToFriend'];
    $ceoRating = $_POST['ceoRating'];
    $careerOpportunities = $_POST['careerOpportunities'];
    $compensation = $_POST['compensation'];
    $culture = $_POST['culture'];
    $diversity = $_POST['diversity'];
    $seniorLeadership = $_POST['seniorLeadership'];
    $workLifeBalance = $_POST['workLifeBalance'];

    if ($employer == "") {
        echo 'Review not submitted: Please enter your employer';
    } elseif ($overallRating == 0) {
        echo "Review not submitted: Please provide an overall rating for $employer";
    } else {
        $review = new Review($employer, $overallRating,
            $jobTitle, $employmentStatus,
            $currentJob, $jobEndingYear, $yearsEmployed,
            $summary, $advice, $pros, $cons,
            $businessOutlook, $recommendToFriend, $ceoRating,
            $careerOpportunities, $compensation, $culture,
            $diversity, $seniorLeadership, $workLifeBalance);
        insertReview($review);
        echo "Success! Your review has been submitted for $employer";
    }
}

/*if (isset($_POST['employer'])) {
    var_dump($_POST['employer']);

    $employer = $_POST['employer'];

    echo 'success';
    //echo "Thanks for your review of $employer 'NAME' (TODO)<br>";
} else {
    echo 'Please provide the name of the Employer you are reviewing.';
}*/





