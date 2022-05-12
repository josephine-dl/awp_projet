
<?php
    // list links associating author and books     
    include_once ('conn.php') ;

    // default = GET 
    $id = $_GET['id'] ;
    //echo ($id) ;  

    if ($id==null){
        // redirect the user 
        header('Location: listBook.php') ; 
    }
    else { 

        if (isset($_POST['add'])){
            echo ("add button has been clicked") ; 
            $id_author = $_POST['id_author'] ; 

            $sql_update = "UPDATE `book` SET `id_author`='$id_author'
                WHERE `id_book`='$id'" ; 
            // execute the sql query 
            if (mysqli_query($conn, $sql_update)){
                echo ("record has been sucessfully updated ! ") ; 
                header('Location: listBook.php') ; 
            }
            else {
                echo ("error in updating the record ") ; 
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Auhtor</title>
    </head>
    <body>

        Link with author  
        <br>
        <form action="" method="post" name="frmAdd">

            Id author<input type="number" value="" name="id_author" min="0"> <br>
            <input type="submit" value="Update Profile" name="add">

        </form>
        
    </body>
</html>