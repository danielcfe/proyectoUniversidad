<?php

$roles['Administrador']=1;
$roles['UsuarioBasico']=2;
$roles['Vendedor']=3;

$_Menu[1]=array(
	'menu1'=> array('href'=>'#menu1href','items'=>array(
		'subItem' => array('name'=>'item1','href'=>'menu8.php'),
		'subItem2' => array('name'=>'item2','href'=>'plantilla-sistema-prueba-menu.php'),
		'subItem3' => array('name'=>'item3','href'=>'menu2.php'),
		'subItem4' => array('name'=>'item4','href'=>'menu3.php'),
		)),
	'menu2'=> array('href'=>'#menu2href','items'=>array(
		'subItem' => array('name'=>'item1','href'=>'menu4.php'),
		'subItem2' => array('name'=>'item2','href'=>'menu5.php')
		)),
	'menu3'=> array('href'=>'#menu3href','items'=>array(
		'subItem' => array('name'=>'item1','href'=>'menu6.php'),
		'subItem2' => array('name'=>'item2','href'=>'menu7.php')
		)),
	'menu4'=> array('href'=>'plantilla-sistema-prueba-menu1.php','items'=>array())
);

$_Menu[2]=array(
	'Herramientas'=> array('href'=>'#menu1href','items'=>array(
		'subItem' => array('name'=>'Mapa','href'=>'plantilla-sistema-prueba-menu.php?page=mapa1'),
		'subItem2' => array('name'=>'Correo Cantv','href'=>'plantilla-sistema-prueba-menu.php?page=correoCantv'),
		'subItem3' => array('name'=>'item3','href'=>'plantilla-sistema-prueba-menu.php'),
		'subItem4' => array('name'=>'item4','href'=>'plantilla-sistema-prueba-menu.php'),
		)),
	'menu2'=> array('href'=>'#menu2href','items'=>array(
		'subItem' => array('name'=>'item1','href'=>'plantilla-sistema-prueba-menu.php'),
		'subItem2' => array('name'=>'item2','href'=>'plantilla-sistema-prueba-menu.php')
		)),
	'menu3'=> array('href'=>'plantilla-sistema-prueba-menu.php','items'=>array())
);


$_Sistema[1] = array(
	'Telemarketing'=> array('href'=>'casa'),
	'Contratos'=> array('href'=>''),
	'Contactos'=> array('href'=>''),
	'Estadisticas'=> array('href'=>''),
	'Busquedas'=> array('href'=>''),
	'Reporte de Error'=> array('href'=>''),
	'Navegación'=> array('href'=>'')
);



$config['menu'] = $_Menu[2];

$config['sistema'] = $_Sistema[1];


?>