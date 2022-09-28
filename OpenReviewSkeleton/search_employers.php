
<?php

try {
    $open_review_s_db = new PDO("sqlite:open_review_s_sqlite.db");
    $open_review_s_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
}

if (isset($_POST["query"])) {

	//$results = array();

	$query = preg_replace('/[^A-Za-z0-9/- ]/', '', $_POST["query"]);

	$sql = $open_review_s_db->prepare("SELECT * FROM employer WHERE company_name LIKE '%" . $query . "%' LIMIT 10");

	$result = $open_review_s_db->execute($sql);

	$replace_string = "<b>" . $query . "</b>";

	foreach($result as $row) {

		$data[] = array(

			'post_title' => str_ireplace($query, $replace_string, $row["company_name"])

		);

	}


	echo json_encode($data);

}

?>