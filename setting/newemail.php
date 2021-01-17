<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location:../loginpage/login.php");
        exit;
    }
    require_once('../includs/connect.php');
    $new_email =  "";
    $new_email_err = "";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty(trim($_POST["new_email"])))
        {
            $new_name_err = "Please enter the new email.";     
        }
        else 
        {
            $query=mysqli_query($link,"select email from users where email='".$_POST["new_email"]."'");
            if(mysqli_num_rows($query) == 1)
            {
                $new_email_err="This email is already taken";
            }
            else
            {
                $new_email = trim($_POST["new_email"]);
            }
        }
        if(empty($new_email_err))
        {
            $sql = "UPDATE users SET email = ? WHERE id = ?";
            if($stmt = mysqli_prepare($link, $sql))
            {
                mysqli_stmt_bind_param($stmt, "si", $param_email, $param_id);
                $param_email = $new_email;
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
?>