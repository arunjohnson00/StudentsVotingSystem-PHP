<?php
session_start();


$false=$_POST['actives'];

include('../connection.php');

$ids=$_SESSION['admin'];


$squl ="UPDATE e_table SET result=$false WHERE id=$ids";
 
if(mysqli_query($connect,$squl)){
    header('location:candidate&student_data.php');

}



?>