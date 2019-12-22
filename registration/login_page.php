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
        <link rel="stylesheet" href="login_page.css">
    </head>
    <body>
        <div class="body">
            <div class="header" id="home">
                <h1 class="logo"><a href="#" class="logo_a"><img class="logo_img"src="img/books (1) (1).png">EX-KITAP</a></h1>
                <div class="search"><input type="text" autocomplete="off" spellcheck="false" dir="auto" class="search_input" placeholder="Не іздегіңіз келіп тұр?"></div>
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
                <div class="categories"><a href="catalog.html" class="categories_a">Категориялар</a></div>
                <div class="about"><a href="about.html" class="about_a">Біз жайлы</a></div>
                <div class="about"><a href="task51/task51.html" class="about_a">Аккаунттар</a></div>        
        
            </div>
         
                  <div id="line01">
                 
                    <div id="sizik1">
                      <div id="nnn">
                            <div id="siz11">
                                    <img src="img/student.png">
                                  </div>
                      </div>
                      <div id="siz12">
                        <div id="j1">
                          <strong>2400</strong> Китаптар
                        </div>
                        
                      </div>
                    </div>
                    <div id="sizik1">
                      <div id="nnn">
                        <div id="siz11">
                          <img src="img/student.png">
                        </div>
                      </div>
                      <div id="siz12">
                        <div id="j1">
                          <strong>100</strong> Қолданушылар
                        </div>
                        <div id="j2">
                         
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="line02">
                    <div id="teachers">
                      <div id="m2"><p>Китаптар :<p></div>
                      <div id="m1">
                        <div id="uuu1"><p>Амангелди</p></div>
                        <div id="uuu2"><a href="#">Жою</a></div>
                      </div>
                      <div id="m1">
                        <div id="uuu1"><p>Екинши болма</p></div>
                        <div id="uuu2"><a href="#">Жою</a></div>
                      </div>
                      <div id="m1">
                        <div id="uuu1"><p>Абай жолы</p></div>
                        <div id="uuu2"><a href="#">Жою</a></div>
                      </div>
                      <div id="m1">
                        <div id="uuu1"><p>Илон Маск</p></div>
                        <div id="uuu2"><a href="#">Жою</a></div>
                      </div>
                      
                    </div>
                    <div id="users">
                      <div id="y2"><p>Колданушылар :</p></div>
                      <div id="y1">
                        <div id="uuu1"><p>Эрлан Уразов</p></div>
                        <div id="uuu2"><a href="#">Жою</a></div>
                      </div>
                      <div id="y1">
                        <div id="uuu1"><p>User</p></div>
                        <div id="uuu2"><a href="#">Жою</a></div>
                      </div>
                      <div id="y1">
                        <div id="uuu1"><p>Username</p></div>
                        <div id="uuu2"><a href="#">Жою</a></div>
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

    </body>
</html>


