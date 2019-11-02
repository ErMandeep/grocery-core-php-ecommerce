<?php
// product delete
include 'config/db.php';
$music_number = $_GET['id'];
// echo '$music_number';
$qry = "DELETE FROM coupon WHERE id ='$music_number'";
$result=mysqli_query($connection ,$qry);
if($result){
	header('location: coupon.php');
}

?>

