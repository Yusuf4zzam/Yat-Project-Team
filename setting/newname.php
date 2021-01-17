<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location:../loginpage/login.php");
        exit;
    }
    require_once('../includs/connect.php');
    $new_name =  "";
    $new_name_err = "";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty(trim($_POST["new_name"])))
        {
            $new_name_err = "Please enter the new username.";     
        }
        else
        {
            $new_name = trim($_POST["new_name"]);
        }
        if(empty($new_name_err))
        {
            $sql = "UPDATE users SET username = ? WHERE id = ?";
            if($stmt = mysqli_prepare($link, $sql))
            {
                mysqli_stmt_bind_param($stmt, "si", $param_name, $param_id);
                $param_name = $new_name;
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