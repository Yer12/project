<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<html>
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="body">
            <div class="header" style="font-size: 10px; width: 100%; display: flex; justify-content: space-around;" id="home">
                <h1 class="logo"><a href="page.html" class="logo_a">EX-KITAP</a></h1>
                <div class="login">
                    <div class="b">
                        <div class="login_img">
                        <img src="img/student.png" class="image" alt="">
                    </div>
                    <div class="login_username">
                        <p class="login_p"><?php echo $_SESSION['username']; ?></p>
                    </div>
                    <div class="threedots">
                        <div class="threedots_img">
                            <img src="img/more.png" style="width: 20px; margin-right: 10px; height: 20px; background-color: none;" alt="">
                        </div>
                    </div>
                    <div class="exit">
                        <a href="page.html">
                            <img src="img/logout.png" class="logout" title="шығу">
                        </a>
                        
                    </div>
                    </div>
                    
                </div>
                
            </div>
            <div class="header2">
                <div class="contactus"><a href="contact.html" class="contact_us">Бізге хабарлас</a></div>
                <div class="categories"><a href="catalog.html" class="categories_a">Категориялар</a></div>
                <div class="about"><a href="about.html" class="about_a">Біз жайлы</a></div>
                <div class="sign"><a href="../cart/index.php" class="sign_a">Shopping card</a></div>
            </div>
            <a class="home_a" href="#home">
                <div class="home_button">
                    <img class="home_img" src="img/up-arrow.png" alt="">
                </div>
            </a>
            <div class="main">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <img class="img"  src="img/picture1.jpg" id="lastClone" alt="">
                    </div>
                    <div class="mySlides fade">
                        <img class="img" src="img/picture2.jpg" alt="">
                    </div>
                    <div class="mySlides fade">
                        <img class="img" src="img/picture3.jpg" id="firstClone" alt="">
                    </div>
                    
                    <a class="nextBtn" onclick="plusSlides(-1)" id="nextBtn"><img class="nextBtn" onclick="plusSlides(-1)" id="nextBtn" src="img/right.png" alt=""></a>
                    <a class="prevBtn" onclick="plusSlides(+1)" id="prevBtn"><img class="prevBtn" onclick="plusSlides(+1)" id="prevBtn" src="img/left.png" alt=""></a>
                    <div class="carousel-slide">
                        
                        
                        
                    </div>
        
                        
            
                    

                </div>
                
            </div>
            <div class="goods">
                <div class="word_kitaptar">
                    <h2>Біздің танымал кітаптар</h2>
                </div>
                <div class="books">
                    <div class="column_1">
                       
                        <div class="book">
                            <div class="book1">
                                <div class="book_img">
                                <img class="img2" src="img/addressbook.png" alt="">
                            </div>
                            <div class="img_asti">
                                <div class="book_def">
                                    <p class="book_name" style="text-decoration: none; color:wheat;">Абай жолы</p>
                                    <p class="book_price" style="text-decoration: none; color:wheat;">2000 тг</p>
                                </div>
                                <div class="button_buy">
                                    <div class="more"><a href="book_page.html" style="text-decoration: none; color:wheat;">Толығрақ</a></div>
                                    <div class="buy"><a href="buy_page.html" style="text-decoration: none; color:rgb(29, 27, 24)">Сатып алу</a></div>
                                </div>
                            </div>
                            </div>
                            
                        </div>
                   
                        <div class="book">
                                <div class="book1">
                            <div class="book_img">
                                <img class="img2" src="img/contacts-book.png" alt="">
                            </div>
                            <div class="img_asti">
                                <div class="book_def">
                                    <p class="book_name" style="text-decoration: none; color:wheat;">Екінші болма!</p>
                                    <p class="book_price" style="text-decoration: none; color:wheat;">3000 тг</p>
                                </div>
                                <div class="button_buy">
                                    <div class="more"><a href="book_page.html" style="text-decoration: none; color:wheat;">Толығрақ</a></div>
                                    <div class="buy"><a href="buy_page.html" style="text-decoration: none; color:rgb(29, 27, 24)">Сатып алу</a></div>
                                </div>
                            </div>
                            
    
                        </div>
                        </div>
                        <div class="book">
                                <div class="book1">
                            <div class="book_img">
                                <img class="img2" src="img/book (2).png" alt="">
                            </div>
                            <div class="img_asti">
                                <div class="book_def">
                                    <p class="book_name" style="text-decoration: none; color:wheat;">Амангелді</p>
                                    <p class="book_price" style="text-decoration: none; color:wheat;">850 тг</p>
                                </div>
                                <div class="button_buy">
                                    <div class="more"><a href="book_page.html" style="text-decoration: none; color:wheat;">Толығрақ</a></div>
                                    <div class="buy"><a href="buy_page.html" style="text-decoration: none; color:rgb(29, 27, 24)">Сатып алу</a></div>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                        <div class="book">
                                <div class="book1">
                            <div class="book_img">
                                <img class="img2" src="img/student.png" alt="">
                            </div>
                            <div class="img_asti">
                                <div class="book_def">
                                    <p class="book_name" style="text-decoration: none; color:wheat;">Амангелді</p>
                                    <p class="book_price" style="text-decoration: none; color:wheat;">850 тг</p>
                                </div>
                                <div class="button_buy">
                                    <div class="more"><a href="book_page.html" style="text-decoration: none; color:wheat;">Толығрақ</a></div>
                                    <div class="buy"><a href="buy_page.html" style="text-decoration: none; color:rgb(29, 27, 24)">Сатып алу</a></div>
                                </div>
                            </div>
                            </div>
                            
    
                        </div>
                    </div>
                    <div class="column_2">
                            
                        <div class="book">
                                <div class="book1">
                            <div class="book_img">
                                <img class="img2" src="img/book (2).png" alt="">
                            </div>
                            <div class="img_asti">
                                <div class="book_def">
                                    <p class="book_name" style="text-decoration: none; color:wheat;">Амангелді</p>
                                    <p class="book_price" style="text-decoration: none; color:wheat;">850 тг</p>
                                </div>
                                <div class="button_buy">
                                    <div class="more"><a href="book_page.html" style="text-decoration: none; color:wheat;">Толығрақ</a></div>
                                    <div class="buy"><a href="buy_page.html" style="text-decoration: none; color:rgb(29, 27, 24)">Сатып алу</a></div>
                                </div>
                            </div>
                            </div>
                            
    
                        </div>
                        <div class="book">
                                <div class="book1">
                            <div class="book_img">
                                <img class="img2" src="img/book (3).png" alt="">
                            </div>
                            <div class="img_asti">
                                <div class="book_def">
                                    <p class="book_name" style="text-decoration: none; color:wheat;">Амангелді</p>
                                    <p class="book_price" style="text-decoration: none; color:wheat;">850 тг</p>
                                </div>
                                <div class="button_buy">
                                    <div class="more"><a href="book_page.html" style="text-decoration: none; color:wheat;">Толығрақ</a></div>
                                    <div class="buy"><a href="buy_page.html" style="text-decoration: none; color:rgb(29, 27, 24)">Сатып алу</a></div>
                                </div>
                            </div>
                            </div>
    
                        </div>
                        <div class="book">
                                <div class="book1">
                            <div class="book_img">
                                <img class="img2" src="img/science-book (1).png" alt="">
                            </div>
                            <div class="img_asti">
                                <div class="book_def">
                                    <p class="book_name" style="text-decoration: none; color:wheat;">Амангелді</p>
                                    <p class="book_price" style="text-decoration: none; color:wheat;">850 тг</p>
                                </div>
                                <div class="button_buy">
                                    <div class="more"><a href="book_page.html" style="text-decoration: none; color:wheat;">Толығрақ</a></div>
                                    <div class="buy"><a href="buy_page.html" style="text-decoration: none; color:rgb(29, 27, 24)">Сатып алу</a></div>
                                </div>
                            </div>
                            </div>
    
                        </div>
                        <div class="book">
                                <div class="book1">
                            <div class="book_img">
                                <img class="img2" src="img/addressbook.png" alt="">
                            </div>
                            <div class="img_asti">
                                <div class="book_def">
                                    <p class="book_name" style="text-decoration: none; color:wheat;">Амангелді</p>
                                    <p class="book_price" style="text-decoration: none; color:wheat;">850 тг</p>
                                </div>
                                <div class="button_buy">
                                    <div class="more"><a href="book_page.html"   style="text-decoration: none; color:wheat;">Толығрақ</a></div>
                                    <div class="buy"><a href="buy_page.html" style="text-decoration: none; color:rgb(29, 27, 24)">Сатып алу</a></div>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="word_reviews" id="reviews"><h2>Біз жайлы пікірлер</h2></div>
            <div class="reviews">
                <div class="review">
                    <div class="z"></div>
                    <div class="profile"><img class="profile" src="img/student.png" alt=""></div>
                    <div class="review_def">
                        <p class="username">User</p>
                        <p class="review_words">Уақытында алдық затты. Бәрі керемет. Сенімді адамдар. Ешқандай қорықпау керек.</p>
                    </div>
                </div>
                <div class="review">
                        <div class="z"></div>
                        <div class="profile"><img class="profile" src="img/background.jpg" alt=""></div>
                        <div class="review_def">
                            <p class="username">OOO Великан</p>
                            <p class="review_words">Все доставили во время. Дали гарантию на товар. Отличная производственная</p>
                        </div>
                </div>
                <div class="review">
                            <div class="z"></div>
                            <div class="profile"><img class="profile" src="img/student.png" alt=""></div>
                            <div class="review_def">
                                <p class="username">User</p>
                                <p class="review_words">Bary zhaksy. Keremet</p>
                            </div>
                </div>
            </div>
            
            <div class="footer_2">
                <div class="footer_logo">
                    <p style="font-family: 'Courier New', Courier, monospace; color: white; font-size: 30px; font-weight: bold;">EX-KITAP</p>
                </div>
                <div class="info_us">
                    <p style="text-align: center; color: white">+7 (778) 434 28 27</p>
                    <p style="text-align: center; color: white">ex-kitap@gmail.ru</p>
                    <p style="text-align: center; color: white">Almaty oblysy, Karasay audany, Abilayhan koshesy, 16A</p>
                </div>
                <div class="accounts">
                    <div class="insta">
                        <div class="insta_img_div">
                            <img class="insta_img" src="img/instagram.png">
                        </div>
                        <p style="color: white; font-weight: bold; font-size: 15px;">@ex-kitap</p>
                    </div>
                    <div class="whatsapp">
                        <div class="whatsapp_img_div">
                            <img src="img/whatsapp.png" class="whatsapp_img">
                        </div>
                        <p style="color: white; font-weight: bold; font-size: 14px;">+7 (778) 434 28 27</p>
                    </div>
                    <div class="vkontakte">
                            <div class="vkontakte_img_div">
                                <img src="img/vk.png" class="vkontakte_img">
                            </div>
                            <p style="color: white; font-weight: bold; font-size: 14px;">@ex-kitap</p>
                    </div>
                </div>

            </div>

        </div>
        <script src="app.js"></script>
        
    </body>
</html>
