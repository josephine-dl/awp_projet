<?php
    
    include_once ('conn.php') ;

    // default = GET 
    $id = $_GET['id'] ;
    //echo ($id) ;  

    if ($id==null){
        // redirect the user 
        header('Location: listAuthors.php') ; 
    }
    else { 

        if (isset($_POST['update'])){
            echo ("update button has been clicked") ; 
            $fname = $_POST['fname'] ; 
            $lname = $_POST['lname'] ;
            $descr = $_POST['descr'] ;
            $pic = $_POST['pic'] ;

            // replace the ' with ’
            $descr =str_replace("'","’", $descr);

            $sql_update = "UPDATE `author` SET `first_name`='$fname',
                `last_name`='$lname',`description`='$descr'
                WHERE `id_author`='$id'" ; 
             
            // execute the sql query 
            if (mysqli_query($conn, $sql_update)){
                echo ("record has been sucessfully updated ! ") ; 
                header('Location: listAuthors.php') ; 
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
        <title>Edit author</title>
    </head>
    <body>
        Update Author

        <br>
        <form action="" method="post" name="frmUpdate">

            <?php
            $sql_query = "SELECT * FROM author WHERE id_author = $id" ; 
            $result = mysqli_query($conn, $sql_query) ;    
            while ($row =mysqli_fetch_assoc($result) ){
                //echo $row['first_name'] ; 
    
            ?>

            Author First Name <input type="text" value="<?php echo $row['first_name'] ?>" name="fname"> <br>
            Author Last Name <input type="text" value="<?php echo $row['last_name'] ?>" name="lname"> <br>
            Biography of author <textarea name="descr" required="required"><?php echo $row['description'] ?></textarea> <br>
            Name of image <input type="text" value="<?php echo $row['picture'] ?>" name="pic"> <br>
            <input type="submit" value="Update Profile" name="update">

            <?php
                    } 
                }
            ?> 
        </form>
        
    </body>
</html>