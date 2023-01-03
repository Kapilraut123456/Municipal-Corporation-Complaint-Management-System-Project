<?php
include 'connect.php';

?>
    <!doctype html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <style>
        
  body{
  background-color: darkgray;
    }
    </style>
        <link rel="shortcut icon" href="assete/favicon.ico.png" type="image/x-icon">
    </head>
    <body >
    <div class="container-fluid">
        <div class="row bl">
          <div class="col-2 dash">
            <br>
            <div class="b1"><a href="#"><h5>EMPLOYEE</h5></a></div><br>
            <div class="b1"><a href="employee1.php"><h5>Total Complaint</h5></a></div><br>
            <div class="b1"><a href=""><h5>Complaint Resolve</h5></a></div><br>
            <div class="b1"><a href="employee2.php"><h5>Enquiries</h5></a></div><br>
          </div>

     <div class="col-10">
     <h2 style="text-align:center";>COMPLAINT RECEIVED</h2><br><br>
    <table class="table">
    <thead>
    <tr>
      <th scope="col" >NO</th>
      <th scope="col" >FULLNAME</th>
      <th scope="col" >EMAIL</th>
      <th scope="col" >CATEGORY</th>
      <th scope="col" >COMPLAINT</th>
      <th scope="col" >DESCRIPTION</th>
      <th scope="col" >ADDRESS</th>
      <th scope="col" >LANDMARK</th>
      <th scope="col" >IMAGE</th>
      <th scope="col" >OPERATION</th>
    </tr>
     </thead>
     <tbody>
  </div>
  </div>
  </div>
  
 
  <?php
 
   $sql ="Select * from complaint_tab";
   $result=mysqli_query($conn,$sql);
   if($result){
    while($row=mysqli_fetch_array($result)){
       $id=$row['id'];  
       $FNAME=$row['Fullname'];
       $EMAIL=$row['Email'];
       $CATEGORY=$row['Complaint_category'];
       $COMPLAINT=$row['Complaint'];
       $TEXTAREA=$row['Description'];
       $ADDRESS=$row['Address'];
       $LANDMARK=$row['Landmark'];
       $Image=$row['Image'];

       echo '<tr>
       <th scope="row">'.$id.'</th>
       <td >'.$FNAME.'</td>
       <td >'.$EMAIL.'</td>
       <td >'.$CATEGORY.'</td>
       <td >'.$COMPLAINT.'</td>
       <td >'.$TEXTAREA.'</td>
       <td >'.$ADDRESS.'</td>
       <td >'.$LANDMARK.'</td>
       <td ><img src ='.$Image.' width="200px" height = "70px"></td>
       <td>
       <button class="btn btn-success"><a href="" class="text-light" style="text-decoration:none;">Resolve</a></button>
     </td>
     </tr>';
    }
   }
  ?>
  </body>
</html>