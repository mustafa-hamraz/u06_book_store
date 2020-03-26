<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Book Store</title>

        <!-- Styles -->
        <style>
            body{
                background-color: #66ccff;
            }
            table, th, td {
            padding-right: 5px;
            }
        </style>
    </head>

    <body>
        <h2> Book Store </h2>
        <table> 
            <th>
                <form method="post" action="/search">
                    <input type="submit" value="Search">
                </form>
            </th>
            <th>
                <form method="post" action="/listAllBooks">
                    <input type="submit" value="List All Books">
                </form>
            </th>
            <th>
                <form method="post" action="/purchases">
                    <input type="submit" value="Purchases">
                </form>
            </th>
        </table>
    </body>
</html>
