"use-strict"

const ALPHAREGEX = /^[a-zA-Z ]*$/;
const YEARENDREGEX = /^(19|20)\d{2}$/;
const YEARSEMPLOYEDREGEX = /^(0|[1-9]\d?|100)$/;
const currentYear = new Date().getFullYear();
const EMPSTATUSREGEX = /^(PART_TIME|REGULAR|CONTRACT|FREELANCE|INTERN)$/;

const overallRating = document.getElementById("overallRating");
const employer = document.getElementById("employer");
const jobTitle = document.getElementById("jobTitle");
const employmentStatus = document.getElementById("employmentStatus");
const currentJob = document.getElementById("currentJob");
const jobEndingYear = document.getElementById("jobEndingYear");
const yearsEmployed = document.getElementById("yearsEmployed");
/* const summary = document.getElementById("summary");
const advice = document.getElementById("advice");
const pros = document.getElementById("pros");
const cons = document.getElementById("cons");
const businessOutlook = document.getElementById("business-outlook");
const recommendToFriend = document.getElementById("recommend-to-friend");
const ceoRating = document.getElementById("ceo-rating");
const careerOpportunities = document.getElementById("career-opportunities");
const compensation = document.getElementById("compensation");
const culture = document.getElementById("culture");
const diversity = document.getElementById("diversity");
const seniorLeadership = document.getElementById("senior-leadership");
const workLifeBalance = document.getElementById("work-life-balance"); */

const validateEmployer = () => {

}

const validateOverallRating = () => {
    if (overallRating.value == -1){
        document.getElementById("overallRatingLabel").style.color="red";
        return false;
    }
    document.getElementById("overallRatingLabel").style.color="black";
    return true;
}

const validateJobTitle = () => {
    if (jobTitle.value == "" || jobTitle.value.length >255 || !jobTitle.value.match(ALPHAREGEX)) {
        document.getElementById("jobTitleLabel").style.color="red";
        return false;
    }
    document.getElementById("jobTitleLabel").style.color="black";
    return true;
}

const validateEmploymentStatus = () => {
    if (employmentStatus.value == -1 || (!employmentStatus.value.match(EMPSTATUSREGEX))){
        document.getElementById("employmentStatusLabel").style.color="red";
        return false;
    }
    document.getElementById("employmentStatusLabel").style.color="black";
    return true;
}
const validateCurrentJob = () => {
    if (currentJob.value == -1) {
        document.getElementById("currentJobLabel").style.color="red";
        return false;
    }

    if (currentJob.value == 1) {
        document.getElementById("jobEndingYear").setAttribute("disabled", "true");
    } else {
        document.getElementById("jobEndingYear").removeAttribute("disabled");
    }

    document.getElementById("currentJobLabel").style.color="black";
    return true;
}
const validateJobEndingYear = () => {
    if (!jobEndingYear.value.match(YEARENDREGEX) || jobEndingYear.value > currentYear) {
        document.getElementById("jobEndingYearLabel").style.color="red";
        return false;
    }
    document.getElementById("jobEndingYearLabel").style.color="black";
    return true;

}
const validateYearsEmployed = () => {
    if (!yearsEmployed.value.match(YEARSEMPLOYEDREGEX)) {
        document.getElementById("yearsEmployedLabel").style.color="red";
        return false;
    }
    document.getElementById("yearsEmployedLabel").style.color="black";
    return true;
}

