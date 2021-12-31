<?php
class PriceList {
  // DB stuff
  private $conn;
  private $table = "PriceList";

  // PriceList Properties
  public $id;
  public $orderNum;
  public $name;
  public $price;

  // Constructor with DB
  public function __construct($db){
    $this->conn = $db;
  }

  // Get PriceList
  public function read(){
    // Create query
    $query = "SELECT id, name, price, orderNum FROM $this->table ORDER BY orderNum";
    // Prepare query
    $stmt = $this->conn->prepare($query);
    // Execute query
    $stmt->execute();

    return $stmt;
  }

  // Get PriceList
  public function read_single(){
    // Create query
    $query = "SELECT id, name, price, orderNum FROM $this->table WHERE ? ORDER BY orderNum LIMIT 0,1";
    // Prepare query
    $stmt = $this->conn->prepare($query);
    // Bind ID
    $stmt->bindParam(1, $this->id);
    // Execute query
    $stmt->execute();

    return $stmt;
  }
}