<?php
include "php/config.php" ;
$query = "SELECT id,name, latitude ,longitude FROM database_store";
	$result = $conn->query($query);
	while ($row = $result->fetch_assoc()) {
			$arryItem["LocationID"] = $row["id"];
			$arryItem["Latitude"] = $row["latitude"];
			$arryItem["Longitude"] = $row["longitude"];
			$arryItem["LocationName"] = $row["name"];
			$arrRows[] = $arryItem;
	}
	$listteacher = json_encode($arrRows);
    echo  $listteacher; 

?>