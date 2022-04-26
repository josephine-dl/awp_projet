
// list links associating author and books 
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

        if (isset($_POST['add'])){
            echo ("add button has been clicked") ; 
            $fname = $_POST['fname'] ; 
            $lname = $_POST['lname'] ;
            $descr = $_POST['descr'] ;
            $pic = $_POST['pic'] ;

            $sql_update = "INSERT INTO `auhtor`(`first_name`, 
            `last_name`, `description`, `picture`) VALUES 
            ('$fname','$lname','$descr','$pic')" ; 
             
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
        Author added 
        <!--  method post -> URL hidden -->
        <br>
        <form action="" method="post" name="frmAdd">

            Author First Name <input type="text" value="" name="fname"> <br>
            Author Last Name <input type="text" value="" name="lname"> <br>
            Descritpion author <input type="text" value="" name="descr"> <br>
            Descritpion author <input type="image" value="" name="pic"> <br>
            <input type="submit" value="Update Profile" name="add">

        </form>
        
    </body>
</html>