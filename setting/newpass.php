<?php
     session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location:../loginpage/login.php");
        exit;
    }
    require_once('../includs/connect.php');
    $user=$_SESSION['username'];
    $new_password = $confirm_password = "";
    $new_password_err = $confirm_password_err = "";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $old_password= $_POST["old_password"];
        $queryget = mysqli_query ($link,"SELECT password FROM users WHERE username='$user'");
        $row = mysqli_fetch_array($queryget);
        if(password_verify($old_password,$row["password"]))
        {
            if(empty(trim($_POST["new_password"])))
            {
                $new_password_err = "Please enter the new password.";     
            }
            elseif(strlen(trim($_POST["new_password"])) < 8)
            {
                $new_password_err = "Password must have atleast 8 characters.";
            }
            else
            {
                $new_password = trim($_POST["new_password"]);
            }
            if(empty(trim($_POST["confirm_password"])))
            {
                $confirm_password_err = "Please confirm the password.";
            }
            else
            {
                $confirm_password = trim($_POST["confirm_password"]);
                if(empty($new_password_err) && ($new_password != $confirm_password))
                {
                    $confirm_password_err = "Password did not match.";
                }
            }
            if(empty($new_password_err) && empty($confirm_password_err))
            {
                $sql = "UPDATE users SET password = ? WHERE id = ?";
                if($stmt = mysqli_prepare($link, $sql))
                {
                    mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
                    $param_password = password_hash($new_password, PASSWORD_DEFAULT);
                    $param_id = $_SESSION["id"];
                    if(mysqli_stmt_execute($stmt))
                    {
                        session_destroy();
                        header("location:../loginpage/login.php");
                        exit();
                    }
                    else
                    {
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    mysqli_stmt_close($stmt);
                }
            }
            mysqli_close($link);
        }
        else
        {
            echo '<h2>Old Password Not Correct !</h2>';
        }
    }
?>