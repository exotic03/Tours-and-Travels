<?php
session_start();
include("admin/database.php");
$paymentid=$_POST['payment_id'];
$id=$_POST["package_id"];
$user=$_SESSION['userid'];
$sel="SELECT * FROM user_table WHERE id='$user'";
$res=$connect->query($sel);
$data=$res->fetch_assoc();
$userid=$data['id'];
$selpack="SELECT * FROM package_info WHERE id='$id'";
$result=$connect->query($selpack);
$packdata=$result->fetch_assoc();
$package_name=$packdata['package_name'];
$package_price=$packdata['package_price'];
$tquantity=$_SESSION['temp_data']['quantity'];
$tdate=$_SESSION['temp_data']['date'];
$contact_no=$_SESSION['temp_data']['contact'];
$tname=$_SESSION['temp_data']['name'];
$tage=$_SESSION['temp_data']['age'];
$total_price=$package_price*$tquantity;
$insert="INSERT INTO bookings_info SET package_name='$package_name',package_price='$total_price',tourist_number='$tquantity',date='$tdate',contact_no='$contact_no',traveller_name='$tname',traveller_age='$tage',user_id='$userid',payment_id='$paymentid'";
$succres=$connect->query($insert);
if($succres){
    echo 'done';
    $_SESSION['paymentid']=$paymentid;
}
?>