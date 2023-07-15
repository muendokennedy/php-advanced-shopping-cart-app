<?php 

class CreateDb
{
  public $servername;
  public $username;
  public $password;
  public $dbname;
  public $tablename;
  public $conn;


  // Constructor
  public function __construct($dbname = 'Newdb', $tablename = 'productdb', $servername = 'localhost', $username = 'root', $password = '')
  {
     $this->dbname = $dbname;
     $this->tablename =$tablename;
     $this->servername = $servername;
     $this->username = $username;
     $this->password = $password;

     // create connection

     $this->conn = new mysqli($servername, $username, $password);

     // check connection
     if(!$this->conn){
      die('Connection failed' . $this->conn->connect_error);
     }

     // Create a new database

     $sql = "CREATE DATABASE IF NOT EXISTS $dbname;";

     // execute query 
     if($this->conn->query($sql) === true){

      $this->conn = new mysqli($servername, $username, $password, $dbname);

      // Create a table

      $sql = "CREATE TABLE IF NOT EXISTS $tablename(
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        product_name VARCHAR(255) NOT NULL,
        product_price FLOAT NOT NULL,
        product_image VARCHAR(255) NOT NULL
      );";

      if(!$this->conn->query($sql) === true){
        echo "Error creating table " . $this->conn->error;
      }
      
     }
     
  }

  // Get products from the table 
  public function getData()
  {
    $sql = "SELECT * FROM $this->tablename";

    $result = $this->conn->query($sql);

    if($result->num_rows > 0){
      return $result;
    }
  }
}