
<?php 

include('../connection.php');

 $id=$_POST['deletess'];



$sql = "DELETE FROM candidate WHERE id=$id ";


if(mysqli_query($connect,$sql)){


    echo $id;

    
   header('location:candidate&student_data.php?login=true');



}

?>








