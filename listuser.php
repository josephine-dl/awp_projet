<?php 

    include_once ('conn.php') ; 

    session_start();

    error_reporting(0);

    $session = $_SESSION['username'];


    $sql_query = "SELECT * FROM users WHERE username= '$session' " ;


    $sql_query = "SELECT * FROM author ORDER BY id_author" ; 
    $result = mysqli_query($conn, $sql_query) ;

    while ($row =mysqli_fetch_assoc($result) ){
        echo "<tr>" ; 
        // display with a table 
        echo "<td> 
            <a href='editprofil.php?id=".$row['Update']."'>Edit</a> 
            | 
            <a href ='deleteprofil.php?id=".$row['Update']."'>Delete</a> 
        </td>" ; 
        echo "<td>".$row ['username']."</td>" ; 
        echo "<td>".$row ['email']."</td>" ; 
        echo "</tr>" ; 
    
    }
    echo"</table>";

    mysqli_close($conn) ; 


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

    <body>

        <!-- On va faire le header -->
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

         
        <div class="container-profil">
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
