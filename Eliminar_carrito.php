<?php
require_once 'config.php';

if (isset($_GET['indice'])) {
	$indice = (int)$_GET['indice'];
	if (isset($_SESSION['carrito'][$indice])) {
		unset($_SESSION['carrito'][indice]);
		// Reindexar el array
		$_SESSION['carrito'] = array_values($_SESSION['carrito']);
	}
}

header('Location: carrito.php')
?>