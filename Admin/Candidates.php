<style>

  #inp{
    width:80%;
    margin-left:10%;
  }

  #lab{
    float:left;
    margin-left:10%;
    color:white;
    margin-bottom:5px;
  }
</style>
<!-- Header -->
<header class="bg-dark border-bottom border-info pt-2">
    <div class="container-fluid">
        <div class="mb-npx">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                    <!-- Title -->
                    <h1 class="h2 mb-0 ls-tight text-white float-start">Candidate's Data</h1>
                </div> <!-- Actions -->
                <div class="col-sm-6 col-12 text-sm-end">
                    <!-- Button trigger modal -->
<button type="button" class="creatbtnb" data-bs-toggle="modal" data-bs-target="#exampleModal">
<i class="bi bi-pencil-square"></i> Create
</button>
<button type='button' class='reloadbtn ' onclick='reloadPage();'><img src='../images/realod.png' width='50px'></button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h3 class="modal-title text-white" id="exampleModalLabel">Candidate</h3>
        
      </div>



      <form action="candidate_data_setup" method="post" enctype="multipart/form-data" class="box1">
        <input class="input" type="text" name="fname" placeholder="Full name">
        <input class="input" type="text" name="position" placeholder="Position">
        <input class="input" type="text" name="details" placeholder="Details" hidden>
        
        <label id="lab"> Candidate image</label>
        <input class="form-control form-control-lg btn-outline-info bg-dark" id="inp" accept="candidate_image/*" type="file" id="upload" name="upload"><br><br>
        <label id="lab"> Candidate symbol</label>
        <input class="form-control form-control-lg btn-outline-info bg-dark " id="inp" accept="candidate_symbol/*" type="file"id="uploads" name="uploads">
      
        
        <button class="btn" type="submit" name="submit">Submit</button>
        
     </form>




      <div class="modal-footer">
        <button type="submit" class="btn" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
                </div>
            </div> 
        </div>
    </div>
</header>




    <?php

include('../connection.php');
$sql="SELECT * FROM candidate";



if($request=mysqli_query($connect,$sql)){


  echo"
  
  <div id='mainCoantiner'>
  <!--dust particel-->
  <div class='margin-body'>
  

<table  id='tab' class='table table-dark '>
    <thead class='thead-light'>
        <tr>
        <th scope='col'>ID</th>
            <th scope='col'>IMAGE</th>
            <th scope='col'>NAME</th>
            <th scope='col'>POSITION</th>
           
            <th scope='col'>SYMBOL</th>
         
            <th scope='col'>DELETE</th>
            
            
        </tr>
    </thead>
  ";

while($row=mysqli_fetch_array($request)){



    echo '
    <tbody class="border-bottom border-dark">
    

    <tr>                      
                               <td data-title="ID">'.$row['Id'].'</td>
                              <td data-title="IMAGE"><div class="d-flex align-items-center"><img class="rounded" src="'.$row['candidate_image'].'" width="40px" height="40px"></div></td>
                              <td data-title="NAME">'.$row['fullname'].'</td>
                              <td data-title="POSITION">'.$row['position'].'</td>
                             
                              <td data-title="SYMBOL"><img class="rounded" src="'.$row['candidate_symbol'].'" alt="" width="40px" height="40px"></td>
                              <td data-title="DELETE">
                              <form action="CandiDelet.php" method="post" >

                              <input type="text" value='.$row['Id'].' hidden name="deletess">
                              <button class="creatbtns" type="submit"><i class="bi bi-trash text-danger" ></i> </span> <span class="text-danger">Delete</span></button>
                              </td>
                              </form>


                             
                                        
                                      



                                
                              </tr>
                                    
                              </tbody>';




;




}


echo'
</table>
        </div>
       </div>
';
}


?>
