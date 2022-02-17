

<?php 

include('../connection.php');

 $id=$_POST['deletes'];



$sql = "DELETE FROM students WHERE id=$id ";


if(mysqli_query($connect,$sql)){


    

    
   header('location:candidate&student_data.php?login=true');



}

?>