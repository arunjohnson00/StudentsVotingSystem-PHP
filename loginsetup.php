<?php
session_start();


if(isset($_POST['logins'])){
    include('connection.php');
    $userid=$_POST['userid'];
    $conpassword=$_POST['conpassword'];

    

    $fetchdata="SELECT * FROM e_table WHERE user='$userid' AND passwords='$conpassword'";


    if($required=mysqli_query($connect,$fetchdata)){

        if(mysqli_num_rows($required)==1){

       while($row=mysqli_fetch_array($required)){

   $_SESSION['admin']= $row['id'];

    header('location:Admin/candidate&student_data.php?data=okk');
    
 
}

        } else{
            header('location:index.php?login=false');
            
          }
  
    }
   

    
}



?>