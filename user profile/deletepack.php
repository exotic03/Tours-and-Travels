<?php
include("../admin/database.php");
$id=$_GET['pack_id'];
$del="DELETE FROM bookings_info WHERE id='$id'";
$connect->query($del);
header("location:profile.php");
?>