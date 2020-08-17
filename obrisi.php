<?php
	include "konekcija.php";

	if(isset($_REQUEST['id'])) {
		$sql = "DELETE FROM epizode WHERE idepizode =". $_REQUEST['id'];

		if($mysqli->query($sql) === TRUE) {
		    echo "ok";
		}
		else {
		    echo "Greška!";
		}
		$mysqli->close();
	}
?>
