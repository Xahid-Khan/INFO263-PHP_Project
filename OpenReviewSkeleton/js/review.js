"use-strict"

const ALPHAREGEX = /^[a-zA-Z ]*$/;

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
    if (employmentStatus.value == -1 || !employmentStatus.value.match("PART_TIME" || "REGULAR" || "CONTRACT" || "FREELANCE" || "INTERN")) {
        document.getElementById("employmentStatusLabel").style.color="red";
        return false;
    }
    document.getElementById("employmentStatusLabel").style.color="black";
    return true;
}
const validateCurrentJob = () => {

}
const validateJobEndingYear = () => {}
const validateYearsEmployed = () => {}

