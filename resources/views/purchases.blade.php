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
            background-color: #80dfff;
        }
        #count-th{
            display: flex;
            flex-direction: row;
        }
    </style>
</head>
<body>

    <h2> Purchased Books </h2>

    <table>
        <tr>
            <th class="table-title">Book ID</th>
            <th class="table-title">Title</th>
            <th class="table-title">Author</th>
            <th class="table-title">Price SEK</th>
            <th class="table-title">Orderd Time</th>

        </tr>

        @foreach ($books as $book)
        <tr>
            <th>{{$book['book_id']}}</th>
            <th>{{$book['title']}}</th>
            <th>{{$book['author']}}</th>
            <th>{{$book['price']}}</th>
            <th>{{$book['purchased_time']}}</th>
        </tr>
        @endforeach
                
    </table> 

    <form method="get" action="/">
        <input type="submit" value="Main Menu">
    </form>
</body>
</html>