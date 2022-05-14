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

    include_once ('conn.php') ;

    //check if there is or not a search bar
    $search_key = isset($_POST['search_key'])?$_POST['search_key']:'';

    if ($search_key == NULL)
    {
        echo"<script>alert('Please key in your search key first!');</script>";
    }
    else{
        //search the databases listAuthors and listBook
        $sql = "SELECT* FROM `author`, `book` WHERE `book`.id_author = `author`.id_author AND
            (`book`.title LIKE '%" .$search_key. "%' OR 
            `author`.first_name LIKE '%". $search_key. "%' OR 
            `author`.last_name LIKE '%". $search_key. "%')
            ORDER BY id_book";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) <=0 ){
            echo"<script>alert('No Result !');</script>";
        }
        else {

            //build the header of the table
            echo "<table style='text-align:center' width='90%'>" ; 
            echo " <tr bgcolor='#F0F8FF'>
                <th>title </th>
                <th>Author  </th>
                <th>Summary </th>
                <th>Genre </th>
                <th>Date of publication</th>
                <th>Publishing House </th>
                <th>Nb of pages </th>
                <th>Language </th>
                <th>Cover </th>
            </tr>" ;  
            
            //read from database and put into the table
            while($row = mysqli_fetch_array($result))
            {

                echo "<tr>" ; 
                // display with a table 
                echo "<th>".$row ['title']."</th>" ; 
                echo "<th>".$row ['first_name']. " " .$row ['last_name']."</th>" ; 
                echo "<th>".$row ['summary']. "</th>" ; 
                echo "<th>".$row ['genre']."</th>" ; 
                echo "<th>".$row ['publication_date']. "</th>" ;
                echo "<th>".$row ['publishing_house']."</th>" ; 
                echo "<th>".$row ['nb_pages']. "</th>" ;
                echo "<th>".$row ['language_book']."</th>" ;        
                echo "<th>  <img src='".$row ['cover']. "' alt='image_book'> </th>" ; 
                echo "</tr>" ; 
            }
            echo"</table>";
        }
    }

?>
