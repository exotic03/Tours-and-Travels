<?php
session_start();
include("admin/database.php");
$email=$_POST['email'];
$userphone=$_POST['phone'];
$pass=$_POST['pass'];
$sel="SELECT * FROM user_table WHERE email='$email' AND phnumber='$userphone' AND user_pass='$pass'";
$result=$connect->query($sel);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $_SESSION['userid']=$row['id'];
        $_SESSION['userphone']=$row['phnumber'];
        $_SESSION['fullname']=$row['name'];
        $_SESSION['useremail']=$row['email'];
        header("location:home.php");
    }
}
else{
    ?>
    <script>
            alert("Please Enter Valid Credentials");
            window.location="index.html";
        </script>
    <?php
}
?>