<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>List of auhtors</title>
    </head>
    <body>

        
    </body>
</html>

<?php 

    include_once ('conn.php') ; 

    $sql_query = "SELECT * FROM author ORDER BY id_book" ; 
    $result = mysqli_query($conn, $sql_query) ;
    
    // fetch_assoc -> with name or index *
    // we can retrive the value of a particular column
    echo "<table border=1>" ; 
    echo " <tr>
                <th>Action </th> 
                <th>ID </th>
                <th>First Name </th>
                <th>Last Name</th>
                <th>Description </th>
                <th>Picture </th>
            </tr>
        " ;  

    while ($row =mysqli_fetch_assoc($result) ){
        echo "<tr>" ; 
        // display with a table 
        echo "<td> 
            <a href='editBook.php?id=".$row['id_author']."'>Edit</a> 
            | 
            <a href ='deleteBook.php?id=".$row['id_author']."'>Delete</a> 
        </td>" ; 
        echo "<td>".$row ['id_author']."</td>" ; 
        echo "<td>".$row ['first_name']."</td>" ; 
        echo "<th>".$row ['last_name']. "</th>" ; 
        echo "<th>".$row ['description']."</th>" ; 
        echo "<td>  <img src='".$row ['picture']. "' alt='image_author'> </td>" ; 
        echo "</tr>" ; 
       
    }

    mysqli_close($conn) ; 


?> 
