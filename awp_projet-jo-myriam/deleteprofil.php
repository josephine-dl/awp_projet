<?php
    include_once('config.php');

    session_start();

    $session = $_SESSION['username'];

    //default = GET
    if($session==null){
        //redirect user
        header('Location: page_accueil.php');
    }else{
        //we place your code here... to update the record
        if(isset($_POST['delete'])){
//          
            $sql_update = "DELETE FROM `users` WHERE `username` = '$session'";
        //EXECUTE YOUR SQL query`
            if(mysqli_query($conn,$sql_update)){
                echo "Record has been successfully deleted!";
                header("Location: page_accueil.php");
            }else{
                echo "Error in deleting the record" . mysqli_connect_error();
            }
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
    <div class="container">
        <h2><strong>Delete User Profile</strong></h2>
        <form action="" method="post" name="frmUpdate" class="delete-profil">
            <?php
            $sql_query = "SELECT * FROM users WHERE username = '$session' ";
            $result = mysqli_query($conn,$sql_query);
            while($row = mysqli_fetch_assoc($result)){ 
                
            
            ?>

            <div class="inputg">
                Username <input type="text" disabled value="<?php echo $row['username'] ?>" name="uname"> <br>
            </div>

            <div class="inputg">
                Email Address <input type="text" disabled value="<?php echo $row['email'] ?>" name="email"> <br>
            </div>
            <div class="inputg">
                <input type="submit" name="delete" value="Delete Profile" class="btn">
            </div>
                    <div class="disco"><p>You will be disconnected after any modification.</p></div>
            <?php        
            }
        }    
        ?>
        </form>
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
}

.container {
    width: 400px;
    min-height: 400px;
    background: #FFF;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
}

.container h2 {
    color: #111;
    font-weight: 500;
    font-size: 2rem;
    text-align: center;
    margin-bottom: 20px;
    display: block;
    text-transform: capitalize;
}

.container .delete-profil .inputg{
    width: 100%;
    height: 50px;
    margin-bottom: 40px;
    margin-top:40px;
}
.container .delete-profil.inputg p{
    padding-bottom:15px;

}

.container .delete-profil .inputg input {
    width: 100%;
    height: 100%;
    border: 2px solid #e7e7e7;
    padding-top:25px;
    padding: 15px 20px;
    font-size: 1rem;
    border-radius: 30px;
    background: transparent;
    outline: none;
    transition: .3s;
}

.container .disco p{
    color: red;
}


.container .delete-profil .inputg input:focus,
.container .delete-profil .inputg input:valid {
    border-color: #a29bfe;
}

.container .delete-profil .inputg .btn {
    display: block;
    width: 100%;
    padding: 15px 20px;
    text-align: center;
    border: none;
    background: #2F4F4F;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #FFF;
    cursor: pointer;
    transition: .3s;
}

.container .delete-profil .inputg .btn:hover {
    transform: translateY(-5px);
    background: #5a9696;
} 

@media (max-width: 430px) {
    .container {
        width: 300px;
    }
}
</style>