<?php

class Review
{
    //everything has been made public for debugging purposes
    public int $employerID;
    public int $overallRating;
    public string $jobTitle;
    public string $employmentStatus;
    public int $currentJob;
    public int $jobEndingYear;
    public int $yearsEmployed;

    public $summary;
    public $advice;
    public $pros;
    public $cons;

    public $businessOutlook;
    public $recommendToFriend;
    public $ceoRating;
    public int $careerOpportunities;
    public int $compensation;
    public int $culture;
    public int $diversity;
    public int $seniorLeadership;
    public int $workLifeBalance;

    public function __construct($employerID, $overallRating,
                                $jobTitle, $employmentStatus,
                                $currentJob, $jobEndingYear, $yearsEmployed,
                                $summary, $advice, $pros, $cons,
                                $businessOutlook, $recommendToFriend, $ceoRating,
                                $careerOpportunities, $compensation, $culture,
                                $diversity, $seniorLeadership, $workLifeBalance) {
        $this->employerID = $employerID;
        $this->overallRating = $overallRating;
        $this->jobTitle = $jobTitle;
        $this->employmentStatus = $employmentStatus;

        $this->currentJob = $currentJob;
        $this->jobEndingYear = (int) $jobEndingYear;
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

