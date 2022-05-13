<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>List of auhtors</title>
    </head>
    <body>
        <a href="welcome.php">HomePage</a>
        <h1>List of auhtors </h1>
        <a href="addAuthor.php">Add an author </a>
        <br>
        <a href="listBook.php">View the list of books </a>
        
    </body>
</html>

<?php 

    include_once ('conn.php') ; 

    $sql_query = "SELECT * FROM author ORDER BY id_author" ; 
    $result = mysqli_query($conn, $sql_query) ;
    
    // fetch_assoc -> with name or index *
    // we can retrive the value of a particular column
    echo "<table style='text-align:center'>" ; 
    echo " <tr bgcolor='#F0F8FF'>
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
            <a href='editAuthor.php?id=".$row['id_author']."'>Edit</a> 
            | 
            <a href ='deleteAuthor.php?id=".$row['id_author']."'>Delete</a> 
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
