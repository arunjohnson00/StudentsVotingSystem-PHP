
<style>

  .tikssss{
    display: block;
  margin-left: auto;
  margin-right: auto;
  }

</style>


<?php 
session_start();

include('../connection.php');

$ID=$_POST['Id'];

$sql="SELECT * FROM candidate WHERE id=$ID ";


if($request=mysqli_query($connect,$sql)){

    while($row=mysqli_fetch_array($request)){
      $count=$row['votecount'];
    }

}

$voteCount=$count+1;


$sqli ="UPDATE candidate SET votecount='$voteCount' WHERE id=$ID ";


if(mysqli_query($connect,$sqli)){

echo "<img  class='tikssss'src='../images/ticks.png' width='30px'/>";



}

$ida=$_SESSION['id'];

$sqlie ="UPDATE students SET vote='true' WHERE id=$ida";
 
if(mysqli_query($connect,$sqlie)){


}




?>