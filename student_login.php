<?php
session_start();

if(isset($_POST['login'])){

    include('connection.php');


    $userid=$_POST['userid'];
    $phonenumber=$_POST['phonenumber'];
    

    

    $fetchdata="SELECT * FROM students WHERE userid='$userid' AND phonenumber='$phonenumber' ";


    if($required=mysqli_query($connect,$fetchdata)){

        if(mysqli_num_rows($required)==1){

       while($row=mysqli_fetch_array($required)){

   $_SESSION['id']= $row['id'];

    header('location:Usser/votting_pannel.php?datas=oke');
    
 
}

        }
        else{
            header('location:index.php');
        }
  
    }
   

    
}



?>