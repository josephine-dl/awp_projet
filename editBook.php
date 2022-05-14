<?php
    
    include_once ('conn.php') ;

    // default = GET 
    $id = $_GET['id'] ;
    //echo ($id) ;  

    if ($id==null){
        // redirect the user 
        header('Location: listBook.php') ; 
    }
    else { 

        if (isset($_POST['update'])){
            echo ("update button has been clicked") ; 
            $title = $_POST['title'] ; 
            $summary = $_POST['summary'] ;
            $genre = $_POST['genre'] ;
            $date = $_POST['date'] ;
            $house = $_POST['house'] ; 
            $pages = $_POST['pages'] ;
            $language = $_POST['language'] ;
            $file = $_POST['file'] ;
            $cover = $_POST['cover'] ;

            $sql_update = "UPDATE `book` SET `title`='$title',
                `summary`='$summary',`genre`='$genre',
                `publication_date`='$date',`publishing_house`='$house',
                `nb_pages`='$pages',`language_book`='$language', 
                `cover`='$cover',`file`='$file'
                WHERE `id_book`='$id'" ; 
             
            // execute the sql query 
            if (mysqli_query($conn, $sql_update)){
                echo "<script>alert('successfully data edited!')</script>" ; 
                header('Location: listBook.php') ; 
            }
            else {
                echo "<script>alert('data not edited !'); </script>" ;
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
        <title>Edit Book</title>
    </head>
    <body>
        Profile Update 

        <br>
        <form action="" method="post" name="frmUpdate">

            <?php
            $sql_query = "SELECT * FROM book WHERE id_book = $id" ; 
            $result = mysqli_query($conn, $sql_query) ;    
            while ($row =mysqli_fetch_assoc($result) ){
                //echo $row['first_name'] ; 
    
            ?>

            Title <input type="text" value="<?php echo $row['title'] ?>" name="title"> <br>
            Summary <input type="text" value="<?php echo $row['summary'] ?>" name="summary"> <br>
            Genre <input type="text" value="<?php echo $row['genre'] ?>" name="genre"> <br>
            Number of pages <input type="number" value="<?php echo $row['nb_pages'] ?>" name="pages"> <br>
            Date of publication <input type="date" value="<?php echo $row['publication_date'] ?>" name="date"> <br>
            Publishing House<input type="text" value="<?php echo $row['publishing_house'] ?>" name="house"> <br>
            Language <input type="text" value="<?php echo $row['language_book'] ?>" name="language"> <br>
            Cover <input type="text" value="<?php echo $row['cover'] ?>" name="cover"> <br>
            File <input type="text" value="<?php echo $row['file'] ?>" name="file"> <br>
            <input type="submit" value="Update Profile" name="update">

            <?php
                    } 
                }
            ?> 
        </form>
        
    </body>
</html>