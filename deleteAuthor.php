<?php
    include_once ('conn.php') ;

    // default = GET 
    $id = $_GET['id'] ;
    //echo ($id) ;  

    if ($id==null){
        // redirect the user 
        header('Location: listAuthors.php') ; 
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
        Profile Update 
        <!--  method post -> URL hidden -->
        <br>
        <?php
            $sql_query = "SELECT * FROM author WHERE id_author = $id" ; 
            $result = mysqli_query($conn, $sql_query) ;    
    
            ?>
            
            <h3>Are you sure you want to delete <?php echo $row['first_name'].$row['last_name'] ?> ?</h3>
            <form action="process delete" method = "POST">
                <div>
                    <input type="radio" id="yes" name="q" value="yes">
                    <label for="yes">Yes</label><br>
                    <input type="radio" id="no" name="q" value="no">
                    <label for="no">No</label><br>
                </div>
                <div>
                    <input type="submit" value="submit"/>
                </div>
            </form>

            <?php
                
                 if (isset ($_POST['q'])){   
                    $q=$_POST['q'] ;
                        if ($q=="yes"){
                            echo ("Deleting the author ");
                            header('Location: listAuthors.php.php') ; 

                           $sql_update = "DELETE `author` WHERE `id`='$id'" ; 
                                 
                            // execute the sql query 
                            if (mysqli_query($conn, $sql_update)){
                                echo ("record has been sucessfully deleted ! ") ; 
                                header('Location: listBook.php') ; 
                                // deleting too books associated ? 
                            }
                            else {
                                echo ("error in deleting the record ") ; 
                            }
                    }
                    else{ 
                        // do alert 
                        echo("Not deleting the book") ;                            
                        header('Location: listBook.php') ; 
                    }
                }
                else{ 
                    echo ("You didn't answer the question") ;
                }

			?>
            
            
        
    </body>
</html>
