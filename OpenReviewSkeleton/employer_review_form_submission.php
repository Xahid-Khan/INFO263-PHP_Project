<?php

if (isset($_POST['employer'])) {
    if ($_POST['employer'] == "") {
        echo 'Review not submitted: please enter your employer';
    } else {
        $employer = htmlspecialchars($_POST['employer']);
        echo "Yay your review has been submitted for $employer";
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

?>





