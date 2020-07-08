<?php
require"config.php";
session_start();
?>
<?php
$id=$_GET['id'];

?>
<?php

$query2="delete from usercomments where comment='$id'";
$runquery2=mysqli_query($con,$query2);
header("location:test.php");
?>