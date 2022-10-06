<?php

class Review
{
    public $employer;
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








/*
 * VALUES (
                        //employerID,
                        NOW(),
                        '$review->advice',
                        '$review->cons',
                        '$review->employmentStatus', //enum
                        $review->currentJob,
                        $review->jobEndingYear,
                        '$review->jobTitle',
                        $review->yearsEmployed,
                        '$review->pros',
                        $review->businessOutlook, //enum
                        $review->careerOpportunities,
                        $review->ceoRating, //enum
                        $review->compensation,
                        $review->culture,
                        $review->diversity,
                        $review->overallRating,
                        $review->recommendToFriend, //enum
                        $review->seniorLeadership,
                        $review->workLifeBalance,
                        '$review->summary')
*/