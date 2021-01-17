<?php
  include('newemail.php');
?>
<!DOCTYPE html>
<html>
  <head><meta charset="UTF-8">
<meta name="description" content="You Can Change Your Settings User Name Email and Password">
<meta name="keywords" content="ExGames, Exgames settings">
<meta name="author" content="Yusuf & Mokhtar & Hager & Hadeer">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
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
                  <li> <a href="../about-us/about-us.html">about us</a></li>
                  <li> <a href="../team/team.html">team</a></li>
                  <li> <a href="../faq/faq.html">faq</a></li>
                  <li> <a href="../terms/terms.html">terms & Conditions</a></li>
                </ul></a></li>
            <li><a href="../contact/contact.html">Contact</a></li>
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
                <li>games</li></a><a href="../about-us/about-us.html">
                <li>about us</li></a><a href="../team/team.html">
                <li>team</li></a><a href="../faq/faq.html">
                <li>faq</li></a><a href="../terms/terms.html">
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
    <div class="setting">
      <div class="container flex-center ">
        <div class="form">
          <div class="text">
            <h4><i class="fas fa-plus"></i><i class="fas fa-minus"></i>Change User Name</h4>
          </div>
          <form method="post"action="newname.php" id="form-1">
            <div class="control-form">
              <input type="text" name="new_name" placeholder="Type The New Name" value="" id="username">
              <div class="error-username">error</div><i class="fas fa-check-circle"></i><i class="fas fa-exclamation-circle"></i>
            </div>
            <button class="global-hover">Submit</button>
          </form>
        </div>
        <div class="form">
          <div class="text flex align-center">
            <h4><i class="fas fa-plus"></i><i class="fas fa-minus"></i>Change Email</h4>
          </div>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-2">
            <div class="control-form <?php echo (!empty($new_email_err)) ? 'error' : ''; ?>">
              <input type="text" name="new_email" placeholder="Type New Email" id="email">
              <span class="help-block" style="color:#e74c3d"><?php echo $new_email_err; ?></span>
              <div class="error-username"></div><i class="fas fa-check-circle"></i><i class="fas fa-exclamation-circle"></i>
            </div>
            <button class="global-hover">Submit</button>
          </form>
        </div>
        <div class="form">
          <div class="text flex align-center">
            <h4><i class="fas fa-plus"></i><i class="fas fa-minus"></i>Change Password</h4>
          </div>
          <form method="post" action="newpass.php" id="form-3">
            <div class="control-form">
              <input type="password" name="old_password" placeholder="Type Old Password" id="old-password">
              <div class="error-username">error</div><i class="fas fa-check-circle"></i><i class="fas fa-exclamation-circle"></i>
            </div>
            <div class="control-form">
              <input type="password" name="new_password" placeholder="Type The New Password" id="new-password">
              <div class="error-username">error</div><i class="fas fa-check-circle"></i><i class="fas fa-exclamation-circle"></i>
            </div>
            <div class="control-form">
              <input type="password" name="confirm_password" placeholder="Confirm Password" id="confirm-password">
              <div class="error-username">error</div><i class="fas fa-check-circle"></i><i class="fas fa-exclamation-circle"></i>
            </div>
            <button class="global-hover">Submit</button>
          </form>
        </div>
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
    <script src="js/toggle.js"></script>
    <script src="js/setting.js"></script>
    <script src="../includs/TitleName/check-title.js"></script>
  </body>
</html>