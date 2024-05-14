
<?php

    if(isset($_POST["btnSubmit"])){

        $firtname = $_POST["txtFirstname"]; // input First Name
        $Lasttname = $_POST["txtLasttname"]; // input  First Name
        $email = $_POST["txtEmail"]; // input email
        $password = $_POST["txtPassword"];    // input password
        $password = $_POST["txtConPassword"]; // input Confirm Password

        //Connetion String
        $con = mysqli_connect("localhost","u791693540_pasindu","Pasindu2002");

        //Select Database
        mysqli_select_db($con,"u791693540_edamalk");

        //sql command for verified email & password
        $sql = "INSERT INTO user VALUES ('$email','$firtname','$Lasttname','$password');";

        $ret = mysqli_query($con,$sql);

            header("Location:Login.php");

        
        mysqli_close($con);

    }
        
?>


<!DOCTYPE html>
<html lang="en">

  <head>

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>edama.lk - Sign in now</title>
       <link rel="shortcut icon" type="image" href="image/Logo.png">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

      <style>

        p{
          font-size: 14px;
          
        }

        a{
          text-decoration: none;
        }

        .btnReg{
                font-weight: 400;
                transition: .5s;
                margin-top: 20px;
          }

       .btnReg:hover{
                border: 1.5px solid #0080ff;
                background: transparent;
                color: #0080ff;
                font-weight: 500;
        }
      </style>

  </head>

  <body>

      <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image" style=" background: url('image/background.png'); height: 200px; margin-bottom: 10px;"><img src="image/Logo.png" width="180px" height=60px" alt=""></div>
        

        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
              margin-top: -100px;
              background: hsla(0, 0%, 100%, 0.8);
              backdrop-filter: blur(30px);
              ">
          <div class="card-body py-5 px-md-5">

            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                <h2 class="fw-bold mb-5" style="color: #0080ff;">Sign up now</h2>

                <form action="#" method="post" name="frmSubmit" id="frmSubmit">
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline"> 
                        <input type="text"  class="form-control" id="txtFirstname" name="txtFirstname" placeholder="First Name" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text"  class="form-control" id="txtLasttname" name="txtLasttname" placeholder="Last Name" required>                 
                      </div>
                    </div>
                  </div>

                  <!-- Email input -->
                  <div class="form-outline mb-4">       
                    <input type="email"  class="form-control" id="txtEmail" name="txtEmail" placeholder="Email" required>  
                              
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">          
                    <input type="password"  class="form-control" id="txtPassword" name="txtPassword" placeholder="Password" required>    
                           
                  </div>

                  <!-- Confirm Password input -->
                  <div class="form-outline mb-4">          
                    <input type="password"  class="form-control" id="txtConPassword" name="txtConPassword" placeholder="Confirm Password" required>            
                  </div>

                  <div style="text-align: left;">
                    <p>  <input type="checkbox" name="checkbox" id=""> &nbsp; I have read and to the terms, conditions and privacy policy 
                      of edama.lk <a href="#">Terms</a> & <a href="#">Condition</a> & <a href="#">Privacy Policy</a> </p>
                  </div>

                  <!-- Submit button -->
                  <div class="d-grid gap-2 col-6 mx-auto mb-4">
                    <button class="btn btn-primary btnReg" type="submit" id="btnSubmit" name="btnSubmit">Sing Up</button>
                  </div>

                  <!-- Register buttons -->
                  <div class="text-center">
                    <p> Already have an accoount? <a href="Login.php">Login</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div style="background: #f0f2f0; font-size: 14px;">
            Copyright © 2023 edama.lk, All Rights Reserved.
        </div>

        </div>
    </section>


    <script type="text/javascript">

    </script>


  </body>


</html>

