<?php
namespace App\Models;

class Model
{
    private function login()
    {
      $servername = "localhost";
      $dbName = "bokus";
      $username = "homestead";
      $password = "secret";
  
      $connection = new \PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
      if(!$connection) die;
      return $connection;
    }

    public function list_all_books_db()
    {
        $conn = $this->login();
        $sql = 'SELECT * FROM books;';
    
        $statement = $conn->prepare($sql);
        $result = $statement->execute();
        $books = $statement->fetchAll();
        return $books;
    }
 
    public function add_purchase($bookID)
    {
        $conn = $this->login();
        $orderTime = date("Y/m/d h:i");
        $sql = 'INSERT INTO purchases(book_id, purchased_time)
        VALUES ('.$bookID.',"'.$orderTime.'");';
        $conn->exec($sql);

    }

    public function list_all_purchases()
    {
        $conn = $this->login();
        $sql = 'SELECT * FROM purchases;';
    
        $statement = $conn->prepare($sql);
        $result = $statement->execute();
        $purchases = $statement->fetchAll();

        $returnArray = [];
        foreach ($purchases as $purchase)
        {  
            $bookInfo = $this->getBook($purchase['book_id']);
            
            $book = ['book_id' => $bookInfo['book_id'],
                    'title' => $bookInfo['title'],
                    'author' => $bookInfo['author'],
                    'price' => $bookInfo['price'],
                    'purchased_time' => $purchase['purchased_time']        
            ];
            $returnArray[] = $book;
        }
        return $returnArray;
               
    }

    public function search_books($searchTitle, $searchAuthor)
    {
        $conn = $this->login();
        $sql = 'SELECT * FROM books WHERE title LIKE "%'.$searchTitle.'%" AND author like "%'.$searchAuthor.'%";';
        $statement = $conn->prepare($sql);
        $result = $statement->execute();
        $books = $statement->fetchAll();
        return $books;
    }


    private function getBook($id)
    {
        $conn = $this->login();
        $sql = 'SELECT * FROM books WHERE book_id="'.$id.'";';
        $statement = $conn->prepare($sql);
        $result = $statement->execute();
        $book= $statement->fetchAll();  
        return $book[0];
    }

}