<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>List of books</title>
    </head>
    <body>

        
    </body>
</html>

<?php 

    include_once ('conn.php') ; 

    $sql_query = "SELECT * FROM book, author 
    WHERE book.id_author=author.id_author ORDER BY id_book" ; 
    $result = mysqli_query($conn, $sql_query) ;
    
    // fetch_assoc -> with name or index *
    // we can retrive the value of a particular column
    echo "<table border=1>" ; 
    echo " <tr>
                <th>Action </th> 
                <th>ID </th>
                <th>title </th>
                <th>Author  </th>
                <th>Summary </th>
                <th>Genre </th>
                <th>Date of publication</th>
                <th>Publishing House </th>
                <th>Nb of pages </th>
                <th>Language </th>
                <th>Cover </th>
                <th>File </th>
            </tr>
        " ;  

    while ($row =mysqli_fetch_assoc($result) ){
        echo "<tr>" ; 
        // display with a table 
        echo "<td> 
            <a href='editBook.php?id=".$row['id_book']."'>Edit</a> 
            | 
            <a href ='deleteBook.php?id=".$row['id_book']."'>Delete</a> 
        </td>" ; 
        echo "<td>".$row ['id_book']."</td>" ; 
        echo "<td>".$row ['title']."</td>" ; 
        echo "<th>".$row ['first_name']. " " .$row ['last_name']."</th>" ; 
        echo "<th>".$row ['summary']. "</th>" ; 
        echo "<th>".$row ['genre']."</th>" ; 
        echo "<th>".$row ['publication_date']. "</th>" ;
        echo "<th>".$row ['publishing_house']."</th>" ; 
        echo "<th>".$row ['nb_pages']. "</th>" ;
        echo "<th>".$row ['language_book']."</th>" ; 
        echo "<th>".$row ['file']. "</th>" ;       
        echo "<td>  <img src='".$row ['cover']. "' alt='image_book'> </td>" ; 
        echo "</tr>" ; 
       
    }

    mysqli_close($conn) ; 


?> 
