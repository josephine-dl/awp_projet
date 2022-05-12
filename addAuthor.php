<?php
    
    include_once ('conn.php') ;

        if (isset($_POST['add'])){
            echo ("add button has been clicked") ; 
            $fname = $_POST['fname'] ; 
            $lname = $_POST['lname'] ;
            $descr = $_POST['descr'] ;
            $pic = $_POST['pic'] ;
            $name_pic = $_POST['name_pic'] ;
            //echo ($name_pic) ;
            $npic = "../author_cover/".$name_pic ; 
            echo ($npic) ;

            $sql_update = "INSERT INTO `author`(`first_name`, 
            `last_name`, `description`, `picture`) VALUES 
            ('$fname','$lname','$descr','$npic')" ; 
             
            // execute the sql query 
            if (mysqli_query($conn, $sql_update)){
                echo ("record has been sucessfully added ! ") ; 
                header('Location: listAuthors.php') ; 
            }
            else {
                echo ("error in adding the record ") ; 
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
        
        <h1>Add an Author</h1>
        <br>
        <form action="" method="post" name="frmAdd">

            Author First Name <input type="text" value="" name="fname"> <br>
            Author Last Name <input type="text" value="" name="lname"> <br>
            Descritpion author <input type="text" value="" name="descr"> <br>
            Image of author <input type="file" value="" name="pic"> <br>
            <p>
                Write the name of image with the first name of the 
                author follow by it's last name
                <br>
                example : william_shakespeare.jpg 
            </p>
            <br>
            Name of image <input type="text" value="" name="name_pic"> <br>
            <input type="submit" value="add author" name="add">

        </form>
        
    </body>
</html>