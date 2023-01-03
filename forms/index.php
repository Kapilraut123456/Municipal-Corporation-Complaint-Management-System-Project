
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Muncipal Corporation Management System</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="style1.css">
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="shortcut icon" href="assete/favicon.ico.png" type="image/x-icon">
  </head>
  <body class="background">
    <section class="header_menu" id="header_menu">
      <nav class="navbar navbar-expand-lg bg-light" id="navbar">
        <div class="container-fluid">
          <a href=""><img
              class="modelImg"
              style="width: 50px"
              ;
              src="assete/logo_footer.png"
              alt="model_image"
          /></a>
          <a class="navbar-brand" href="#"
            >Muncipal Corporation Management System
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link active text-danger"
                  aria-current="page"
                  href="#" 
                  >HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ABOUT US</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">CONTACT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin.php">
                  ADMIN</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="emp_login.php">EMPLOYEE</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section><br><br><br><br><br><br>

    <div class="row justify-content-evenly">
      <div class="col-4">
        <a href="nalogin.php"><h3 class="sty">CITIZEN LOGIN</h3></a>
      </div>
      <div class="col-4">
        <a href="registration.php"><h3 class="sty">CITIZEN REGISTRATION</h3></a>
      </div>
    </div>
      <br><br>
      <div class="container dept">
     <div class="row">
      <div class="col col-sm-4">
        <div class="box">
        <a href="#"><img
          class="modelImg" style="height:255px";
          src="assete/img4.jpg"
          alt="model_image"
        /></a>
        </div><br>
        <div class="sty2">
        <h5>Water Supply Department</h5>
        <p></p>Water supply is the provision of water by public utilities, commercial organisations, community endeavors or by individuals, usually via a system of pumps and pipes.</p>
        </div>
      </div>
        <div class="col col-sm-4">
          <div class="box">
          <a href="#"><img
            class="modelImg" style="width: 400px ;height:255px";
            src="assete/img7.jpg"
            alt="model_image"
          /></a>
          </div><br>
          <div class="sty2">
          <h5>Healthcare Department</h5>
          <p>healthcare is the maintenance or improvement of health via the prevention, diagnosis, and treatment of disease, illness, injury, and other physical and mental impairments in people.</p>
          </div>
        </div>
        <div class="col col-sm-4">
          <div class="box">
          <a href="#"><img class="modelImg" src="assete/img6.jpg" alt="model_image" /></a>
          </div><br>
          <div class="sty2">
          <h5>Fire Extinguisher Department</h5>
          <p>The fire extinguisher is a device used by the fire brigade personnel to control fire. According to the concept of the fire triangle, for the generation of fire, we need three things to be present simultaneously.</p>
          </div>
        </div>
        </div>
        </div>
        <br><br>
    <div class="card text-center">
      <div class="card-header">
        <h5
          style="
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
              sans-serif;
          "
        >
          Follow us
        </h5>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-google"></a>
      </div>
      <div class="card-body bg-success p-2 text-dark bg-opacity-25">
        <div class="row justify-content-end">
          <div class="row justify-content-end">
            <div class="col-3 Img">
              <a href=""
                ><img
                  class="modelImg"
                  style="width: 70px";
                  src=" assete/logo_footer.png"
                  alt="model_image"
              /></a>
              <h5>Muncipal Corporation Management System</h5>
            </div>
            <div class="col-3 sty1">
              <h5>SERVICES</h5>
              <p><a href=""> Online Services</a> </p>
              <p><a href=""> MC CARE 2.0</a></p>
              <p><a href=""> Open Data Portal</a></p>
              <p><a href=""> MC App Store</a></p>
            </div>
            <div class="col-3 sty1">
              <h5>INFORMATION</h5>
              <p><a href=""> E-Newsletter</a></p>
              <p><a href=""> Open Data Portal</a></p>
              <p><a href=""> Kalyan Varta</a></p>
              <p><a href=""> Property Tax</a> </p>
            </div>
            <div class="col-3 sty1">
              <h5>NAVIGATE</h5>
              <p><a href="#"> Home Page</a></p>
              <p><a href="contact.php"> Contact Us</a></p>
              <p><a href=""> Site Map</a></p>
            </div>
          </div>
        </div>
        <a href="contact.php" class="btn btn-danger">Contact us</a>
      </div>
      <div class="card-footer text-muted">
        <div class="row justify-content-between">
          <div class="col-4">Municipal Corporation. All Rights Reserved.</div>
          <div class="col-4">
            Designed & Developed by : Municipal Corporation.
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>

  </body>
</html>
