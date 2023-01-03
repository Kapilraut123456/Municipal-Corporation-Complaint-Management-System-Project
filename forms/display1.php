<?php
include 'connect.php';

?>
    <!doctype html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
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
            <div class="b1"><a href="#"><h5>ADMIN</h5></a></div><br>
            <div class="b1"><a href="display.php"><h5>Total Complaint</h5></a></div><br>
            <div class="b1"><a href=""><h5>Complaint Resolve</h5></a></div><br>
            <div class="b1"><a href="display1.php"><h5>Enquiries</h5></a></div><br>
          </div>

     <div class="col-10">
     <h2 style="text-align:center";>ENQURIES</h2><br><br>
    <table class="table">
    <thead>
    <tr>
      <th scope="col" >NO</th>
      <th scope="col" >FIRSTNAME</th>
      <th scope="col" >LASTNAME</th>
      <th scope="col" >MOBILE</th>
      <th scope="col" >EMAIL</th>
      <th scope="col" >SUBJECT</th>
    </tr>
     </thead>
     <tbody>
  </div>
  </div>
  </div>
  
 
  <?php
 
   $sql ="Select * from contact_table";
   $result=mysqli_query($conn,$sql);
   if($result){
    while($row=mysqli_fetch_array($result)){
       $id=$row['id'];  
       $FNAME=$row['firstname'];
       $LNAME=$row['lastname'];
       $MOBILE=$row['mobilenumber'];
       $EMAIL=$row['email'];
       $SUBJECT=$row['subject'];
       echo '<tr>
       <th scope="row">'.$id.'</th>
       <td >'.$FNAME.'</td>
       <td >'.$LNAME.'</td>
       <td >'.$MOBILE.'</td>
       <td >'.$EMAIL.'</td>
       <td >'.$SUBJECT.'</td>
     </tr>';
    }
   }
  ?>
  </body>
</html>