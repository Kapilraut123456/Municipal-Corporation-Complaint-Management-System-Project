<?php
include 'connect.php';
if(isset($_GET['dell'])){
    $id=$_GET['dell'];

    $sql ="delete from complaint_tab where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Deleted Successfully";
       header('location:display.php'); 
    }else{
        die(mysqli_error($conn));
    }
}
?>