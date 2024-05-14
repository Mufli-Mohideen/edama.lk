<?php  

    if(isset($_POST["btn"])){

        //Accecpt Form Data
        
        $address =$_POST["txtAddress"];
        $url =$_POST["txtURL"];
        $landSize =$_POST["txtSize"];
        $title =$_POST["txtTitle"];
        $description =$_POST["txtDescription"];
        $teleNo =$_POST["txtTele"];
        $price =$_POST["txtPrice"];

        $img = $_FILES["image"]["name"];


            $con = mysqli_connect("localhost","u791693540_pasindu","Pasindu2002");

            //Select db
            mysqli_select_db($con,"u791693540_edamalk");

            //create a connection to MYSQL server
            $sql = "INSERT INTO ads(address,location,landsize,title,description,teleno,price,image) VALUES ('$address','$url',$landSize,'$title','$description',$teleNo,$price,'$img')";

            //perform SQL
            $ret = mysqli_query($con,$sql);

            echo "No of Records inserted: $ret <br>";
            
            mysqli_close($con);

            //Upload File to Server
            if($ret == 1){
                $uploadFile = "ads/$img";

                move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile);

                header("Location:Ads.php");
            }

    }       

?>



<!DOCTYPE html>
<html lang="en">

  <head>

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>edama.lk - Post your add</title>
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
        <div class="p-5 bg-image" style=" background: url('image/background.png'); height: 100px; margin-bottom: 10px;">
        </div>
        
        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
              margin-top: -100px;
              background: hsla(0, 0%, 100%, 0.8);
              backdrop-filter: blur(30px);
              ">
          <div class="card-body py-5 px-md-5">

            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">

                <form action="#" method="post" name="frmSubmit" enctype="multipart/form-data">
                    
                  <!-- 2 column grid layout with text inputs for the Address and Location URL -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline"> 
                        <input type="text" id="txtAddress" name="txtAddress" class="form-control" placeholder="Address" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="url" id="txtURL" name="txtURL" class="form-control" placeholder="Location URL">                 
                      </div>
                    </div>
                  </div>

                  <!-- Land Size in Perches input -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline"> 
                        <input type="number" id="txtSize" name="txtSize" class="form-control" placeholder="Land Size in Perches"required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                    </div>
                  </div>

                  <!-- Title input -->
                  <div class="form-outline mb-4">          
                    <input type="text" id="txtTitle" name="txtTitle" class="form-control" placeholder="Title"  required>             
                  </div>

                  <!-- Description input -->
                  <div class="form-outline mb-4"> 
                    <textarea class="form-control" id="txtDescription" name="txtDescription" cols="30" rows="3" placeholder="Description"  required></textarea>                     
                  </div>

                  <!-- Telephone Number input -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline"> 
                        <input type="number" id="txtTele" name="txtTele" class="form-control" placeholder="Telephone Number" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                    </div>
                  </div>

                   <!-- Price input -->
                   <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline"> 
                        <input type="number" id="txtPrice" name="txtPrice" class="form-control" placeholder="Price" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                    </div>
                  </div>

                  <!-- Images input -->
                  <div class="form-outline col-sm-3 mb-4">          
                    <input type="file" name="image" class="form-control" required>             
                  </div>

                  <!-- Checkbox -->
                  <div style="text-align: left;">
                    <p>  <input type="checkbox"  name="checkbox" id="checkbox"> &nbsp; I have read and to the terms, conditions and privacy policy 
                      of edama.lk <a href="#">Terms</a> & <a href="#">Condition</a> & <a href="#">Privacy Policy</a> </p>
                  </div>

                  <!-- Submit button -->
                  <div class="d-grid gap-2 col-6 mx-auto mb-4">
                    <input type="submit" value="Publish" class="btn btn-primary btnReg" name="btn">
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

  </body>


</html>
