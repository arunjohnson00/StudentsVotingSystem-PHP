      <!-- Header -->
      <header class="bg-dark  border-bottom  border-info pt-2">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight text-white float-start">Student's Details</h1>   
                        </div> <!-- Actions -->
                        <div class="col-sm-6 col-12 text-sm-end">
                          <!-- Scrollable modal -->






                          <!-- Button trigger modal -->

<button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="creatbtnb"><i class="bi bi-pencil-square"></i> Create</button>
<button type='button' class='reloadbtn ' onclick='reloadPage();'><img src='../images/realod.png' width='50px'></button>


<!-- Modal -->
<div  class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h3 class="modal-title text-white" id="staticBackdropLabel">Student</h3>
       
      </div>
    




      
      
    <form action="student_data_setup.php" method="post" class="box1">
    
        <input class="input" type="text" name="fullname" placeholder="Full name">
        
        <input class="input" type="text" name="userid" placeholder="User id" value="<?php echo "Ele-" .date('dmy-his').'-'.rand(10,99); ?>" hidden>
       
        <input class="input" type="text" name="phonenumber" placeholder="Enter phone number">
       <button  class="btn" type="submit" name="submits">Submit</button>
        </form>
        





      
      <div class="modal-footer">
       
        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                            







                        
                        </div>
                    </div> 
                </div>
            </div>
        </header>
        <br>
    
                <!-- Card stats -->
                
                <div class="card shadow border-0 mb-7">
                    <div >
                     
                    </div>
                    <div class="table-responsive">
                    <?php
                           include('../connection.php');
                             $sql="SELECT * FROM students";

                                if($request=mysqli_query($connect,$sql)){

                          echo "

                          <div id='mainCoantiner'>
                          <!--dust particel-->
                          <div class='margin-body'>
                          
                        
                        <table  id='tab' class='table table-dark '>
                            <thead class='thead-light'>
                                <tr>
                                    <th scope='col'>NUM</th>
                                    <th scope='col'>NAME</th>
                                   
                                    <th scope='col'>USER ID</th>
                                    
                                    <th scope='col'>CONTACT</th>
                                    <th scope='col'>EDIT</th>
                                    <th scope='col'>DELETE</th>
                                    
                                    
                                    
                                </tr>
                            </thead>
                            ";


      $count=0;                      
while($row=mysqli_fetch_array($request)){
$count++;

 echo " <tbody class='border-bottom border-dark'>
              <tr>
                                        <td data-title='NUM'>".$row['id']."</td>
                                        <td data-title='NAME'>".$row['fname']."</td>
                                        
                                        <td data-title='USER ID'>".$row['userid']."</td>
                                       
                                        <td data-title='CONTACT'>".$row['phonenumber']."</td>

                                        <td data-title='EDIT'>
                                        
                                        <button  type='button' class='creatbtn' data-bs-toggle='modal' data-bs-target='#editStudents".$count."'>
                                        <i class='bi bi-pencil'></i> </span> <span>Edit</span>
                                      </button>

                                      <div class='modal fade' id='editStudents".$count."' tabindex='-1' aria-labelledby='examModalLabel' aria-hidden='true'>
                                      <div class='modal-dialog'>
                                        <div class='modal-content bg-dark'>
                                          <div class='modal-header'>
                                            <h3 class='modal-title text-white' id='examModalLabel'>Edit Student Details</h3>
                                          </div>
                                    
                                    
                                    
                                          
                                          <div class='modal-body'>
                                              
                                          <form action='' method='post' class='box1'>

                                          <input class='input' type='text' name='id' placeholder='Full name' value=".$row['id']." hidden>
                                        <input class='input' type='text' name='firstnames' placeholder='Full name' value=".$row['fname'].">
                                        <input class='input' type='text' name='posi' placeholder='Position' hidden  value=".$row['position']."  >
                                        <input class='input' type='text' name='user'  placeholder='User id' hidden value=".$row['userid'].">
                                        <input class='input' type='text' name='reg' placeholder='Enter reg number' hidden value=".$row['regno']."  >
                                        <input class='input' type='text' name='phones' placeholder='Enter phone number' value=".$row['phonenumber'].">
                                        <button class='btn' type='submit' name='update'>UPDATE</button>
                                       
                                       
                                        </form>
                                    
                                        
                                          </div>
                                          
                                    
                                    
                                    
                                    
                                    
                                    
                                          
                                          <div class='modal-footer'>
                                          <button type='submit' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    </td>
                                    <td data-title='DELETE'>
                                    <form action='StudDelet.php' method='post' class='box1'>
                                       <input type='text' value=".$row['id']." hidden name='deletes'>
                                        <button class='creatbtns' type='submit'><i class='bi bi-trash text-danger' ></i> </span> <span class='text-danger'>Delete</span></button>
                                        </form>
                                        </td>
                                        
                                      
                                      
                                    </tr>
                                    
                                </tbody>
                                
                      



                                






                                
                                ";


                                
                                
                                }
                                echo "</table>
                                </div>
                               </div>
                                
                                
                                
                                ";
                                
                                }




                                if(isset($_POST['update'])){

                                 $id=$_POST['id'];
                                  $upfirstName=$_POST['firstnames'];
                                  $upposition=$_POST['posi'];
                                  $upuser=$_POST['user'];
                                  $upreg=$_POST['reg'];
                                  $upContact =$_POST['phones'];
                              
                                  $upDate="UPDATE students SET fname='$upfirstName',position='$upposition',userid='$upuser',regno='$upreg',phonenumber='$upContact' WHERE id='$id' ";
                              
                                  mysqli_query($connect,$upDate);
                                  
                              
                              }






                              


                              
                              
                              ?>
                           

                           
                           

                   
           
                            
                              

                              

<!-- Modal -->


                    </div>
                   
                </div>
            
    </div>
</div>



<!---end-->
    
    
  </div>
</div>



