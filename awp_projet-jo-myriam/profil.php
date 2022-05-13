<?php 

    include ('config.php') ; 
    
    session_start();

    error_reporting(0);

    $session = $_SESSION['username'];


    $sql_query = "SELECT * FROM users WHERE username= '$session' " ;

    $result = mysqli_query($conn, $sql_query) ;

    $row =mysqli_fetch_assoc($result);

    mysqli_close($conn) ;
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profil</title>
    </head>
    <body>
         
        <div class="container">
            <h1 class="profil-text">Profil </h1>
            
            <div class="all-group">
                <div class="group">
                    <p><?php echo "<table border=1>" ; ?></p>
                    <p><?php echo " <tr>
                        <td>Update </td>
                        <td>Username </td>
                        <td>Email  </td>
                        </tr>
                        ";?>
                    </p>
                </div>
                <div class="group">
                    <p><?php echo "<td> 
                    <a href='editprofil.php?id=".$row['Update']."'>Edit</a> 
                    | 
                    <a href ='deleteprofil.php?id=".$row['Update']."'>Delete</a> 
                    </td>" ; ?></p>
                </div>
                
                <div class="group">
                    <p><?php echo "<td>".$row['username']. "</td>" ; ?></p>
                </div>

                <div class="group">
                <p><?php echo "<td>".$row['email']. "</td>" ; ?></p>
                </div>
            </div>

        </div>

    </body>
</html>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(bg.jpg);
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow:auto;
}

.container{
    height: auto;
    width: auto;
    margin: 20px auto;
    padding:20px;
    background-color: #fff;
    border: 1px solid #fff;
}

.all-group {
    padding: 50px;
} 

.container .profil-text {
    color: #111;
    font-weight: 500;
    padding:10px;
    padding-left: 45%;
    text-transform: capitalize;
    justify-content: flex-start;
    align-items: center;
    justify-content: center;
}


.all-group table, tr, td{
    width: 100%;
    height: 50px;
    margin-bottom: 25px;
}



.all-group  .input-group table, tr, td {
    width: 100%;
    height: 100%;
    border: 2px solid #e7e7e7;
    padding: 15px 20px;
    font-size: 1rem;
    text-align: center;
    background: #FFF;
    outline: none;
    transition: .3s;
}


@media (max-width: 430px) {
    .container {
        width: 300px;
    }
}
</style>