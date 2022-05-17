<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>List of books</title>
    </head>
    <body>
        <a href="welcome.php">HomePage</a>
        <h1>List of books </h1>
        <a href="addBook.php">Add a book </a>
        <br>
        <a href="listAuthors.php">View the list of authors </a>
        <br>
        <a href="addTestimonie.php?id=2">Add comment </a>
        <script src='insertDownload.js'></script> 
    </body>
</html>


<?php 

    include_once ('conn.php') ; 

    session_start();
    error_reporting(0);
    $session = $_SESSION['username'];

    $sql_query = "SELECT * FROM book, author 
    WHERE book.id_author = author.id_author ORDER BY id_book" ; 
    $result = mysqli_query($conn, $sql_query) ;
    
    // fetch_assoc -> with name or index *
    // we can retrive the value of a particular column
    echo "<table style='text-align:center'>" ; 
    echo " <tr bgcolor='#F0F8FF'>
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
            |
            <a href='linkAB.php?id=".$row['id_book']."'>Link with Author</a> 
        </td>" ; 
        echo "<th>".$row ['id_book']."</th>" ; 
        echo "<th>".$row ['title']."</th>" ; 
        echo "<th>".$row ['first_name']. " " .$row ['last_name']."</th>" ; 
        echo "<th>".$row ['summary']. "</th>" ; 
        echo "<th>".$row ['genre']."</th>" ; 
        echo "<th>".$row ['publication_date']. "</th>" ;
        echo "<th>".$row ['publishing_house']."</th>" ; 
        echo "<th>".$row ['nb_pages']. "</th>" ;
        echo "<th>".$row ['language_book']."</th>" ;        
        echo "<th>  <img src='".$row ['cover']. "' alt='image_book'> </th>" ; 
        //echo "<th>".$row ['file']. "</th>" ;
        echo "<th> <a href='".$row ['file']. "' download>
                    <img src='download.svg' alt='download logo'>
                </a>" ; 
        echo "</tr>" ; 
        //<button name='add_dwl'></button>
        
    }
    echo "</table>" ;

    /* download -> not working 
    if(isset($_POST['add_dwl'])){
        echo ("record has been sucessfully added ! ") ; 
    } */

    mysqli_close($conn) ; 
?> 

        