<?php

function insertReview($review){
    try {
        $open_review_s_db = new PDO("sqlite:open_review_s_sqlite.db");
        $open_review_s_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    //TODO: figure out how to insert employer

    $query = "INSERT INTO employerReview_S (
                              employerId, reviewDateTime,
                              advice, cons,employmentStatus, isCurrentJob,
                              jobEndingYear,jobTitle,lengthOfEmployment,pros,
                              ratingBusinessOutlook,
                              ratingCareerOpportunities,
                              ratingCeo,
                              ratingCompensationAndBenefits,
                              ratingCultureAndValues,
                              ratingDiversityAndInclusion,
                              ratingOverall,
                              ratingRecommendToFriend,
                              ratingSeniorLeadership,
                              ratingWorkLifeBalance,
                              summary) 
                VALUES (
                        0,
                        NOW(),
                        :advice,:cons, :employmentStatus, :currentJob,
                        :jobEndingYear,:jobTitle, yearsEmployed, :pros,
                        :businessOutlook,
                        :careerOpportunities,
                        :ceoRating,
                        :compensation,
                        :culture,
                        :diversity,
                        :overallRating,
                        :recommendToFriend,
                        :seniorLeadership,:workLifeBalance, :summary);";

    try {
        $stmt = $open_review_s_db->prepare($query);

        $stmt->bindParam(':advice', $review->advice);
        $stmt->bindParam(':cons', $review->cons);
        $stmt->bindParam(':employmentStatus', $review->employmentStatus);
        $stmt->bindParam(':currentJob', $review->currentJob, PDO::PARAM_INT);
        $stmt->bindParam(':jobEndingYear', $review->jobEndingYear, PDO::PARAM_INT);
        $stmt->bindParam(':jobTitle', $review->jobTitle);
        $stmt->bindParam(':yearsEmployed', $review->yearsEmployed, PDO::PARAM_INT);
        $stmt->bindParam(':pros', $review->pros);
        $stmt->bindParam(':businessOutlook', $review->businessOutlook);
        $stmt->bindParam(':careerOpportunities', $review->careerOpportunities, PDO::PARAM_INT);
        $stmt->bindParam(':ceoRating', $review->ceoRating);
        $stmt->bindParam(':compensation', $review->compensation, PDO::PARAM_INT);
        $stmt->bindParam(':culture', $review->culture, PDO::PARAM_INT);
        $stmt->bindParam(':diversity', $review->diversity, PDO::PARAM_INT);
        $stmt->bindParam(':overallRating', $review->overallRating, PDO::PARAM_INT);
        $stmt->bindParam(':recommendToFriend', $review->recommendToFriend);
        $stmt->bindParam(':seniorLeadership', $review->seniorLeadership, PDO::PARAM_INT);
        $stmt->bindParam(':workLifeBalance', $review->workLifeBalance, PDO::PARAM_INT);
        $stmt->bindParam(':summary', $review->summary);

        $stmt->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

if (isset($_POST['employer'])) {
    //TODO: input validation??
    $employer = htmlspecialchars($_POST['employer']);
    $overallRating = $_POST['overallRating'];
    $jobTitle = $_POST['jobTitle'];
    $employmentStatus = $_POST['employmentStatus'];
    /* if ($employmentStatus == 0) {
        $employmentStatus = null;
    } is this needed???*/

    /* OR:
    $employment_statuses = array("regular", "part time", "contract", "freelance", "intern");
    if ($employmentStatus == 0) {
        $employmentStatus = null;
    } elseif (!in_array(strtolower($employmentStatus))) {
        echo "This isn't a valid employment status, please select one from the dropdown menu"
    } */

    $currentJob = $_POST['currentJob'];
    $jobEndingYear = $_POST['jobEndingYear'];
    $yearsEmployed = $_POST['yearsEmployed'];

    $summary = $_POST['summary'];
    $advice = $_POST['advice'];
    $pros = $_POST['pros'];
    $cons = $_POST['cons'];

    $businessOutlook = $_POST['businessOutlook'];
    // $business_outlook_options = array("positive", "neutral", "negative");
    $recommendToFriend = $_POST['recommendToFriend'];
    // $recommend_friend_options = array("yes", "no");
    // note - these values need to be changed to enum('NEGATIVE','POSITIVE')
    $ceoRating = $_POST['ceoRating'];
    // $ceo_rating_options = array("approve", "no opinion", "disapprove");
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






