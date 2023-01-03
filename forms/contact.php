<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $mobile= $_POST["mobile"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];

    $sql = "INSERT INTO contact_table(firstname,lastname,mobilenumber,email,subject)
     VALUES ('$firstname', '$lastname', '$mobile', '$email', '$subject')";
     $result=mysqli_query($conn,$sql);
     if($result){
     
     }else{
        die(mysqli_error($conn));
     }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="shortcut icon" href="assete/favicon.ico.png" type="image/x-icon">
  </head>
  <body class="attribute">
    <div class="container">
      <h3 style="text-align: center">CONTACT FORM</h3>

      <form name="myForm" action="" method="post" onsubmit="return validateForm()">
        <label for="fname">First Name</label>
        <input
          type="text"
          id="fname"
          name="firstname"
          placeholder="Enter Your Name"
        />

        <label for="lname">Last Name</label>
        <input
          type="text"
          id="lname"
          name="lastname"
          placeholder="Enter Your last Name"
        />

        <label for="lname">Mobile No</label>
        <input
          type="text"
          id="lname"
          name="mobile"
          placeholder="Enter Your Mobile Number"
        />

        <label for="lname">E-mail</label>
        <input
          type="text"
          id="lname"
          name="email"
          placeholder="Enter Your Mobile Number"
        />

        <label for="subject">Subject</label>
        <textarea
          id="subject"
          name="subject"
          placeholder="Write Something"
          style="height: 200px"
        ></textarea>

        <input type="submit" value="Submit" name="submit" class="con" />
      </form>
    </div>
    <script src="script.js"></script>
  </body>
</html>
