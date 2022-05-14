<?php
    include_once ('conn.php') ;

    // default = GET 
    $id = $_GET['id'] ;
    //echo ($id) ;  

    if ($id==null){
        // redirect the user 
        header('Location: listBook.php') ; 
    }

    if (isset ($_POST['delete'])){   
                        $q=$_POST['q'] ;
                        if ($q=="yes"){
                            echo ("Deleting the book ");

                           $sql_update = "DELETE FROM `book` WHERE `id_book` = '$id'" ; 
                                 
                            // execute the sql query 
                            if (mysqli_query($conn, $sql_update)){
                                //echo ("record has been sucessfully deleted ! ") ; 
                                header('Location: listBook.php') ; 
                            }
                            else {
                                echo "Error in deleting the record" . mysqli_connect_error();
                                header('Location: listBook.php') ;
                            }
                    }
                    else{ 
                        // do alert 
                        echo("Not deleting the book") ;                            
                        header('Location: listBook.php') ; 
                    }
                }
                else{ 
                    //echo ("You didn't answer the question") ;
                }

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
       
        <br>
        <?php
            $sql_query = "SELECT * FROM book WHERE id_book = '$id'" ; 
            $result = mysqli_query($conn, $sql_query) ; 
            $row =mysqli_fetch_assoc($result) ;   
        
        ?>
            
            <h3>Are you sure you want to delete <?php echo $row['title'] ?> ?</h3>
            <form action="" method = "POST">
                <div>
                    <input type="radio" id="yes" name="q" value="yes">
                    <label for="yes">Yes</label><br>
                    <input type="radio" id="no" name="q" value="no">
                    <label for="no">No</label><br>
                </div>
                <div>
                    <input type="submit" value="submit" name="delete"/>
                </div>
            </form>
        
    </body>
</html>
