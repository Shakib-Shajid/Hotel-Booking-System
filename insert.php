<?php

include 'conn.php';
      
if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $package=$_POST['package'];
    $member=$_POST['member'];
    $place=$_POST['place'];
    $phone=$_POST['phone'];
    $trxid=$_POST['trxid'];

    $q="INSERT INTO inform (name,email,package,member, place, phone, trxid)
    VALUES('$name', '$email', '$package', '$member', '$place', '$phone','$trxid')";
    
    $query=mysqli_query($con,$q);    
    

}

?>
