<?php
// Headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include_once "../../config/Database.php";
include_once "../../models/PriceList.php";

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate PriceList object
$priceList = new PriceList($db);

// PriceList post query
$result = $priceList->read();
// Get row count
$num = $result->rowCount();

// Check if any PriceList
if ($num > 0) {
  // PriceList array
  $priceList_arr = array();
  $priceList_arr['data'] = array();

  while($row = $result->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    $priceList_item = array(
      'id' => $id,
      'orderNum' => $orderNum,
      'name' => $name,
      'price' => $price,
    );

    // Push to "data"
    array_push($priceList_arr['data'], $priceList_item);

    // Turn to JSON & output
    echo json_encode($priceList_arr);
  }
} else {
  echo json_encode(
    array('message' => 'No priceList Found')
  );
}
