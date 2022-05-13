<?php
    
    include_once ('conn.php') ;

    session_start();
    error_reporting(0);

    $session = $_SESSION['username'];
    $id_book = $_GET['id'] ;

    //default = GET
    if($session==null || $id_book==null){
        //redirect user
        header('Location: page_accueil.php');
    }else{
        //we place your code here... to update the record
        
        if(isset($_POST['add'])){
            
            $sql = "SELECT * FROM `users` where `username`='$session'";
            //EXECUTE YOUR SQL query`
            $result = mysqli_query($conn, $sql) ;
            $row =mysqli_fetch_assoc($result) ; 
            $id_user = $row['id'] ; 
            

            $comment = $_POST['comment'] ; 
            
            $sql_add = "INSERT INTO `tesitimonie`(`comment`, `id_user`, `id_book`) 
            VALUES ('$comment','$id_user','$id_book')" ; 
             
            // execute the sql query 
            if (mysqli_query($conn, $sql_add)){
                echo "<script>alert('successfully data added!')</script>" ; 
                header('Location: listBook.php') ; 
            }
            else {
                echo "<script>alert('data not added !'); </script>" ;
                die ("<script>window.location.href='listBook.php'; </script>") ;
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
        
        <h1>Let a review</h1>
        <br>
        <form action="" method="post" name="frmAdd">

            Write a comment <input type="text" value="" name="comment"> <br>
            <input type="submit" value="add a comment" name="add">

        </form>
        
    </body>
</html>