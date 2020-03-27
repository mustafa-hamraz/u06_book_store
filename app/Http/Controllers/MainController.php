<?php

namespace App\Http\Controllers;
use App\Models\Model;
use Request;

class MainController extends Controller
{
    public function mainMenu()
    {
        return view("main_menu");
    }

    public function list_all_books()
    {
        $model = new Model();
        $books = $model->list_all_books_db();

        $properties = ["books" => $books];
        return view("listAll", $properties);
    }

    public function order_placed()
    {
        $order = $_GET['orderd-book'];
        
        $model = new Model();
        $books = $model->add_purchase($order);

        return view("order_placed" );
    }

    public function purchases()
    {
        $model = new Model();
        $books = $model->list_all_purchases();

        $properties = ["books" => $books];
        return view("purchases", $properties);
    }

    public function search()
    {
        return view("search");
    }

    public function search_result()
    {
        $searchTitle = $_GET['title-search'];
        $searchAuthor = $_GET['author-search'];

        $model = new Model();
        $searchResult = $model->search_books($searchTitle, $searchAuthor);

        if(isset($searchResult))
        {
            $properties = ["books" => $searchResult];
            return view("search_result", $properties);
        }else
        {
            return view("search");
        }
        
    }


}