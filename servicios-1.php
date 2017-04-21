
<?php
  require("functions.php");
  get_header();
?>

<div class="animsition"
  data-animsition-in-class="fade-in-right-sm"
  data-animsition-in-duration="1000"
  data-animsition-out-class="fade-out-right-sm"
  data-animsition-out-duration="800">

<div class="row nomargin">
  <div class="valign-wrapper">
    <div class="col l12 m12 s12 valign">
      <div class="col l12 m12 s12 titulo-servicios center">
        <p>Servicios</p>
      </div>
      <div class="col l1 m1 offset-m5 s2 offset-s4 center prev">
        <a href="servicios.php"><img src="images/servicios/prev.png" title="Prev" alt="Legal Nest"></a>
      </div>
      <div class="col l1 m1 s2 center prev hide-on-large-only">
        <a href="servicios-2.php"><img src="images/servicios/next.png" title="Prev" alt="Legal Nest"></a>
      </div>
      <div class="col l10 m12 s12 top-50">
        <div class="col l12 m12 s12 nomargin">
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>ordena tu empresa</strong></p>
                <img src="images/servicios/ordena.png" title="Ordena tu Empresa" alt="Legal Nest">
                <p>
                  Te ayudamos a hacer un análisis detallado
                  de la situación actualde tu empresa, y te
                  ofrecemos nuestros servicios para
                  poner las cosas en orden.
                </p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>corporativo</strong></p>
                <img src="images/servicios/corporativo.png" title="Corporativo" alt="Legal Nest">
                <p>
                  Te ayudamos con todo tipo de poderes,
                  asambleas y trámites de gobierno
                  corporativo ante la autoridad  correspondiente.
                </p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p class="nomargin"><strong>traducciones</strong></p>
                <p class="nomargin"><span>(Inglés-Español) (Español-Inglés)</span></p>
                <img src="images/servicios/traducciones.png" title="Traducciones" alt="Legal Nest">
                <p>
                  Legales o no, preparamos la
                  traducción que necesites.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col l12 m12 s12 top-30">
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>aviso de privacidad</strong></p>
                <img src="images/servicios/aviso.png" title="Aviso de Privacidad" alt="Legal Nest">
                <p>
                  Legales o no, preparamos la
                  traducció
                  n que necesites.
                </p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>apertura libros</strong></p>
                <img src="images/servicios/libros.png" title="Apertura Libros" alt="Legal Nest">
                <p>
                  Administración virtual y
                  acceso de tus documentos.
                </p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>títulos</strong></p>
                <img src="images/servicios/titulos.png" title="Titulos" alt="Legal Nest">
                <p>
                  Este documento sirve para documentar
                  físicamente todas las acciones
                  de una empresa.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col l1 prev center hide-on-med-only hide-on-small-only">
        <a href="servicios-2.php"><img src="images/servicios/next.png" title="Next" alt="Legal Nest"></a>
      </div>
      <div class="col l12 m12 s12">
        <div class="col l2 offset-l5 m2 offset-m5 s4 offset-s4 bottom-50">
          <a href="contacto.php"><p class="contacto-paquete">Contratar</p></a>
        </div>
      </div>
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
    inClass: 'fade-in-right-sm',
    outClass: 'fade-out-right-sm',
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
