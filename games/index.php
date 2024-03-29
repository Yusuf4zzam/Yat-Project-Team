<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head><meta charset="UTF-8">
<meta name="description" content="Buy Our Games And Get Fun With Tour Friends And Win Rewards">
<meta name="keywords" content="ExGames, Games, Exstream Games">
<meta name="author" content="Yusuf & Mokhtar & Hager & Hadeer">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
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
    <div class="slider">
      <div class="overlay"></div>
      <div class="container flex align-center">
        <div class="content">
          <h1 class="check-heading-page"></h1>
          <p>Home <i class="fas fa-chevron-right"></i><span class="check-text-page"></span></p>
        </div>
      </div>
    </div>
    <div class="games">
      <div class="container">
        <div class="content flexbetween"><a href="../pubg/pubg.php">
            <div class="box"><img src="images/pubg1.jpg" alt="">
              <div class="text">
                <h3>Pubg</h3>
                <p>PlayerUnknown's Battlegrounds (PUBG) is an online multiplayer battle royale game developed and published by PUBG Corporation, a subsidiary of South Korean video game company Bluehole.</p>
              </div>
            </div></a><a href="../freefire/freefire.php">
            <div class="box"><img src="images/freefire.jpg" alt="">
              <div class="text">
                <h3>Free Fire</h3>
                <p>Game play. Garena Free Fire is an online-only action-adventure battle royale game played in a third person perspective. </p>
              </div>
            </div></a><a href="../call of duty/call-of-duty.php">
            <div class="box"><img src="images/call-of-duty.jpg" alt="">
              <div class="text">
                <h3>Call of Duty</h3>
                <p>Call Of Duty (short form: CoD) is a first person and third-person shooter video game series. There are 24 games in total, not counting add-ons and DLCs. The first 8 games, excluding Modern Warfare.</p>
              </div>
            </div></a><a href="../Tekken/Tekken.php">
            <div class="box"><img src="images/takken.jpg" alt="">
              <div class="text">
                <h3>Tekken</h3>
                <p>Tekken is one of the best fighting game series out there. This game actually popularized the 3D fighting game genre even though it wasn’t the first. Tekken 7 is the most recent release in the series and brings an exciting gameplay along with highly impressive 3D graphics.</p>
              </div>
            </div></a><a href="../Warframe/Warframe.php">
            <div class="box"><img src="images/warframe.jpg" alt="">
              <div class="text">
                <h3>Warframe</h3>
                <p>Yet another game that you should definitely check out if you’re looking for an online PC game, Warframe is one of those titles that, even though old, have consistently received updates and new content to keep the game fresh and exciting for both newcomers and veteran players alike. In Warframe.</p>
              </div>
            </div></a><a href="../Team-Fortress/Team-Fortress.php">
            <div class="box"><img src="images/team-forest.png" alt="">
              <div class="text">
                <h3>Team Forest</h3>
                <p>Overwatch wouldn’t have been a reality if it weren’t for Team Fortress 2. Blizzard probably won’t admit it themselves, but we all know that Overwatch was heavily inspired by Team Fortress 2 and its shenanigans.</p>
              </div>
            </div></a><a href="../League-of-Legends/League-of-Legends.php">
            <div class="box"><img src="images/League-of-Legends.jpg" alt="">
              <div class="text">
                <h3>League of Legends</h3>
                <p>League of Legends is another one of the top MOBAs out there and it’s a direct competitor to DoTA 2. It’s a much less complex MOBA when compared to DoTA 2. League of Legends is another highly played game and has a very large esports scene backing it up which makes it another exciting game.</p>
              </div>
            </div></a><a href="../Starcraft/Starcraft.php">
            <div class="box"><img src="images/starcraft.jpg" alt="">
              <div class="text">
                <h3>Starcraft</h3>
                <p>Starcraft II is the most played online strategy games that tests your wits and the ability to outsmart your opponent. This game is all about gathering resources, building structures, and planning your attack against the enemy. Starcraft II offers a great story mode where you get to experience the ultimate showdown between the three main races in this universe. The Terrans, the Protoss, and the zergs.</p>
              </div>
            </div></a><a href="../World-of-Tanks/World-of-Tanks.php">
            <div class="box"><img src="images/World-of-Tanks.jpg" alt="">
              <div class="text">
                <h3>World of Tanks</h3>
                <p>Are you a lover of tank-fights? If so, World of Tanks is the perfect free online PC game for you. World of Tanks is a MMO war game that features 20th century armored vehicles including light armored vehicles, to heavy tanks and self propelled guns.</p>
              </div>
            </div></a><a href="../Rainbow-Six-Siege/Rainbow-Six-Siege.php">
            <div class="box"><img src="images/Rainbow-Six-Siege.jpg" alt="">
              <div class="text">
                <h3>Rainbow Six Siege</h3>
                <p>Rainbow Six Siege is an online PC game that, at first glance, feels similar to Counter Strike. However, the game places a far higher importance on strategy and teamwork than most other online shooters you might have played.</p>
              </div>
            </div></a><a href="../EVE/EVE.php">
            <div class="box"><img src="images/eve.jpg" alt="">
              <div class="text">
                <h3>EVE Online</h3>
                <p>If you like space battles, EVE Online is a must-play game for you. The MMO space battle game is full of epic battles that you can be a part of. The game is old, having released in 2003, but it’s still well worthy of being on this list.</p>
              </div>
            </div></a><a href="../Titanfall/Titanfall.php">
            <div class="box"><img src="images/Titanfall.jpg" alt="">
              <div class="text">
                <h3>Titanfall</h3>
                <p>Electronic Arts’ Titanfall 2 may have been released in 2016, but it’s still a one of the best online PC games that you can play. In Titanfall 2, players control large robots (called Titans) with some incredible abilities including things like wall running among others.</p>
              </div>
            </div></a><a href="../Path-of-Exile/PathofExile.php">
            <div class="box"><img src="images/PathofExile.jpg" alt="">
              <div class="text">
                <h3>Path of Exile</h3>
                <p>Path Of Exile is everything that Diablo III is not. It feels like the true successor to Diablo II and brings all the old memories back from amazing Diablo II days. Path of Exile plays and looks quite similar to Diablo II, however, it boasts much better graphics obviously.</p>
              </div>
            </div></a><a href="../Borderlands/Borderlands.php">
            <div class="box"><img src="images/borderland.jpg" alt="">
              <div class="text">
                <h3>Borderland</h3>
                <p>Borderlands is a 2009 open world action role-playing first-person shooter video game. ... The game's story focuses on a group of four "Vault Hunters", who travel to the distant planet of Pandora to search for the "Vault", which is rumored to contain advanced alien technology and other priceless riches.</p>
              </div>
            </div></a><a href="../Battlefield/Battlefield.php">
            <div class="box"><img src="images/Battlefield.jpg" alt="">
              <div class="text">
                <h3>Battlefield</h3>
                <p>Borderlands is a clown-fiesta that’s filled with extremely fun and exciting elements that make it a unique shooter. The game focuses on loot and grinds so much as if it were almost an MMORPG, but fortunately, it isn’t. Borderlands 3 brings all the amazing and exciting elements from the original game.</p>
              </div>
            </div></a><a href="../star-war/star-war.php">
            <div class="box"><img src="images/star-war.jpg" alt="">
              <div class="text">
                <h3>Star Wars Battlefront</h3>
                <p>Star Wars™ Battlefront™ is the ultimate Star Wars battle experience, brought to life by the creators of Battlefield. Fight in epic Star Wars battles on iconic planets and rise through the ranks playing as the heroic Rebellion or the evil Galactic Empire.</p>
              </div>
            </div></a><a href="../apex/apex.php">
            <div class="box"><img src="images/apex.jpg" alt="">
              <div class="text">
                <h3>Apex Legends</h3>
                <p>Apex Legends is an online multiplayer battle royale game featuring squads of three players using pre-made characters (called "Legends"), similar to those of hero shooters. Alternate modes have been introduced allowing for single and for two-player squads since the game's release.</p>
              </div>
            </div></a><a href="../distny/distny.php">
            <div class="box"><img src="images/Destiny.jpg" alt="">
              <div class="text">
                <h3>Destiny 2</h3>
                <p>Destiny is an online-only multiplayer first-person shooter video game developed by Bungie and previously published by Activision. ... Activities in Destiny are divided among player versus environment (PvE) and player versus player (PvP) game types.</p>
              </div>
            </div></a><a href="../cs-go/cs-go.php">
            <div class="box"><img src="images/CS-GO.png" alt="">
              <div class="text">
                <h3>CS:GO</h3>
                <p>Counter-Strike: Global Offensive (CS:GO) is a multiplayer first-person shooter video game developed by Valve and Hidden Path Entertainment. ... The game pits two teams against each other: the Terrorists and the Counter-Terrorists. Both sides are tasked with eliminating the other while also completing separate objectives.</p>
              </div>
            </div></a><a href="../dota/dota.php">
            <div class="box"><img src="images/dota.jpg" alt="">
              <div class="text">
                <h3>Dota 2</h3>
                <p>Dota 2 is a multiplayer online battle arena (MOBA) video game in which two teams of five players compete to collectively destroy a large structure defended by the opposing team known as the "Ancient", whilst defending their own.</p>
              </div>
            </div></a><a href="../overwatch/overwatch.php">
            <div class="box"><img src="images/overwatch.jpg" alt="">
              <div class="text">
                <h3>Overwatch</h3>
                <p>Overwatch is a team-based multiplayer first-person shooter developed and published by Blizzard Entertainment. Described as a "hero shooter", Overwatch assigns players into two teams of six, with each player selecting from a large roster of characters, known as "heroes", with unique abilities.</p>
              </div>
            </div></a><a href="../fortnite/fortnite.php">
            <div class="box"><img src="images/fortnite.jpg" alt="">
              <div class="text">
                <h3>Fortnite</h3>
                <p>Fortnite is a survival game where 100 players fight against each other in player versus player combat to be the last one standing. It is a fast-paced, action-packed game, not unlike The Hunger Games, where strategic thinking is a must in order to survive. There are an estimated 125 million players on Fortnite.</p>
              </div>
            </div></a><a href="../valorant/valorant.php">
            <div class="box"><img src="images/valorant.jpg" alt="">
              <div class="text">
                <h3>Valorant</h3>
                <p>Valorant is a team-based tactical shooter and first-person shooter set in the near-future. Players play as one of a set of agents, characters designed based on several countries and cultures around the world.</p>
              </div>
            </div></a><a href="../call of duty/call-of-duty.php">
            <div class="box"><img src="images/call-of-duty.jpg" alt="">
              <div class="text">
                <h3>Call of Duty</h3>
                <p>Call Of Duty (short form: CoD) is a first person and third-person shooter video game series. There are 24 games in total, not counting add-ons and DLCs. The first 8 games, excluding Modern Warfare.</p>
              </div>
            </div></a></div>
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
    <script src="../includs/TitleName/check-title.js"></script>
  </body>
</html>