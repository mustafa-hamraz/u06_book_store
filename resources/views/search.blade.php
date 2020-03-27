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
  <h2> Search Result </h2>

  <form method="get" action="/search-result">
    <table>
      <tr>
        <th class="table-title">Book Title</th>
        <th class="table-title">Book Author</th>
      </tr>
      <tr>
        <th><input type="text" name="title-search"></th>
        <th><input type="text" name="author-search"></th>
      </tr>
    </table>
    <input type="submit" value="Search">
  </form>

  <form method="get" action="/">
    <input type="submit" value="Main Menu">
  </form>
</body>
</html>