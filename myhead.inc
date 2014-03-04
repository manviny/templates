<!DOCTYPE html>
<html ng-app>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='<?php echo $config->urls->templates?>assets/css/app.css'>
  <link rel='stylesheet' href='<?php echo $config->urls->templates?>assets/css/benipeixcar.css'>
  <link rel='stylesheet' href='<?php echo $config->urls->templates?>assets/css/animate.min.css'>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Yanone+Kaffeesatz:200,300,400,700|Raleway:200,300,400,500,700' rel='stylesheet' type='text/css'>
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

  <link href="<?php echo $config->urls->templates?>assets/favicon.ico" rel="shortcut icon">
  <link href="<?php echo $config->urls->templates?>assets/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    @javascript html5shiv respond.min
  <![endif]-->

  <title>Hospital Veterinario Benipeixcar - <?php echo $page->name ?></title>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.min.js"></script>
</head>

<body>

<div aria-hidden='true' aria-labelledby='loginModalLabel' class='modal fade' id='loginModal' role='dialog' tabindex='-1'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button aria-hidden='true' class='close' data-dismiss='modal' type='button'>×</button>
        <h4 class='modal-title'>Formulario de login</h4>
      </div>
      <div class='modal-body'>
        <form action='#' role='form'>
          <div class='row'>
            <div class='col-md-6'>
              <label class='control-label' for=''>Nombre de usuario</label>
              <input class='form-control' placeholder='Usuario' type='text'>
            </div>
            <div class='col-md-6'>
              <label class='control-label' for=''>Contraseña</label>
              <input class='form-control' placeholder='contraseña' type='text'>
            </div>
          </div>
        </form>
      </div>
      <div class='modal-footer'>
        <button class='btn btn-default' data-dismiss='modal' type='button'>Cerrar</button>
        <button class='btn btn-primary' type='button'>Entrar</button>
      </div>
    </div>
  </div>
</div>
  <!--
  <div aria-hidden='true' aria-labelledby='contactModalLabel' class='modal fade' id='contactModal' role='dialog' tabindex='-1'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button aria-hidden='true' class='close' data-dismiss='modal' type='button'>×</button>
        <h4 class='modal-title'>Formulario de contacto</h4>
      </div>
      <div class='modal-body'>
        <form action='#' role='form'>
          <div class='form-group'>
            <div class='row'>
              <div class='col-md-6'>
                <label class='control-label' for=''>Nombre</label>
                <input class='form-control' placeholder='Tu nombre' type='text'>
              </div>
              <div class='col-md-6'>
                <label class='control-label' for=''>Email</label>
                <input class='form-control' placeholder='Tu correo electrónico' type='text'>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <div class='row'>
              <div class='col-md-12'>
                <label class='control-label' for=''>Mensaje</label>
                <textarea class='form-control' name='' rows='4'></textarea>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class='modal-footer'>
        <button class='btn btn-default' data-dismiss='modal' type='button'>Cancelar</button>
        <button class='btn btn-primary' type='button'>Enviar</button>
      </div>
    </div>
  </div>
</div>

-->


 
<div class='noise-wrapper'>
  <div class='header-main'>
    <div class='container'>
  <nav class='navbar navbar-default' role='navigation'>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class='navbar-header'>
      <button class='navbar-toggle' data-target='.navbar-ex1-collapse' data-toggle='collapse' type='button'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='current navbar-brand' href='/'>
        <img alt=''  src='<?php echo $config->urls->templates?>assets/images/logo.png' style="margin-top:3%;">
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class='collapse navbar-collapse navbar-ex1-collapse'>
      <a class='btn btn-default navbar-btn navbar-right' data-toggle='modal' href='#loginModal'>
        Login
        <i class='icon-signin'></i>
      </a>
      <ul class='nav navbar-nav navbar-right'>
        <li class='current active'>
          <a class='current' href='<?php echo $config->urls->root?>'>Inicio</a>
        </li>
        
<?php  foreach($pages->get('/')->children() as $seccion) {  ?>

	<?php if ($seccion->name == "galeria" || $seccion->name == "contactar") { ?>
    	<li>
          <a href='<?php echo $seccion->url ?>'><?php echo $seccion->title ?></a>
        </li>
    <?php } else {?>
		<li>
          <a href='<?php echo $seccion->children->first()->url ?>'><?php echo $seccion->title ?></a>
        </li>
<?php } ?>
<?php } ?>
     <!-- Antiguio menu contacto
      	<li>
          <a href='#contactModal' data-toggle='modal'>Contacto</a>
        </li>
      -->
       </ul>

<!-- Array que contiene las urls de las páginas en las que queramos que se muestre el submenú -->
<?php $paginas = array(
						"/servicios/servicios-ofrecidos/",
						"/servicios/campanas/",
						"/nosotros/equipo-profesional/",
						"/nosotros/instalaciones/",
						"/consulta/casos-clinicos/",
						"/consulta/consejos/",
						"/consulta/consejos/",
						"/consulta/links-de-interes/",
						"/productos/productos-disponibles/",
						"/productos/promociones-especiales/") ?>         
        
  
    </div>
  </nav>
  	<?php if (in_array ($page->path,$paginas)) { ?>
    
	<ul class="portfolio-filtersmio text-center">
         
         <?php foreach($page->parent->children as $subseccion) { ?>
    		<li>
     		<a href='<?php echo $subseccion->url ?>'><?php echo $subseccion->title ?></a>
   			</li>
   		 <?php } ?>
  		 </ul>
		 <?php
	
	} elseif ($page->name == "galeria") {?>
        
         <ul class="portfolio-filtersmio text-center">
         
        <?php foreach($page->children as $galeria) { ?>
    		<li>
      		<a href='<?php echo $galeria->url ?>'><?php echo $galeria->title ?></a>
   			 </li>
  		<?php } ?>
  		</ul>
  	<?php } else { ?>	
			

         
  		<?php } ?>
</div>

  </div>

  <div class='separator-shadow-bottom'>

      <img alt='' src='<?php echo $config->urls->templates?>assets/images/shadow-separator-wide-bottom.png'>   
  </div>  
  
  