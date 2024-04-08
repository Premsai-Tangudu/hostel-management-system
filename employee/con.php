<?php
   
   $errmsg="";
 if ($_SERVER['REQUEST_METHOD']=='POST'){

      session_start();
 $username = $_POST['username'];
 $password = $_POST['password'];
 require_once('../dbConnect.php');
 $sql= "SELECT * FROM employee WHERE empid = '$username' AND password = '$password' ";
 $result = mysqli_query($conn,$sql);
 $check = mysqli_fetch_array($result);
 if($check!=NULL){
  $_SESSION['empid'] = $username;
  header('Location:employeedashboard.php');
 }
 else{
  echo "<script type='text/javascript'>alert ('username and password not matched (or) username is invalid');</script>";
  header("Refresh:0.01;url=../login.php",true,303);
}

 }



 

  ?>