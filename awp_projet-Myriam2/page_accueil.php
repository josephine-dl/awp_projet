<?php 

include 'config.php';

session_start();

error_reporting(0);

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
        
    </head>


    <body>

        <!-- On va faire le header -->
        <div>
            <header>
                <div class="inner_header">
                    <div class="logo_header">
                        <!-- insérer le logo du site -->
                        <img src="">
                        <h1>Online bookstore</h1>
                    </div>

                    <ul class="navigation">
                        <a href="about/about.php"><li>About Us</li></a>
                        <a href="login.php"><li>Log In</li></a>
                    </ul>
                </div>
            </header>
        </div>
        <section>
            <br><br><br>

            <div class="boxcontainer">
                <form action="search.php" method="GET">
                <table class="elcontainer" id=form class ="search_box" action="search.php" method="GET">
                    <tr>
                        <td>
                            <input class="search-area" type="text" name="searcharea" placeholder="find your book">
                        </td>
                        <td>
                            <button class="search-btn" type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </td>
                    </tr>
                </table>
            </form>
            </div>


        </section>

        <section>
            <div class="container_book1">
                <div class="title_book">
                    <h2>Classic book</h2>
                </div>

                <div class="item_book">
                    <img src="" alt="picture book">
                    <div class="content_book">
                        <p>Book ...  gierbgqe ubgqergq greg rgbqergube erugbergb ergrg rg  rg rg </p>
                        
                        <input class="button_book" type="button" value="download" onClick="alert('Log In fisrt');">
                    </div>   
                </div>

                <div class="item_book">
                    <img src="" alt="picture book">
                    <div class="content_book">
                        <p>Book ...  gierbgqe ubgqergq greg rgbqergube erugbergb ergrg rg  rg rg </p>
                        <input class="button_book" type="button" value="download" onClick="alert('Log In fisrt');">
                    </div>
                </div>

                <div class="item_book">
                    <img src="" alt="picture book">
                    <div class="content_book">
                        <p>Book ...  gierbgqe ubgqergq greg rgbqergube erugbergb ergrg rg  rg rg </p>
                        <input class="button_book" type="button" value="download" onClick="alert('Log In fisrt');">
                    </div>
                </div>

                <div class="item_book">
                    <img src="" alt="picture book">
                    <div class="content_book">
                        <p>Book ...  gierbgqe ubgqergq greg rgbqergube erugbergb ergrg rg  rg rg </p>
                        <input class="button_book" type="button" value="download" onClick="alert('Log In fisrt');">
                    </div>
                </div>

                <div class="item_book">
                    <img src="" alt="picture book">
                    <div class="content_book">
                        <p>Book ...  gierbgqe ubgqergq greg rgbqergube erugbergb ergrg rg  rg rg </p>
                        <input class="button_book" type="button" value="download" onClick="alert('Log In fisrt');">
                    </div>
                </div>

                <div class="item_book">
                    <img src="" alt="picture book">
                    <div class="content_book">
                        <p>Book ...  gierbgqe ubgqergq greg rgbqergube erugbergb ergrg rg  rg rg </p>
                        <input class="button_book" type="button" value="download" onClick="alert('Log In fisrt');">
                    </div>
                </div>

            </div>

            <div class="container_book2">
                <div class="title_book">
                    <h2>Thriller book</h2>
                </div>
                
                <div class="item_book">
                    <img src="" alt="picture book">
                    <div class="content_book">
                        <p>Book ...  gierbgqe ubgqergq greg rgbqergube erugbergb ergrg rg  rg rg </p>
                        <input class="button_book" type="button" value="download" onClick="alert('Log In fisrt');">
                    </div>
                </div>

                <div class="item_book">
                    <img src="" alt="picture book">
                    <div class="content_book">
                        <p>Book ...  gierbgqe ubgqergq greg rgbqergube erugbergb ergrg rg  rg rg </p>
                        <input class="button_book" type="button" value="download" onClick="alert('Log In fisrt');">
                    </div>
                </div>

                <div class="item_book">
                    <img src="" alt="picture book">
                    <div class="content_book">
                        <p>Book ...  gierbgqe ubgqergq greg rgbqergube erugbergb ergrg rg  rg rg </p>
                        <input class="button_book" type="button" value="download" onClick="alert('Log In fisrt');">
                    </div>
                </div>

                <div class="item_book">
                    <img src="" alt="picture book">
                    <div class="content_book">
                        <p>Book ...  gierbgqe ubgqergq greg rgbqergube erugbergb ergrg rg  rg rg </p>
                        <input class="button_book" type="button" value="download" onClick="alert('Log In fisrt');">
                    </div>
                </div>

                <div class="item_book">
                    <img src="" alt="picture book">
                    <div class="content_book">
                        <p>Book ...  gierbgqe ubgqergq greg rgbqergube erugbergb ergrg rg  rg rg </p>
                        <input class="button_book" type="button" value="download" onClick="alert('Log In fisrt');">
                    </div>
                </div>

                <div class="item_book">
                    <img src="" alt="picture book">
                    <div class="content_book">
                        <p>Book ...  gierbgqe ubgqergq greg rgbqergube erugbergb ergrg rg  rg rg </p>
                        <input class="button_book" type="button" value="download" onClick="alert('Log In fisrt');">
                    </div>
                </div>

            </div>

            <div class="container_book3">
                <div class="title_book">
                    <h2>Romance book</h2>
                </div>
                
               <div class="item_book">
                    <img src="" alt="picture book">
                    <div class="content_book">
                        <p>Book ...  gierbgqe ubgqergq greg rgbqergube erugbergb ergrg rg  rg rg </p>
                        <input class="button_book" type="button" value="download" onClick="alert('Log In fisrt');">
                    </div>
                </div>

                <div class="item_book">
                    <img src="" alt="picture book">
                    <div class="content_book">
                        <p>Book ...  gierbgqe ubgqergq greg rgbqergube erugbergb ergrg rg  rg rg </p>
                        <input class="button_book" type="button" value="download" onClick="alert('Log In fisrt');">
                    </div>
                </div>

                <div class="item_book">
                    <img src="" alt="picture book">
                    <div class="content_book">
                        <p>Book ...  gierbgqe ubgqergq greg rgbqergube erugbergb ergrg rg  rg rg </p>
                        <input class="button_book" type="button" value="download" onClick="alert('Log In fisrt');">
                    </div>
                </div>

                <div class="item_book">
                    <img src="" alt="picture book">
                    <div class="content_book">
                        <p>Book ...  gierbgqe ubgqergq greg rgbqergube erugbergb ergrg rg  rg rg </p>
                        <input class="button_book" type="button" value="download" onClick="alert('Log In fisrt');">
                    </div>
                </div>

                <div class="item_book">
                    <img src="" alt="picture book">
                    <div class="content_book">
                        <p>Book ...  gierbgqe ubgqergq greg rgbqergube erugbergb ergrg rg  rg rg </p>
                        <input class="button_book" type="button" value="download" onClick="alert('Log In fisrt');">
                    </div>
                </div>

                <div class="item_book">
                    <img src="" alt="picture book">
                    <div class="content_book">
                        <p>Book ...  gierbgqe ubgqergq greg rgbqergube erugbergb ergrg rg  rg rg </p>
                        <input class="button_book" type="button" value="download" onClick="alert('Log In fisrt');">
                    </div>
                </div>

            </div>
            
        </section>

        <section>
            <h2>Our Selection</h2>
            
            <div class="swiper mySwiper container">
                <div class="swiper-wrapper content">
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="" alt="Picture of book">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="" alt="Picture of book">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="" alt="Picture of book">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="" alt="Picture of book">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="" alt="Picture of book">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="" alt="Picture of book">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </section>
    <Footer>
      <p>Online Bookstore</p>
       <img src="" alt="logo site">
     
      <div class="social">
        <a href="https://www.instagram.com/myriam__94/" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
          <a href="https://www.facebook.com/myriam.amor.520"  target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
          <a href="https://www.linkedin.com/feed/" target="_blank" class="linkedin"><i class="icofont-linkedin"></i></a>
          <a href="https://github.com/MyriamEfrei" target="_blank" class="github"><i class="icofont-github"></i></a>
          <a href="mailto:myriam.amor@efrei.net" target="_blank" class="email"><i class="icofont-email"></i></a>
      </div>
      <nav class="nav-menu nav-menu-none nav-menu-lg-block">
        <ul>
            <a href="about/about.php"><li>About Us</li></a>
            <a href="login.php"><li>Log In</li></a>
        </ul>
    </nav>
      <p class="end"><i class="fa-solid fa-copyright"></i>CopyRight By MCJ</p>
    </Footer>
    <script src="script.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    </body>
    
</html>

