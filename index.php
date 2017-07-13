<?php get_header(); ?>

<!--=================================
  VIDEO BANNER 
  =================================-->

  <section class="banner">
    <div class="grupo-video">
      <video class="video-background" loop muted preload autoplay poster="img/video-cover-aircarrier.jpg">
        <source src="https://aircarrierzf.com.co/video/aircarrier-video.mp4" type="video/mp4">
        <source src="https://aircarrierzf.com.co/video/aircarrier-video..webm" type="video/webm">
        <source src="https://aircarrierzf.com.co/video/aircarrier-video..ogv" type="video/ogg">
       Tu navegador no soporta HTML5 Video  
      </video>
      <h3 class="titulo video">
        soluciones a la medida de tus necesidades
        <button class="btn video">
          <i class="fa fa-play icono reproducir" aria-hidden="true"></i>
        </button>
      </h3>
    </div>
  </section>

  <!--=================================
  SERVICIOS
  =================================-->

  <main class="contenido inicio">
    <section class="seccion servicios">
      <h2 class="titulo principal">
        NUESTRO FACTOR CLAVE ES USTED
      </h2>
       
      <?php

        query_posts( array

        ( 
          'post_type' => 'servicio',
          'showposts' => 4,
          'order'    => 'ASC'
         ));

       ?>
      <?php if(have_posts()): while (have_posts()) : the_post(); ?>        

        <article class="servicio <?php echo the_field('clase_servicio'); ?>">
          <figure class="icono svg">
            <?php echo the_field('icono'); ?> 
          </figure>
          <h4 class="titulo">
            <?php echo the_title(); ?>
          </h4>
          <a href="<?php echo the_permalink(); ?>" class="enlace">
            <?php echo the_field('texto_enlace'); ?>          
          </a>
        </article>

      <?php endwhile; endif; ?>

      <?php wp_reset_query(); ?>

    </section>

    <!--=================================
    NUESTRO EQUIPO DE TRABAJO 
    =================================-->
    <?php

      query_posts( array

      ( 
        'post_type' => 'pop_ups',
        'showposts' => 1,
        'order'    => 'ASC'
       ));

     ?>
    <?php if(have_posts()): while (have_posts()) : the_post(); ?>    

      <section class="seccion equipo">
        <h4 class="titulo">
          <?php echo the_field('popup_titulo'); ?>
        </h4>
        <figure class="imagen">
          <style>
            .equipo .imagen {
              background-image: url('<?php echo the_field('popup_img01_big'); ?>');
             }
             @media (max-width: 720px) {
              .equipo .imagen {
                background-image: url('<?php echo the_field('popup_img01_tiny'); ?>');
               }              
             }
          </style>
        </figure>
        <article class="articulo">
          <?php echo the_field('popup_texto01'); ?>      
        </article>    
        <button class="enlace boton modal equipo">
          CONOCE NUESTRO EQUIPO DE TRABAJO
        </button> 
      </section>

    <?php endwhile; endif; ?>

    <?php wp_reset_query(); ?>

    <section class="seccion equipo">
      <h4 class="titulo">
        NUESTRO EQUIPO DE TRABAJO.
      </h4>
      <figure class="imagen">
      </figure>
      <article class="articulo">
        <p class="parrafo">
          En <strong>AirCarrier</strong> somos conscientes que el capital humano es uno de los principales factores de éxito en la prestación de nuestros servicios, por lo que es una de nuestras principales prioridades, dentro de nuestra planeación estratégica. 
        </p>
        <p class="parrafo">
          Contamos con un equipo de trabajo altamente competente, con los conocimientos, habilidades y la experiencia requerida para el logro de nuestro propósito común: <b>un cliente satisfecho</b>.
        </p>
        <p class="parrafo">
          Las personas que integran nuestro equipo de trabajo se destacan por sus valores de integridad, honestidad, sentido de pertenencia y respeto, los cuales reflejan la filosofía de nuestra organización.
        </p>       
      </article>    
      <button class="enlace boton modal equipo">
        CONOCE NUESTRO EQUIPO DE TRABAJO
      </button> 
    </section>

    <section class="seccion ventajas">
      <h3 class="titulo principal">
        <span>NUESTRA</span> 
        <b>VENTAJA COMPETITIVA</b>
      </h3>
      <p class="parrafo">
        Personalizamos nuestros servicios de acuerdo a los requisitos de nuestros clientes y sus preferencias en cuanto al manejo y gestión de su operación logística.
      </p>
      <article class="articulo ventaja logistica">
        <figure class="imagen"></figure>
        <h4 class="titulo">
          <strong>LOGÍSTICA</strong>
          <span>DE TRANSPORTE INTERNACIONAL Y OTM</span>
        </h4>
        <ul class="listado vertical">
          <li class="item">
            Comunicación directa con el proveedor del cliente en origen.
          </li>
          <li class="item">
            Constante seguimiento y retroalimentación al cliente, acerca del  estado de su Operación Logística.
          </li>
        </ul>
      </article>
      <article class="articulo ventaja comercio">
        <figure class="imagen"></figure>
        <h4 class="titulo">
          <span>OPERACIONES DE</span>
          <strong>COMERCIO EXTERIOR</strong>
        </h4>
        <ul class="listado vertical">
          <li class="item">
            Clasificación Arancelaria sin costo adicional para el cliente. (cuando se requiera)
          </li>
          <li class="item">
            Constante seguimiento y retroalimentación al cliente, acerca del estado de su Operación de Comercio Exterior.
          </li>
          <li class="item">
            Agilidad y precisión en el reconocimiento previo de mercancía.
          </li>
        </ul>
      </article>
      <article class="articulo ventaja bodega">
        <figure class="imagen"></figure>
        <h4 class="titulo">
          <span>SERVICIO</span>
          <strong>LOGÍSTICO EN BODEGA</strong>
        </h4>
        <p class="parrafo">
          Al ostentar la calificación de Usuario Industrial de bienes y Servicios de la Zona Franca de Bogotá, contamos con las siguientes ventajas  para nuestros clientes:
        </p>
        <ul class="listado vertical">
          <li class="item">
            El periodo de gestión logística de mercancías en zona franca es ilimitado.
          </li>
          <li class="item">
            Posibilidad de desarrollar Operaciones de Reexpedición.
          </li>
          <li class="item">
            Óptimos tiempos de nacionalización.
          </li>
          <li class="item">
            Nacionalizaciones parciales o totales.
          </li>
          <li class="item">
            Posibilidad de realizar procesamientos parciales, fuera de la Zona Franca hasta por 9 meses.
          </li>
          <li class="item">
            Cumplimiento de compromiso de exportación – Plan Vallejo.
          </li>
          <li class="item">
            Recepción y gestión logística de exportaciones.
          </li>
          <li class="item">
            Desarrollo de operaciones de empaque, reempaque, envase, etiquetado o clasificación de mercancías.
          </li>
          <li class="item">
            Seguridad perimetral y controles de acceso, dispuestos por la Zona Franca 24 horas, los 365 días del año.
          </li>
          <li class="item">
            Libertad cambiaria
          </li>
          <li class="item">
            Horarios de servicio competitivos – 24 /7
          </li>
        </ul>
      </article>
    </section>
    <section class="seccion ubicacion">
      <div class="contenedor mapa">
        <iframe class="embebido" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.1360858538383!2d-74.15930317077313!3d4.675004999787764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNMKwNDAnMzAuMCJOIDc0wrAwOSczMS41Ilc!5e0!3m2!1ses!2ses!4v1492558878440" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
        <h3 class="titulo">
          UBICACIÓN ESTRATÉGICA
        </h3>
      </div>
    </section>
  </main><!--INICIO-->
  
<?php get_footer(); ?>
  
