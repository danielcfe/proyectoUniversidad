<?php


$config['administrador']=array(
	'Materia'=> array('href'=>'#materia','items'=>array(
		'subItem' => array('name'=>'Agregar Materia','href'=>'materia_c/insertar','class' => 'icon-plus'),
		'subItem2' => array('name'=>'Listar Materias','href'=>'materia_c','class' => 'icon-tags'),
		)),
	'Departamento'=> array('href'=>'#departamento','items'=>array(
		'subItem' => array('name'=>'Agregar Departamento','href'=>'departamento/agregar','class' => 'icon-plus'),
		'subItem2' => array('name'=>'Consultar Departamento','href'=>'departamento','class' => 'icon-tags')
		)),
	'Carreras'=> array('href'=>'#carreras','items'=>array(
		'subItem' => array('name'=>'Agregar Carreras','href'=>'carrera/agregar','class' => 'icon-plus'),
		'subItem2' => array('name'=>'Consultar Carreras','href'=>'carrera','class' => 'icon-tags')
		))
);



$config['menu_nav'] =array(
	'Materia'=> array('href'=>'#materia','items'=>array(
		'subItem' => array('name'=>'Agregar Materia','href'=>'materia_c/insertar','class' => 'icon-plus'),
		'subItem2' => array('name'=>'Listar Materias','href'=>'materia_c/consultar','class' => 'icon-book'),
		))/*,
	'Pemsum'=> array('href'=>'#menu2href','items'=>array(
		'subItem' => array('name'=>'item1','href'=>'menu4.php','class' => 'icon-user'),
		'subItem2' => array('name'=>'item2','href'=>'menu5.php','class' => 'icon-user')
		))
	,
	'Usuario'=> array('href'=>'#menu3href','items'=>array(
		'subItem' => array('name'=>'item1','href'=>'menu6.php','class' => 'icon-user'),
		'subItem2' => array('name'=>'item2','href'=>'menu7.php','class' => 'icon-user')
		))*/
);

$config['menu_nav']=array(
		'subItem' => array('name'=>'Materias','href'=>'materia_c/insertar'),
		'subItem2' => array('name'=>'Usuarios','href'=>'materia_c'),
		'subItem3' => array('name'=>'Contactos','href'=>'materia_c'),	
);

$config['subMenu2'] =array(
	'Sistema'=> array('href'=>'#sistema','items'=>array(
		'subItem1' => array('name'=>'Usuarios','href'=>'admin/users','class' => 'icon-plus'),
		'subItem6' => array('name'=>'Alumnos Pre-Inscritos','href'=>'admin/pre_inscritos','class' => 'icon-plus'),
		'subItem2' => array('name'=>'Usuarios Inactivos','href'=>'admin/unactivated_users','class' => 'icon-book'),
		'subItem3' => array('name'=>'Permisos de direcciones','href'=>'admin/uri_permissions','class' => 'icon-plus'),
		'subItem4' => array('name'=>'Roles','href'=>'admin/roles','class' => 'icon-book')),
		'subItem5' => array('name'=>'Personalizar Permisos','href'=>'admin/custom_permissions','class' => 'icon-plus')),
		//array(
       'Materia'=> array('href'=>'#materia','items'=>array(
               'subItem' => array('name'=>'Agregar Materia','href'=>'materia_c/insertar','class' => 'icon-plus'),
               'subItem2' => array('name'=>'Listar Materias','href'=>'materia_c','class' => 'icon-tags'),
               )),
       'Departamento'=> array('href'=>'#Departamento','items'=>array(
               'subItem' => array('name'=>'Agregar Departamento','href'=>'departamento/agregar','class' => 'icon-plus'),
               'subItem2' => array('name'=>'Consultar Departamento','href'=>'departamento','class' => 'icon-tags'),
               )),
       'Requisito'=> array('href'=>'#requesito','items'=>array(
               'subItem' => array('name'=>'Agregar','href'=>'ControllerRequisitos/agregar','class' => 'icon-plus'),
               'subItem2' => array('name'=>'Consultar','href'=>'ControllerRequisitos/listar','class' => 'icon-tags'),
               )),
       'BaseDato'=> array('href'=>'#Basedato','items'=>array(
               'subItem' => array('name'=>'Backup','href'=>'ControllerBD/backup','class' => 'icon-plus'),
               'subItem2' => array('name'=>'Restore','href'=>'ControllerBD/restore_view','class' => 'icon-tags'),
               )),
       'Pensum'=> array('href'=>'#pensum','items'=>array(
               'subItem' => array('name'=>'Agregar Pensum','href'=>'pensum/agregar','class' => 'icon-plus'),
               'subItem2' => array('name'=>'Consultar Pensum','href'=>'pensum','class' => 'icon-tags'),
               )),
       'Plan de evaluaciones' => array('href'=>'#plan_evaluaciones','items'=>array(
       		'subItem' => array('name'=>'Agregar Plan de Evaluacion','href' =>'plan_evaluacion/insertar','class' => 'icon-plus'),
       		'subItem2' => array('name'=>'Consultar Plan de Evaluacion','href' =>'plan_evaluacion/consultar','class' => 'icon-plus'),
       	)),
       'Calificaciones' => array('href'=>'#calificaciones','items'=>array(
       		'subItem' => array('name'=>'Agregar calificacion','href' =>'estudiante_has_evaluacion/insertar','class' => 'icon-plus'),
       		'subItem2' => array('name'=>'Consultar calificacion','href' =>'estudiante_has_evaluacion/consultar','class' => 'icon-tags'),
       	)),       
       'Auditoria' => array('href'=>'#auditoria','items'=>array(
       		'subItem' => array('name'=>'Consultar Auditoria','href' =>'auditoria/consultar','class' => 'icon-plus')
       	))

	//	'subItem6' => array('name'=>'Listar Materias','href'=>'materia_c/consultar','class' => 'icon-book'),
	//	'subItem7' => array('name'=>'Agregar Materia','href'=>'materia_c/insertar','class' => 'icon-plus'),
	//	'subItem8' => array('name'=>'Listar Materias','href'=>'materia_c/consultar','class' => 'icon-book'),
		/*)),
	'Pemsum'=> array('href'=>'#menu2href','items'=>array(
		'subItem' => array('name'=>'item1','href'=>'menu4.php','class' => 'icon-user'),
		'subItem2' => array('name'=>'item2','href'=>'menu5.php','class' => 'icon-user')
		))
	,
	'Usuario'=> array('href'=>'#menu3href','items'=>array(
		'subItem' => array('name'=>'item1','href'=>'menu6.php','class' => 'icon-user'),
		'subItem2' => array('name'=>'item2','href'=>'menu7.php','class' => 'icon-user')
		))*/
);

