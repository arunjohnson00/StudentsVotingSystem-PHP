
<?php 

include('../connection.php');


$sql = "TRUNCATE TABLE  candidate;";




if (mysqli_query($connect, $sql)) {
    header('location:candidate&student_data.php');
  }


  $sqli = "TRUNCATE TABLE  students;";




if (mysqli_query($connect, $sqli)) {
    header('location:candidate&student_data.php');
  }



?>