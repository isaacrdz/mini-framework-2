<?php

	
	
	//declaracion de variables
	$confidencial = "private";
	$language = "php";
	$titulo = "Lavarel";

	//llamado de funciones 
	//view ('view',['language' => $language, 'titulo' => $titulo ]);
	//Version corta
	view ('home',compact('language','titulo'));