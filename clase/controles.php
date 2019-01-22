<?php
if (isset($_POST['submit'])) {
	try {
		$placa=$_POST['placa'];
		$fecha=$_POST['fecha'];
		$hora=$_POST['hora'];
		$placa1=new placa();
		$num=$placa1->numero($placa);
		$dia=date('N', strtotime($fecha));
		$horas=strtotime($hora);
		$carga=$placa1->validar($num, $dia,$horas);
		if ($carga) {
			echo "<script>
			alert('la placa ".$placa."  puede circular el ".$fecha." a las ".$hora." horas.', 4500, 'green','rounded');</script>";
			}else{
				echo "<script>
			alert('la placa ".$placa." No  puede circular el ".$fecha." a las ".$hora." horas.', 4500, 'red','rounded');</script>";
			}
	} catch (Exception $e) {
		echo 'Error:',$e->getMessage(),"\n";
	}
}