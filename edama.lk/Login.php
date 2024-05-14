
<?php

  if(isset($_POST["btnSub"])){

    $email = $_POST["txtEmail"]; // input email
    $password = $_POST["txtPassword"];    // input password

    //Connetion String
    $con = mysqli_connect("localhost","u791693540_pasindu","Pasindu2002");

    //Select Database
    mysqli_select_db($con,"u791693540_edamalk");

    //sql command for verified email & password
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";

    $ret = mysqli_query($con,$sql);

    if($row =mysqli_fetch_array($ret)){

        header("Location:Ads.php");
        
    }
    else{
        echo "<script type='text/javascript'>alert('Invalid Login');</script>";
    }

    mysqli_close($con);


  }
    
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>edama.lk - Login now</title>
         <link rel="shortcut icon" type="image" href="image/Logo.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

        <style>

            a{
                text-decoration: none;
            }

            p{
                font-size: 13.5px;
            }
            .right{
                text-align: right;
                
            }

            .btnLog{
                font-weight: 400;
                transition: .5s;
            }

            .btnLog:hover{
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
            <div class=" p-5 bg-image" style="background: url('image/background.png'); height: 300px;"> <img src="image/Logo.png" alt="" width="280px" height="95px"></div>
           
            
            
                <div class="card mx-4 mx-md-5 shadow-5-strong" style="
                        margin-top: -100px;
                        background: hsla(0, 0%, 100%, 0.8);
                        backdrop-filter: blur(30px);
                        ">
                    <div class="card-body py-5 px-md-5">

                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8">
                            <h2 class="fw-bold mb-5 displat-2"  style="color: #0080ff;">Login</h2>

                            <form action="#" method="post" id="frmLog" name="frmLog">

                                <!-- Email input -->
                                <div class="form-outline mb-4">       
                                <input type="email"  name="txtEmail" class="form-control"  id="txtEmail" placeholder="Email" required>              
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">          
                                <input type="password" name="txtPassword" id="txtPassword" class="form-control" placeholder="Password" required>             
                                </div>


                                <!-- Checkbox -->
                                <div class="row-12">
                                    <table width="100%">
                                        <tr >
                                            <td width="50%"><div class="form-check d-flex mb-4">
                                                <input class="form-check-input me-2" type="checkbox" name="checked" value="" id="form2Example33" checked />
                                                <label class="form-check-label" for="form2Example33">
                                                    Remember Me
                                                </label>
                                            </div></td>

                                            <td class="right form-check mb-4">
                                                <a href="">Forget Password</a>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                    
                                </div>
                                    

                                <!-- Submit button -->
                                <div class="d-grid gap-2 col-6 mx-auto mb-4">
                                    <button class="btn btn-primary btnLog" id="btnSub" name="btnSub" type="submit">LOGIN</button>
                                </div>
                                

                                <!-- Register buttons -->
                                <div class="text-center">
                                <p> New Member?, <a href="Sign.php">Register</a> Now</p>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div style="background: #f0f2f0; font-size: 13px;">
                        Copyright © 2023 edama.lk, All Rights Reserved.
                    </div>
                </div>
            
        </section>

    </body>
</html>







