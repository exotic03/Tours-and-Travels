<?php
 session_start();
 include("database.php");
 $email=$_POST['email'];
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 $sel="SELECT * FROM admin_table WHERE email='$email' AND username='$user' AND pass='$pass'";
 $result=$connect->query($sel);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $_SESSION['adminid']=$row['id'];
            $_SESSION['adminuser']=$row['username'];
            header("location:index.php");
        }
    }else{
        ?>
        <script>
            alert("Please Enter Valid Credentials");
            window.location="login.php";
        </script>
    <?php    
    }
?>