<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: page_accueil.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>

        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <script src="https://kit.fontawesome.com/6c4179a31c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        
        <link rel="icon" type="image/svg" sizes="16x16" href="img/book-half.svg" style="border-radius: 50%;" fill="currentColor">

    </head>
    <body>
    <div>
        <header>
            <div>
            <header>
                <div class="inner_header">
                    <div class="logo_header">
                        <!-- insérer le logo du site -->
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
                            <li><a href="welcome.php">Go back</a></li>
                            <li><a href="profil.php">Profil</a></li>
                            <li><a href="Download.php">Download</a></li>
                            <?php 
                            // voir comment on modifie et delete les livres
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
        </div>
        </header>

        <div class="container">
            <div class="header">
                <h1>Our Team MCJ</h1>
            </div>
            <div class="sub-container">
    
                <div class="teams">
                    <img src="img/Myriam.jpg" alt="photo Myriam" style="border-radius:50%;">
                    <div class="name">Myriam AMOR</div>
                    <div class="desig">Developer</div>
                    <div class="about">My name is Myriam AMOR, I am passionate about music, sport and cybersecurity!
                        I like to code when I have time and I'm very curious to learn new things.</div>
    
                    <div class="social-links">
                        <a href="https://www.facebook.com/myriam.amor.520/" target="_blank" ><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/myriam__94/" target="_blank" ><i class="fa fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/myriam-amor-0b931319b/" target="_blank" ><i class="fa fa-linkedin"></i></a>
                        <a href="https://github.com/MyriamEfrei" target="_blank" ><i class="fa fa-github"></i></a>
                    </div>
                </div>
    
                <div class="teams">
                    <img src="img/Camille.png" alt="photo Camille" style="border-radius:50%;">
                    <div class="name">Camille FOUR </div>
                    <div class="desig">Developer</div>
                    <div class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum labore quam
                        reprehenderit
                        vitae aliquam dicta! </div>
    
                    <div class="social-links">
                        <a href="https://www.facebook.com/profile.php?id=100012312584188" target="_blank" ><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/camille.mcsma/" target="_blank" ><i class="fa fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/camille-four-7996741a1" target="_blank" ><i class="fa fa-linkedin"></i></a>
                        <a href="https://github.com/SwevenNeith" target="_blank" ><i class="fa fa-github"></i></a>
                    </div>
                </div>

                <div class="teams">
                    <img src="img/josephine.jpg" alt="photo Josephine" style="border-radius:50%;">
                    <div class="name">Josephine DE LESTRANGE</div>
                    <div class="desig">Developer</div>
                    <div class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum labore quam
                        reprehenderit
                        vitae aliquam dicta! </div>
    
                    <div class="social-links">
                        <a href="https://www.facebook.com/profile.php?id=100014556003823" target="_blank" ><i class="fa fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/jos%C3%A9phine-de-lestrange-0501411a0/" target="_blank" ><i class="fa fa-linkedin"></i></a>
                        <a href="https://github.com/josephine-dl" target="_blank" ><i class="fa fa-github"></i></a>
                    </div>
                </div>

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
                <a href="welcome.php"><li class="txt-footer">Welcome</li></a>
                <a href="login.php"><li class="txt-footer">Log In</li></a>
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