
<?php
  
    

  if(isset($_POST['login'])){
      include('connection.php');
      $fullname=$_POST['fullname'];
      $emailid=$_POST['emailid'];
      $userid=$_POST['userid'];
      $password=$_POST['password'];
      $conpassword=$_POST['conpassword'];
      
   
     
      
      $sql="INSERT INTO e_table(fname,emails,user,passwords,confirmpass) VALUES('$fullname','$emailid','$userid','$password','$conpassword')";
      
      
      if(mysqli_query($connect,$sql)){

        header('location:index.php?account=true');
       
      }
      
  
  }
  
  
  
  ?>