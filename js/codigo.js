// VARIABLES GLOBALES
var web = $(document);
var btn_burger = $(".btn.menu-burger, .enlace.contacto");
var btn_video = $(".btn.video, .btn.video.cierra");
var menu_movil = $(".enlaces, .menu.arriba");
var anclas = $('a[href*="#"]');
var website = $('html, body');
var seleccionaFormulario = $('button.seleccion.formulario');
var contenedorFormulario = $('.contenedor-formularios');
var btnFormulario_comercio = $('.seleccion.formulario.comercio');
var btnFormulario_logitica = $('.seleccion.formulario.logistica');
var btnFormulario_zfranca = $('.seleccion.formulario.z-franca');
var btnAlcance = $('.seleccion.alcance .btn');
var btnNacional = $('.seleccion.alcance .btn.nacional');
var btnInternacional = $('.seleccion.alcance .btn.internacional');
var formulario_comercio = $('formulario.comercio');
var formulario_logitica = $('formulario.logitica');
var formulario_zfranca = $('formulario.z-franca');
var clasesFormularios = "seleccion-comercio seleccion-logistica seleccion-zonafranca";
var modal_container = $(".ventanas-emergentes");
var btn_modal = $(".boton.modal.equipo, .boton.modal.ventajas, .boton.modal.consejos, .pagina .boton.popup.equipo, .pagina .boton.popup.ventajas, .pagina .boton.popup.consejos");
var btn_modal_equipo = $(".boton.modal.equipo, .boton.popup.equipo");
var btn_modal_consejos = $(".boton.popup.consejos");
var btn_modal_ventajas = $(".boton.popup.ventajas");
var btn_modal_politicas = $(".trigger-politica");
var btn_cerrar_modal = $(".modal-content .cerrar, .modal-content .botones .cotiza");
var modal_content = $(".modal-content");
var video_youtube = $(".video.youtube");
var video_intro = $(".video .embebido");
var clase_on = "activo";
var plugin_divisas = $("div#gcw_mainFOWxbzZ8g>style");
var menu_enlaces = $("ul#menu-menu-principal .item a");
var mutearvideo = $(".mejs-mediaelement");

//var link_contacto = $(".enlace.contacto");

// document ready

web.ready(function(){
  
  menu_enlaces.addClass("enlace");
  mutearvideo.attr("muted");
     
  /*$('.formulario.logistica.internacional').on("submit", function(){
    alert(this);
    $('.formularios .formulario.comercio input').resetear();
  });
  
  $.fn.resetear = function () {
       var form = $(this);
       form.each(function () {
           this.reset();
       });
   }*/
    

    /*function preventDefault(e) {
      e.preventDefault();
    };
    $('form .btn').bind("submit", preventDefault);
   if(formulario.checkValidity(true)){
      $('form .btn').unbind("submit", preventDefault);
      $('.formularios input').val('');
   };*/  


  /*FORMULARIOS*/
  seleccionaFormulario.on("click", function(){
    contenedorFormulario.addClass(clase_on).removeClass("seleccion-comercio seleccion-logistica seleccion-zonafranca");
    seleccionaFormulario.removeClass(clase_on); 
    btnAlcance.removeClass(clase_on);
    $(this).addClass(clase_on); 
  })
  
  btnFormulario_comercio.on("click", function(){
    contenedorFormulario.addClass("seleccion-comercio");
  })
  
  btnFormulario_logitica.on("click", function(){
    contenedorFormulario.addClass("seleccion-logistica nacional");
    btnNacional.addClass(clase_on);
  })
  
  btnAlcance.on("click", function(){
    contenedorFormulario.removeClass("nacional internacional");
    btnAlcance.toggleClass(clase_on);
  })
  
  btnNacional.on("click", function(){
    contenedorFormulario.addClass("nacional");
  })
  
  btnInternacional.on("click", function(){
    contenedorFormulario.addClass("internacional");
  })
  
  btnFormulario_zfranca.on("click", function(){
    contenedorFormulario.addClass("seleccion-zonafranca");
  })
  
  /*HAMBURGUESAS*/
  btn_burger.on("click", function(){
    changingClass(menu_movil, clase_on);
    changingClass(btn_burger, clase_on);
  })  
  /*MODAL VIDEOS*/
  btn_video.on("click", function(){
    iniciarModal();
    changingClass(video_youtube, clase_on);
    addingProperty(video_intro,"src","https://www.youtube.com/embed/FjvYABmtyDQ?rel=0&amp;showinfo=0");
  })   
  /*MODALES*/
  btn_modal.on("click", function(){
    iniciarModal();
    changingClass(modal_content, clase_on);
  })
  
  btn_modal_equipo.on("click", function(){
    modal_content.removeClass("consejos-on ventajas-on politicas-on");
    modal_content.addClass("equipo-on");
  })
    
  btn_modal_consejos.on("click", function(){
    modal_content.removeClass("equipo-on ventajas-on politicas-on");
    modal_content.addClass("consejos-on");
  })  
   
  btn_modal_ventajas.on("click", function(){
    modal_content.removeClass("equipo-on consejos-on politicas-on");
    modal_content.addClass("ventajas-on");
  })   
  
  btn_modal_politicas.on("click", function(){
    iniciarModal();
    changingClass(modal_content, clase_on);
    modal_content.removeClass("equipo-on consejos-on ventajas-on");
    modal_content.addClass("politicas-on");
  })
  
  btn_cerrar_modal.on("click", function(){
    iniciarModal();
    changingClass(modal_content, clase_on);
    modal_content.removeClass("equipo-on consejos-on ventajas-on politicas-on");
  })

  anclando_A();
  
  plugin_divisas.empty().remove();
  
});

// function removerFormularios(){
//   contenedorFormulario.removeClass(clasesFormularios);
// }


function iniciarModal(){
  changingClass(modal_container, clase_on);
}

function changingClass(target,clase){
  target.toggleClass(clase);
}

function addingProperty(target,atributo,valor){
  target.attr(atributo, valor);
}

function anclando_A () {
  anclas.on("click", scroll_A);  
};

function scroll_A (){
  event.preventDefault();
  var _href = $(this).attr('href');
  website.animate({ scrollTop : $( _href ).offset().top-100 }, 'slow');
};

/*DIVISAS*/

function reloadFOWxbzZ8g(){ 
  var sc = document.getElementById('scFOWxbzZ8g');
  if (sc) sc.parentNode.removeChild(sc);
  sc = document.createElement('script');
  sc.type = 'text/javascript';
  sc.charset = 'UTF-8';
  sc.async = true;
  sc.id='scFOWxbzZ8g';
  sc.src = 'https://freecurrencyrates.com/es/widget-vertical?iso=USDEURGBPJPYCNYXUL&df=2&p=FOWxbzZ8g&v=fits&source=fcr&width=245&width_title=0&firstrowvalue=1&thm=A6C9E2,FCFDFD,4297D7,5C9CCC,FFFFFF,C5DBEC,FCFDFD,2E6E9E,000000&title=Conversor%20de%20divisas&tzo=300';
  var div = document.getElementById('gcw_mainFOWxbzZ8g');
  div.parentNode.insertBefore(sc, div);
} reloadFOWxbzZ8g();