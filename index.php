<?php


/*
 * El fronted controller se encarga de configurar nuestra aplicacion
 */
	require 'config.php';
	require 'helpers.php';


//Library
	require 'Library/Request.php';

//Llamar a controlador indicado


if (empty($_GET['url']))
{
	$url = "";
}
else
{
	$url = ($_GET['url']);
}

$request = new Request($url);
var_dump($request->getUrl());



