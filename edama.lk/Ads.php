
<html>
    
    
    <head>
        
        <title>
            edama.lk - Sale and Buy Lands
        </title>
        
         <link rel="shortcut icon" type="image" href="image/Logo.png">
        
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

        
        
        <style>
        
         a{
            text-decoration: none;
        }
        
        .navbar{
            margin-bottom: 1rem;
        }
        .h5
        {
            font-family: cursive;
            color:#0080ff;
            margin-left: 40px;
        }
        .btn
        {
            font-family:  "Gill Sans", sans-serif;
            margin-left: 15px;
            height: 35px;
            width: 100px;
            margin-top:5px;
            border-radius: 10px;
            
        }
        .btn:hover
        {
            background: #0080ff;
            color: white;
            transition: 1s;
        }
    
        .btn1
        {
        margin-left: 10px;
        border-radius: 30px;
        height: 30px;
        width: 150px;
        margin-top: 8px;
        border: #0080ff;
        background-color: orange;
        color: white;
        font-family:  "Gill Sans", sans-serif;
        font-style: italic;
        
        
        }
        .btn1:hover
        {
        background-color:rgb(224, 122, 32);
        color: white;
        transition: 1s;
        }
            
        </style>
        
        
        
        
    </head>
    
    
    <body>
        
        
        
        <nav class="navbar navbar-expand bg-light" >
      <div class="container-fluid">
          <img src="image/img24.png" style="margin-left: 200px;" width="100px" height="30px">
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse2">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse2">
            <a href="Ads.php"><div class="h5">all ads</div></a>
              <form class="d-flex ms-auto " style="margin-right: 200px;">
                 <a href="Add_ads.php"><button type="button" class="btn1 btn-outline-primary">Post your add</button></a>
              </form>
          </div>
      </div>        
   </nav>
   
    <div style="width:100%; height:10px; background:#0080ff;"></div>
    
    <br>
    
     <table>
        <tr width="100%">
          <td width="60%">
              
          </td>
          
          <td>
               <div class="row">
             
              <div class=" col-4">
            </div>
    
          <div class="input-group col-4">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
              aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary">search</button>
          </div>
          
          <div class=" col-4">
          </div>
          </div>
          </td>
          
          <td></td>
        </tr>
      </table>
    
    
        
             
             
                
            <br>
        
        
        
        
    </body>
    
    
</html>





<?php

    $con = mysqli_connect("localhost","u791693540_pasindu","Pasindu2002");

    //Select DB
    mysqli_select_db($con,"u791693540_edamalk");

    //Perform SQL 
    $sql = "SELECT * FROM ads";
    
    $result = mysqli_query($con,$sql);

   
    print("<center><table style = 'background-color: #EFEFEF; font-family: Tahoma;'>");
    

    //Print Result
    while($row = mysqli_fetch_array($result)){
        print("<tr style=''>"); 

        echo "<td style = 'width:10px; border-bottom: 1px solid black; margin-bottom: 20px;'></td>";

        echo "<td style = 'width:180px; border-bottom: 1px solid black; margin-bottom: 20px;'> <img src=ads/$row[7] width=170px height=140px> </td>";
        
        echo "<td style ='width:400px; border-bottom: 1px solid black; margin: 20px;'><h3 style ='color:#0080ff; margin-top: 20px'>$row[3]</h3>
             Perches: $row[2]<br>
             
             <p style ='color:#0080ff'>Rs. $row[6]</p>
             <p>Tele: $row[5]</p>
             <p style = 'margin-bottom: 20px'>$row[0]</p>
             </td> ";

        
       
        print("</tr>");
        
    }
    print("</table></center>");

    //Disconnect from server
    mysqli_close($con);

?>