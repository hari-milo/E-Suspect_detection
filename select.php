<?php
include '../con1.php';
$id=$_POST['employee_id'];
$per="select * from tbl_fir a,tbl_crimecategory b  where a.crime=b.Crimeid  and a.Firnumber='$id'";

$count=mysqli_query($conn,$per);
$count1=mysqli_query($conn,$per);
echo "<h3>FIR Details</h3><br>";
while($row=mysqli_fetch_assoc($count))
    {
$personal="FIR Number : ".$row['Firnumber']."<br>Crime Type : ".$row['Categoryname']."<br> Name of Accused : ".$row['Accused']."<br>";
    }                                                        
    echo $personal;
    echo "<h3>Complainer Details</h3><br>";
    while($row2=mysqli_fetch_array($count1))
    {
    $q="Name : ".$row2['Name']."<br> Gender : ".$row2['Gender']."<br> Parentage Of Applicant : ".$row2['parentageapplicant']."<br>Phone : ".$row2['Phone']."<br>Address : ".$row2['Addrs']."<br>
    Relation with Accused : ".$row2['Raccused']."<br> FIR Date : ".$row2['Fdate']."<br>Police Remark : ".$row2['Policeremark']."<br>Remark date : ".$row2['remarkdate']."<br>";
  
    }
  
    echo $q;










?>