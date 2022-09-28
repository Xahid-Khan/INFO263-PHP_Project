
<?php

try {
    $open_review_s_db = new PDO("sqlite:open_review_s_sqlite.db");
    $open_review_s_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
}

if (isset($_POST["submit_search"])) {

	$qurry = $_POST["search"];
	$sql = $open_review_s_db->prepare("SELECT * FROM Employers WHERE name = '$qurry'");

	$sql->setFetchMode(PDO::FETCH_OBJ);
	$sql->execute();

	if($row = $sql->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>Name</th>
				<th>Description</th>
			</tr>
			<tr>
				<td><?php echo $row->Name; ?></td>
				<td><?php echo $row->Description;?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}



}