$config['subMenu1'] =array(
	'Sistema'=> array('href'=>'#sistema','items'=>array(
		'subItem1' => array('name'=>'Usuarios','href'=>'admin/users','class' => 'icon-plus'),
		'subItem2' => array('name'=>'Usuarios Inactivos','href'=>'admin/unactivated_users','class' => 'icon-book'),
		'subItem3' => array('name'=>'Permisos de direcciones','href'=>'admin/uri_permissions','class' => 'icon-plus'),
		'subItem4' => array('name'=>'Roles','href'=>'admin/roles','class' => 'icon-book')),
		'subItem5' => array('name'=>'Personalizar Permisos','href'=>'admin/custom_permissions','class' => 'icon-plus')),

       'Pensum'=> array('href'=>'#pensum','items'=>array(
               'subItem2' => array('name'=>'Consultar Pensum','href'=>'pensum','class' => 'icon-tags'),
               ))
);

//$config['subMenu1'] = $config['subMenu2'];
//$config['subMenu3'] = $config['subMenu2'];
//$config['subMenu4'] = $config['subMenu2'];

$config['subMenu2admin'] = $config['subMenu2'];
$config['subMenu2auth'] = $config['subMenu2'];
$config['subMenu2materia_c'] = $config['subMenu2'];
$config['subMenu2carrera'] = $config['subMenu2'];
$config['subMenu2departamento'] = $config['subMenu2'];
$config['subMenu2ControllerRequisitos'] = $config['subMenu2'];
$config['subMenu2BaseDato'] = $config['subMenu2'];
$config['subMenu2pensum'] = $config['subMenu2'];
$config['subMenu2plan_evaluacion'] = $config['subMenu2'];
$config['subMenu2calificacion'] = $config['subMenu2'];
$config['subMenu2auditoria'] = $config['subMenu2'];


$config['menu_nav2']=array(
		'subItem' => array('name'=>'Administracion General','href'=>'admin'),
		'subItem2' => array('name'=>'Usuarios','href'=>'materia_c/consultar'),
		'subItem3' => array('name'=>'Contactos','href'=>'materia_c/consultar'),	
		
);

$config['menu_nav1']=array(
		'subItem2' => array('name'=>'Usuarios','href'=>'materia_c/consultar'),
		'subItem3' => array('name'=>'Contactos','href'=>'materia_c/consultar'),	
		
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