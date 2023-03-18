<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	 date_default_timezone_set('GMT');
	  
	 $dia=date('d');
	 $mes=date('m');
	 $ano=date('Y');
	 $diaL=date('l');
	 $mesL=date('F');
	 $ano=date('Y');
	 $mesAc=5;

	 echo "Dia ".$dia." Mes ".$mes." Ano ".$ano."<br>";
	 echo "Dia ".$diaL." Mes ".$mesL."<br>";
	 $first_day = mktime(0,0,0, "02", "01", "2019");
	 echo "Primer dia del mes ".$first_day."<br>";
	 //Calcula el primer día del mes que sería el 02
	 echo "Ultimo dia ".date('t', $mesAc);
	 //Calcula el ultimo día y lo imprime

	?>

</body>
</html>