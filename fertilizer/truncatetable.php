<?php include('inc/connection.php'); ?>
<?php

$sql1=mysqli_query($connection,'TRUNCATE TABLE fertilizer1');
$sql2=mysqli_query($connection,'TRUNCATE TABLE fertilizer2');
$sql3=mysqli_query($connection,'TRUNCATE TABLE fertilizer3');

header("location: ../fertilizer/fertilizerinfo.php");

?>