<?php 

/*  function inputB($campos){
	 foreach ($campos as $key => $value): 
	//echo $campos[$key]['atr']['name'].'<br>';
	 ?>

	   <div class="control-group">
	    <div class="controls">
	      <label class="checkbox">
	         <?php echo form_label($campos[$key]['label'], $campos[$key]['atr']['id']);?>
	      </label>
			<?php echo form_input($campos[$key]['atr']); ?>
			<?php echo form_error($campos[$key]['atr']['name']); ?>
	    </div>
	  </div>
	 	
	 <?php endforeach ;
 }*/

function urlmenu($uri=''){
	$CI =& get_instance();
	//var_dump($CI);
	//$CI->config->base_url($uri).
	return $CI->dx_auth->get_role_id().$CI->uri->segment(2); 
}

function textareaB($label='',$attr = array()){?>
	<div class="textarea" ><label for="<?php echo $attr['name'] ?>"><?php echo $label ?> </label>
	<?php echo form_textarea($attr); ?>
		</div>
	<?php  
}

function passwordB($campo){
 ?>

   <div class="control-group">
      <label class="control-label" for="<?=$campo['atr']['id']?>">
         <?php
         echo $campo['label'];?>
      </label>
    <div class="controls">
		<?php echo form_password($campo['atr']); ?>
		<?php echo form_error($campo['atr']['name']); ?>
    </div>
  </div>
 	
 <?php
 // endforeach ;
}



function inputB($campo){
 //foreach ($campo as $key => $value): 
//echo $campo['atr']['name'].'<br>';
 ?>

   <div class="control-group">
      <label class="control-label" for="<?=$campo['atr']['id']?>">

         <?php
         echo $campo['label'];
          //echo form_label($campo['label'], $campo['atr']['id']);?>
      </label>
    <div class="controls">
		<?php echo form_input($campo['atr']); ?>
		<?php echo form_error($campo['atr']['name']); ?>
    </div>
  </div>
 	
 <?php
 // endforeach ;
}

	function selectB($label = '',$name = '', $options = array(), $selected = array(), $extra = ''){
 		?>
 		<div class="control-group">
	 		<label class="control-label" for="<?php echo $label ?>">
	 			<?php echo $label;
	 			?>
	 		</label>
	 		<div class="controls">
	 			<?php  echo form_dropdown($name, $options, $selected, $extra);?>
	 		</div>
 		</div>
 	<?php 
 	}




function validarHref($href){
 	return $href = ($href[0]=='#')? true : false;
 }

 function limpiarHref($href){
 	return substr($href, 1);
 }
 function validarActivo($matriz,$href){
	$result=false;
	foreach ($matriz['items'] as $keyItem => $items){
		if($href == $items['href']){
			return true;
		}else{
			$result = false;
		}
	}
	return $result;
}
 function acordionMenu($id ="",$menup,$href,$url){
	foreach($menup as $key => $menu):
		if($href == $menu['href']):?>
			<li class="accordion-heading">
				<a class="accordion-toggle" href="<?php echo $menu['href'];?>">
			  		</i><label id="accordion-ancla"><?php echo $key; ?></label>
				</a>
			</li>
<?php   else:
			$atributoMenu = (validarHref($menu['href']))? "data-toggle='collapse' data-parent='#accordion2' href='".$menu['href'].''.$id."'" : "href='".$menu['href']."'"?>
			<li class="accordion-heading">
				<a class="accordion-toggle" <?php echo $atributoMenu; ?> >
			  		<label id="accordion-ancla"><?php echo $key; ?></label>
				</a>
			</li>
<?php	$atributoAccordion = (validarActivo($menu,$href))? "<li id='".limpiarHref($menu['href']).''.$id."' class='accordion-body collapse in'>"
													: "<li id='".limpiarHref($menu['href']).''.$id."' class='accordion-body collapse'>";

	 	echo $atributoAccordion;
		foreach ($menu['items'] as $items):
			$atributosItem = ($href == $items['href'])? 'class=" activo"': 'class=""';
			//$atributosItem = ($href == $items['href'])? 'class="accordion activo"': 'class="accordion"';
		?>

				<a <?php echo $atributosItem ?> href="<?php echo $url.$items['href']; ?>">
					<i class = "<?php echo $items['class'];?>"></i>
				<?php echo $items['name']; ?>
				</a>
<?php 		endforeach; ?>
		</li>
<?php	endif;
 endforeach;

}

function navegacionMenu($menu_nav,$href,$url){
	foreach($menu_nav as $key => $items):
			$atributosItem = ($href == $items['href'])? 'class="active"': 'class=""';?>
			<li <?php echo $atributosItem ?> >	
				<a href="<?php echo $url.$items['href']; ?>">
				<?php echo $items['name']; ?>
				</a></li>
<?php 		endforeach;
}



function cabecera($title = 'IUSPO',$css=array(),$js=array(),$cssIE=array(),$jsIE=array()) {


	$css_basic = array('black.css','fancyBox/jquery.fancybox.css');
	$js_basic = array('../jquery.uploadify/jquery.uploadify.js','../jquery.uploadify/flash_detect.1.0.4.min.js',
	'jquery.galleriffic.js','jquery.opacityrollover.js','jsHome.js','fancyBox/lib/jquery.mousewheel-3.0.6.pack.js',"fancyBox/jquery.fancybox.pack.js"); 
	array_push($css_basic, $css);
	array_push($js_basic, $js);

	header('Content-Type: text/html; charset=ISO-8859-1');

	?><!DOCTYPE html>
		<html lang="es">
			<head>
			    <meta charset="utf-8">
			    <title><?=$title?></title>
			    <meta name="viewport" content="width=device-width, initial-scale=1.0">
			    <meta name="description" content="">
			    <meta name="author" content="">
		<!-- <link href="css/Menu/default.css" media="screen" rel="stylesheet" type="text/css" /> -->
     <?php
	//   <link  rel="stylesheet" type="text/css" href="css/fluid_960.css"/>
	if (isset($css_basic))
	foreach ($css_basic as $value){
		echo '<link  rel="stylesheet" type="text/css" href="css/'.$value.'"/>';
	}
	echo '<!--[if lt IE 8]>
       	<link href="css/IE_problem.css" media="screen" rel="stylesheet" type="text/css" />';
	if (isset($cssIE))
	foreach ($cssIE as $value){
		echo '<link  rel="stylesheet" type="text/css" href="css/'.$value.'"/>';
	}
	echo '<![endif]-->';

	echo '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>';

	if (isset($js_basic))
	foreach ($js_basic as $value){
		echo '<script type="text/javascript" src="js/'.$value.'"></script>';
	}


	echo'<!--[if lt IE 8]>
		<script type="text/javascript" src="js/jquery/jquery.dropdown.js"></script>';
	if (isset($jsIE))
	foreach ($jsIE as $value){
		echo '<script type="text/javascript" src="js/'.$value.'"></script>';
	}
	echo' <![endif]-->';

	echo'</head>

		';           
}



 ?>