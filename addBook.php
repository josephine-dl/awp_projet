<?php
    
    include_once ('conn.php') ;

        if (isset($_POST['add'])){
            echo ("add button has been clicked") ; 
            $title = $_POST['title'] ; 
            $summary = $_POST['summary'] ;
            $genre = $_POST['genre'] ;
            $date = $_POST['publication_date'] ;
            $house = $_POST['publishing_house'] ; 
            $pages = $_POST['nb_pages'] ;
            $language = $_POST['language_book'] ;
            $file = $_POST['file'] ;
            $cover = $_POST['cover'] ; 

    
            $sql_update = "INSERT INTO `book`(`publishing_house`, 
            `nb_pages`, `cover`, `summary`, `genre`, `publication_date`, 
            `language_book`, `file`, `title`) VALUES 
            ('$house','$pages','$cover','$summary','$genre',
            '$date','$language','$file','$title')" ; 
             
            // execute the sql query 
            if (mysqli_query($conn, $sql_update)){
                echo ("record has been sucessfully updated ! ") ; 
                header('Location: listBook.php') ; 
            }
            else {
                echo ("error in updating the record ") ; 
            }
        }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Book</title>
    </head>
    <body>

        
        <br>
        <form action="" method="post" name="frmAdd">

            Title <input type="text" value="" name="title"> <br>
            Summary <input type="text" value="" name="summary"> <br>
            Genre <input type="text" value="" name="genre"> <br>
            Number of pages <input type="number" value="" name="pages"> <br>
            Date of publication <input type="date" value="" name="date"> <br>
            Publishing House<input type="text" value="" name="house"> <br>
            Language <input type="text" value="" name="language"> <br>
            Cover <input type="file" value="" name="cover"> <br>
            File <input type="file" value="" name="file"> <br>
            <input type="submit" value="Update Profile" name="add">

        </form>
        
    </body>
</html>