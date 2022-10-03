<?php
    try {
        $open_review_s_db = new PDO("sqlite:open_review_s_sqlite.db");
        $open_review_s_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    try {
        if (isset($_POST['query'])) {
            $inpText = $_POST['query'] ;

            // remove characters which can cause sql injection
            $cleaned = preg_replace("/[^A-Za-z0-9 ]/", "", $inpText);

            $res = $open_review_s_db->query("SELECT * FROM employer WHERE company_name LIKE '%$cleaned%' LIMIT 5");


            if ($res) {
                foreach ($res as $row) {
                    echo '<a href="#">' . $row['company_name'] . '</option>';
                }
            } else {
                echo '<p>No Record</p>';
            }
        }

        if (isset($_POST['result_clicked'])) {

            $result = $_POST["result_clicked"];

            // this sql query doesn't seem to be right.
            // $res = $open_review_s_db->query("SELECT * from employer WHERE company_name = '%$result%'");

            echo $result;


            

        }

    } catch (PDOException $e) {
        die($e->getMessage());
    }
