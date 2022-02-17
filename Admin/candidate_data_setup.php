
<?php
  
  

  if(isset($_POST['submit'])){
      
      include('../connection.php');
      $fname=$_POST['fname'];
      $position=$_POST['position'];
      $details=$_POST['details'];
      $count=$_POST['count'];
      
   
      $location='../candidate_image/';

    $move=$location.$_FILES['upload']['name'];
   
    move_uploaded_file($_FILES['upload']['tmp_name'],$move);

    $location='../candidate_symbol/';

    $moves=$location.$_FILES['uploads']['name'];
    
    move_uploaded_file($_FILES['uploads']['tmp_name'],$moves);

    
      
      $sql="INSERT INTO candidate(fullname,position,details,votecount,candidate_image,candidate_symbol) VALUES('$fname','$position','$details','$count','$move','$moves')";
      
      
      if(mysqli_query($connect,$sql)){

      
        header('location:candidate&student_data.php?login=true');
       
      }
     
      
  
  }

  ?>