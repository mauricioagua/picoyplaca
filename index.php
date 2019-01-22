<?php
require("clase/clase_pico_plata.php");
require("clase/controles.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pico Y Placa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<body>
<div class="container">
	<br>
	<div class="card bg-dark text-white">
		<img src="assets/img/horario-pico-placa-quito.jpg" class="card-img-top" alt="area" width="100" height="325">
		<div class="card-body text-center">
			<h2 class="card-title"> Pico y Placa</h4>
				<p>Verificaci&oacuten de pico y placa</p>
			
		</div>

	</div>
	<br>
	<br>
<form class="needs-validation"  method="post">
	<div class="form-row">
		<div class="input-group  col-md-4 mb-3">
			<label for="placa">Placa</label>
			<input type="text" class="validate" name="placa" id="placa" placeholder="psss001" required>
		</div>
		<div class="input-group col-md-4 mb-3">
			<label for="fecha">Fecha</label>
			<input type="text" class="validate" name="fecha" id="fecha" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" title="24hr; Formato: HH:MM" placeholder="2019-01-01" required>
		</div>
		<div class="input-group col-md-4 mb-3">
			<label for="hora">Hora</label>
			<input type="text" class="validate" name="hora" id="hora" pattern="(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){1}" title="24hrs; Formato: HH:MM " placeholder="24:00" required>
		</div>
	</div>
	<div class="form-row">
		<button type="submit" class="btn btn-primary" name="submit">Verificar
		
	</div>
	
</form>

 </div>

 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
    $(document).ready(function(){
    
    $('.modal').modal();
  });</script>
</body>
</html>