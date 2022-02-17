<?php

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link
    rel="stylesheet"
    href="../contrast-bootstrap-pro/css/bootstrap.min.css" />
  <link
    rel="stylesheet"
    href="../contrast-bootstrap-pro/css/cdb.css" />
  <script
    src="../contrast-bootstrap-pro/js/cdb.js"></script>
  <script
    src="../contrast-bootstrap-pro/js/bootstrap.min.js"></script>
  <script
    src="https://kit.fontawesome.com/9d1d9a82d2.js"
    crossorigin="anonymous"></script>

  <title></title>
</head>
<style>
  .chart-container {
    width: 100%;
    height: 100%;
    margin: auto;
    
  }
</style>

<body>


<?php

include('../connection.php');
$sql="SELECT * FROM candidate";
?>



<div class="card chart-container bg-dark text-white border-0">
<canvas id="chart"></canvas>

<form action="ResultClick.php" method="post">
  <input type="text" name="active" value="true" hidden/>

<button type="submit" class="btn btn-success">Publish Result</button>

</form>

<form action="ResultDelet.php" method="post">
  <input type="text" name="actives" value="false" hidden/>

<button type="submit" class="btn btn-success">Reset</button>

</form>
</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js">
</script>
<script>
      const ctx = document.getElementById("chart").getContext("2d");
      const myChart = new Chart(ctx, {
        type: "bar",
        data: {
          labels: [<?php

if($request=mysqli_query($connect,$sql)){

    while($row=mysqli_fetch_array($request)){
       $fullname= $row['fullname'];
    
    echo '"'. $fullname.'"'."," ;
    
    
    }
    
    
    
    
    }

?>],
          datasets: [{
            label: "Total Vote",
            backgroundColor: "#0fbcf9",
            
            data: [<?php

if($request=mysqli_query($connect,$sql)){

    while($row=mysqli_fetch_array($request)){
       $votecount= $row['votecount'];
    
    echo  $votecount."," ;
    
    
    }
    
    
    
    
    }

?>],
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true,
              }
            }]
          }
        },
      });
</script>



</html>




