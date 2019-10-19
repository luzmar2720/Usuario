<?php

// me permite hacer uso de sesiones en el sistema
session_start();


/****** REQUIERE ALL MODELS *****/
require_once('models/DB.php');
// usuario
require_once('models/Usuario.php');
// login
require_once('models/Login.php');

require_once('models/Registrar.php');





//definicion de variables metodo y controller
$controller=isset($_GET['c']) ? $_GET['c'] : 'Login';
$method=isset($_GET['m']) ? $_GET['m'] : 'login';

//llamado al controller
require_once('controller/'.$controller.'Controller.php');
$controller=$controller.'Controller';
//creacion del objeto
$objeto= new $controller();
$objeto->$method();

?>