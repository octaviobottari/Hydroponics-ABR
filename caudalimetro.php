<?php
include('session.php');
$con = new mysqli("localhost","root","","prueba");
$sql = ("SELECT * FROM systems WHERE username='$user_check' ORDER BY id DESC LIMIT 4");
$querys = $con->query($sql); // Ejecutar la consulta SQL
$data = array(); // Array donde vamos a guardar los datos
while($r = $querys->fetch_object()){ // Recorrer los resultados de Ejecutar la consulta SQL
    $data[]=$r; // Guardar los resultados en la variable $data
}

?>

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link rel="shortcut icon" type="image/png" href="/minilogo.png"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<style>
  .parche {
    flex-grow: 1;
    margin: 100 auto;
    width: 100%;
    position: fixed;
    bottom: 0;   
}
</style>
</head>
<body><?php
include('nav.html')?>
<section class="section">
    <div class="container">
    <p class="title">Nivel de caudal de las últimas 4 mediciones</p>
<p class="subtitle">Verifique que tanto ha varíado la medición.<br>
    Si hay problemas que dañarían sus plantas, ya habría llegado un email con la alerta.</p>
<canvas id="chart1" style="width:100%;" height="100"></canvas>
<script>
var ctx = document.getElementById("chart1");
var data = {
        labels: [ 
        <?php foreach($data as $d):?>
        "<?php echo $d->fecha?>", 
        <?php endforeach; ?>
        ],
        datasets: [{
            label: 'Nivel de caudal',
            data: [
        <?php foreach($data as $d):?>
        <?php echo $d->caudal;?>, 
        <?php endforeach; ?>
            ],
            backgroundColor: "#81BB34",
        }]
    };
var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    };
var chart1 = new Chart(ctx, {
    type: 'bar', /* valores: line, bar*/
    data: data,
    options: options
});
</script>
</section>
</div>
<div class="parche">
<?php
include('footer.html')?>
</div>
</body>
</html>