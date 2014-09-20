<?php


/*
 * El fronted controller se encarga de configurar nuestra aplicacion
 */
	require 'config.php';
	require 'helpers.php';

//Llamar a controlador indicado

if (empty($_GET['url']))
{
	$_GET['url'] = 'home';
}
controller($_GET['url']);




//	var_dump($_GET);