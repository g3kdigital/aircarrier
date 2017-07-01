<!DOCTYPE html> 
<html class="index link-01 pag-inicio ambos-logos">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="theme-color" content="#0058a8">

  <title><?php bloginfo('name'); ?> <?php if ( !is_front_page()){ echo " | "; wp_title('');} ?></title>
  
  <meta name="description" content="<?php bloginfo('description'); ?>">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="resource-type" content="document" />
  <meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
  <meta http-equiv="content-language" content="en-us" />
  <meta name="author" content="Harriet Smith" />
  <meta name="contact" content="harrietsmith@harrietsmith.us" />
  <meta name="copyright" content="Copyright (c)1997-2004 
Harriet Smith. All Rights Reserved." />
  <meta name="description" content="Story about my dog 
giving birth to puppies." />
  <meta name="keywords" content="stories, tales, harriet, smith, 
harriet smith, storytelling, day, life, dog, birth, puppies, happy" />

  <link rel="icon" href="cropped-logosimbolo-aircarrier-32x32.png" sizes="32x32">
  <link rel="icon" href="cropped-logosimbolo-aircarrier-192x192.png" sizes="192x192">
  <link rel="apple-touch-icon-precomposed" href="cropped-logosimbolo-aircarrier-180x180.png">
  <meta name="msapplication-TileImage" content="cropped-logosimbolo-aircarrier-270x270.png">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  
  <?php wp_head(); ?>  

</head>

<body translate="no">

<div id="inicio" class="contenedor principal ">

  <section class="menu arriba">
    <div class="grupo config">
      <span>LEER EN:</span> 
      <b class="icon español">ESP</b> 
      <b class="icon english">ENG</b>
    </div>
    <div class="grupo redes">
      <em>Siguenos</em>
	    <?php
	        $args = array(
	          'theme_location' => 'menu_super',
	          'container' => 'ul',
	          'menu_class' => 'menu-redes-sociales',
	          );
	        wp_nav_menu( $args );
        ?>	
      <a href="https://skype.com" class="link skype" target="_blank">
        <b class="icon-fa-non">
        PBX: 57 1 4 924830
        </b>
      </a>
    </div>
  </section>
  <nav class="menu superior">
    <a href="index.html" class="grupo img aircarrier logistic">
      <img alt="logosimbolo aircarrier" class="logosimbolo logo"
       src="img/logosimbolo-aircarrier.png" />
      <img alt="logotipo aircarrier logistic" class="logotipo logo" 
       src="img/logotipo-aircarrier-logistic.png" /> 
    </a>
    <a href="index.html" class="grupo img aircarrier industrial izquierda">
      <img  alt="logosimbolo aircarrier" class="logosimbolo logo"
       src="img/logosimbolo-aircarrier.png" />
      <img alt="logotipo aircarrier industrial" class="logotipo logo"
       src="img/logotipo-aircarrier-industrial.png" />
    </a>
    
    <button class="btn menu-burger">
      <i class="fa fa-bars icon burger" aria-hidden="true"></i>
      <i class="fa fa-times icon close" aria-hidden="true"></i>
    </button>


	<?php
	    $args = array(
	      'theme_location' => 'menu_principal',
	      'container' => 'ul',
	      'menu_class' => 'grupo enlinea enlaces',
	      );
	    wp_nav_menu( $args );
	?>	
    
    <ul class="grupo enlinea enlaces">      
      <li class="item enlineado link01">
        <a href="index.html" class="enlace">
          INICIO
        </a>
      </li>      
      <li class="item enlineado link02">
        <a href="comercio-exterior.html" class="enlace">
          COMERCIO <br />
          EXTERIOR
        </a>
      </li>
      <li class="item enlineado link03">
        <a href="logistica-internacional.html" class="enlace">
          LOGÍSTICA DE <br />
          TRANSPORTE
        </a>
      </li>
      <li class="item enlineado link04">
        <a href="zona-franca.html" class="enlace">
          ZONA <br />
          FRANCA
        </a>
      </li>
      <li class="item enlineado link05">
        <a href="proyectos-especiales.html" class="enlace">
          PROYECTOS <br />
          ESPECIALES
        </a>
      </li>
      <li class="item enlineado link06">
        <a href="cotice-servicios.html" class="enlace">
          COTICE SUS <br />
          SERVICIOS
        </a>
      </li>
      <li class="item enlineado link07">
        <a href="servicio-cliente.html" class="enlace">
          SERVICIO <br />
          AL CLIENTE
        </a>
      </li>
      <li class="item enlineado link08">
        <a href="#contacto" class="enlace contacto">
          CONTÁCTENOS
        </a>
      </li>
    </ul>  

    <a href="index.html" class="grupo img aircarrier industrial derecha">
      <img  alt="logosimbolo aircarrier" class="logosimbolo logo"
       src="img/logosimbolo-aircarrier.png" />
      <img alt="logotipo aircarrier industrial" class="logotipo logo"
       src="img/logotipo-aircarrier-industrial.png" />
    </a>   
  </nav>