<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head><meta charset="UTF-8">
<meta name="description" content="We Sale Games So Invite Your Friens And Get Fun With It Win Rewards">
<meta name="keywords" content="ExGames, Games, Exstream Games, Exgames Home">
<meta name="author" content="Yusuf & Mokhtar & Hager & Hadeer">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="../includs/icon-page1.jpg" sizes="96x96">
    <script src="https://kit.fontawesome.com/112897e29a.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <div class="overlay"></div>
      <div class="info">
        <div class="container flexbetween align-center">
          <div class="left-box flex"><a class="flex align-center" href=""><i class="far fa-envelope"></i>info@xgames.com</a><a href=""><i class="far fa-clock"></i>Live Support</a></div>
          <div class="right-box flex align-center">
            <div class="bouns-box flex align-center">
              <i class="fas fa-dollar-sign"></i> 0</div>
            <ul class="parent">
              <li><a href=""><img src="../includs/headerFile/w1.png" alt="">English<i class="fas fa-chevron-down"></i></a>
                <ul>
                  <li><a href=""> <img src="../includs/headerFile/w2.png" alt="">Deutsch</a></li>
                  <li> <a href=""> <img src="../includs/headerFile/w3.png" alt="">Español</a></li>
                  <li> <a href=""> <img src="../includs/headerFile/w4.png" alt="">Français</a></li>
                  <li> <a href=""> <img src="../includs/headerFile/w5.png" alt="">العربية</a></li>
                </ul>
              </li>
            </ul>
            <div class="logout">
              <span style="color:#D64481 ; text-transform:capitalize;">
                <?php
                  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
                  {
                    echo $_SESSION['username'];
                    echo '&nbsp | &nbsp<a href="../loginpage/logout.php">logout</a>';
                  }
                  else
                  {
                    echo '<a href="../loginpage/login.php">Login</a>';
                  }
                ?>
              </span>
            </div>
          </div>
        </div>
      </div>
      <nav data-0="position:static;background-color:rgba(30,29,50,1)" data-500="position:fixed;top:0;background-color:rgba(30,29,50,.99)">
        <div class="container flexbetween align-center">
          <div class="logo">
            <h2><a class="flex align-center" href="#"><span>x</span>games</a></h2>
          </div>
          <ul class="main-ul flexbetween">
            <li><a href="../home/home.php">home</a></li>
            <li><a href="../games/index.php">games</a></li>
            <li><a href="">pages
                <ul>
                  <li> <a href="../about-us/about-us.php">about us</a></li>
                  <li> <a href="../team/team.php">team</a></li>
                  <li> <a href="../faq/faq.php">faq</a></li>
                  <li> <a href="../terms/terms.php">terms & Conditions</a></li>
                </ul></a></li>
            <li><a href="../contact/contact.php">Contact</a></li>
            <li><a href="../setting/setting.php">Settings</a></li>
              <?php
                if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true))
                {
                  echo '<li class="join"><a class="global-hover" href="../sign-up-page/sign-up.php">join now</a></li>';
                }
              ?>
          </ul>
          <div class="toggle-button"><i class="fas fa-bars"></i></div>
          <div class="toggle">
            <div class="logo flexbetween align-center">
              <h2> <a class="flex align-center" href="#"><span>x</span>games</a></h2>
              <div class="toggle-time"><i class="fas fa-times"></i></div>
            </div>
            <ul class="toggle-ul flex"><a href="../home/home.php">
                <li>home</li></a><a href="../games/index.php">
                <li>games</li></a><a href="../about-us/about-us.php">
                <li>about us</li></a><a href="../team/team.php">
                <li>team</li></a><a href="../faq/faq.php">
                <li>faq</li></a><a href="../terms/terms.php">
                <li>terms & conditions</li></a><a href="../setting/setting.php">
                <li>setting</li></a>
                <?php
                  if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true))
                  {
                    echo '<a href="../sign-up-page/sign-up.php">
                          <li>join now</li></a>';
                  }
                ?>
            </ul>
          </div>
        </div>
      </nav>
      <?php
        if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true))
        {
          echo '<div class="check-login">
                  <div class="container flexbetween align-center">
                    <p>You have to login first to download any game</p><i class="fas fa-times button-warnning"></i>
                  </div>
              </div>';
        }
      ?>
      <div class="pop-up" data-0="display: none;" data-500="display: block;"><a href="#"><i class="fas fa-arrow-up"></i></a></div>
    </header>
    <div class="slider"><img class="overlay" src="images/slide-bg.png" alt="">
      <div class="container flexbetween">
        <div class="content">
          <h1>Buying Games</h1>
          <h1> <span>Get Fun</span></h1>
          <p>We put the best games for you for your enjoyment, buy, play, and win.</p><a class="global-hover" href="">Get Started</a>
        </div>
        <div class="image"><img src="images/s1.png" alt=""></div>
      </div>
    </div>
    <div class="member">
      <div class="container flexbetween">
        <div class="box">
          <div class="image"><img src="images/achive1.png" alt=""></div>
          <div class="text">
            <h2>1200+</h2>
            <p>live online</p>
          </div>
        </div>
        <div class="box">
          <div class="image"><img src="images/achive2.png" alt=""></div>
          <div class="text">
            <h2>5119+</h2>
            <p>Active Member</p>
          </div>
        </div>
        <div class="box">
          <div class="image"><img src="images/achive3.png" alt=""></div>
          <div class="text">
            <h2>3318+</h2>
            <p>daily reward</p>
          </div>
        </div>
      </div>
    </div>
    <div class="about-us">
      <div class="container flexbetween">
        <div class="left-box">
          <div class="image"><img src="images/ab.jpg" alt=""></div>
          <div class="text">
            <p>If you need know more about XGames <a href="../about-us/about-us.php">Click here</a></p>
          </div>
        </div>
        <div class="right-box">
          <div class="box">
            <div class="image"><img src="images/ab-icon.png" alt=""></div>
            <div class="text">
              <h2>Sale Games</h2>
              <p>We sale games for you to make you happy so buy some games and get fun with friends.</p>
            </div>
          </div>
          <div class="box">
            <div class="image"><img src="images/ab-icon2.png" alt=""></div>
            <div class="text">
              <h2>Instant Bonus</h2>
              <p>We made it easy for you to buy games, buy games now and get your bonus for buying free games after that.</p>
            </div>
          </div>
          <div class="box">
            <div class="image"><img src="images/ab-icon6.png" alt=""></div>
            <div class="text">
              <h2>Live Support</h2>
              <p>We are always here for you for your direct support. If you have any problem, contact us now.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bouns">
      <div class="container">
        <div class="heading flex-center">
          <h2>Referral Bonus</h2>
          <p>Buy games and get your reward now, or get free games.</p>
        </div>
        <div class="content flexbetween">
          <div class="box"><a href=""><i class="fas fa-briefcase bag"></i></a>
            <h2>Buy with $20 Get</h2>
            <h2>Discount 10%</h2>
          </div>
          <div class="box"><a href=""><i class="far fa-clone clone"></i></a>
            <h2>Buy with $40 Get </h2>
            <h2>Discount 20%</h2>
          </div>
          <div class="box"><a href=""><i class="far fa-chart-bar chart"></i></a>
            <h2>Buy with $80 Get </h2>
            <h2>Discount 50%</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="games">
      <div class="container">
        <div class="heading flex-center">
          <h2>Games</h2>
          <p>Log in now and buy the games you want, and don't forget to have fun with your friends.</p>
        </div>
        <div class="content flexbetween"><a href="../pubg/pubg.php">
            <div class="box"><img src="games-images/pubg1.jpg" alt="">
              <div class="text">
                <h3>Pubg</h3>
                <p>PlayerUnknown's Battlegrounds (PUBG) is an online multiplayer battle royale game developed and published by PUBG Corporation, a subsidiary of South Korean video game company Bluehole.</p>
              </div>
            </div></a><a href="../freefire/freefire.php">
            <div class="box"><img src="games-images/freefire.jpg" alt="">
              <div class="text">
                <h3>Free Fire</h3>
                <p>Game play. Garena Free Fire is an online-only action-adventure battle royale game played in a third person perspective. </p>
              </div>
            </div></a><a href="../call of duty/call-of-duty.php">
            <div class="box"><img src="games-images/call-of-duty.jpg" alt="">
              <div class="text">
                <h3>Call of Duty</h3>
                <p>Call Of Duty (short form: CoD) is a first person and third-person shooter video game series. There are 24 games in total, not counting add-ons and DLCs. The first 8 games, excluding Modern Warfare.</p>
              </div>
            </div></a></div>
      </div>
      <div class="load-more">
        <div class="container"><a href="../games/index.php">load more</a></div>
      </div>
    </div>
    <div class="contact">
      <div class="container">
        <div class="heading flex-center">
          <h2>Contact Us</h2>
        </div>
        <form class="flexbetween" action="../contact/contact.php">
          <input type="text" name="name" placeholder="Your Name">
          <input type="text" name="email" placeholder="Your Email">
          <textarea name="message" placeholder="Your Message"></textarea>
          <button class="global-hover" name="submit-contact" type="submit">Send Message</button>
        </form>
      </div>
    </div>
    <div class="partner">
      <div class="container">
        <div class="heading flex-center">
          <h2>Games Partner</h2>
          <p>You can buy games through these currencies traded through the site.</p>
        </div>
        <div class="content flexbetween"><a href=""><img src="images/1.png" alt=""></a><a href=""><img src="images/2.png" alt=""></a><a href=""><img src="images/3.png" alt=""></a><a href=""><img src="images/4.png" alt=""></a><a href=""><img src="images/5.png" alt=""></a></div>
      </div>
    </div>
    <footer>
      <div class="container flexbetween">
        <div class="box-1"><a href="#">
            <h2 class="flex align-center"><span>x</span>games</h2></a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi eligendi, iusto, consequatur non voluptates, dolores eius enim quisquam nulla quae mollitia deserunt at modi tempora facilis ratione tenetur repellat molestias?</p>
          <form action="">
            <input type="text" name="search" placeholder="User Name">
            <button class="global-hover">@</button>
          </form>
        </div>
        <div class="box">
          <h3>game list</h3><a href=""><i class="far fa-check-circle"></i>Disks game</a><a href=""><i class="far fa-check-circle"></i>Lopester</a><a href=""><i class="far fa-check-circle"></i>Gangstar</a><a href=""><i class="far fa-check-circle"></i>Royal casino</a><a href=""><i class="far fa-check-circle"></i>Align fight</a><a href=""><i class="far fa-check-circle"></i>Black night</a>
        </div>
        <div class="box">
          <h3>company</h3><a href=""><i class="far fa-check-circle"></i>Social media</a><a href=""><i class="far fa-check-circle"></i>Transition</a><a href=""><i class="far fa-check-circle"></i>Promotion</a><a href=""><i class="far fa-check-circle"></i>Events</a><a href=""><i class="far fa-check-circle"></i>Services</a><a href=""><i class="far fa-check-circle"></i>About us</a>
        </div>
        <div class="box">
          <h3>account</h3><a href=""><i class="far fa-check-circle"></i>Ripple coin</a><a href=""><i class="far fa-check-circle"></i>Bitcoin</a><a href=""><i class="far fa-check-circle"></i>Ethireum</a><a href=""><i class="far fa-check-circle"></i>Light coin</a><a href=""><i class="far fa-check-circle"></i>Coin base</a><a href=""><i class="far fa-check-circle"></i>Gold Coin</a>
        </div>
        <div class="box">
          <h3>support</h3><a href=""><i class="far fa-check-circle"></i>Customer Care</a><a href=""><i class="far fa-check-circle"></i>Live Chat</a><a href=""><i class="far fa-check-circle"></i>Notification</a><a href=""><i class="far fa-check-circle"></i>Privacy</a><a href=""><i class="far fa-check-circle"></i>Terms & Condtions</a><a href=""><i class="far fa-check-circle"></i>Contact us</a>
        </div>
      </div>
    </footer>
    <div class="copy-right">
      <div class="container">
        <p>Copyright © 2020 <span>xgames </span>All Rights Reserved</p>
        <p>Design By Hager-Mokhtar-Yusuf-Hadeer</p>
      </div>
    </div>
    <script src="../includs/headerFile/js/toggleheader.js"></script>
    <script src="../includs/headerFile/js/skrollr.js"></script>
    <script>var s = skrollr.init();</script>
  </body>
</html>