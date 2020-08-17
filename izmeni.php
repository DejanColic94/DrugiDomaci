<?php
	include "konekcija.php";

	switch($_REQUEST ['columnId']) {
		case 1:
			$sql = "UPDATE epizode SET naziv ='". $_REQUEST['value'] ."' WHERE idepizode=". $_REQUEST['id'];
			break;
		case 2:
			$sql = "UPDATE epizode SET duzina ='". $_REQUEST['value'] ."' WHERE idepizode=". $_REQUEST['id'];
			break;
		case 3:
			$sql = "UPDATE epizode SET sezona ='". $_REQUEST['value'] ."' WHERE idepizode=". $_REQUEST['id'];
			break;
		case 4:
			$sql = "UPDATE epizode SET tipepizode ='". $_REQUEST['value'] ."' WHERE idepizode=". $_REQUEST['id'];
			break;
	}

	if($mysqli->query($sql) === TRUE) {
	    echo $_REQUEST["value"];
	}
	else {
	    echo "Greška!";
	}

	$mysqli->close();
?>
