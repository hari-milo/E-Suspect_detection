<?php
include "../con1.php";
$id=$_GET['hid'];

$qur="delete from  tbl_section  WHERE Sectionid=$id";

if(mysqli_query($conn,$qur))
{
    
        header('location: ../Admin/Section.php');   
    
    
}

?>