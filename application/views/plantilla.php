<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>IUSPO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?=base_url()?>/css/docs/assets/css/bootstrap.css" rel="stylesheet">
    <link  href="<?=base_url()?>/css/iuspo_style.css" rel="stylesheet" >
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="<?=base_url()?>/css/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?=base_url()?>/css/docs/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>/css/docs/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>/css/docs/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>/css/docs/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>/css/docs/assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">IUSPO</a>
          <div class="nav-collapse collapse ">
            <ul class="navbar nav pull-right visible-desktop"> 
                  <li class="dropdown">  
                <button class="btn dropdown-toggle btn-info" data-toggle="dropdown">Usuario <span class="caret"></span></button>
                <ul class="dropdown-menu user-option" role="menu" aria-labelledby="drop1" style="min-height: 100px;min-width: 270px;padding: 10px;">
                          <table>
                            <tr>
                              <td rowspan="2">
<?php 
$image_properties = array('src' => 'img/user.jpg','alt' => 'Image Profile',
  'class' => '','width' => '100','height' => '100','title' => ''
);
echo img($image_properties); 
?>
                              </td>
                              <td >
                                <?php echo $this->dx_auth->get_fullname() ?>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                            </tr>
                            <tr>
                              <td colspan="2" class="divider"></td>
                            </tr>
                            <tr>
                              <td>
                                <form action="">
                                
                                <?php $attrLogout = array('class' => 'btn btn-mini btn-info' ); 
                                 echo  anchor('/auth/login', 'Opciones', $attrLogout);

                                ?>
                                </form>



                              </td>
                              <td align="right">
                                <form>                         
                        <?php $attrLogout = array('class' => 'btn btn-mini btn-success' ); 
                        echo  anchor('/auth/logout', 'Cerrar Sesión', $attrLogout);
                        ?>
                        
                      </form>
                              </td>
                            </tr>
                          </table>
                        </ul>                             
                  </li>          
              </ul>
            <ul class="nav">
              <?php 
              $url = $this->uri->segment(1).'/'.$this->uri->segment(2);
              $this->config->load('plantilla');$id = ""; 
              echo navegacionMenu($this->config->item('menu_nav'.$this->dx_auth->get_role_id()),$url,base_url());?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
          <div class="well">
            <ul class="nav nav-list">
              <?php 
              $url = $this->uri->segment(1).'/'.$this->uri->segment(2);
              $this->config->load('plantilla');$id = ""; 
              echo acordionMenu($id,$this->config->item('administrador'),$url,base_url());?>
            </ul>
          </div><!--/.well -->
         </div><!--/span-->
        <div class="span10">

          <div class="hero-unit">

             <?php 
                    if(isset($contenido)){
                         $this->load->view($contenido);
                    }else{
                         $this->load->view('welcome');
                    }
                ?> 
          </div>
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>/css/docs/assets/js/jquery.js"></script>
    <script src="<?=base_url()?>/css/docs/assets/js/bootstrap-transition.js"></script>
    <script src="<?=base_url()?>/css/docs/assets/js/bootstrap-alert.js"></script>
    <script src="<?=base_url()?>/css/docs/assets/js/bootstrap-modal.js"></script>
    <script src="<?=base_url()?>/css/docs/assets/js/bootstrap-dropdown.js"></script>
    <script src="<?=base_url()?>/css/docs/assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?=base_url()?>/css/docs/assets/js/bootstrap-tab.js"></script>
    <script src="<?=base_url()?>/css/docs/assets/js/bootstrap-tooltip.js"></script>
    <script src="<?=base_url()?>/css/docs/assets/js/bootstrap-popover.js"></script>
    <script src="<?=base_url()?>/css/docs/assets/js/bootstrap-button.js"></script>
    <script src="<?=base_url()?>/css/docs/assets/js/bootstrap-collapse.js"></script>
    <script src="<?=base_url()?>/css/docs/assets/js/bootstrap-carousel.js"></script>
    <script src="<?=base_url()?>/css/docs/assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>