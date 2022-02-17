<?php
session_start();

if(!isset($_SESSION['id'])){
    header('location:../index.php');
}
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
</head>
<body>



  <nav class="navbar navbar-dark bg-dark">
  
<div><img src="../images/election.png" alt=""></div>
<a href="../Signoutdashboard.php"><button type="button" class="btn btn-outline-primary">Logout</button></a>
    </button>

  </nav>
</div>




<?php
include('../connection.php');



$squli="SELECT 	vote FROM students where id='".$_SESSION['id']."'";

if($requests=mysqli_query($connect,$squli)){

  while($rows=mysqli_fetch_array($requests)){
$votev= $rows['vote'];
  }

}

if($votev ==='true'){
  header('location:Result.php');
  
}
else{








  $sql="SELECT * FROM candidate";



  if($request=mysqli_query($connect,$sql)){
  
      echo '
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
        <div class="row">
        
     
        ';
  
  $i=0;
  while($row=mysqli_fetch_array($request)){
  
  $i++;
     
  
  
  echo '
  
      
           <div class="pricing-column">
                <div class="pricing-price-row">
                  <div class="pricing-price-wrapper">
                    <div class="pricing-price">
                     
                    <img  class="rounded-circle" src="'.$row['candidate_image'].'" alt="Loading.." width="180" height="180">
  
                    </div>
                  </div>
                </div>
                <div class="pricing-row-title">
                  <div class="pricing_row_title">'.$row['fullname'].'</div>
                </div>
                
               
                
               
             
                <div class="pricing-footer">
  <div id="tikbox'.$i.'"> </div>
                  <div class="gem-button-container gem-button-position-center">
                  <form id="formId'.$i.'" action="vote.php" method="post" >
                  <input class="input" type="text" value='.$row['Id'].'  name="Id" hidden>
                  
                  <button type="submit" class="gem-button gem-green">Vote</button>
                  </form>
                  </div>
                
            </div>
            
  
            </div>
  
  ';
  
  ?>
  
  <script>
  $(document).ready( function() {
  
  
    $("#formId<?php echo $i ?>").submit( function(e) {
    e.preventDefault();
  
      $.ajax( {
        type: "POST",
        url: "vote.php",
        data: $(this).serialize(),
        success: function( response ) {
          console.log( response );
  
          $("#tikbox<?php echo $i ?>").html(response);

          setTimeout(() => {
            window.location.href="votting_pannel.php?datas=oke";
          },2000);
        }
      } );
    } );
  
  } );
  
  </script>
  <?php
  
  
  }
  echo '
  </div>
  
  
  </div>
  </div>
  
  ';
  
  }
  
}
?>
    
</body>
</html>





  
  
    </div>
    
    </div>
  </div>

 </div>
</div>