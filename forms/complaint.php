<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $FNAME=$_POST['fullname'];
    $EMAIL=$_POST['email'];
    $CATEGORY=$_POST['category'];
    $COMPLAINT=$_POST['complaint'];
    $TEXTAREA=$_POST['textarea'];
    $ADDRESS=$_POST['address'];
    $LANDMARK=$_POST['landmark'];
    $Image=$_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name =  $_FILES['image']['name'];
    $img_des = "assete/".$img_name;
    move_uploaded_file($img_loc,'assete/'.$img_name);
   
    $sql = "INSERT INTO complaint_tab (Fullname,Email,Complaint_category,Complaint,Description,Address,Landmark,Image)
     VALUES ('$FNAME', '$EMAIL', '$CATEGORY', '$COMPLAINT', '$TEXTAREA', '$ADDRESS', '$LANDMARK','$img_des')";
     $result=mysqli_query($conn,$sql);
     if($result){
      echo
      "<script> alert('Complaint Submit Successfully'); </script>";
     }else{
        die(mysqli_error($conn));
     }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="shortcut icon" href="assete/favicon.ico.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Complaint</title>
  </head>
  <body class="gradient-custom">
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-9 col-xl-7">
            <div
              class="card shadow-2-strong card-registration"
              style="border-radius: 15px"
            >
              <div class="card-body p-4 p-md-5">
                <h2 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Complaint </h2>
                <form class="fw-bold" action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="firstName"
                          >FullName</label
                        >
                        <input
                          type="text"
                          id="firstName"
                          name="fullname"
                          class="form-control form-control-lg fs-6"
                          placeholder="FullName"
                          require
                        />    
                      </div>
                    </div>

                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="lastName"
                          >Email</label
                        >
                        <input
                          type="text"
                          id="lastName"
                          name="email"
                          class="form-control form-control-lg fs-6"
                          placeholder="Email"
                          require
                        />              
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <label class="form-label select-label">Complaint</label>
                      <select class="form-control form-control-lg fs-6 "name="category"  require>
                        <option >Water Complaint</option>
                      </select>
                    </div>

                    <div class="col-md-6 mb-4">
                      <label class="form-label select-label">Complaint  Category</label>
                      <select class="form-control form-control-lg fs-6 " name="complaint"  require>
                      <option >Complaint Category</option>
                      <option>Water Flowing / wastage</option>
                        <option>Removal / Installation of new water meters</option>
                        <option>Low pressure to entire area</option>
                        <option>NO water supply</option>
                        <option>pipeline / Valve Leakage of PMC line</option>
                        <option>Turbid Water Problem</option>
                        <option >Water misuse (Washing Center / Spreading)</option>
                        <option>Water meter not working</option>
                        <option >Leakage of public toilet water tank </option>
                        <option>Other (Water Supply)</option>
                      </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group purple-border">

                      <label for="exampleFormControlTextarea4">Description</label>
                      <textarea class="form-control" id="exampleFormControlTextarea4" name="textarea" rows="3"  require></textarea>
                    </div>

                    
                    <div class="form-outline mb-3 p-4 ps-3">
                      <label class="form-label" for="form3Example8">Address</label>
                      <input type="text" id="form3Example8" name="address" class="form-control form-control-lg fs-6" placeholder="Address"  require>
                      
                    </div>
                      
                        <div class="form-group purple-border">
                          <label for="exampleFormControlTextarea4">Landmark</label>
                          <textarea class="form-control" name="landmark" id="exampleFormControlTextarea4" rows="3"  require></textarea>
                        </div>

                        <div class="row align-items-center py-4">
                          <div class="ps-3">
            
                            <h6 class="mb-3 fw-bold">Attachment</h6>
            
                          </div>
                          <div class="pe-5">
            
                            <input type="file" name="image" class="form-control"  require>
                            <div class="small text-muted mt-2">Attachment (Accepted file type jpg,jpeg,png or pdf.Maximum 3 Files,Each file limit 3 MB)</div>
            
                          </div>
                        </div>
            

                  <div class="mt-4 pt-2 text-center">
                    <input
                      class="btn btn-primary btn-lg"
                      type="submit"
                      name="submit"
                      value="Submit"
                    />
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
