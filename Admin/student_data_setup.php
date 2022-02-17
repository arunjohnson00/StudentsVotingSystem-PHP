
<?php
   include('../connection.php');
  

  if(isset($_POST['submits'])){
      
     
      $fullname=$_POST['fullname'];
      $position=$_POST['position'];
      $userid=$_POST['userid'];
      $regno=$_POST['regno'];
      $phonenumber=$_POST['phonenumber'];
      
   
      $sql="INSERT INTO students(fname,position,userid,regno,phonenumber) VALUES('$fullname','$position','$userid','$regno','$phonenumber')";
      
      
      if(mysqli_query($connect,$sql)){

      
        header('location:candidate&student_data.php?login=true');
       
      }
     
      
  
  }

  ?>