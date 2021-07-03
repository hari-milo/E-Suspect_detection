<?php
include "../con1.php";
$id=$_GET['hid'];

$qur="delete from  tbl_court  WHERE Courtid=$id";

if(mysqli_query($conn,$qur))
{
    
        header('location: ../Admin/Court.php');   
    
    
}

?>