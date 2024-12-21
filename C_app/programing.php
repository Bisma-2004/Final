<?php

require("connection.php");

if(isset($_POST["singup"]))
{
  $name =  $_POST["name"];
  $email =  $_POST["email"];
  $password =  $_POST["password"];
  $select   = "SELECT * FROM `cms` WHERE `Email` = '$email'";
  $data = mysqli_query($connection,$select);
  
  if(mysqli_num_rows($data)> 0)
  {
    header("location: singup.php?error=Email already registered");
    exit();
  }else{
  $query = "INSERT INTO `cms`(`Name`, `Email`, `Password`) VALUES ('$name','$email','$password')";
  mysqli_query($connection,$query);
  header("Location: Login.php?success=Registered successfully");
  exit();
  }

}
session_start();
if(isset($_POST["login"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];
    $select = "SELECT * FROM `cms` WHERE Email = '$email' And Password = '$password'";
    $data = mysqli_query($connection,$select);
    if(mysqli_num_rows($data)> 0)
    {
      $_SESSION["emaill"] = $email;
      header("Location: create.php");
      exit();
    }else{
      header("Location: Login.php?error = Email or Password is incorrect");
    }
  }

?>