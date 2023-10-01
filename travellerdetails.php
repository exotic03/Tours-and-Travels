<?php
session_start();
$tquantity=$_POST['quantity'];
$date=$_POST['date'];
$cnumber=$_POST['tnumber'];
$tname=$_POST['tname'];
$tage=$_POST['tage'];
$_SESSION['temp_data']=array('quantity'=>$tquantity,'date'=>$date,'contact'=>$cnumber,'name'=>$tname,'age'=>$tage);
echo "Traveller Details Succesfully Submitted";
?>