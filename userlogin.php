<?php
session_start();
$connect=mysqli_connect("localhost","root","","tour_and_travels");
$email=$_POST['email'];
$username=$_POST['user'];
$pass=$_POST['pass'];
$sel="SELECT * FROM user_table WHERE email='$email' AND username='$username' AND user_pass='$pass'";
$result=$connect->query($sel);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $_SESSION['userid']=$row['id'];
        $_SESSION['username']=$row['username'];
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