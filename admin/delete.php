<?php
// product delete
include 'config/db.php';
$music_number = $_POST['id'];
// echo '$music_number';
$qry = "DELETE FROM products WHERE id ='$music_number'";
$result=mysqli_query($connection ,$qry);





?>

