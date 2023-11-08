<?php
session_start();
include("../admin/database.php");
$name=$_POST['name'];
$phone=$_POST['phn'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$user_id=$_SESSION['userid'];
$update="UPDATE user_table SET name='$name',email='$email',phnumber='$phone',user_pass='$pass' WHERE id='$user_id'";
$connect->query($update);
$_SESSION['userphone']=$phone;
$_SESSION['fullname']=$name;
$_SESSION['useremail']=$email;
header("location:profile.php"); 
?>