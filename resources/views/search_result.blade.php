<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <style>
        body{
            background-color: #f2f2f2;
        }
        table, tr, th {
            border: 1px solid black;
        }
        .table-title{
            background-color: yellow;
        }
        #count-th{
            display: flex;
            flex-direction: row;
        }
        .btn{background-color: lightgreen;}
        .btn:hover{background: green; }
    </style>
</head>
<body>
    
    <h2>Search Result</h2>

    <form method="get" action="/order-placed">
        <table>
            <tr>
                <th class="table-title">Book ID</th>
                <th class="table-title">Title</th>
                <th class="table-title">Author</th>
                <th class="table-title">Price SEK</th>
                <th class="table-title">Order</th>

            </tr>

            @foreach ($books as $book)
            <tr>
                <th>{{$book['book_id']}}</th>
                <th>{{$book['title']}}</th>
                <th>{{$book['author']}}</th>
                <th>{{$book['price']}}</th>
                <th>
                <input type="radio" name="orderd-book" value="{{$book['book_id']}}" checked>
                </th>
            </tr>
            @endforeach
                
        </table> 
        <input class="btn" type="submit" value="     Order    ">
    </form>
    


    
    <form method="get" action="/"><br>
        <input type="submit" value="Main Menu">
    </form>

</body>
</html>