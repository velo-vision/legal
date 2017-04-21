
<div class="bg-terminos">

<?php
  require("functions.php");
  get_header();
?>


  <div class="content-scroll">
    <span class="scroll-btn">
  	   <a href="#">
  		  <span class="mouse">
  			<span>
  			</span>
        </span>
      </a>
      <p claas="nomargin">scroll</p>
    </span>
  </div>

<div class="animsition"
  data-animsition-in-class="fade-in-up-sm"
  data-animsition-in-duration="1000"
  data-animsition-out-class="fade-out-up-sm">


<div class="row nomargin">
  <div class="col l10 offset-l1 titulo-terminos">
    <p>
      Preguntas <strong>Frecuentes</strong>
    </p>
  </div>
  <div class="col l10 offset-l1 terminos-condiciones">
    <p>
      <strong>¿Cómo puedo contactarlos</strong>
    </p>
    <p>
      Dando click aquí. Puedes enviarnos un correo, llamarnos o buscarnos en cualquiera de nuestras redes sociales, siempre estamos disponibles.
    </p>
    <p>
      <strong>¿Pedirles alguna propuesta tiene costo?</strong>
    </p>
    <p>
      En lo absoluto, cualquier junta y comunicación que tengamos antes de que aceptes una propuesta formal de Legal Nest (y aún si no lo haces) no tendrá ningún costo.
    </p>
    <p>
      <strong>¿Puedo buscarlos para cualquier tipo de problema legal?</strong>
    </p>
    <p>
      Nuestra especialidad son los servicios que vez en nuestra página y que están enfocados en su mayoría a consultorías y servicios legales corporativos, de propiedad intelectual y del día a día de tu empresa,  sin embargo, contamos con una red de aliados comerciales que nos permiten proponerte soluciones relacionadas con muchas otras ramas de derecho.
    </p>
    <p>
      <strong>¿Por qué Legal Nest?</strong>
    </p>
    <p>
      Por qué tenemos un esquema diferente, innovador en el que buscamos romper con las mecánicas de trabajo de los despachos tradicionales para poder adecuarnos a las necesidades de nuestros clientes. Para nosotros no hay clientes pequeños, te aseguramos mejores precios,  resultados, atención y dedicación en todo momento.
    </p>
    <p>
      <strong>¿Por qué mi relación con Legal Nest sería diferente?</strong>
    </p>
    <p>
      Siempre seremos transparentes contigo, no esperes retrasos, cargos no contemplados ni obstáculos para contactarnos en cualquier momento, ese es nuestro compromiso.
      dirigen por el camino correcto y respaldan en la toma de decisiones.
    </p>
    <p>
      <strong>¿Qué experiencia los respalda?</strong>
    </p>
    <p>
      Además de postgrados, certificados, congresos y demás actividades educativas, los fundadores de Legal Nest contamos con más de 10 años acumulados de experiencia trabajando en distintos ámbitos del derecho, incluyendo servicios de consultoría, despachos legales nacionales e internacionales, empresas internacionales “Fortune 500”, notarías públicas y servicios de freelance a pequeñas y medianas empresas.
    </p>
    <p>
      Por último, nos asesoramos de un grupo externo de consultores expertos constituido por profesionales que cuentan con una amplia y reconocida trayectoria, quienes nos dirigen por el camino correcto y respaldan en la toma de decisiones.
    </p>
    <p>
      Te invitamos a consultar la sección “Quiénes Somos” para más información.
    </p>
    <p>
      <strong>¿Qué tipo de lugar es Legal Nest para trabajar?</strong>
    </p>
    <p>
      Rompemos con el esquema de la vieja escuela y permitimos flexibilidad a nuestros equipos de trabajo siempre y cuando nunca se deje de cumplir con las metas y resultados esperados.
    </p>
    <p>
      Además, Legal Nest tiene una política de puertas abiertas y comunicación constante, esto nos permite realmente trabajar en equipo y mantener una línea directa con nuestros clientes en todo momento.
    </p>
    <p>
      <strong>¿Cuáles son las formas y medios de pago de Legal Nest?</strong>
    </p>
    <p>
      En Legal Nest sabemos que no todos nuestros clientes tienen la misma capacidad de pago al momento de contratarnos, por lo anterior siempre estamos dispuestos a discutir esquemas atractivos para realizar los pagos de nuestros servicios en más de una exhibición. Próximamente contaremos con pago en línea para brindarte un mejor servicio.
    </p>
    <p>
      <strong>¿Qué tipos de propuestas de honorarios maneja Legal Nest?</strong>
    </p>
    <p>
      Nuestras propuestas siempre tendrán costos finales y claros. Existen tres tipos de cobro que puedes contratar con nosotros:
    </p>
    <p>
      (i)	Contratación de Servicios Específicos – El cliente nos pide cierta cantidad de servicios o trabajos para cubrir una necesidad específica, Legal Nest estudia el caso y te ofrece una propuesta acorde a lo que solicita;<br>
      (ii)	Contratación de Paquetes Legal Nest – El cliente selecciona alguno de los paquetes pre elaborados contenidos en nuestra página. Legal Nest le envía al cliente una propuesta acorde a dicho paquete;
      (iii)	Iguala mensual – El cliente contrata a Legal Nest como su “abogado de cabecera”, esto quiere decir que Legal Nest cobrará una monto mensual fijo por un periodo determinado y a la vez proveerá de servicios legales previamente acordados al cliente durante la duración de la iguala mensual.
    </p>

    <p>
      <strong>¿Qué servicios legales están incluidos al contratar una iguala mensual con ustedes?</strong>
    </p>
    <p class="bottom-100">
      Dependerá de las necesidades de cada uno de nuestros clientes, contáctanos para platicar más a detalle.
    </p>
  </div>
</div>

</div>


<?php
  get_footer();
?>


</div>

<script>
$(document).ready(function() {
  $(".animsition").animsition({
    inClass: 'fade-in-up-sm',
    outClass: 'fade-out-up-sm',
    inDuration: 1500,
    outDuration: 800,
    linkElement: '.animsition-link',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
    loading: true,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });
});
</script>
