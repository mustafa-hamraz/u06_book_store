<?php
namespace App\Models;

class Model
{
    private function login()
    {
      $servername = "localhost";
      $dbName = "rental";
      $username = "homestead";
      $password = "secret";
  
      $connection = new \PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
      if(!$connection) die;
      return $connection;
    }

    public function list_all_books()
    {
        $conn = $this->login();
        $sql = 'SELECT * FROM books;';
    
        $statement = $conn->prepare($sql);
        $result = $statement->execute();
        $books = $statement->fetchAll();
        return $books;
    }

    public function search_books()
    {}

    public function add_purchase($bookID, $amount)
    {
        $conn = $this->login();
        $sql ='INSERT INTO purchases(book_id, quantity)
        VALUES("'.$bookID.'", "'.$amount.'");';
        $conn->exec($sql);
    }

    public function list_all_purchases()
    {
        $conn = $this->login();
        $sql = 'SELECT * FROM purchases;';
    
        $statement = $conn->prepare($sql);
        $result = $statement->execute();
        $books = $statement->fetchAll();
        return $books;
    }
    
}