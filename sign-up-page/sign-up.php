<?php
    require_once('../includs/connect.php');
    $username = $password = $confirm_password = $email= "";
    $username_err = $password_err = $confirm_password_err = $email_err ="";
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      if(empty(trim($_POST["username"])))
      {
        $username_err = ".";
      }
      else
      {
        $sql = "SELECT id FROM users WHERE username = ?";
          if($stmt = mysqli_prepare($link, $sql))
          {
              mysqli_stmt_bind_param($stmt, "s", $param_username);
              $param_username = trim($_POST["username"]);
              if(mysqli_stmt_execute($stmt))
              {
                  mysqli_stmt_store_result($stmt);
                  
                  if(mysqli_stmt_num_rows($stmt) == 1)
                  {
                      $username_err = "This username is already taken.";
                  }
                  else
                  {
                      $username = trim($_POST["username"]);
                  }
              }
              else
              {
                  echo "Oops! Something went wrong. Please try again later.";
              }
              mysqli_stmt_close($stmt);
          }
      }
      
    if(empty(trim($_POST["email"])))
    {
        $email_err = ".";
    }
    else
    {
        $sql = "SELECT id FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql))
        {
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            $param_email = trim($_POST["email"]);
            
            if(mysqli_stmt_execute($stmt))
            {
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $email_err = "This email is already taken.";
                }
                else
                {
                    $email = trim($_POST["email"]);
                }
            }
            else
            {
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    
      if(empty(trim($_POST["password"])))
      {
        $password_err = ".";     
      }
      else
      {
        $password = trim($_POST["password"]);
      }
      if(empty(trim($_POST["confirm-password"])))
      {
          $confirm_password_err = ".";     
      }
      else
      {
          $confirm_password = trim($_POST["confirm-password"]);
      }
      if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err))
      {
          // Prepare an insert statement
          $sql = "INSERT INTO users (username,email, password) VALUES (?, ?, ?)";
           
          if($stmt = mysqli_prepare($link, $sql))
          {
              mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);
              $param_username = $username;
              $param_email=$email;
              $param_password = password_hash($password, PASSWORD_DEFAULT); 
              if(mysqli_stmt_execute($stmt))
              {
                  header("location:../loginpage/login.php");
              }
              else
              {
                  echo "Something went wrong. Please try again later.";
              }
              mysqli_stmt_close($stmt);
          }
      }
      mysqli_close($link);
    }
?>
<!DOCTYPE html>
<html>
  <head><meta charset="UTF-8">
<meta name="description" content="Sign Up Be One of Owr Family So You Cn Donload Games and Win Rewards">
<meta name="keywords" content="ExGames, Exgames signup, signup Exgames">
<meta name="author" content="Yusuf & Mokhtar & Hager & Hadeer">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="css/signupstyle.css">
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
              <span style="color:#D64481">
                <?php
                  if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true))
                  {
                    echo '<a href="../loginpage/login.php">login</a>';
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
      <div class="container flex-center">
        <div class="register global-form">
          <div class="header">
            <h2>register</h2>
          </div>
          <form autocomplete="off" id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="control-form <?php echo (!empty($username_err)) ? 'error' : ''; ?>">
              <input class="main" type="text" name="username" placeholder="User Name" id="username" value="<?php echo $username; ?>">
              <span class="help-block" style="color:#e74c3d"><?php echo $username_err;?></span>
              <div class="error-username"></div><i class="fas fa-check-circle"></i><i class="fas fa-exclamation-circle"></i>
            </div>
            <div class="control-form <?php echo (!empty($email_err)) ? 'error' : ''; ?>">
              <input class="main" type="text" name="email" placeholder="Email" id="email" value="<?php echo $email; ?>">
              <span class="help-block" style="color:#e74c3d"><?php echo $email_err;?></span>
              <div class="error-email"></div><i class="fas fa-check-circle"></i><i class="fas fa-exclamation-circle"></i>
            </div>
            <div class="control-form">
              <input class="main" type="password" name="password" placeholder="Password" id="password">
              <div class="error-password">error</div><i class="fas fa-check-circle"></i><i class="fas fa-exclamation-circle"></i>
            </div>
            <div class="control-form">
              <input class="main" type="password" name="confirm-password" placeholder="Confirm Password" id="password2">
              <div class="error-confirm-password">error</div><i class="fas fa-check-circle"></i><i class="fas fa-exclamation-circle"></i>
            </div>
            <div class="control-form">
              <input type="checkbox" name="check-terms" placeholder="Confirm Password" id="check-terms">
              <label for="check-terms">I agree Terms & Conditions</label>
              <div class="error-terms">error</div>
            </div>
            <div class="control-submit">
              <input type="submit" name="sign-submit" value="sign up">
            </div>
          </form>
          <div class="other-account">
            <h4>Or Signup With</h4>
            <div class="social flex-center">
              <p class="face">Facebook</p>
              <p class="twitter">Twitter</p>
              <p class="google">Google+</p>
            </div>
            <p class="account">have an account <a href="../loginpage/login.php">Login</a></p>
          </div>
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
    <script src="js/sign-up-validation.js"></script>
    <script src="../includs/headerFile/js/skrollr.js"></script>
    <script>var s = skrollr.init();</script>
    <script src="../includs/headerFile/js/toggleheader.js"></script>
  </body>
</html>