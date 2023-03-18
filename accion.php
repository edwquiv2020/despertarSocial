<?php
session_start();
if(isset($_POST['valorsesion']))
	$valorsesion = $_POST[valorsesion];
	$_SESSION['valorsesion'] = $valorsesion;
	echo "$_SESSION['valorsesion']";
?>