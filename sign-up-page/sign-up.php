<?php
    require_once('../includs/connect.php');
    $username = $password = $confirm_password = "";
    $username_err = $password_err = $confirm_password_err = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      if(empty(trim($_POST["username"])))
      {
        $username_err = "Please enter a username.";
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
      if(empty(trim($_POST["password"])))
      {
        $password_err = "Please enter a password.";     
      }
      else
      {
        $password = trim($_POST["password"]);
      }
      if(empty(trim($_POST["confirm-password"])))
      {
          $confirm_password_err = "Please confirm password.";     
      }
      else
      {
          $confirm_password = trim($_POST["confirm-password"]);
      }
      if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
      {
          // Prepare an insert statement
          $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
           
          if($stmt = mysqli_prepare($link, $sql))
          {
              mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
              $param_username = $username;
              $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
              if(mysqli_stmt_execute($stmt))
              {
                  header("location:../login page/login.php");
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
  <head>
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="../includs/FooterFile/css/footerstyle.css">
    <link rel="stylesheet" href="../includs/headerFile/css/headerstyle.css">
    <link rel="stylesheet" href="css/loginstyle.css">
    <script src="https://kit.fontawesome.com/112897e29a.js" crossorigin="anonymous"></script>
  </head>
  <body> 
    <header>
      <div class="info">
        <div class="container">
          <div class="left-box"><a href=""><i class="far fa-envelope"></i>info@xgames.com</a><a href=""><i class="far fa-clock"></i>Live Support</a></div>
          <div class="right-box">
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
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <div class="logo"><a href="#">
              <h2> <span>x</span>games</h2></a></div>
          <ul class="main-ul">
            <li><a href="">home</a></li>
            <li><a href="">play</a></li>
            <li><a href="">games
                <ul>
                  <li> <a href="">bla</a></li>
                  <li> <a href="">bla</a></li>
                  <li> <a href="">bla</a></li>
                </ul></a></li>
            <li><a href="">lottery</a></li>
            <li><a href="">pages
                <ul>
                  <li> <a href="">bla</a></li>
                  <li> <a href="">bla</a></li>
                  <li> <a href="">bla</a></li>
                </ul></a></li>
            <li><a href="">blog
                <ul>
                  <li> <a href="">bla</a></li>
                  <li> <a href="">bla</a></li>
                  <li> <a href="">bla</a></li>
                </ul></a></li>
            <li><a href="">Contact</a></li>
            <li class="join"><a href="">join now</a></li>
          </ul>
          <div class="toggle-button"><i class="fas fa-bars"></i></div>
          <div class="toggle">
            <div class="logo"><a href="#">
                <h2> <span>x</span>games</h2></a>
              <div class="toggle-time"><i class="fas fa-times"></i></div>
            </div>
            <ul class="toggle-ul"><a href="">
                <li>home</li></a><a href="">
                <li>play</li></a><a href="">
                <li>games</li></a><a href="">
                <li>lottrey</li></a><a href="">
                <li>pages</li></a><a href="">
                <li>blog</li></a><a href="">
                <li>contacts</li></a></ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="slider">
      <div class="container">
        <div class="register">
          <div class="header">
            <h2>register</h2>
          </div>
          <form autocomplete="off" id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="control-form">
              <input class="main" type="text" name="username" placeholder="User Name" id="username">
              <div class="error-username">error</div><i class="fas fa-check-circle"></i><i class="fas fa-exclamation-circle"></i>
            </div>
            <div class="control-form">
              <input class="main" type="text" name="email" placeholder="Email" id="email">
              <div class="error-email">error</div><i class="fas fa-check-circle"></i><i class="fas fa-exclamation-circle"></i>
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
            <div class="social">
              <p class="face">Facebook</p>
              <p class="twitter">Twitter</p>
              <p class="google">Google+</p>
            </div>
            <p class="account">have an account <a href="../login page/login.html">Login</a></p>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="box-1"><a href="#">
            <h2> <span>x</span>games</h2></a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi eligendi, iusto, consequatur non voluptates, dolores eius enim quisquam nulla quae mollitia deserunt at modi tempora facilis ratione tenetur repellat molestias?</p>
          <form action="">
            <input type="text" name="search" placeholder="User Name">
            <button>@</button>
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
    <!--<script src="js/sign-up-validation.js"></script>-->
    <script src="../includs/headerFile/js/toggleheader.js"></script>
  </body>
</html>