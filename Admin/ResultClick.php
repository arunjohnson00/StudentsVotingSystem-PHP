<?php
session_start();


$true=$_POST['active'];

include('../connection.php');

$idz=$_SESSION['admin'];


$squl ="UPDATE e_table SET result=$true WHERE id=$idz";
 
if(mysqli_query($connect,$squl)){
    header('location:candidate&student_data.php');

}



?>