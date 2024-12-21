<?php 
require ("connection.php");

if(isset($_POST["btn_signup"]))
{
    $name = $_POST["name"];
    $email =$_POST["email"];
    $password = $_POST["pswd"];

    $select = "SELECT * FROM `data` WHERE `Email` = '$email'";
    $query = mysqli_query($connect,$select);

    if(mysqli_num_rows($query) > 0){
        header("location: signup.php?error=Email already Registered");
    }
    else{
    $insert = "INSERT INTO `data`( `Name`, `Email`, `Password`) VALUES ('$name','$email','$password')";
    mysqli_query($connect,$insert);
    header("location: login.php");
    exit();
    }
}


session_start();
if(isset($_POST["btn_login"]))
{
    $email = $_POST["lemail"];
    $pass =$_POST["lpswd"];

    $select = "SELECT * FROM `data` WHERE `Email` = '$email' AND `Password` = '$pass'";
    $data = mysqli_query($connect,$select);
    if(mysqli_num_rows($data)>0){
        $_SESSION["emaill"] = $email;
        header("location: welcome.php");
    }
    else{
        header("location: login.php?Error=Email and Password is not correct");
    }
}
?>