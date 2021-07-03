<?php
include "../con1.php";
$id=$_GET['hid'];

$qur="delete from  tbl_prison  WHERE Prisonid=$id";

if(mysqli_query($conn,$qur))
{
    
        header('location: ../Admin/Prison.php');   
    
    
}

?>