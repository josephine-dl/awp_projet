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
        if(isset($_POST['update'])){
            // echo "update button has been clicked!";
            $uname = $_POST['uname'];
            $email = $_POST['email'];
            echo $uname . " " ;
            //query
            $sql_update = "UPDATE `users` SET `username`='$uname', `email`='$email'
                             WHERE `username` = '$session'";
        //EXECUTE YOUR SQL query`
            if(mysqli_query($conn,$sql_update)){
                echo "Record has been successfully updated!";
                header("Location: logout.php");
            }else{
                echo "Error in updating the record" . mysqli_connect_error();
            }
        }
        
        
        
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bookstore</title>

        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <script src="https://kit.fontawesome.com/6c4179a31c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        
        <link rel="icon" type="image/svg" sizes="16x16" href="img/book-half.svg" style="border-radius: 50%;" fill="currentColor">
    </head>

    

        <!-- On va faire le header -->
        <body>
             <header>
                <div class="inner_header">
                    <div class="logo_header">

                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                        <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                        </svg>
                        <h1>Online bookstore</h1>
                    </div>

                    <ul class="navigation">
                        <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
                        <button id="button_membre" onclick="buttonFonction()"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        <ul id="menu_member" style="display: none;">  
                            <li><a href="profil.php">Profil</a></li>
                            <li><a href="welcome.php">Go Back</a></li>
                            <?php 
                            if($_SESSION['username'] == 'admin'){
                                echo "<li><a href='listBook.php'>Gestion of book</a></li>";
                                echo "<li><a href='listAuthors.php'>Gestion of author</a></li>";
                                echo "<li><a href='listuser.php'>List of User</a></li>";
                            }
                            ?>
                            <li><a href="logout.php">Logout</a></li>
                        </ul></button>
                    </ul>
                </div>
            </header> 
        <div class="bodybis">
            <div class="container-edit">
                <h2><strong>Profile User Update</strong></h2>
                <form action="" method="post" name="frmUpdate" class="edit-profil">
                    <?php
                    $sql_query = "SELECT * FROM `users` WHERE username = '$session' ";
                    $result = mysqli_query($conn,$sql_query);
                    while($row = mysqli_fetch_assoc($result)){ 
                        
                    ?>
                        <div class="inputg">
                            <p>Username</p> <input type="text" value="<?php echo $row['username'] ?>" name="uname"> <br>
                        </div>
                        <div class="inputg">
                            <p>Email Address</p> <input type="text" value="<?php echo $row['email'] ?>" name="email"> <br>
                        </div>
                        <div class="inputg">
                            <input type="submit" name="update" value="Update Profile" class="btn">
                        </div>
                            <div class="disco"><p>You will be disconnected after any modification.</p></div>
                            <br>
                            <p class="login-register-text" style="text-align: center"><a href="profil.php"> ← Back to profil</a></p>
                        <?php        
                    }
                }    
                ?>
                </form>
            </div>
        </div>
        <Footer>
    <p>Online Bookstore</p>
    <br><br>
    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
            <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
        </svg>
        <nav class="nav-menu">
            <ul>
                <a href="about-us.php"><li class="txt-footer">About Us</li></a>
                <a href="logout.php"><li class="txt-footer">Log Out</li></a>
            </ul>
        </nav>
    <p class="end"><i class="fa-solid fa-copyright"></i>CopyRight By MCJ</p>
    </Footer>
    
    <script>
        function buttonFonction() {
        var div = document.getElementById("menu_member");
        if (div.style.display === "none") {
            div.style.display = "block";
        } else {
            div.style.display = "none";
        }
    }
    </script>
</body>
</html>


<style>



.bodybis {
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(bg.jpg);
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container-edit {

    width: 400px;
    min-height: 400px;
    background: #FFF;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
 
}

.container-edit h2 {
    color: #111;
    font-weight: 500;
    font-size: 2rem;
    text-align: center;
    margin-bottom: 20px;
    display: block;
    text-transform: capitalize;

}

.container-edit .edit-profil .inputg{
    width: 100%;
    height: 40px;
    margin-bottom: 25px;
    margin-top:40px;
    padding-top:20px;
    padding-bottom:20px;
}
.container-edit .edit-profil .inputg p{
    padding-bottom:5px;
}

.container-edit .edit-profil .inputg input {
    width: 90%;
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

.container-edit .disco p{
    color: red;
    align-items: center;
    padding-left: 40px;
}


.container-edit .edit-profil .inputg input:focus,
.container-edit .edit-profil .inputg input:valid {
    border-color: #a29bfe;
}

.container-edit .edit-profil .inputg .btn {
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

.container-edit .edit-profil .inputg .btn:hover {
    transform: translateY(-5px);
    background: #5a9696;
} 

@media (max-width: 430px) {
    .container-edit {
        width: 300px;
    }
}
</style>