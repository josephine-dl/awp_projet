<?php 
    // mysql 
    // connect to database 
    $servername = 'localhost' ; // ou 127.0.0.1 
    $username = 'root' ; 
    $password = '' ; // à remplir 
    $database = 'bookstore' ; // name of our bdd

    $conn = mysqli_connect($servername, $username, $password, $database) ; 
    if ($conn=== false ){
        die('error connection' . mysqli_connect_error()) ;  // display et exit  
    }
    /*else{
        echo ("<h1> Connection successful ! </h1>") ; 
    }*/

?>