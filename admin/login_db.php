<?php
 session_start();
 $connect=mysqli_connect("localhost","root","","tour_and_travels");
 extract($_POST);
 $sel="SELECT * FROM admin_table WHERE (email=$uemail OR username=$uemail) AND pass=$pass";
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