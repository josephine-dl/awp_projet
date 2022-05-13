<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SearchPage</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>Search bar</h2>
        <h2>With result</h2>
        <form class="d-flex" action="searchbar.php" method="post" >
            <input class="form-control me-2" type="search" name="search_key" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit" value="Search">Search</button>
            </form>
    </body>

</html>
        
<?php

include "conn.php";

//check if there is or not a search bar
$search_key = isset($_POST['search_key'])?
$_POST['search_key']:'';

if ($search_key == NULL)
{
    echo"<script>alert('Please key in your search key first!');</script>";
}
else
{
    //search the databases listAuthors and listBook
    $sql="SELECT* FROM listAuthors, listBook WHERE listAuthors.Authors_name  OR listBook.Book_name LIKE '%". 
    $search_key. "%'";
    $result1 = mysqli_query($listAuthors, $sql);
    $result2 = mysqli_query($listBook, $sql);

    if (mysqli_num_rows($result1) <=0 )
    {
        echo"<script>alert('No Result for the Authors!');</script>";
    }
    else if (mysqli_num_rows($result1) > 0 )
    {
        //build the header of the table
        echo"<table width='90%'>";
        echo"<tr bgcolor='#F0F8FF'>";
        echo"<td>First Name</td>";
        echo"<td>Last Name</td>";
        echo"<td>Description</td>";
        echo"</tr>";

        //read from database and put into the table
        while($rows = mysqli_fetch_array($result1))
        {
            echo"<tr>";
            echo"<td>".$rows['first_name']."</td>";
            echo"<td>".$rows['last_name']."</td>";
            echo"<td>".$rows['description']."</td>";
            echo"</tr>";
        }
        echo"</table>";
    }

    if (mysqli_num_rows($result2) <=0)
    {
        echo"<script>alert('No Result for the Books!');</script>";
    }
    else if (mysqli_num_rows($result2) > 0 )
    {
        //build the header of the table
        echo"<table width='90%'>";
        echo"<tr bgcolor='#F0F8FF'>";
        echo"<td>title</td>";
        echo"<td>Author</td>";
        echo"<td>Summary</td>";
        echo"<td>Number of pages</td>";
        echo"<td>Language</td>";
        echo"</tr>";

        //read from database and put into the table
        while($rows = mysqli_fetch_array($result1))
        {
            echo"<tr>";
            echo"<td>".$rows['title']."</td>";
            echo"<td>".$rows['first_name']."</td>";
            echo"<td>".$rows['summary']."</td>";
            echo"<td>".$rows['nb_pages']."</td>";
            echo"<td>".$rows['language_book']."</td>";
            echo"</tr>";
        }
        echo"</table>";
    }
}



?>