<?php
    
    include_once ('conn.php') ;

        if (isset($_POST['add'])){
            echo ("add button has been clicked") ; 
            $title = $_POST['title'] ; 
            $summary = $_POST['summary'] ;
            $genre = $_POST['genre'] ;
            $date = $_POST['date'] ;
            $house = $_POST['house'] ; 
            $pages = $_POST['pages'] ;
            $language = $_POST['language'] ;
            $file = $_POST['file'] ;
            $bfile = "../author_cover/".$file ; 
            $cover = $_POST['cover'] ; 
            $bcover = "../book_cover/".$cover ; 

            // replace the ' with ’
            $summary =str_replace("'","’", $summary);
    
            $sql_update = "INSERT INTO `book`(`publishing_house`, 
            `nb_pages`, `cover`, `summary`, `genre`, `publication_date`, 
            `language_book`, `file`, `title`, `id_author`) VALUES 
            ('$house','$pages','$bcover','$summary','$genre',
            '$date','$language','$bfile','$title', '3')" ; 
             
            // execute the sql query 
            if (mysqli_query($conn, $sql_update)){
                echo "<script>alert('successfully data added!')</script>" ; 
                header('Location: listBook.php') ; 
            }
            else {
                echo "<script>alert('data not added !'); </script>" ;
                die ("<script>window.location.href='listBook.php'; </script>") ;
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
        <h1>Add an Author</h1>
        <br>
        <form action="" method="post" name="frmAdd">

            Title <input type="text" value="" name="title"> <br>
            Summary <textarea name="summary" required="required"></textarea> <br>
            Genre <input type="text" value="" name="genre"> <br>
            Number of pages <input type="number" value="" name="pages"> <br>
            Date of publication <input type="date" value="" name="date"> <br>
            Publishing House<input type="text" value="" name="house"> <br>
            Language <input type="text" value="" name="language"> <br>
            <p>
                For writing the name of the file and image, write the name of the book and 
                then the last name of the author <br>
                ex : Rome_and_Juliette_shakespeare
                <br>
            </p> 
            Cover <input type="file" value="" name="img_cover"> <br>
            Name of cover (with extension ) <input type="text" value="" name="cover" size="40"> <br>
            File <input type="file" value="" name="epub_file"> <br>
            Name of file (with extension )<input type="text" value="" name="file" size="40"> <br>
            <input type="submit" value="Add book" name="add">

        </form>
        
    </body>
</html>