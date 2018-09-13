<?php
include "php/config.php" ;
$query = "SELECT * FROM database_store";
	$result = $conn->query($query);
	while ($row = $result->fetch_assoc()) {
			$arryItem["id"] = $row["id"];
			$arryItem["name"] = $row["name"];
			$arryItem["address"] = $row["address"];
			$arryItem["phone"] = $row["phone"];
			$arryItem["time"] = $row["time"];
			$arryItem["product"] = $row["product"];
			$arryItem["point"] = $row["latitude"].",".$row["longitude"];
			$arryItem["image"] = $row["image"];
			$arrRows[] = $arryItem;
	}
	
	header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    echo  json_encode($arrRows);; 

?>