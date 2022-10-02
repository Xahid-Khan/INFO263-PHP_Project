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

            $res = $open_review_s_db->query("SELECT * FROM employer WHERE company_name LIKE '%$inpText%' LIMIT 5");


            if ($res) {
                foreach ($res as $row) {
                    echo '<a>' . $row['company_name'] . '</a>';
                }
            } else {
                echo '<p>No Record</p>';
            }
        }

    } catch (PDOException $e) {
        die($e->getMessage());
    }
