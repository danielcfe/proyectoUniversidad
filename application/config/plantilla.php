<?php


$config['administrador']=array(
	'Materia'=> array('href'=>'#materia','items'=>array(
		'subItem' => array('name'=>'Agregar Materia','href'=>'materia_c/insertar','class' => 'icon-plus'),
		'subItem2' => array('name'=>'Listar Materias','href'=>'materia_c/consultar','class' => 'icon-book'),
		)),
	'Pemsum'=> array('href'=>'#menu2href','items'=>array(
		'subItem' => array('name'=>'item1','href'=>'menu4.php','class' => 'icon-user'),
		'subItem2' => array('name'=>'item2','href'=>'menu5.php','class' => 'icon-user')
		))
	,
	'Usuario'=> array('href'=>'#menu3href','items'=>array(
		'subItem' => array('name'=>'item1','href'=>'menu6.php','class' => 'icon-user'),
		'subItem2' => array('name'=>'item2','href'=>'menu7.php','class' => 'icon-user')
		))
);

$config['menu_nav']=array(
		'subItem' => array('name'=>'Materias','href'=>'materia_c/insertar'),
		'subItem2' => array('name'=>'Usuarios','href'=>'materia_c/consultar'),
		'subItem3' => array('name'=>'Contactos','href'=>'materia_c/consultar'),	
);


$config['menu_nav2']=array(
		'subItem' => array('name'=>'Administracion General','href'=>'admin')/*,
		'subItem2' => array('name'=>'Usuarios','href'=>'materia_c/consultar'),
		'subItem3' => array('name'=>'Contactos','href'=>'materia_c/consultar'),	
		*/
);


/*
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



*/

?>