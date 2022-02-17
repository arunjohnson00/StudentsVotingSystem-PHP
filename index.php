<?php
session_start();

if(isset($_SESSION['admin'])){
    header('location:Admin/candidate&student_data.php');
}

if(isset($_SESSION['id'])){
  header('location:Usser/votting_pannel.php');
}

?>




<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="index.css">
    
</head>
<body>

<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
     <div class="container">
      <div class="row">
        <div class="col-xs-6  ">
                <form action="loginsetup.php" method="post" class="box1">
                     <h2>Admin Panel</h2>
                     <p class="text-muted"> Please enter your user id and password!</p>
                     <input type="text" name="userid" placeholder="User id" value="adarsh_42" required> 
                     <input type="password" name="conpassword" placeholder="Password" value="Adarsh#2002" required> 
                     <!---<p class="need">Don’t have an account?<a href="signup.php" class="creat">creat account</a></p>-->
                     <input type="submit" name="logins" value="Login" href="#">
                     
                </form>


                <?php 

                if(isset($_GET['login']) || isset($_GET['login'])=="false"){

               }

               ?>
            
</div>
</div>
</div>

 </div>
 </div>


 <nav class="navbar navbar-dark bg-dark">
     <img  class="vimg" src="images/votte image.png" alt="" width="150px">
     <button class="navbar-togglers btn-outline-primary" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar">Admin</span>
     </button>
  </nav>
    
</div>
   


<div class="container">
    <div class="row">
        <div class="col-xs-6  ">
            <div class="card">
                <form action="student_login.php" method="post"  class="box" >
                    <h2>Login</h2>
                    <p class="text-muted"> Please enter your user id and phone number!</p> 
                    <input type="text" name="userid" placeholder="User Id" required value="Ele-160222-102715-36">
                     <input type="text" name="phonenumber" placeholder="Phone Number" required value="9495125184">
                    <input type="submit" name="login" value="Login" href="#">
                  
                </form>
            </div>
        </div>
    </div>
    </div>
  </div>


<?php

if(isset($_GET['account']) || isset($_GET['account'])=="true"){

  
}



?>


 
</body>
</html>


