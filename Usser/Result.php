<?php
session_start();
include('../connection.php');
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="voters_pannel.css">
    <style>
        .voted{
           margin-left:15%;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
  
<div><img src="../images/election.png" alt=""></div>
<a href="../Signoutdashboard.php"><button type="button" class="btn btn-outline-primary">Logout</button></a>
    </button>

  </nav>
</div>

 





    <div id="mainCoantiner">
      <!--dust particel-->
      <div class="margin-body">
      
      <div>
        <div class="starsec"></div>
        <div class="starthird"></div>
        <div class="starfourth"></div>
        <div class="starfifth"></div>
      </div>
      <br><br>
      <!--Dust particle end--->
      <div class="column">
      
   
      

   



    
              <div class="voted">
                <div class="pricing_row_title" id="result"><h1 class="xyz">Voted Sucessfully!</h1></div>
              </div><br>
     
     
     
     
              <?php




$squlie="SELECT 	result FROM e_table where id=1";

if($requestsa=mysqli_query($connect,$squlie)){

  while($rowes=mysqli_fetch_array($requestsa)){
 $Result= $rowes['result'];
  }

}
if($Result==='1'){
  echo '
  <button type="button" id="resultbtn" class="btn btn-outline-info" data-toggle="modal" data-target="#staticBackdrop">
   Result
  </button>';
  
}
else{
  echo "Results will be after finishing the election....";
}


?>




<!-- Modal -->
<div class="modal fade " id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h3 class="modal-title text-warning" id="staticBackdropLabel">Winner !</h3>
        
        
      </div>
      <div class="modal-body">
<?php



$sqw="SELECT MAX(votecount) AS LargestPrice FROM candidate;";

if($requests=mysqli_query($connect,$sqw)){

  while($rows=mysqli_fetch_array($requests)){

   $topcount= $rows['LargestPrice'];
      
    }
    
  }



  $sele="SELECT * FROM candidate where id= $topcount";

  if($reques=mysqli_query($connect,$sele)){

    while($row=mysqli_fetch_array($reques)){
   
   echo '<img  class="rounded-circle" src="'.$row['candidate_image'].'" alt="Loading.." width="180" height="180">';
   echo '<h3 class="nam">'.$row['fullname'].'</h3>';
   echo "<div class='votecound'>Number of Vote : $topcount</div>";
   
    }

  }





?>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
             
              
             
           
   



</div>


</div>
</div>


    
</body>
</html>





  
  
    </div>
    
    </div>
  </div>

 </div>
</div>