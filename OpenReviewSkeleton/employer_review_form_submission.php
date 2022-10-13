<?php

function insertReview($review){
    try {
        $open_review_s_db = new PDO("sqlite:validations/open_review_s_sqlite.db");
        $open_review_s_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    //TODO: figure out how to insert employer

    $query = "INSERT INTO employerReview_S (employerId, reviewDateTime,
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
                        :employerID,GETDATE(),
                        :advice,:cons, :employmentStatus, :currentJob,
                        :jobEndingYear,:jobTitle, :yearsEmployed, :pros,
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
        //TODO: add ability for employer to be added/integrate with the predictive text code
        $stmt->bindParam(':employerID', $review->employerID);
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

if (isset($_POST['employer'],
    $_POST['overallRating'],
    $_POST['jobTitle'],
    $_POST['employmentStatus'],
    $_POST['currentJob'],
    $_POST['jobEndingYear'],
    $_POST['yearsEmployed'])){

    $employer = htmlspecialchars($_POST['employer']); //this needs to be changed (to res.company_id?)
    $overallRating = htmlspecialchars($_POST['overallRating']);
    $jobTitle = htmlspecialchars($_POST['jobTitle']);
    $employmentStatus = htmlspecialchars($_POST['employmentStatus']);
    $currentJob = htmlspecialchars($_POST['currentJob']);
    $jobEndingYear = htmlspecialchars($_POST['jobEndingYear']);
    $yearsEmployed = htmlspecialchars($_POST['yearsEmployed']);
    $summary = htmlspecialchars($_POST['summary']);
    $advice = htmlspecialchars($_POST['advice']);
    $pros = htmlspecialchars($_POST['pros']);
    $cons = htmlspecialchars($_POST['cons']);
    $businessOutlook = htmlspecialchars($_POST['businessOutlook']);
    $recommendToFriend = htmlspecialchars($_POST['recommendToFriend']);
    $ceoRating = htmlspecialchars($_POST['ceoRating']);
    $careerOpportunities = htmlspecialchars($_POST['careerOpportunities']);
    $compensation = htmlspecialchars($_POST['compensation']);
    $culture = htmlspecialchars($_POST['culture']);
    $diversity = htmlspecialchars($_POST['diversity']);
    $seniorLeadership = htmlspecialchars($_POST['seniorLeadership']);
    $workLifeBalance = htmlspecialchars($_POST['workLifeBalance']);

    $review = new Review($employer, $overallRating, $jobTitle, $employmentStatus,
        $currentJob, $jobEndingYear, $yearsEmployed,
        $summary, $advice, $pros, $cons,
        $businessOutlook, $recommendToFriend, $ceoRating,
        $careerOpportunities, $compensation, $culture,
        $diversity, $seniorLeadership, $workLifeBalance);

    insertReview($review);

} else {
    $error = "Please fill all the required fields";
}







