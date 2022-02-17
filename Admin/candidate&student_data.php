<?php 

session_start();
if(!isset($_SESSION['admin'])){
    header('location:../index.php');
}



?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



    <link rel="stylesheet" href="stu&cand.css">
    
    
    <script>
    function reloadPage(){
        location.reload(true);
    }
</script>



</head>
<body class="bg-dark">
<div class="pos-f-t">

<nav class="navbar navbar-dark bg-dark">
  <img  class="vimg" src="../images/votte image.png" alt="" width="150px">


  
  <a href="../Signoutdashboard.php"><button type="button" class="btn btn-outline-primary">Logout</button></a>
    </button>

    
  </nav>


  <div class="bottomm"></div>
  


  


<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-dark">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-dark " id="navbarVertical">
        <div class="container-fluid">
            <!-- Toggler --> <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> <!-- Brand -->  <!-- User menu (mobile) -->
            <div class="navbar-user d-lg-none">
                <!-- Dropdown -->
                <div class="dropdown">
                    <!-- Toggle --> <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-parent-child"> </span> </div>
                    </a> <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar"> <a href="#" class="dropdown-item">Profile</a> <a href="#" class="dropdown-item">Settings</a> <a href="#" class="dropdown-item">Billing</a>
                        <hr class="dropdown-divider"> <a href="#" class="dropdown-item">Logout</a> </div>
                </div>
            </div> <!-- Collapse -->
            <div class="collapse navbar-collapse ps-3" id="sidebarCollapse">
                <!-- Navigation -->
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <br>
    <button class="btn btn-outline-info active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="bi bi-house"></i> Dashboard</button>
    <br>
    <button class="btn btn-outline-info" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="bi bi-person-check"></i>  Candidate</button>
    <br>
    <button class="btn btn-outline-info" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button"  role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="bi bi-people"></i>  Student</button>
    
  </div>
                <div class="mt-auto"></div> <!-- User (md) -->
                <form action="removedatas.php" method="post" >
             <button class="btnns" type="submit" name="deleteee"><i class="bi bi-trash"></i>Remove All Datas</button>

</form>


            </div>
        </div>
    </nav> <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto ">
       <!-- Main -->
        <main class="py-6 bg-dark">
            <div class="container-fluid">
                


           
  
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

    <?php    
    include('DashboardG.php');
    ?>
    </div>






    <!--candidate data-->
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        

    <?php    
    include('Candidates.php');
    ?>




    </div>



    <!--student data-->



    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
    <?php    
    include('Students.php');
    ?>



            </div>
        </main>
    </div>
</div>





<?php

if(isset($_GET['login']) || isset($_GET['login'])=="true"){

   
   
}

if(isset($_GET['login']) || isset($_GET['login'])=="true"){

   
   
}

?>





    <?php

if(isset($_GET['data']) || isset($_GET['data'])=="okk"){

   
   
}

?>







</body>
</html>